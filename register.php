<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
  <head>
    <?php include("page_head.php"); ?>
	<style>
		p{
			font-size:120%;
		}
	
	input[type=text], select {
		padding: 12px 20px;
		margin: 0 0 15px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
	input[type=password], select {
			padding: 12px 20px;
			margin: 0 0 15px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
	}
	input[type=submit] {
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]:hover {
		background-color: #45a049;
	}
	</style>
  </head>
 <?php include("page_body_top.php"); ?>
            <div class="row">
            	<div class="col-md-12">
            			<center style="border-width:3px;border-style:dashed;border-color:#FFFFFF;padding:5px;">
             		  	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
							<form name="form" method="get" action="register_finish.php">
								<br><br>
								<label for="id">帳號</label><br>
								<input type="text" id="id" name="id"> <br>
								<label for="pw">密碼</label><br>
								<input type="password" id="pw" name="pw"> <br>
								<label for="pw2">確認密碼</label><br>
								<input type="password" id="pw2" name="pw2"> <br>
								<label for="nickname">暱稱</label><br>
								<input type="text" id="nickname" name="nickname"> <br>
								<input type="submit" name="button" value="確定">
							</form>
                       	  <p>&nbsp;</p>
                		</center>
					</div>
			</div>
       <div class="row">
<?php include("page_body_bottom.php"); ?>