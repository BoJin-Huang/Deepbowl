<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if($_SESSION['username'] == null)
{
	header("location:unlogin_page.php");
}
?>
<?php require('Byet_Host_MySQL.php'); ?>
<?php
$writingName=$_SESSION['username'];
$writingType=$_GET['writingType'];
$writingSubject=$_GET['writingSubject'];
$writingContent=$_GET['writingContent'];
$writingContact=$_GET['writingContact'];
date_default_timezone_set("Asia/Taipei");
$writingTime = date("Y:m:d H:i:s",time());

if(isset($writingSubject)){
mysql_query("set names 'utf8'");
$sql = "insert into b22_21301895_food.writing(writingID,writingName,writingType,writingSubject,writingTime,writingContent,writingContact)value('','$writingName','$writingType','$writingSubject','$writingTime','$writingContent','$writingContact')";
mysql_query($sql) or die(mysql_error());
header("location:show.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
             		  	  <h2>刊登文章 </h2>
                       		 <form id="form1" name="form1" method="get">
                         	 <p style="font-size:18px">分類:
                                 <select name="writingType" id="writingType">
                                    <option value="小吃" selected="selected">小吃</option>
                                    <option value="炸物">炸物</option>
                                    <option value="炭烤">炭烤</option>
									<option value="飲料">飲料</option>
									<option value="甜點">甜點</option>
									<option value="冰品">冰品</option>
									<option value="其他">其他</option>
                                 </select>
                                標題:
                                 <input name="writingSubject" type="text" id="writingSubject" size="25" />
                          	 </p>
                          <h2>介紹內容</h2>
                          <p>
                 			 <textarea name="writingContent" id="writingContent" cols="80" rows="10"></textarea>
                          </p>
                          <p style="font-size:18px">營業資訊:
                            <input name="writingContact" type="text" id="writingContact" size="50" />
                          </p>
                          <p>
                            <input type="submit" name="button" id="button" value="送出" />
                          </p>
                  			</form>
                       	  <p>&nbsp;</p>
                		</center>
					</div>
			</div>
       <div class="row">
<?php include("page_body_bottom.php"); ?>
    