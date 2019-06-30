<?php
    $service1="SyncWiz Consultation 24";
    $service2="スタジオチャットボット照会";
    $service3="スタジオチャットボット予約";
    $service4="SyncWiz Tech Support 24";
    $service5="SyncWiz Build";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  //$("p").append(' <a href="#">read more...</a>');

  $("button").click(function(){
    $("p").slideToggle();
  });
});
</script>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
html {
  scroll-behavior: smooth;
}

#service1 {
  height: 600px;
  background-color: white;
}

#service2 {
  height: 600px;
  background-color: white;
}

#service3 {
  height: 600px;
  background-color: white;
}

#service4 {
  height: 600px;
  background-color: white;
}

.main {
  padding-right: 5%;
  padding-left: 5%;
  }
  h4 {
  margin: 20px 0px 20px 0px;
  }
  h6 {
    text-align: center;
    text-align: center;
  }
  #title4 {
      border-bottom: 5px solid #000;
      display: inline-block;
      padding-bottom: 5px;
      font-family: sans-serif;
  }
  .panel-title {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
  }
  .feature {
    font-size: 13px;
    list-style-type: none;
  }
  p {
    font-size: 10px;
    text-align: center;
  }
  .price {
    border-radius: 8px;
  }
</style>
</head>
<body>
<div class="main">
<h4 id="title4">Plans</h4>
  <div class="row">
  <div class="col-md-4 col-sm-6">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h5 class="panel-title text-center">
        Freeプラン
        </h5>
        <p>チャットボットを体験してもらうためのプラン。<br>※予約情報を当社が管理するシステムに繋ぐ工事が必要な場合があります。</p>
      </div>
      <hr> 
      <div class="panel-body h3320 text-center">
        <h6>利用可能なサービス</h6>
        <ul class="tier-features">
          <li class="feature"><a href="#service1"><?= $service1 ?></a></li>
          <li class="feature"><a href="#service2"><?= $service2 ?></a></li>
          <li class="feature"><br></li>
          <li class="feature"><br></li>
        <hr>
        <h6>月額料金</h6>
        <button class="price">￥0</button><br>
        <p>※工事の料金は別途かかる場合があります。</p>
      </div>  
    </div>
  </div>
  <div class="col-md-4 col-sm-6">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h5 class="panel-title text-center">
        スタンダードプラン
        </h5>
        <p>チャットボットを活用し予約を促進するプラン。<br>※予約情報を当社が管理するシステムに繋ぐ工事が必要な場合があります。</p>
      </div>
      <hr> 
      <div class="panel-body h3320 text-center">
        <h6>利用可能なサービス</h6>
        <ul class="tier-features">
          <li class="feature"><a href="#service1"><?= $service1 ?></a></li>
          <li class="feature"><a href="#service2"><?= $service2 ?></a></li>
          <li class="feature"><a href="#service3">スタジオチャットボット予約</a></li>
          <li class="feature"><a href="#service4">SyncWiz Tech Support 24</a></li>
        <hr>
        <h6>Our Service</h6>
        <button class="price">￥100/部屋数</button><br>
        <p>※1部屋につきかかる料金。</p>
      </div>  
    </div>
  </div>
  <div class="col-md-4 col-sm-6">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h5 class="panel-title text-center">
        開発・データ分析プラン
        </h5>
        <p>当社がお客様の現状のヒアリングを行い、それを元にWebシステムの開発、データ分析の提案、またその基盤導入を行います。
      </div>
      <hr> 
      <div class="panel-body h3320 text-center">
        <h6>利用可能なサービス</h6>
        <ul class="tier-features">
          <li class="feature"><a href="#service1"><?= $service1 ?></a></li>
          <li class="feature"><a href="#service4"><?= $service4 ?></a></li>
          <li class="feature"><a href="#service5"><?= $service5 ?></a></li>
          <li class="feature"><br></li>
        <hr>
        <h6>料金</h6>
        <button class="price">￥2000/時間</button><br>
        <p>※エンジニア一人一時間の作業にかかる料金。</p>
      </div>  
    </div>
  </div>
  </div>

  <h4 id="title4">機能紹介</h4>
  <div id="service1">
      <h6><?= $service1 ?></h6>
      <small>当社では国内外の一線で活躍するプロのダンサー、ITコンサル、Webエンジニア、戦略コンサルのメンバーが直接お客様の
      現状を踏まえ、顧客集客を高めるサービスやWebシステムを提案・相談します。契約を受けた際には、LineやWhatsappを用いて24時間相談を受けます。
      契約のない方でも、簡単な内容であれば以下のLine/Whatsappアカウントにご気軽にご相談ください。</small>
  </div>
  <div id="service2">
      <h6><?= $service2 ?></h6>
      <small>当社のスタジオ一括検索Line Bot「スタジーニョ」にて、空きスタジオをユーザーが手軽に検索できるサービスです。
      空きスタジオを見つけるまでの操作を減らし、ストレスをできる限り軽減しよう意識して作られています。</small>
      <small>※このサービスを利用するには、空きスタジオのデータを取得する必要があります。データ取得の方法は無数にあるため、導入は応相談になります。</small>
  </div>
  <div id="service3">
      <h6><?= $service3 ?></h6>
      <small>当社のスタジオ一括検索Line Bot「スタジーニョ」では、スタジオ予約を簡単な操作で行うことができます。
      予約確定後、スタジオの管理しているシステムに連携したり、メールで予約情報を送るなど、お客様のニーズに合わせた仕組みを提供できます。</small>
      <small>※こちらで予約情報を集約するデータベースを構築することも可能です。その場合別途開発、運用料金がかかります。</small><br>
      <a href="">開発・運用費に関してはこちらを参考にしてください。</a>
  </div>
  <div id="service4">
      <h6><?= $service4 ?></h6>
      <small>当社の国内外で働く開発経験が5年以上あるWebエンジニアとITコンサルが、当社が提供するサービスを24時間サポートします。</small>
      <small>※お客様の声を元に最適なサービスを提供したいため、小規模の追加開発であれば無料で行います。</small>
  
  </div>
</div>
</body>
</html>