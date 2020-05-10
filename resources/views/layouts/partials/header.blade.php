<!-- start Header -->
<header id="header">

    <!-- start Navbar (Header) -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

        <div class="container">

            <div class="logo-wrapper">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <!--img class="brand-img mr-10" src="{{ asset('images/bacylogo.png') }}"  width="150px;" alt="bacy"/-->
                            <strong>BACY ICT SOLUTIONS LIMITED</strong>
                    </a>
                </div>
            </div>

            <div id="navbar" class="navbar-nav-wrapper navbar-arrow">

                <ul class="nav navbar-nav" id="responsive-menu">
                    <li><a href="{{url('/')}}">HOME</a></li>
                     <li>
                        <a href="#">PRODUCTS</a>
                         <ul>
                            <li><a href="http://bacysolutions.co.ke/bs/public/home">BULK SMS</a></li>
                            <li><a href="#">SACCO MIS</a></li>
                            <li><a href="#">Retail Inventory and POS</a></li>
                            <li><a href="#">CRM</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/about')}}">ABOUT</a></li>
                    <li><a href="http://bacysolutions.co.ke/bs/public/home">BULK SMS</a></li>
                      <li>
                        <a href="#">SERVICES</a>
                        <ul>
                            <li><a href="http://bacysolutions.co.ke/bs/public/home">Bulk SMS</a></li>
                            <li><a href="#">Software Development</a></li>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Data Analytics</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                        </ul>
                    </li>

                    <li><a href="{{url('/blogs')}}">BLOG</a></li>

                    @if(!Auth::guest())
                        <li>
                            <a href="#" class="btn btn-primary">{{Auth::user()->name}}</a>
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                                 <li>
                                    <form method="post" action="{{url('/logout')}}">
                                        {{csrf_field()}}
                                        <button style="background-color: transparent; border: 0px solid transparent;"> <i class="fa fa-sign-out"></i> Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div><!--/.nav-collapse -->

            @if (Auth::guest())
                <div class="nav-mini-wrapper">
                    <ul class="nav-mini sign-in">
                        <li><a data-toggle="modal" href="#loginModal">Login</a></li>
                        <li><a data-toggle="modal" href="#registerModal">Register</a></li>
                    </ul>
                </div>
            @endif

        </div>
        <div id="slicknav-mobile"></div>
    </nav>
    <!-- end Navbar (Header) -->

    <!-- start Sign-in Modal -->
    <div id="loginModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

        <form action="{{url('/login')}}" method="POST">

            {{csrf_field()}}

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Sign-in into your account</h4>
            </div>

            <div class="modal-body">
                <div class="row gap-20">

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Email/Phone number</label>
                            <input class="form-control" placeholder="Email or Phone number" type="email" name="email" required="required" autofocus="autofocus" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" placeholder="" type="password" name="password" required="required">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="login-modal-or">
                            <div><span>or</span></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <button class="btn btn-facebook btn-block mb-5-xs">Log-in with Facebook</button>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <button class="btn btn-google-plus btn-block">Log-in with Google+</button>
                    </div><br>


                    <div class="col-sm-6 col-md-6">
                        <div class="checkbox-block">
                            <input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox">
                            <label class="" for="remember_me_checkbox">Remember me</label>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="login-box-link-action">
                            <a data-toggle="modal" href="#forgotPasswordModal">Forgot password?</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="login-box-box-action">
                            No account? <a data-toggle="modal" href="#registerModal">Register</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer text-center">
                <button type="submit" class="btn btn-primary">Log-in</button>
                <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
            </div>

        </form>
    </div>
    <!-- end Sign-in Modal -->

    <!-- start Register Modal -->
    <div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

        <form method="post" action="{{url('/register')}}">

            {{csrf_field()}}

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Create your account for free</h4>
            </div>

            <div class="modal-body">

                <div class="row gap-20">

                    <div class="col-sm-4 col-md-4">
                        <div class="form-group">
                            <label>Name</label>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" type="text" name="name" required="required">
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="form-group">
                            <label>Email Address</label>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <div class="form-group">
                            <input class="form-control" placeholder="Enter your email address" type="email" required="required" name="email">
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="form-group">
                            <label>Phone number</label>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <div class="form-group">
                            <input class="form-control" placeholder="" type="tel" id="demo" name="phone" required="required">
                        </div>
                    </div>

                    <input type="hidden" name="country_code" id="country_code">
                    <input type="hidden" name="country_names" id="country_names">

                    <div class="col-sm-4 col-md-4">
                        <div class="form-group">
                            <label>Password</label>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <div class="form-group">
                            <input class="form-control" placeholder="Min 8 and Max 20 characters" type="password" name="password" required="required">
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="form-group">
                            <label>Confirm password</label>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <div class="form-group">
                            <input class="form-control" placeholder="Re-type password again" type="password" name="password_confirmation">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="login-modal-or">
                            <div><span>or</span></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <button class="btn btn-facebook btn-block mb-5-xs">Register with Facebook</button>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <button class="btn btn-google-plus btn-block">Register with Google+</button>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="checkbox-block">
                            <input id="register_accept_checkbox" name="register_accept_checkbox" class="checkbox" value="First Choice" type="checkbox">
                            <label class="" for="register_accept_checkbox">By register, I read &amp; accept <a href="#">the terms</a></label>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="login-box-box-action">
                            Already have account? <a data-toggle="modal" href="#loginModal">Log-in</a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="modal-footer text-center">
                <button type="submit" class="btn btn-primary">Register</button>
                <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
            </div>

        </form>

    </div>
    <!-- end Register Modal -->

    <!-- start Forget Password Modal -->
    <div id="forgotPasswordModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-center">Restore your forgotten password</h4>
        </div>

        <div class="modal-body">
            <div class="row gap-20">

                <div class="col-sm-12 col-md-12">
                    <p class="mb-20">Maids table how learn drift but purse stand yet set. Music me house could among oh as their. Piqued our sister shy nature almost his wicket. Hand dear so we hour to.</p>
                </div>

                <div class="col-sm-12 col-md-12">

                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="form-control" placeholder="Enter your email address" type="text">
                    </div>

                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="checkbox-block">
                        <input id="forgot_password_checkbox" name="forgot_password_checkbox" class="checkbox" value="First Choice" type="checkbox">
                        <label class="" for="forgot_password_checkbox">Generate new password</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="login-box-box-action">
                        Return to <a data-toggle="modal" href="#loginModal">Log-in</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal-footer text-center">
            <button type="button" class="btn btn-primary">Restore</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
        </div>

    </div>
    <!-- end Forget Password Modal -->

</header>
