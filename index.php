<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once ("head.php"); ?>		
</head>
<body>
<style>
#floatDiv {width:120px; height:120px; background:white; position:absolute; right:0px;}
</style>
	<script>
			
		//設定三種事件發生時執行(調整視窗大小、拉右側滾動軸、網頁載入後)
window.onresize = window.onscroll = window.onload = function(){
var fDiv = document.getElementById('floatDiv');    //取得網頁中的<DIV>區塊物件
//取得瀏覽器的可視區距網頁頂端的距離(單位px)
var scrollTop = window.pageYOffset; 
//定時器，每隔30毫秒執行
var intVal = setInterval(function(){
//計算<DIV>物件在可視區的上緣=(視窗高度-DIV高度)/2
var t=(window.innerHeight-fDiv.offsetHeight)/2;
//計算漸變距離
var iSpeed = Math.floor((fDiv.offsetTop-(scrollTop +t))/20);
//當<DIV>物件已經移動到定位附近，停止計時器，<DIV>物件不再移動
if(iSpeed<5) clearInterval(intVal);
//移動<DIV>物件到經計算後漸變的位置
fDiv.style.top = iSpeed+(scrollTop +t)+'px';;
},30);
}
	</script>
	<div id="floatDiv"> 
<a href="http://line.me/ti/p/B678wA-ceg" target="_blank"> <img  src="images/line.png" width="120"  height="120" ><br></img><font size="4"><center>聯絡我們</center></font></a>
</div> 
	<div class="container">
		<?php include_once ("navbar.php"); ?>
	
		<div class="container" style="padding-top:3%;">	
			<img class="d-block w-100" src="images/test.png" alt="Second slide">
		
			</div>
			
			<br>
			<br><b><center><font size="6" color="blue">聯絡資訊</font></center></b>
			<div style="padding-top:2%;">
				<form method="post" action="clsm_connect.php" style="padding-top:2%;padding-bottom:10%;padding-left:2%;padding-right:2%;">
					<div class="text-center mb-5" style="letter-spacing:8px;">
						<div class="form-group row">
							<label class="col-lg-2">姓&nbsp;&nbsp;&nbsp;&nbsp;名：</label>
							<div class="col-lg-4">
								<input type="text" class="form-control" name="customer">
							</div>
							<label class="col-lg-2">聯絡電話：</label>
							<div class="col-lg-4">
								<input type="text" class="form-control" name="ee_phone" >
							</div>
						</div>
						
						<div class="form-group row">
							
							<label class="col-lg-2">諮詢項目：</label>
								<div class="col-lg-4">
									<select class="form-control" id="item">
										<option value="信用瑕疵">信用瑕疵</option>
										<option value="銀行貸款">銀行貸款</option>
										<option value="房屋土地二三胎">房屋土地二三胎</option>
										<option value="汽車貸款">汽車貸款</option>
										<option value="救急借款">救急借款</option>
									</select>
							</div>
						</div>
					</div> 
					<div class="text-center">
						<input type="submit" class="btn btn-warning" value="送出">
					</div>
				</form>		
			</div>			
		</div>
	</div>
	
	<?php include_once ("footer.php"); ?>	
</body>
</html>
