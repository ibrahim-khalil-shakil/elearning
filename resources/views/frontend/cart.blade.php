@extends('frontend.layouts.app')
@section('body-attr') style="background-color: #ebebf2;" @endsection

@section('content')
<!-- Breadcrumb Starts Here -->
<div class="py-0">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center bg-transparent mb-0">
                <li class="breadcrumb-item"><a href="index.html" class="fs-6 text-secondary">Home</a></li>
                <li class="breadcrumb-item active"><a href="cart.html" class="fs-6 text-secondary">Cart</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb Ends Here -->

<!-- Cart Section Starts Here -->
<section class="section cart-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h6 class="cart-area__label">2 Courses in Cart</h6>
                @php $total = 0 @endphp
                @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <div class="cart-wizard-area">
                    <div class="image">
                        <img src="{{ $details['image'] }}" alt="product" />
                    </div>
                    <div class="text">
                        <h6><a href="#">{{ $details['title_en'] }}</a></h6>
                        <p>By <a href="#">Kevin Gilbert</a></p>
                        <div class="bottom-wizard d-flex justify-content-between align-items-center">
                            <p>
                                ${{ $details['price'] }} <span><del>$24.99</del></span>
                            </p>
                            <div class="trash-icon">
                                <a href="#">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div class="col-lg-4">
                <h6 class="cart-area__label">Summery</h6>
                <div class="summery-wizard">
                    <div class="summery-wizard-text pt-0">
                        <h6>Subtotal</h6>
                        <p>$49.99</p>
                    </div>
                    <div class="summery-wizard-text">
                        <h6>Coupon Discount</h6>
                        <p>15%</p>
                    </div>
                    <div class="summery-wizard-text">
                        <h6>taxes</h6>
                        <p>9.99</p>
                    </div>
                    <div class="total-wizard">
                        <h6 class="font-title--card">Total:</h6>
                        <p class="font-title--card">$36.49</p>
                    </div>
                    <form action="#">
                        <a href="checkout.html"
                            class="button button-lg button--primary form-control mb-lg-3">Checkout</a>
                        <label for="coupon">Apply Coupon</label>
                        <div class="cart-input">
                            <input type="text" class="form-control" placeholder="Coupon Code" id="coupon" />
                            <button type="submit" class="sm-button">Apply</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart Section Ends Here -->
@endsection


@section('scripts')
<script type="text/javascript">
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection