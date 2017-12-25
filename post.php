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
$writingTime = date("Y:m:d H:i:s",time()+28800);

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
                                    <option value="1" selected="selected">募款</option>
                                    <option value="2">募物</option>
                                    <option value="3">募人</option>
                                 </select>
                                主旨:
                                 <input name="writingSubject" type="text" id="writingSubject" size="25" />
                          	 </p>
                          <h2>活動詳情</h2>
                          <p>
                 			 <textarea name="writingContent" id="writingContent" cols="80" rows="10"></textarea>
                          </p>
                          <p style="font-size:18px">聯絡方式:
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
    