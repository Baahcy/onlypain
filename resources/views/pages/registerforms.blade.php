<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Only Pain
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="/form/app.css">

    <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet">

</head>
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 class="login-heading mb-4">Register
                            </h3>
                            <form>
                                <div class="form-label-group">
                                    <input type="name" id="inputName" class="form-control" placeholder="Name" required
                                        autofocus>
                                    <label for="inputEmail">Name</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                                        required autofocus>
                                    <label for="inputEmail">Email address</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control"
                                        placeholder="Password" required>
                                    <label for="inputPassword">Password</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control"
                                        placeholder="Password" required>
                                    <label for="inputPassword">Confirm Password</label>
                                </div>

                                <div>
                                    <button
                                        class="btn btn-lg btn-danger btn-block btn-login text-uppercase font-weight-bold mb-2"><a
                                            href="#">Register</a>
                                    </button>
                                </div>



                            </form>
                            <div>
                                <h3>Register if You are new Here</h3>
                                <button
                                    class="btn btn-lg btn-secondary btn-block btn-login text-uppercase font-weight-bold mb-2 "><a
                                        href="loginforms">Log in</a> </button>
                            </div>








                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('inc.footer')
</body>

</html>
