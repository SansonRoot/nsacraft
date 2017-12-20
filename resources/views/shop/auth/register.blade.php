@extends('layouts.base')

@section('title','Register')

@section('content')

    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Sign up</span>
            <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="">Shop</a></li>
                <li class="active">Sign up</li>
            </ul>
        </div><!--/end container-->
    </div>

    <div class="log-reg-v3 content-md margin-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-md-7 md-margin-bottom-50">
                    <h2 class="welcome-title">Welcome to Unify</h2>
                    <p>Suspendisse et tincidunt ipsum, et dignissim urna. Vestibulum nisl tortor, gravida at magna et, suscipit vehicula massa.</p><br>
                    <div class="row margin-bottom-50">
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span>20,039</span>
                                <small>Products</small>
                            </div>
                        </div>
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span>54,283</span>
                                <small>Reviews</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="site-statistics">
                                <span>376k</span>
                                <small>Sale</small>
                            </div>
                        </div>
                    </div>
                    <div class="members-number">
                        <h3>Join more than <span class="shop-green">13,000</span> members worldwide</h3>
                        <img class="img-responsive" src="assets/img/map.png" alt="">
                    </div>
                </div>

                <div class="col-md-5">
                    <form id="sky-form4" class="log-reg-block sky-form">
                        <h2>Create New Account</h2>

                        <div class="login-input reg-input">
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<section>--}}
                                        {{--<label class="input">--}}
                                            {{--<input type="text" name="firstname" placeholder="First name" class="form-control">--}}
                                        {{--</label>--}}
                                    {{--</section>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<section>--}}
                                        {{--<label class="input">--}}
                                            {{--<input type="text" name="lastname" placeholder="Last name" class="form-control">--}}
                                        {{--</label>--}}
                                    {{--</section>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <section>
                                <label class="input">
                                    <input type="text" name="shopname" placeholder="Shop name" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="tel" name="phone" placeholder="phone" class="form-control">
                                </label>
                            </section>

                            {{--<label class="select margin-bottom-15">--}}
                                {{--<select name="gender" class="form-control">--}}
                                    {{--<option value="0" selected disabled>Gender</option>--}}
                                    {{--<option value="1">Male</option>--}}
                                    {{--<option value="2">Female</option>--}}
                                    {{--<option value="3">Other</option>--}}
                                {{--</select>--}}
                            {{--</label>--}}
                            {{--<div class="row margin-bottom-10">--}}
                                {{--<div class="col-xs-6">--}}
                                    {{--<label class="select">--}}
                                        {{--<select name="month" class="form-control">--}}
                                            {{--<option disabled="" selected="" value="0">Month</option>--}}
                                            {{--<option>January</option>--}}
                                            {{--<option>February</option>--}}
                                            {{--<option>March</option>--}}
                                            {{--<option>April</option>--}}
                                            {{--<option>May</option>--}}
                                            {{--<option>June</option>--}}
                                            {{--<option>July</option>--}}
                                            {{--<option>August</option>--}}
                                            {{--<option>September</option>--}}
                                            {{--<option>October</option>--}}
                                            {{--<option>November</option>--}}
                                            {{--<option>December</option>--}}
                                        {{--</select>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-3">--}}
                                    {{--<input type="text" name="day" placeholder="Day" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-3">--}}
                                    {{--<input type="text" name="year" placeholder="Year" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                                <section>
                                    <label class="input">
                                        <input type="text" name="city" placeholder="City" class="form-control">
                                    </label>
                                </section>
                            <section>
                                <label class="input">
                                    <input type="text" name="address" placeholder="Address" class="form-control">
                                </label>
                            </section>

                            <section>
                                <label class="input">
                                    <input type="text" name="username" placeholder="Username" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="email" name="email" placeholder="Email address" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="password" name="passwordConfirm" placeholder="Confirm password" class="form-control">
                                </label>
                            </section>
                        </div>

                        <label class="checkbox margin-bottom-10">
                            <input type="checkbox" name="checkbox"/>
                            <i></i>
                            Subscribe to our newsletter to get the latest offers
                        </label>
                        <label class="checkbox margin-bottom-20">
                            <input type="checkbox" name="checkbox"/>
                            <i></i>
                            I have read agreed with the <a href="#">terms &amp; conditions</a>
                        </label>
                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Create Account</button>
                    </form>

                    <div class="margin-bottom-20"></div>
                    <p class="text-center">Already you have an account? <a href="{{route('shop.login')}}">Sign In</a></p>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>

@endsection

