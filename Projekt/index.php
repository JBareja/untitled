<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <link href="styles.css" rel="stylesheet" type="text/css">

</head>
<body>

    <div class="container">

            <div class="row d-flex justify-content-center" style="margin-top:20%">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form role="form">
                        <fieldset>
                            <h2>Please Sign In</h2>
                            <hr class="colorgraph">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                            </div>
                            <span class="button-checkbox">
                            <button type="button" class="btn" data-color="info">Remember Me</button>
                            <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
                            <a href="" class="btn btn-link pull-right">Forgot Password?</a>
                        </span>
                            <hr class="colorgraph">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <a href="" class="btn btn-lg btn-primary btn-block">Register</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
          </div>
  </div>
</body>
</html>
