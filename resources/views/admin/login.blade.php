<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login Admin </title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
        {{-- <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
        {{-- <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> --}}
        <!-- NProgress -->        
        <link rel="stylesheet" href="{{asset('vendors/nprogress/nprogress.css')}}">
        {{-- <link href="/vendors/nprogress/nprogress.css" rel="stylesheet"> --}}
        <!-- Animate.css -->
        <link rel="stylesheet" href="{{asset('vendors/animate.css/animate.min.css')}}">
        {{-- <link href="/vendors/animate.css/animate.min.css" rel="stylesheet"> --}}

        <!-- Custom Theme Style -->
        <link rel="stylesheet" href="{{asset('css/admin.css')}}">
        {{-- <link href="/css/admin.css" rel="stylesheet"> --}}
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form id="admin-login" method="POST" action="/admin/login">
                            @csrf
                            <h1>Login</h1>
                            <div>
                                <input type="text" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div>
                                <input type="password" name="password" autocomplete="on" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <input type="submit" value="Login" />
                                <a class="reset_pass" href="#">Lost your password?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">New to site?
                                    <a href="#signup" class="to_register"> Create Account </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <script src="{{asset('js/admin.js')}}"></script>
    </body>
</html>
