@extends('layouts.master')


@section('title')
    Signup page
@stop

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
            <h2 class="">Shop Registration</h2>

            <div class="row">

                <form class="col-md-6 col-md-offset-3" action="{{route('shop.register')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="column col-md-6 col-sm-4 ">
                        <div class="form-group">
                            <label><b>Shop name</b></label>
                            <input type="text" class="form-control" placeholder="Enter Shop name" name="shop_name" required="required">
                        </div>
                        <div class="form-group">
                            <label><b>Shop Owner's Email</b></label>
                            <input type="email"  class="form-control" placeholder="Shop Owner's Email" name="email" required="required">
                        </div>
                        <div class="form-group">
                            <label><b>Phone</b></label>
                            <input type="text"  class="form-control" placeholder="Shop Owners Phone" name="phone" required="required">
                        </div>
                        {{--<div class="form-group">
                            <label><b>Shop's Country</b></label>
                            <input type="text" class="form-control" placeholder="Default (Ghana)" name="shop_country" required="required">
                        </div>--}}
                        <div class="form-group">
                            <label><b>Shop's city</b></label>
                            <select name="shop_city">
                                <option value="Greater Accra">Greater Accra</option>
                                <option value="Ashanti">Ashanti</option>
                                <option value="Eastern">Eastern</option>
                                <option value="Western">Western</option>
                                <option value="Brong Ahafo">Brong Ahafo</option>
                                <option value="Volta">Volta</option>
                                <option value="Northern">Northern</option>
                                <option value=">Upper West">Upper West</option>
                                <option value="Upper East">Upper East</option>
                                <option value="Central">Central</option>
                            </select>
                        </div>
                    </div>

                    <div class="column  col-md-6 col-sm-4 ">
                        <div class="form-group">
                            <label><b>Shop's Address</b></label>
                            <textarea cols="15" rows="10" name="address" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label><b>Password</b></label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password" required="required">
                        </div>
                        <div class="form-group">
                            <label><b>Confirm Password</b></label>
                            <input type="password" class="form-control" placeholder=" Repeat Password" name="password_confirmation" required="required">
                        </div >


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

@stop