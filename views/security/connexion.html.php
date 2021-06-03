<?php
if(isset($_SESSION['arrayError'])){
  $arrayErrors = $_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 340px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
a{
  margin-left:300px;
  color: red;
  margin-top:50px;
}
</style>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <?php if (isset($arrayErrors['erreurConnexion'])): ?>
                    <div class="alert alert-Danger" role="alert">
                        <strong><?php echo isset($arrayErrors['erreurConnexion']) ? $arrayErrors['erreurConnexion'] : ''?></strong>
                    </div>
                    <?php endif; ?>
                        <form id="login-form" class="form" action="<?php echo WEB_ROUTE ?>" method="POST">
                        <input type="hidden" name="controlleurs" value="security"/>
                        <input type="hidden" name="action" value="connexion"/>
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="adress email" class="text-info">adress email:</label><br>
                                <input type="text" name="login" id="adress email" class="form-control">
                                <small><?php echo isset($arrayErrors['login']) ? $arrayErrors['login'] :''; ?></small>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                <small><?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] :''; ?></small>
                            </div>
                            <div class="form-group">
                                <br>
                                <button type="submit" name="connexion" class="btn btn-info btn-md" value="Connexion">connexion</button>
                            </div>
                            <div id="register-link" class="text-right">
                            </div>
                            
                        </form>
                        <a href="<?php WEB_ROUTE. '??controlleurs=security&views=inscription'?>">S'inscire en tant que joueur</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>