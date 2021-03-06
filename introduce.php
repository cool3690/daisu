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
		<a href="http://line.me/ti/p/B678wA-ceg" target="_blank"><img src="images/line.png" width="120" height="120" ><br><font size="4"><center>聯絡我們</center></font></a>
	</div> 
	<div class="container">	
		<?php include_once ("navbar.php"); ?>	
		<img class="d-block w-100 mt-3" src="images/01.png" alt="Second slide">		
		<br>
<!--		<br><center><font size="6" color="blue">救急專家</font></center> -->
		<div style="padding-top:3%;padding-bottom:5%;font-size: 18px; line-height: 50px;letter-spacing:5px;">
			<div style="border-top:5px solid #ffd306;"></div>	
			<p style="padding-top:2%;padding-bottom:2%;padding-left:5%;">
				本公司從事銀行業已有十五年以上的經驗在此行業持有金融證照並不多數，<br>
				也有專業的代書群因為專業形象及承辦貸款經驗豐富就是讓客戶安心得保證，<br>
				舉凡<b>個人信貸</b>、<b>房屋土地一二胎貸款</b>、<b>汽車貸款</b>、<b>企業貸款</b>...皆有十五年以上的實務經驗，<br>
				另外也有承辦<b>民間代書信用貸款</b>、<b>土地一二胎借款</b>、<b>民間車貸</b>，<br>
				因為專業的判斷能力極佳，所以擅長判斷有困難度或特殊的案件極為常有的經驗，<br>
				並從中瞭解客戶問題點找出可解決的貸款方法，順利替客戶解決他（她）的資金缺口，<br>
				也因為在金融界從業數十年，所以有許多同業的同事及主管可相互討論一些特殊或信用瑕疵案件，<br>
				若有任何貸款問題歡迎<br>
			</p>	
			<div style="border-top:5px solid #ffd306;"></div>
		</div>
	</div>
	
	<?php include_once ("footer.php"); ?>	
</body>
</html>
