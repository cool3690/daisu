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
		<a href="http://line.me/ti/p/B678wA-ceg"> <img  src="images/line.png" width="120"  height="120" ><br></img><font size="4"><center>聯絡我們</center></font></a>
	</div> 
	<div class="container" style="padding-top:3%;">	
		<?php include_once ("navbar.php"); ?>	
		<img class="d-block w-100" src="images/03.png" alt="Second slide">		
		<br>
<!--		<br><center><font size="6" color="blue">救急專家</font></center> -->
		<div style="padding-top:3%;padding-bottom:5%;font-size: 18px; line-height: 50px;letter-spacing:5px;">
			<div style="border-top:5px solid #ffd306;"></div>	
			<p style="padding-top:2%;padding-bottom:2%;padding-left:5%;">


地址  |  台北市XXXXXXXXXXXXXXXXXXXX號<br>

Email  |  XXXXXXX@gmail.com<br>

電話  |  (02)XXXX-XXXX<br>
透過行動條碼加入LINE好友  <br>
		<img class="d-block" src="images/line_qr.png" alt="Second slide" width="200px">	

			</p>	
			<div style="border-top:5px solid #ffd306;"></div>
		</div>
	</div>
	
	<?php include_once ("footer.php"); ?>	
</body>
</html>
