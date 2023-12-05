<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;

class CartController extends Controller
{
    public function index()
    {
        $course = Course::all();
        $category = CourseCategory::all();
        return view('frontend.searchCourse', compact('course', 'category'));
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function addToCart($id)
    {
        $course = Course::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "title_en" => $course->title_en,
                "quantity" => 1,
                "price" => $course->price,
                "old_price" => $course->old_price,
                "image" => $course->image,
                "difficulty" => $course->difficulty,
                "instructor" => $course->instructor ? $course->instructor->name_en : 'Unknown Instructor',
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
