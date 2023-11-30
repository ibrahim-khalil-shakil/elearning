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
                <div class="cart-wizard-area">
                    <div class="image">
                        <img src="{{asset('public/frontend/dist/images/cart/01.jpg')}}" alt="product" />
                    </div>
                    <div class="text">
                        <h6><a href="#">Gamification: Motivation Psychology & The Art of Engagement.</a></h6>
                        <p>By <a href="#">Kevin Gilbert</a></p>
                        <div class="bottom-wizard d-flex justify-content-between align-items-center">
                            <p>
                                $24.99 <span><del>$24.99</del></span>
                            </p>
                            <div class="trash-icon">
                                <a href="#">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 4.2002H3.6H16.4" stroke="#666575" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M6.00059 4.2V2.6C6.00059 2.17565 6.16916 1.76869 6.46922 1.46863C6.76927 1.16857 7.17624 1 7.60059 1H10.8006C11.2249 1 11.6319 1.16857 11.932 1.46863C12.232 1.76869 12.4006 2.17565 12.4006 2.6V4.2M14.8006 4.2V15.4C14.8006 15.8243 14.632 16.2313 14.332 16.5314C14.0319 16.8314 13.6249 17 13.2006 17H5.20059C4.77624 17 4.36927 16.8314 4.06922 16.5314C3.76916 16.2313 3.60059 15.8243 3.60059 15.4V4.2H14.8006Z"
                                            stroke="#666575" stroke-width="1.4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7.60059 8.2002V13.0002" stroke="#666575" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.8018 8.2002V13.0002" stroke="#666575" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-wizard-area">
                    <div class="image">
                        <img src="{{asset('public/frontend/dist/images/cart/02.jpg')}}" alt="product" />
                    </div>
                    <div class="text">
                        <h6><a href="#">2020 Complete Drawing Masterclass. From Beginner to Advanced</a></h6>
                        <p>By <a href="#">Kevin Gilbert</a></p>
                        <div class="bottom-wizard d-flex justify-content-between align-items-center">
                            <p>
                                $24.99 <span><del>$24.99</del></span>
                            </p>
                            <div class="trash-icon">
                                <a href="#">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 4.2002H3.6H16.4" stroke="#666575" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M6.00059 4.2V2.6C6.00059 2.17565 6.16916 1.76869 6.46922 1.46863C6.76927 1.16857 7.17624 1 7.60059 1H10.8006C11.2249 1 11.6319 1.16857 11.932 1.46863C12.232 1.76869 12.4006 2.17565 12.4006 2.6V4.2M14.8006 4.2V15.4C14.8006 15.8243 14.632 16.2313 14.332 16.5314C14.0319 16.8314 13.6249 17 13.2006 17H5.20059C4.77624 17 4.36927 16.8314 4.06922 16.5314C3.76916 16.2313 3.60059 15.8243 3.60059 15.4V4.2H14.8006Z"
                                            stroke="#666575" stroke-width="1.4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7.60059 8.2002V13.0002" stroke="#666575" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.8018 8.2002V13.0002" stroke="#666575" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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