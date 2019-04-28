<?php

require_once("db.php");
   
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" type="text/css" href="mytab.css">
    </head>
  
  
    <body>
	<font size="7"><center>聯絡資訊查詢</font></br>
	
    <div class="container">
	
 <form id="form1" name="form1" method="post" action="check.php"  class="form-inline"></br>
 
 <table class="table table-bordered table-striped">
    <thead>
    <center><b><tr><th>姓名</th><th>電話</th><th>諮詢項目</th><th>諮詢日期</th></tr></b></center>
    </thead>
<tbody id="myTable" align='center'>
 <?
 	$sql="SELECT * FROM sos order by date DESC";		
	$re = mysqli_query($db,$sql);
	   while($row=mysqli_fetch_array($re)){
			echo "<tr><td>".$row['name']."</td>".
			      "<td> ".$row['tel']."</td>".
				  "<td>".$row['item']."</td>".
				  "<td>".$row['date']."</td><tr>";
					
	}
 ?>
      
    </tbody>
  </table>
   
         </form>
   <a href="index.php">回首頁</a>
    
		 </div>
    </body>
</html>

    