<?php
	$facebookLink=
	"
		<div class='facebookLink'>
			<div class='wrap'>
				<a href='https://www.referme.jobs/login' target='_blank'><img src='img/facebookLink/facebooklink.png' alt='facebook登録'></a>
			</div>
		</div>
	";
?>

<!doctype html>
<html lang="ja">
	<head>
		<meta charset="utf-8">

		<title>Refer me</title>
		<meta name="description" content="">
		<?php include (".include/meta_link.php"); ?>
		<?php include (".include/useragent.php"); ?>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/shadowbox.css">

<!--[if lt IE 9]>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

<!--<![endif]-->

    <script type="text/javascript" src="js/main.js"></script>
    <!--<script type="text/javascript" src="js/video.js"></script>-->
	<script type="text/javascript" src="js/shadowbox.js"></script>
	
	<script type="text/javascript">  
		Shadowbox.init();
	</script>

	</head>
	<body>
		<div class="mordal01cont">
			<div class="po_re">
				<div class="po_ab mordal-cl"><img src="img/mordal/close.png"></div>
				<img src="img/mordal/mordal01.jpg" >
			</div>
		</div>	
		<div class="mordal02cont">
			<div class="po_re">
				<div class="po_ab mordal-cl"><img src="img/mordal/close.png"></div>
				<img src="img/mordal/mordal02.jpg" >
			</div>
		</div>
		<section class="movie">
			<h2><img src="img/movie/ttl_movie.png" alt="movie"></h2>
			<div class="moviecont">
				<?php if($ua->set() === "mobile" || $ua->set() === "tablet"):?>
					<div class="main_sp moviebg"><img src="img/movie/main_sp.jpg" alt="スマホ版メイン画像"></div>
					
				<?php else:?>
					<div class="po_re moviebg">
						<video autoplay loop muted poster="img/movie/poster.jpg">
						  <source src="video/video.mp4" type="video/mp4" />
						   <img src="img/movie/poster.jpg" /> 
						</video>
<!-- 						<div id="mainmovie" class="po_ab"></div>-->
						<div id="cover" class="po_ab"></div> 
					</div>
				<?php endif;?>

				<div class="ovh movielist">
					<div class="f_left">
						<ul class="ovh">
							<li><a href="http://www.youtube.com/embed/YP0_0EBawaQ" rel="shadowbox;width=850;height=510"></a></li>
						<!--動画が有効になった際は、80行目や81行目を有効にしてください-->
							<li><a href="javascript:void(0);"></a></li>
							<li><a href="javascript:void(0);"></a></li>
						<!-- 76行目のコメントアウト文章の補足。動画の公開許可おりたあと、以下（80行目や81行目）のコメントアウトしているソースを有効にして、現在使用している「movie02Btn_on.png」と「movie03Btn_on.png」をimg/movie/rename/のディレクトリにある画像に差し替えてください					
							<li><a href="http://www.youtube.com/embed/T9NfgmtRp04" rel="shadowbox;width=850;height=510"><img src="img/movie/movie02Btn.png" alt="movie02"></a></li>
							<li><a href="http://www.youtube.com/embed/smeaRXp2UYI" rel="shadowbox;width=850;height=510"><img src="img/movie/movie03Btn.png" alt="movie03"></a></li>
						-->
						</ul>
					</div>

					<div class="f_right">
						<h1><img src="img/movie/logo.png" alt="ロゴ"></h1>
					</div>
				</div>
			</div>
		</section>

		<section class="recommend">
			<div class="wrap">
				<p><img src="img/recommend/sub.png" alt="帯" class="dblock"></p>
				<h2><img src="img/recommend/ttl_recommend.png" alt="レファミーをオススメする2つのポイント"></h2>
				<div class="recocont ovh">
					<div class="f_left"><img src="img/recommend/point01.png" alt="友人を推薦して奨励金10万円！" class="mordal01"></div>
					<div class="f_right"><img src="img/recommend/point02.png" alt="転職支援金がもらえます！" class="mordal02"></div>
				</div>

			</div>
		</section>

		<?php echo $facebookLink; ?>

		<section class="referee">
			<div class="wrap">
				<h2><img src="img/referee/ttl_referee.png" alt="推薦者になる方法"></h2>
				<ul class="ovh">
					<li><img src="img/referee/step01.png" alt="会員登録"></li>
					<li><img src="img/referee/step02.png" alt="シェアする"></li>
					<li><img src="img/referee/step03.png" alt="推薦の依頼"></li>
					<li><img src="img/referee/step04.png" alt="友人の紹介"></li>	
				</ul>
				<a href="javascript:void(0);" class="mordal01"><img src="img/referee/link.png" alt="推薦者奨励金についてはこちらを御覧ください"></a>
			</div>
		</section>

		<section class="changejob">
			<div class="wrap">
				<h2><img src="img/changejob/ttl_changejob.png" alt="レファミーを使った転職活動"></h2>
				<ul class="ovh">
					<li><img src="img/changejob/step01.png" alt="会員登録"></li>
					<li><img src="img/changejob/step02.png" alt="履歴書をアップロード"></li>
					<li><img src="img/changejob/step03.png" alt="応募するボタンをクリック！"></li>
					<li><img src="img/changejob/step04.png" alt="転職支援金をキャッシュバック"></li>				
				</ul>
				<a href="javascript:void(0);" class="mordal02"><img src="img/changejob/link.png" alt="転職支援金についてはこちらを御覧ください"></a>
			</div>
		</section>

		<?php echo $facebookLink; ?>

		<section class="trustco">
			<div class="wrap">
				<div class="po_re trustcocont">
					<h2 class="po_ab"><img src="img/trustco/ttl_trustco.png" alt="さまざまな企業からの信頼を得ています"></h2>
					<img src="img/trustco/companylist.png" alt="企業一覧">
				</div>
				<footer><p>© ReferMe Inc. All Rights Reserved.</p></footer>
			</div>
		</section>













	</body>
</html>
