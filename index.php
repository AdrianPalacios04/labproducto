<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<style type="text/css">
  .content-select select{
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;

}
.content-select select::-ms-expand {
    display: none;
}
.content-select{
  max-width: 400px;
  position: relative;
  font-weight: bold;  
}
 
.content-select select{
  display: inline-block;
  width: 100%;
  cursor: pointer;
    padding: 1px 20px;
    height: 45px;
    outline: 0; 
    border: 0;
  border-radius: 0;
  background: #f0f0f0;
  color: #7b7b7b;
  font-size: 1em;
  color: #999;
  font-family: 
  'Quicksand', sans-serif;
  border:2px solid rgba(0,0,0,0.2);
    border-radius: 12px;
    position: relative;
    transition: all 0.25s ease;
}
 
.content-select select:hover{
  background: #B1E8CD;
}
 
/* 
Creamos la fecha que aparece a la izquierda del select.
Realmente este elemento es un cuadrado que sólo tienen
dos bordes con color y que giramos con transform: rotate(-45deg);
*/
.content-select i{
  position: absolute;
  right: 20px;
  top: calc(50% - 13px);
  width: 16px;
  height: 16px;
  display: block;
  border-left:4px solid #2AC176;
  border-bottom:4px solid #2AC176;
  transform: rotate(-45deg); /* Giramos el cuadrado */
  transition: all 0.25s ease;
}
 
.content-select:hover i{
  margin-top: 3px;
}
</style>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/producto.jpg');">
      <div class="wrap-login100 p-t-190 p-b-30">
        <form action="verificacion.php" method="POST" style="position: center">
          <span class="login100-form-title p-t-20 p-b-45" style="color: black">
            
          </span>

          <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
            <input class="input100" type="text" name="username" placeholder="Usuario">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock"></i>
            </span>
          </div>
          <div class="container-login100-form-btn p-t-10">
            <button class="login100-form-btn">
              Ingresar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>