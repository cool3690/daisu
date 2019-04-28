
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
    body{
        font-family:微軟正黑體;
    }
  
</style>

    <body>
    <font size="7"><center>員工登入</font> </br> </br> 
    
<div class="container">
       <form class="form-horizontal" action="login.php" method = "post">
    <div class="form-group">
      <label class="control-label col-sm-4" for="acc"><font size="4">帳號：</label>
      <div class="col-sm-4">
        <input type="account" class="form-control" id="acc"  name="acc" id="acc">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">密碼：</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="pwd"  name="pwd" id="pwd">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-default"  name = "login">登入</button>
      </div>
    </div>
  </form>

        </div>
    </body>
</html>
<?php
$acc=$_POST['acc'];
$pwd=$_POST['pwd'];

  if($acc=="admin" && $pwd=="money")
  {
  $url = "check.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";  
  }
?>