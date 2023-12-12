<?php

namespace App\Http\Controllers\Students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Payment;
use App\Models\Enrollment;
use App\Models\Checkout;
use Illuminate\Support\Facades\Session; 

class sslController extends Controller
{
    public function store(Request $request){
        $user = Student::findOrFail(currentUserId());
        $txnid = "SSLCZ_TXN_".uniqid();
        $item_amount = session('cart_details')['total_amount'];

        //$settings = Generalsetting::findOrFail(1);
        $cart_details=array('cart'=>session('cart'),'cart_details'=>session('cart_details'));
         
        $check = new Checkout;
        $check->cart_data = base64_encode(json_encode($cart_details));
        $check->student_id = $user->id;
        $check->txnid = $txnid;
        $check->status = 0;
        $check->save();

        $deposit = new Payment;
        $deposit->student_id = $user->id;
        $deposit->currency = "BDT";
        $deposit->currency_code = "BDT";
        $deposit->amount = session('cart_details')['total_amount'];
        $deposit->currency_value = 1;
        $deposit->method = 'SSLCommerz';
        $deposit->txnid = $txnid;
        $deposit->save();
        

        $post_data = array();
        $post_data['store_id'] = 'geniu5e1b00621f81e';//$settings->ssl_store_id;
        $post_data['store_passwd'] = 'geniu5e1b00621f81e@ssl';//$settings->ssl_store_password;
        $post_data['total_amount'] = $item_amount;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $txnid;
        $post_data['success_url'] =action([sslController::class, 'notify']);//action ('User\DsslController@notify');
        $post_data['fail_url'] =  action([sslController::class, 'cancel']);//action('User\DsslController@cancle');
        $post_data['cancel_url'] =  action([sslController::class, 'cancel']);//action('User\DsslController@cancle');
        # $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE
        
        
        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $user->name_en;
        $post_data['cus_email'] = $user->email;
        $post_data['cus_add1'] = "$user->address";
        $post_data['cus_city'] = "$user->city";
        $post_data['cus_state'] = "$user->state";
        $post_data['cus_postcode'] = "$user->postcode";
        $post_data['cus_country'] = "$user->country";
        $post_data['cus_phone'] = $user->contact_en;
        $post_data['cus_fax'] = $user->contact_en;
        
        
        # REQUEST SEND TO SSLCOMMERZ
        //if($settings->ssl_sandbox_check == 1){
            $direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";
        //}
        //else{
        //$direct_api_url = "https://securepay.sslcommerz.com/gwprocess/v3/api.php";
       // }


        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $direct_api_url );
        curl_setopt($handle, CURLOPT_TIMEOUT, 30);
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($handle, CURLOPT_POST, 1 );
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC
        
        
        $content = curl_exec($handle );
        
        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
        
        
        
        
        if($code == 200 && !( curl_errno($handle))) {
            curl_close( $handle);
            $sslcommerzResponse = $content;
        } else {
            curl_close( $handle);
            return redirect()->back()->with('unsuccess',"FAILED TO CONNECT WITH SSLCOMMERZ API");
            exit;
        }
        
        # PARSE THE JSON RESPONSE
        $sslcz = json_decode($sslcommerzResponse, true );
        
        if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
        
             # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
            # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
            echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
            # header("Location: ". $sslcz['GatewayPageURL']);
            exit;
        } else {
            return redirect()->back()->with('unsuccess',"JSON Data parsing error!");
        }

    }


    public function cancel(Request $request){
        $input = $request->all();
        $deposit = Payment::where('txnid','=',$input['tran_id'])->orderBy('created_at','desc')->first();
        $student = Student::findOrFail($deposit->student_id);
        $this->setSession($student);
        return redirect()->route('studentdashboard')->with('danger', 'Payment Cancelled.');
    }

    
    public function notify(Request $request){
        $cancel_url = action([sslController::class, 'cancel']);
        $input = $request->all();
        if($input['status'] == 'VALID'){
            $deposit = Payment::where('txnid','=',$input['tran_id'])->orderBy('created_at','desc')->first();
            
            $check = Checkout::where('txnid','=',$input['tran_id'])->orderBy('created_at','desc')->first();
            $check->status = 1;
            $check->save();
            
            $student = Student::findOrFail($deposit->student_id);
            $this->setSession($student);

            $deposit->status = 1;
            $deposit->save();

            // store in transaction table
            if ($deposit->status == 1) {
                foreach(json_decode(base64_decode($check->cart_data))->cart as $key=>$course){
                    $enrole=new Enrollment;
                    $enrole->student_id=$check->student_id;
                    $enrole->course_id=$key;
                    $enrole->enrollment_date=date('Y-m-d');
                    $enrole->save();
                }
            }
            return redirect()->route('studentdashboard')->with('success', 'Payment done!');
        }
        else {
            return redirect()->route('studentdashboard')->with('danger', 'Please try Again!');
        }
    }
    
    public function setSession($student){
        return request()->session()->put(
            [
                'userId' => encryptor('encrypt', $student->id),
                'userName' => encryptor('encrypt', $student->name_en),
                'emailAddress' => encryptor('encrypt', $student->email),
                'studentLogin' => 1,
                'image' => $student->image ?? 'No Image Found' 
            ]
        );
    }
}