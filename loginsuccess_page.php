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
            	<div class="col-md-12">
            			<center style="border-width:3px;border-style:dashed;border-color:#FFFFFF;padding:5px;">
             		  	  <h2>登入成功! 5秒鐘後自動跳轉到首頁</h2>
						  <?php
							echo '<meta http-equiv=REFRESH CONTENT=5;url=index.php>';
						  ?>
						  <h3><a href="index.php">點擊此鏈結可立即前往首頁</a></h3>
                		</center>
					</div>
			</div>
       <div class="row">
<?php include("page_body_bottom.php"); ?>