<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php require('Byet_Host_MySQL.php'); ?>
<?php 
    $sql = "select * from b22_21301895_food.writing order by writingTime desc"; //修改成你要的 SQL 語法
    $result = mysql_query($sql) or die("Error");

    $data_nums = mysql_num_rows($result); //統計總比數
    $per = 5; //每頁顯示項目數量
    $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }
    $start = ($page-1)*$per; //每一頁開始的資料序號
    $result = mysql_query($sql.' LIMIT '.$start.', '.$per) or die("Error");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
  <head>
    <?php include("page_head.php"); ?>
	<style>
		p{
			font-size:120%;
		}
	
		#customers {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 90%;
		}

		#customers td, #customers th {
			border: 1px solid #fff;
			padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #FF88C2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: center;
			background-color: #7700BB;
			color: white;
		}
	</style>
  </head>
 <?php include("page_body_top.php"); ?>
            <div class="row">
            	<div class="col-md-12">
            			<center style="border-width:3px;border-style:dashed;border-color:#FFFFFF;padding:5px;">
						<h2>文章列表</h2>
							<table id="customers" >
							<tr align="center">
									<th width="5%"> 分類 </th><th width="45%"> 標題 </th><th width="10%"> 作者 </th><th width="20%"> 發文日期 </th>
							</tr>
             		  	  <?php
							for($i=1;$i<=mysql_num_rows($result);$i++){
							 $rs=mysql_fetch_assoc($result);
							 if($rs['writingType']==1){
								 $type = '募款';
							 }
							 elseif($rs['writingType']==2){
								 $type = '募物';
							 }
							 elseif($rs['writingType']==3){
								 $type = '募人';
							 }
							?>
								
								<tr align="center" >
								  <td width="5%"> <?php echo $type?> </td><td width="45%"><a href="content.php?id=<?php echo $rs['writingID'] ?>"><?php echo $rs['writingSubject']?></a> </td><td width="10%"> <?php echo $rs['writingName']?> </td><td width="20%"> <?php echo $rs['writingTime']?> </td>
								</tr>
							<?php } ?>
							</table>
							<br><br>
							<div style="font-size: 200%">
							<?php
								//分頁頁碼
								echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
								echo "<br /><a href=?page=1>首頁</a> ";
								echo "第 ";
								for( $i=1 ; $i<=$pages ; $i++ ) {
									if ( $page-3 < $i && $i < $page+3 ) {
										echo "<a href=?page=".$i.">".$i."</a> ";
									}
								} 
								echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
							?>
							</div>
                		</center>
					</div>
			</div>
       <div class="row">
<?php include("page_body_bottom.php"); ?>
    				