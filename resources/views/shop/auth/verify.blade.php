@extends('layouts.master')

@section('title')
   verify account page
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
    </style>

  <section class=" section">
        <!-- Container Start -->
          <div class="container">
               <div class="row">
                    <div class="offset-md-3 col-6">

                        <h2>Please verify your account</h2>
                        <form action="">
                            {{ csrf_field() }}
                            <input type="text" placeholder="Enter code" name="verify" required>
                            <button type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Verify</button>
                        </form>

                    </div>
                </div>
           </div>
  </section>

    @stop