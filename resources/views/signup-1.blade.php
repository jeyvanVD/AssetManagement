
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
            background-image: url("{{asset('low-angle-photo-of-four-high-rise-curtain-wall-buildings-830891.jpg')}}");
            background-size: cover;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="card bg-light" style="margin-top: 75px;width: 825px;height:550px;margin-left: 142.5px">
            <article class="card-body" style="max-width: 800px;">
                <h4 class="card-title mt-3 text-center" style="margin-bottom: 35px; margin-left: 25px">
                    Create Account
                </h4>
                <form method="POST" action="/users">
                    {{csrf_field()}}
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="full_name" class="form-control" placeholder="Full name" type="text" required>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group" style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" type="email" required>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group" style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <select name="country_code" class="custom-select" style="max-width: 120px;">
                            <option selected="1">+60</option>
                            <option value="2">+62</option>
                            <option value="3">+65</option>
                            <option value="3">+44</option>
                        </select>
                        <input name="phone_number" class="form-control" placeholder="Phone number" type="text" required>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group"style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" class="form-control" placeholder="Create password" type="password" required>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group" style="width: 600px;padding-right: 60px;margin-left: 115px">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password_confirmation" class="form-control" placeholder="Repeat password" type="password" required>
                    </div> <!-- form-group// -->
                    <div class="form-group" style="width: 350px;margin-left:215px;margin-top: 25px">
                            <button type="submit" class="btn btn-primary btn-block">
                                Create Account
                            </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Have an account? <a href='/'>Log In</a> </p>

                    @if ($errors->any())
                        <ul style="list-style-type: none;color: red">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif

                </form>
            </article>
        </div> <!-- card.// -->
    </div>
    <!--container end.//-->

</body>
