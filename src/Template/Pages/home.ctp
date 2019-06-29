<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags 
	<title>Stadinho|DanceStudios</title> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="「Studinho」は、LINEを介して都内を中心としたダンススタジオの空き状況をリアルタイムで検索してくれる新たな検索プラットフォームサービスです。無料で誰でもご利用頂けます。">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.slider').bxSlider({
            	speed: 1200,
            	auto: true,
            	pause: 5000,
            	pager: false,
            	controls: false,
            	randomStart: true,
            	infiniteLoop: true,
            	touchEnabled: false,
            });
		});
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Wendy+One|ZCOOL+KuaiLe" rel="stylesheet">
	<?= $this->Html->css('style.css') ?>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-fixed-top" id="mainNav">
		<div class="container">
			<!--<a class="navbar-brand js-scroll-trigger" href="#page-top">Stadihno | DanceStudios</a>-->
		</div>
	</nav>
	<div class="cover section1">
		<div class="container section1-container1 text-center">
			<div style="padding-left: 40px;">
				Hit the Floor?<br>Hit Studinho!!
			</div>
		</div>
		<div class="container section1-container2 text-center">
			<?php echo $this->Html->image('square-default.png', array('alt' => 'CakePHP')); ?>
            <p>Available on LINE.</p>
		</div>
	</div>

	<div class="cover section-what-studihno">
		<h2>What's Studinho?</h2>
		<div class="container">
			<!-- <h3 class="text-center"><span style="font-weight: bold;">空きスタジオを一括検索</span></h3> -->
			<p><span style="font-weight: bold;">Studinho</span>とは?
				<br>
				LINEを介して都内を中心としたダンススタジオの空き状況をリアルタイムで検索してくれる新たな検索プラットフォームサービスです。
			<br><br>
			<span style="font-weight: bold;">これまで</span>
			<br>

			ダンススタジオを利用する際は各会社が運営するWebサイト等を訪問し、空き状況を確認した上での予約が必要でした。
			<br><br>
			<span style="font-weight: bold;">Studinho</span>では
			<br>
		ダンススタジオの空き状況を横断的に取得し、あなたの手元へお届けします。これまでの煩わしい検索作業を容易にし、快適なダンスライフをお届けします。</p>
		</div>
	</div>
		<div class="cover section-photo01"></div>
		<div class="cover section-howtouse">
			<!-- <div class="row"> -->
				<h2>How to Use?</h2>
				<div class="container text-center howtouse-box">
					<p><span style="font-weight: bold;">「Studinho」</span>は、<br>誰でも簡単にご利用頂ける無料サービスです。<br>使い方は簡単４つのステップ!!</p>
					<div class="row">
						<div class="col-5 text-center section-howtouse-box">
							<h6>1.STUDINHOを友達追加</h6>
							<p>まずはLINEで友達追加。</p>
						</div>
						<div class="col-7 text-center section-howtouse-box">
							<img src="img/howtouse01.jpg" alt="" height="100%">
						</div>
						<div class="w-100"></div>
						<div class="col-5 text-center section-howtouse-box">
							<h6>2.お好きな条件入力</h6>
							<p>場所、時間、部屋の大きさ等の条件を入力。</p>
						</div>
						<div class="col-7"><img src="img/howtouse02.jpg" alt="" height="100%"></div>
					</div>
					<div class="row">
						<div class="col-5 text-center section-howtouse-box">
							<h6>3.スタジオ選択</h6>
							<p>条件にあった部屋からお好きなスタジオを選択。</p>
						</div>
						<div class="col-7 text-center section-howtouse-box">
							<img src="img/howtouse03.jpg" alt="" height="100%">
						</div>
						<div class="w-100"></div>
						<div class="col-5 text-center section-howtouse-box">
							<h6>4.スタジオ予約</h6>
							<p>電話またはWebボタンをクリックし予約。</p>
						</div>
						<div class="col-7 text-center section-howtouse-box">
							<img src="img/howtouse04.jpg" alt="" height="100%">
						</div>
					</div>
				</div>
			</div>
			<div class="cover section4">
				<h2>Get Started!</h2>
				<div class="centerBox text-center">
					<h4>さっそく友達追加をしてみましょう！！</h4>
					<div class="relative">
						<img src="img/Download-Smartphone-PNG-Pic.png" alt="" class="absolute-img"/>
						<img src="img/S__30179342.jpg" alt="" class="absolute-qr" width="120px" height="120px" />
						<p class="absolute-id text-center">LineID: @bng5784x</p>
					</div>
				</div>
			</div>
			<div class="cover section-contactus">
				<h2>Contact Us</h2>
				<div class="container">
					<h4 class="text-center mt-4 mb-4">
						掲載するスタジオを募集してます。
						<br>
						ご興味のある方は是非ご連絡ください。
					</h4>
					<p class="text-center mt-4 mb-4">
						e-mail address:<br>
						<span style="text-decoration: underline; font-size: 24px;">
							<a href="mailto:syncwiz.tm@gmail.com?subject=【問い合わせ】&amp;body="">syncwiz.tm@gmail.com</a>
						</span>
					</p>
				</div>
			</div>
			<div class="cover section-sns">
				<h2>Social Medias</h2>
				<div class="container">
						<div class="row">
							<div class="col-4 text-center">
								<img src="img/iconfinder_58-youtube_104445.png" alt="">
								<small>coming soon.</small>
							</div>
							<div class="col-4 text-center">
								<img src="img/iconfinder_38-instagram_1161954.png" alt="">
								<small>coming soon.</small>
							</div>
							<div class="col-4 text-center">
								<img src="img/iconfinder_43-twitter_104461.png" alt="">
								<small>coming soon.</small>
							</div>
						</div>
				</div>
			</div>
			<a class="twitter-timeline" href="https://twitter.com/StudinhoOffici1?ref_src=twsrc%5Etfw">Tweets by StudinhoOffici1</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

			<div class="cover section-aboutus">
				<h2>About Us.</h2>
				<div class="container">
					<!-- <h4>About the team</h4> -->
					<div class="centerBox">
						<p>SyncWizは、<br>2018年東京でダンス好きのエンジニアとその愉快な仲間たちで構成されたチームです。<br>日本のダンス界を盛り上げるために自分たちにできることは何かと突き詰めこのサービスを開始しました。</p>

						<table border="0" width="100%" style="table-layout: fixed;" align="center">
							<tr>
								<th><h5>MEMBER</h5></th>
							</tr>
							<tr>
								<td>入江 憲史</td>
							</tr>
							<tr>
								<td>鳥巣 智史</td>
							</tr>
							<tr>
								<td>西嶋 勇太</td>
							</tr>
							<tr>
								<td>古家 聡司</td>
							</tr>

						</table>
					</div>
				</div>
			</div>

			<div class="text-center mb-2 mt-1">
				<small>&copy; 2019 Team SyncWiz. </small>
			</div>

			<script>
				$(document).ready(function () {
					hsize = $(window).height();
					$(".section1").css("height", hsize + "px");
				});
				$(window).resize(function () {
					hsize = $(window).height();
					$(".section1").css("height", hsize + "px");
				});

				var menuHeight = $(".navbar-fixed-top").height();
				var startPos = 0;
				$(window).scroll(function(){
					var currentPos = $(this).scrollTop();
					if (currentPos > startPos) {
						if($(window).scrollTop() >= 200) {
							$(".navbar-fixed-top").css("top", "-" + menuHeight + "px");
						}
					} else if (startPos > currentPos) {
						$(".navbar-fixed-top").css("top", 0 + "px");
					}
					startPos = currentPos;
				});
			</script>

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		</body>
	</html>