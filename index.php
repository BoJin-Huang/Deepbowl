<?php
	session_start();
	$file=fopen("num_of_people.txt","r");
	$num=fgets($file);
	fclose($file);
	if($_SESSION['come']!='v'){
		 $num++;
		 $file=fopen("num_of_people.txt","w");
		 fwrite($file,$num);
		 fclose($file);
		 $_SESSION['come']='v';
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("page_head.php"); ?>
	<style>
		p{
			font-size:120%;
		}
	</style>
  </head>
    <?php include("page_body_top.php"); ?>
	<div class="row">
		<div class="col-md-9">
			<div class="carousel slide" id="carousel-858790" width="1600px" height="700px">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-858790"></li>
					<li data-slide-to="1" data-target="#carousel-858790"></li>
					<li data-slide-to="2" data-target="#carousel-858790"></li>
					<li data-slide-to="3" data-target="#carousel-858790"></li>
					<li data-slide-to="4" data-target="#carousel-858790"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src="https://imgur.com/N47nIvQ.jpg">
						<div class="carousel-caption">
							<h4>
								Dody Duke馬鈴薯專門店
							</h4>
							<p>
								逢甲排隊銅板美食，IG爆紅好看好拍又好吃的逛街美味!
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Second" src="https://imgur.com/Zd6JchT.jpg">
						<div class="carousel-caption">
							<h4>
								恰迷紅茶逢甲店
							</h4>
							<p>
								逢甲夜市人氣手搖飲，黑布蕾奶茶、Q罩杯驚豔登場人氣爆棚!
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src="https://imgur.com/TNXQlM0.jpg">
						<div class="carousel-caption">
							<h4>
								大麻粉圓。逢甲夜市唯一手工豆花
							</h4>
							<p>
								逢甲夜市唯一手工豆花，17年古早味全手工製作一大碗只賣35-40元!
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src="https://imgur.com/HdRpvhz.jpg">
						<div class="carousel-caption">
							<h4>
								喬樂晨坊
							</h4>
							<p>
								逢甲學生推薦排隊美食，豐盛套餐加飲料通通百元有找CP值KO華麗裝潢餐廳高價早午餐!
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src="https://imgur.com/639mKWm.jpg">
						<div class="carousel-caption">
							<h4>
								台灣雷夢
							</h4>
							<p>
								超夢幻星空極光手搖飲，全台獨創有機薰衣草新品粉嫩上市!
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-858790" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-858790" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div><br>
					<div class="row">
					<center style="border-width:3px;border-style:dashed;border-color:#000000;padding:5px;">
						<h1 align="center">公佈欄</h1>
						<p>☆★☆★☆★歡迎光臨-逢甲夜市美食經驗分享論壇★☆★☆★☆</p><br>
							<p>發文、回文前請注意基本網路禮儀</p>
							<p>本板方向以討論為主~會員互動請客觀理性</p>
							<p>初到論壇想發文的朋友請進行帳號註冊，不然是沒有發回文權限的喔!</p><br>
							<p>發文好口氣，不隨意謾罵，有品友善台灣人</p>
					</center>
						<h1>熱門推薦</h1>
						<div class="col-md-4">
							<div class="page-header">
								<h1>
									金援<br> <small>錢不是萬能，但沒有錢萬萬不能!</small>
								</h1>
							</div>
							<p>
								需要募款的人可以點選<strong> <a href="post.php">刊登文章</a> </strong>刊登相關募款資訊，包括募款目的、聯絡資訊、募款金額等相關資訊。<br>
								想做愛心的人可以點選<strong> <a href="show.php">文章資訊</a> </strong>瀏覽所有需要幫忙的文章。
							</p>
						</div>
						<div class="col-md-4">
							<div class="page-header">
								<h1>
									人力<br> <small>偏鄉人口外流，人力資源嚴重缺乏!</small>
								</h1>
							</div>
							<p>
								需要招募人力的人可以點選<strong> <a href="post.php">刊登文章 </a></strong>刊登相關招募資訊，包括招募目的、聯絡資訊、薪水等相關資訊。<br>
								想做愛心的人可以點選<strong> <a href="show.php">文章資訊 </a></strong>瀏覽所有需要幫忙的文章。
							</p>
						</div>
						<div class="col-md-4">
							<div class="page-header">
								<h1>
									物資<br> <small>捐助多餘的物資，物盡其用做好事!</small>
								</h1>
							</div>
							<p>
								有多餘物資的人可以點選<strong> <a href="post.php">刊登文章 </a></strong>刊登相關物資資訊，包括物資數量、聯絡資訊等相關資訊。<br>
								有需要物資的人可以點選<strong> <a href="show.php">文章資訊 </a></strong>瀏覽所有捐贈物資的文章。
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<h4>累計瀏覽人數: <?php 
										$string=strlen($num);
										for($i=0;$i<$string;$i++){
											/* $n=substr($num,$i,1);*/
											 echo '<img src=image/'.substr($num,$i,1).'.png width=20 height=20 />';
										}
										?>
					</h4>
					<hr>
					<h2>其他美食網站</h2>
					<a href="http://www.ipeen.com.tw/" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/pvFM1n3.jpg"></a><br><br>
					<a href="https://tabelog.com/tw/" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/zU8QocR.png"></a><br><br>
					<a href="https://www.openrice.com/zh/hongkong" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/o4hpdr2.jpg"></a><br><br>
				</div>
			</div>
		</div>
<?php include("page_body_bottom.php"); ?>