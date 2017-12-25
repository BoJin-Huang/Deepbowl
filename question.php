<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("page_head.php"); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		var register_btn_s = 0;
		var post_btn_s = 0;
		var show_btn_s = 0;
		$(document).ready(function(){
			$("#register").hide();
			$("#post").hide();
			$("#show").hide();
			$("#register_btn").click(function(){
				if(register_btn_s == 0){
					$("#register_btn").val("收起");
					register_btn_s = 1;
				}
				else{
					$("#register_btn").val("展開");
					register_btn_s = 0;
				}
				$("#register").toggle(300);
			});
			$("#post_btn").click(function(){
				if(post_btn_s == 0){
					$("#post_btn").val("收起");
					post_btn_s = 1;
				}
				else{
					$("#post_btn").val("展開");
					post_btn_s = 0;
				}
				$("#post").toggle(300);
			});
			$("#show_btn").click(function(){
				if(show_btn_s == 0){
					$("#show_btn").val("收起");
					show_btn_s = 1;
				}
				else{
					$("#show_btn").val("展開");
					show_btn_s = 0;
				}
				$("#show").toggle(300);
			});

		});
	</script>
	<style>
		p{
			font-size:150%;
		}
	</style>
  </head>
 <?php include("page_body_top.php"); ?>
            <div class="row">
            	<div class="col-md-12">
            			<div style="border-width:3px;border-style:dashed;border-color:#FFFFFF;padding:10px;">
							<h2>帳號申請: <input type="button" id="register_btn" value="展開"></input></h2>
							<div class="row" id="register">
								<div class="col-md-6">
									<p>1.點擊右上角的註冊連結。</p>
									<image src="https://imgur.com/MPTKJyj.png" width="90%" height="400px"><br>
								</div>
								<div class="col-md-6">
									<p>2.正確填完所有表格後按下確定即註冊完成。</p>
									<image src="https://imgur.com/NapP6lf.png" width="90%" height="400px">
								</div>
							</div>
							<hr>
							<h2>發文流程: <input type="button" id="post_btn" value="展開"></input></h2>
							<div class="row" id="post">
								<div class="col-md-6">
									<p>1.登入後點選刊登文章。</p>
									<image src="https://imgur.com/ggiHIVr.png" width="90%" height="400px"><br>
								</div>
								<div class="col-md-6">
									<p>2.正確填完所有表格後按下確定即完成發文。</p>
									<image src="https://i.imgur.com/soYmpKP.png" width="90%" height="400px">
								</div>
							</div>
							<hr>
							<h2>留言流程: <input type="button" id="show_btn" value="展開"></input></h2>
							<div class="row" id="show">
								<div class="col-md-6">
									<p>1.未登入只能觀看文章不能留言。</p>
									<image src="https://i.imgur.com/My0Zj7s.png" width="90%" height="400px"><br>
								</div>
								<div class="col-md-6">
									<p>2.登入後輸入留言內容按下留言便可完成留言。</p>
									<image src="https://imgur.com/7bxJxX2.png" width="90%" height="400px">
								</div>
							</div>
                		</div>
					</div>
			</div>
       <div class="row">
<?php include("page_body_bottom.php"); ?>