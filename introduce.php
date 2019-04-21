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
	<div class="container">
		<?php include_once ("navbar.php"); ?>
	
		<div class="container" style="padding-top:3%;">	
						  <img class="d-block w-100" src="images/01.jpg" alt="Second slide">
		
			</div>
			
			<br>
			<br><center><font size="6" color="blue">救急專家</font></center>
			<div style="padding-top:2%;font-size: 22px; line-height: 50px;">
				<p>本公司從事銀行業已有十五年以上的經驗在此行業持有金融證照並不多數，<br>
                也有專業的代書群因為專業形象及承辦貸款經驗豐富就是讓客戶安心得保證,<br>
				舉凡個人信貸,房屋土地一二胎貸款,汽車貸款,企業貸款...皆有十五年以上的實務經驗,<br>
				另外也有承辦民間代書信用貸款及土地一二胎借款,民間車貸,因為專業的判斷能力極佳,<br>
				所以擅長判斷有困難度或特殊的案件極為常有的經驗,並從中瞭解客戶問題點找出可解決的貸款方法,<br>
				順利替客戶解決他（她）的資金缺口,也因為在金融界從業數十年,<br>
				所以有許多同業的同事及主管可相互討論一些特殊或信用瑕疵案件,若有任何貸款問題歡迎<br>
				</p>
			</div>			
		</div>
	</div>
	
	<?php include_once ("footer.php"); ?>	
</body>
</html>
