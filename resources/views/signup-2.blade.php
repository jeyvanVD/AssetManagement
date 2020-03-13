
<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        body{
            background-image: url("{{asset('abstract-art-background-blue-370799.jpg')}}");
            background-size: cover;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="card bg-light" style="margin-top: 75px;width: 825px;height:550px;margin-left: 142.5px">
        <article class="card-body" style="max-width: 800px;">
            <h1 class="card-title mt-3" style="margin-bottom: 15px; margin-left: 25px">
                Thank You, {{request('full_name')}}
            </h1>
            <h4 class="card-title mt-3" style="margin-bottom: 35px; margin-left: 25px; margin-top: 10px">
                Your Sign-Up process is successful.<br>
                Welcome to our Asset Management System.
                <br>
                <br>
                You can proceed to login now.
            </h4>
            <div class="form-group" style="padding-right: 225px;padding-top: 25px">
                <a href="/asset-list" class="btn float-right btn-primary"
                   style="padding-right: 152.5px;padding-left: 152.5px">Login</a>
            </div>

    </article>
    </div>
</div>
<!--container end.//-->



</body>
