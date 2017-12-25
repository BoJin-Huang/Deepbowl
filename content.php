<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php require('Byet_Host_MySQL.php'); ?>
<?php 
$id=$_GET['id'];
$data=mysql_query("select * from b22_21301895_food.writing where writingID = '$id' order by writingTime desc");//讓資料由最新呈現到最舊
$reply=mysql_query("select * from b22_21301895_food.reply where replyWritingID = '$id' order by replyTime asc");
?>
<?php
$replyUserName=$_SESSION['username'];
$replyWritingID=$id;
$replyContent=$_POST['replyContent'];
$replyTime = date("Y:m:d H:i:s",time()+28800);
if(isset($replyContent)){
	$sql = "insert into b22_21301895_food.reply(replyUserName,replyWritingID,replyTime,replyContent)value('$replyUserName','$replyWritingID','$replyTime','$replyContent')";
	mysql_query($sql) or die(mysql_error());
	echo "<script language=JavaScript> location.replace(location.href);</script>";
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
	
		 .CSSTableGenerator {
		 margin:auto;
		 padding:0px;
		 width:60vw;
		 }
		 .CSSTableGenerator table{
			border-collapse: collapse;
			border-spacing: 0;
		 width:100%;
		 margin:0px;padding:0px;
		}.CSSTableGenerator tr:last-child td:last-child {
		 -moz-border-radius-bottomright:9px;
		 -webkit-border-bottom-right-radius:9px;
		 border-bottom-right-radius:9px;
		}
		.CSSTableGenerator table tr:first-child td:first-child {
		 -moz-border-radius-topleft:9px;
		 -webkit-border-top-left-radius:9px;
		 border-top-left-radius:9px;
		}
		.CSSTableGenerator table tr:first-child td:last-child {
		 -moz-border-radius-topright:9px;
		 -webkit-border-top-right-radius:9px;
		 border-top-right-radius:9px;
		 
		}.CSSTableGenerator tr:last-child td:first-child{
		 -moz-border-radius-bottomleft:9px;
		 -webkit-border-bottom-left-radius:9px;
		 border-bottom-left-radius:9px;
		 
		}.CSSTableGenerator tr:hover td{
		 background-color:#005fbf;
		 color:white;
		}
		.CSSTableGenerator td{
		 vertical-align:middle;
		 background-color:#e5e5e5;
		 border:1px solid #999999;
		 border-width:0px 1px 1px 0px;
		 text-align:left;
		 padding:8px;
		 font-size:16px;
		 font-family:Arial,微軟正黑體;
		 font-weight:normal;
		 color:#000000;
		}.CSSTableGenerator tr:last-child td{
		 border-width:0px 1px 0px 0px;
		}.CSSTableGenerator tr td:last-child{
		 border-width:0px 0px 1px 0px;
		}.CSSTableGenerator tr:last-child td:last-child{
		 border-width:0px 0px 0px 0px;
		}
		.CSSTableGenerator tr:first-child td{
		  background:-o-linear-gradient(bottom, #005fbf 5%, #005fbf 100%); 
		  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #005fbf) );
		  background:-moz-linear-gradient( center top, #005fbf 5%, #005fbf 100% );
		  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf"); 
		  background: -o-linear-gradient(top,#005fbf,005fbf);
		  background-color:#005fbf;
		  text-align:center;
		  font-size:20px;
		  font-family:Arial, 微軟正黑體;
		  font-weight:bold;
		  color:#ffffff;
		}
		.CSSTableGenerator tr:first-child:hover td{
		  background:-o-linear-gradient(bottom, #005fbf 5%, #005fbf 100%); 
		  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #005fbf) );
		  background:-moz-linear-gradient( center top, #005fbf 5%, #005fbf 100% );
		  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf"); 
		  background: -o-linear-gradient(top,#005fbf,005fbf);
		  background-color:#005fbf;
		}
	</style>
  </head>
 <?php include("page_body_top.php"); ?>
            <div class="row">
				<div class="col-md-12">
            			<center style="border-width:3px;border-style:dashed;border-color:#FFFFFF;padding:5px;">
						<h2>文章內容</h2>
						<?php
							for($i=1;$i<=mysql_num_rows($data);$i++){
							 $rs=mysql_fetch_assoc($data);
							 if($rs['writingType']==1){
								 $type = '募款';
							 }
							 elseif($rs['writingType']==2){
								 $type = '募物';
							 }
							 elseif($rs['writingType']==3){
								 $type = '募人';
							 }
							}
						?>
						<div class="CSSTableGenerator">
							<table align="center">
								<tr>
								  <td><?php echo $rs['writingSubject']?></td>
								</tr>
								<tr>
								  <td width="15%">暱稱</td>
								  <td width="85%" colspan="2"><?php echo $rs['writingName']?></td>
								</tr>
								<tr>
								  <td>聯絡方式</td>
								  <td colspan="2"><?php echo $rs['writingContact']?></td>
								</tr>
								<tr>
								  <td>分類</td>
								  <td colspan="2"><?php echo $type?></td>
								</tr>
								<tr>
								  <td>文章內容</td>
								  <td colspan="2"><?php echo $rs['writingContent']?></td>
								</tr>
								<tr>
								  <td colspan="3"  style='text-align: center;'>留言</td>
								</tr>
								<?php 
									for($i=1;$i<=mysql_num_rows($reply);$i++){
										$reply_rs=mysql_fetch_assoc($reply);
								?>
								<tr>
								  <td><?php echo $reply_rs['replyUserName']?>:</td> <td width="50%"><?php echo $reply_rs['replyContent']?></td> <td width="25%"><?php echo $reply_rs['replyTime']?></td>
								</tr>
								<?php } ?>
							</table>
							<br><br>
							</div>
							<?php
								if($_SESSION['username'] != null){
									echo '<form id="form" name="form" method="post">';
									echo '<p><textarea name="replyContent" id="replyContent" cols="60" rows="5" placeholder="留言內容...."></textarea></p>';
									echo '<p><input type="submit" name="button" id="button" value="留言" /></p>';
									echo '</form>';
								}
								else{
									echo'<h2><a href="login.php">登入後才能留言(按此登入)</a></h2>';
								}
							?>
							<br><br>
                		</center>
					</div>
			</div>
       <div class="row">
<?php include("page_body_bottom.php"); ?>