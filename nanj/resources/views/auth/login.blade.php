<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    {!! Html::style('assets/css/lib/bootstrap/bootstrap.min.css') !!}
    <!-- Custom CSS -->
    {!! Html::style('assets/css/helper.css') !!}
    {!! Html::style('assets/css/style.css') !!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Login</h4>
                                @if (count($errors) > 0) 
                                        @foreach ($errors->all() as $error) 
                                        <div class="alert alert-micro alert-border-left alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <i class="fa fa-check pr10"></i>
                                            {{ $error }}
                                        </div>
                                        @endforeach 
                                    @endif
                                {!! Form::open(array('url' => URL::current(), 'method' => 'post', 'files'=> true)) !!}
                                    <div class="form-group">
                                        {!! Form::label('email', 'Email address') !!}
                                        {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Enter your email')) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('password', 'Password') !!}
                                        <input type="password" name="password"  class="form-control" placeholder="Enter your Password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
    										<input type="checkbox"> Remember Me
    									</label>
                                        <label class="pull-right">
    										<a href="#">Forgotten Password?</a>
    									</label>

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    {{ HTML::script('assets/js/lib/jquery/jquery.min.js') }}
    <!-- Bootstrap tether Core JavaScript -->
    {{ HTML::script('assets/js/lib/bootstrap/js/popper.min.js') }}
    {{ HTML::script('assets/js/lib/bootstrap/js/bootstrap.min.js') }}
    <!-- slimscrollbar scrollbar JavaScript -->
    {{ HTML::script('assets/js/jquery.slimscroll.js') }}
    <!--Menu sidebar -->
    {{ HTML::script('assets/js/sidebarmenu.js') }}
    <!--stickey kit -->
    {{ HTML::script('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}
    <!--Custom JavaScript -->
    {{ HTML::script('assets/js/custom.min.js') }}

</body>

</html>