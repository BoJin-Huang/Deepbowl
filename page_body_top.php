<?php echo '
<body style="background: #FFFF77;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li>
								<a href="index.php">首頁</a> <span class="divider"></span>
							</li>
							<li>
								<a href="#">粉絲頁</a> <span class="divider"></span>
							</li>
							<li>
								<a href="inf.php">聯絡我們</a> <span class="divider"></span>
							</li>
							<ul class="nav navbar-nav navbar-right">';
							?>
								<?php
									if($_SESSION['username'] == null)
									{
										echo '哈囉!&nbsp;&nbsp;&nbsp;遊客&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php">註冊</a>&nbsp;<a href="login.php">登入</a> <span class="divider"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
									}
									else
									{
										$name = $_SESSION['username'];
										echo '哈囉!&nbsp;&nbsp;&nbsp;'.$name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">登出</a> <span class="divider"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
									}
								?>
							<?php echo '
							</ul>
						</ul>
						<div class="title">
							<center><img alt="Bootstrap Image Preview" src="https://imgur.com/sxd3NSl.png" width="60%"></center>
							<br>
						</div>
						<nav class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
								</button> <a class="navbar-brand" href="index.php">新聞</a>
							</div>
							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li>
										<a href="post.php">刊登文章</a>
									</li>
									<li>
										<a href="show.php">文章資訊</a>
									</li>
									<li class="dropdown">
										 <a href="#" class="dropdown-toggle" data-toggle="dropdown">常見問題<strong class="caret"></strong></a>
										<ul class="dropdown-menu">
											<li>
												<a href="question.php">帳號申請</a>
											</li>
											<li>
												<a href="question.php">發文流程</a>
											</li>
											<li>
												<a href="question.php">留言流程</a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="inf.php">站務資訊</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<form class="navbar-form navbar-left" role="search" action="javascript:location.href="http://lmgtfy.com/?q="+document.getElementById("search").value">
										<div class="form-group">
											<input type="text" id="search" class="form-control" placeholder="google..">
										</div> 
										<input type ="button" class="btn btn-default" onclick="'; echo"javascript:location.href='http://lmgtfy.com/?q='+document.getElementById('search').value"; echo'" value="搜尋"></input>
									</form>
								</ul>
							</div>
						</nav>
					</div>
				</div>';
				?>