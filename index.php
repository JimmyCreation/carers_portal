<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo "Careers Portal"; ?></title>
    <link rel="stylesheet" href="assets/vendors/core/core.css">
    <link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png"/>
</head>
<body>
<div class="main-wrapper">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">

                            <div class="col-md-10 pl-md-0 mx-auto">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <div class="text-center">
                                        <p class="noble-ui-logo d-block mb-2">
                                            <span>Admin </span><?php echo "Portal"; ?>
                                        </p>
                                        <img src="assets/login/person.svg" class="img-lg img-fluid"/>
                                        <hr>
                                    </div>
                                    <h5 class="text-muted font-weight-normal mb-4">Log in to your account</h5>
                                    <form action="" method="POST" class="forms-sample">
                                        <div class="form-group">
                                            <Label>Email</label>
                                            <input type="text" name="email"
                                                   class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control"
                                                   placeholder="Password">
                                        </div>

                                        <div class="alert alert-danger"
                                             role="alert"><?php echo "Error msg"; ?></div>

                                        <div class="mt-3">
                                            <input type="submit" value="Login" name="submit"
                                                   class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                                        </div>
                                        <a href="home.php" class="d-block mt-3 text-right">Go to dashboard</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/vendors/core/core.js"></script>
<script src="assets/vendors/feather-icons/feather.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>