@extends('layouts.master')

@section('content')
    <style>
        form {
            border: 1px solid #f1f1f1;
        }
        .column {
            float: left;
            width: 50%;

        }        input[type=text], input[type=password] {
                     width: 100%;
                     padding: 12px 20px;
                     margin: 8px 0;
                     display: inline-block;
                     border: 1px solid #ccc;
                     box-sizing: border-box;
                 }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn,.signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }
    </style>
    <section class=" section">
        <!-- Container Start -->
        <div class="container">
            <h2 class="">User Registration</h2>

            <div class="row">

                <form action="">

                    <div class="column  col-md-6 col-sm-4 ">

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label><b>First name</b></label>
                            <input type="text"  class="form-control" placeholder="Enter First name" name="firstname" required="required">
                            </div>
                        <div class="form-group">
                            <label><b>Surname</b></label>
                            <input type="text"  class="form-control" placeholder="Enter surname" name="surname" required="required">
                         </div>
                        <div class="form-group">
                            <label><b>Email</b></label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" required="required">

                         </div>
                        <div class="form-group">
                            <label><b>Username</b></label>
                            <input type="text" class="form-control" placeholder="Enter Username" name="username" required="required">
                        </div>
                    </div>




                    <div class="column  col-md-6 col-sm-4 ">


                        <div class="form-group">
                            <label><b>Password</b></label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password" required="required">
                        </div>
                        <div class="form-group">
                            <label><b>Confirm Password</b></label>
                            <input type="password" class="form-control" placeholder=" Repeat Password" name="password confirm" required="required">
                        </div >
                        <div class="form-group">
                            <label><b>Telephone</b></label>
                            <input type="tel" class="form-control" placeholder="Enter Telephone" name="telephone" required="required">
                        </div>
                        <div class="form-group">
                            <label><b>Address</b></label>
                            <input type="text" class="form-control" placeholder="Enter Address" name="address" required="required">
                        </div>




                    </div>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                        <button type="button"  class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>

                </form>


            </div>
        </div>
    </section>


@endsection







{{--<section>--}}
    {{--<div class="container">--}}
        {{--<h2 class="">User Registration</h2>--}}

        {{--<div class="row">--}}
            {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                {{--{{ csrf_field() }}--}}

                {{--<div class="column  col-md-6 col-sm-4 ">--}}

                    {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                        {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                        {{--<div>--}}
                            {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                            {{--@if ($errors->has('name'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                        {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                            {{--@if ($errors->has('email'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                        {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                            {{--@if ($errors->has('password'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="column  col-md-6 col-sm-4 ">--}}


                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<div class="col-md-6 col-md-offset-4">--}}
                        {{--<button type="submit" class="btn btn-primary">--}}
                            {{--Register--}}
                        {{--</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
