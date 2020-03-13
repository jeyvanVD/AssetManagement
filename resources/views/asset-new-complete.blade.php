@extends('layout')
@section('head')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <!------ Include the above in your HEAD tag ---------->

@endsection

@section('page_info')
    <h3>Asset Registration</h3>
@endsection

@section('contents')
    <div class="container">
        <div class="card bg-light" style="margin-top:0;width: 1115px;height:550px;padding-left:125px">
            <article class="card-body" style="max-width: 800px;">
                <img src={{asset('/pngfuel.com.png')}} width="97.5" height="97.5"
                     style="margin: 50px 327.5px 0px">
                <h2 class="card-title mt-3 text-center" style="margin-bottom: 35px; margin-left: 25px">
                    Your asset has been <br>successfully registered.
                </h2>
                <div class="form-group" style="padding-right: 225px;">
                    <a href="/asset-new" class="btn float-right btn-default"
                       style="border: 1px solid blue;color: black;padding-right: 60px;
                               padding-left:60px">Register another asset</a>
                </div>
                <h6 style="font-size: smaller;alignment: center ; padding-left: 387.5px; padding-top:45px">
                    Or
                </h6>
                <div class="form-group" style="padding-right: 225px;">
                    <a href="/asset-list" class="btn float-right btn-default"
                       style="border: 1px solid blue;color: black;padding-right: 71px;
                               padding-left:71px">Back to Main Page</a>
                </div>

            </article>
        </div> <!-- card.// -->
    </div>
    <!--container end.//-->
@endsection
