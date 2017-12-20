@extends('layouts.master')

@section('title')
    Login page
@stop

@section('content')


    <style>
        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /*.imgcontainer {*/
            /*text-align: center;*/
            /*margin: 24px 0 12px 0;*/
        /*}*/

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>


<section class=" section">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-6">

    <h2>Login to our site</h2>

    <form action="">
        {{ csrf_field() }}


        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Username" name="username" required>
            {{--<div class="input-group">--}}
                {{--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>--}}
                {{--<input id="email" type="text" class="form-control" name="email" placeholder="Email">--}}
            {{--</div>--}}

            <label><b>Password</b></label>
            <input type="password" placeholder="Password" name="psw" required>

            <button type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Login</button>
            <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
            {{--<button type="button" class="cancelbtn"><i class="fa fa-close" aria-hidden="true"></i>&nbsp; Cancel</button>--}}
            <span class="psw"><a  href="#"> Forgot password?</a></span>
        </div>
        </form>
            </div>
        </div>
    </div>
    </section>


@stop