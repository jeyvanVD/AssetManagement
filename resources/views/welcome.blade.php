
<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('style.css')}}">

    <!------ Include the above in your HEAD tag ---------->

    <title>Login Page</title>

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style class="background-image">
        body{
            background-image: url("{{asset('low-angle-photo-of-four-high-rise-curtain-wall-buildings-830891.jpg')}}");
            background-size: cover;
        }
    </style>

</head>
<body>
<div class="d-flex justify-content-center align-items-center h-100" style="position: center; margin-top: 75px">
    <div class="card" style="width: 825px; height: 550px">
        <div class="card-header" style="height: 225px">
            <h4 style="alignment: center ; padding-left: 250px; padding-top:10px">
                Asset Management System
            </h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/auth')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Enter email" style="width: 600px;
                           margin-left: 80px" required>
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" style="width: 600px ;
                                   margin-left: 80px"
                           required>
                </div>
                <div class="form-group" style="width: 350px;margin-left:210px;margin-top: 25px;margin-bottom: 10px">
                    <button type="submit" class="btn btn-primary btn-block">
                        Login
                    </button>
                </div> <!-- form-group// -->
                <h6 style="font-size: smaller;alignment: center ; padding-left: 375px; padding-top:0">
                    Or
                </h6>
                <div class="form-group" style="padding-right: 225px;">
                    <a href="/signup-1" class="btn float-right btn-default"
                       style="border: 1px solid blue;color: black;padding-right: 145px;
                               padding-left:145px">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>
