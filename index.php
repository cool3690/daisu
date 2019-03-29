<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once ("head.php"); ?>		
</head>
<body>
	<script>
		$(document).ready(function(){
			$("#myBtn").click(function(){
				$("#myModal").modal();
			});
		});
		
		$(document).ready(function(){
			$("#myBtn2").click(function(){
				$("#myModal2").modal();
			});
		});
		
		$(document).ready(function(){
			$("#myBtn3").click(function(){
				$("#myModal3").modal();
			});
		});
		
		$(document).ready(function(){
			$("#myBtn4").click(function(){
				$("#myModal4").modal();
			});
		});
		
		$(document).ready(function(){
			$("#myBtn5").click(function(){
				$("#myModal5").modal();
			});
		});		
		
		$(document).ready(function(){
			$("#myBtn6").click(function(){
				$("#myModal6").modal();
			});
		});	
		
		$(document).ready(function(){
			$("#myBtn7").click(function(){
				$("#myModal7").modal();
			});
		});		
		
		$(document).ready(function(){
			$("#myBtn8").click(function(){
				$("#myModal8").modal();
			});
		});	
		
		$(document).ready(function(){
			$("#myBtn9").click(function(){
				$("#myModal9").modal();
			});
		});	
	</script>
	<div class="container">
		<?php include_once ("navbar.php"); ?>
	
		<div class="container mb-3">	
						  <img class="d-block w-100" src="images/test.png" alt="Second slide">
		<!--
			<div class="col-sm-12 col-md-6 col-lg-12 mt-4">				
				<div id="carouselExampleIndicators" class="carousel slide"  data-interval="15000" data-ride="carousel" style="z-index:0;">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
						  <img class="d-block w-100" src="images/Ugo_-01.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/Ugo_-02.jpg" alt="Second slide">
						</div>					
						<div class="carousel-item">
							<img class="d-block w-100" src="images/Ugo_-03.jpg" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				-->
			</div>
			<div class="mt-3 mb-3">
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
							<label class="col-lg-2">公&nbsp;&nbsp;&nbsp;&nbsp;司：</label>
							<div class="col-lg-4">
								<input type="text" class="form-control" name="owner">
							</div>
							<label class="col-lg-2">居住地：</label>
							<div class="col-lg-4">
								<select class="form-control" id="county">
									<option value="基隆市">基隆市</option>
									<option value="台北市">台北市</option>
									<option value="新北市">新北市</option>
									<option value="桃園市">桃園市</option>
									<option value="新竹市">新竹市</option>
									<option value="新竹縣">新竹縣</option>
									<option value="苗栗縣">苗栗縣</option>
									<option value="台中市">台中市</option>
									<option value="彰化縣">彰化縣</option>
									<option value="南投縣">南投縣</option>
									<option value="雲林縣">雲林縣</option>
									<option value="嘉義市">嘉義市</option>
									<option value="嘉義縣">嘉義縣</option>
									<option value="台南市">台南市</option>
									<option value="高雄市">高雄市</option>
									<option value="屏東縣">屏東縣</option>
									<option value="台東縣">台東縣</option>
									<option value="花蓮縣">花蓮縣</option>
									<option value="宜蘭縣">宜蘭縣</option>
									<option value="澎湖縣">澎湖縣</option>
									<option value="金門縣">金門縣</option>
									<option value="連江縣">連江縣</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-2">聯絡時間：</label>
							<div class="col-lg-4">
								<input type="text" class="form-control" name="supervision">
							</div>
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
						<input type="submit" class="btn btn-primary" value="送出">
				</form>		
			</div>			
		</div>
	</div>
	
	<?php include_once ("footer.php"); ?>	
</body>
</html>
