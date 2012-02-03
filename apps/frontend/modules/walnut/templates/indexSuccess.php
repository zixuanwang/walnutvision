
<style type="text/css">
body {
	padding-top: 60px;
}

.sidebar-nav {
	padding: 9px 0;
}
</style>
<body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo url_for('walnut/index')?>">核桃</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li><a href="walnutvision.net">博客</a>
						
						<li><a href="mailto:zixuanwang@gmail.com">联系我们</a>
					
					</ul>
					<form class="navbar-search pull-left" action="">
						<input type="text" class="search-query span2" placeholder="搜索">
					</form>
					<p class="navbar-text pull-right">
						登录<a href="#">用户名</a>
					</p>
				</div>
				<!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span3">
				<div class="well sidebar-nav">
					<ul class="nav nav-list">
						<li class="nav-header">图书音像</li>
						<li><a href="#">人物传记</a></li>
						<li><a href="#">计算机教材</a></li>
						<li><a href="#">历史</a></li>
						<li><a href="#">小说</a></li>
						<li class="nav-header">电子产品</li>
						<li><a href="#">笔记本电脑</a></li>
						<li><a href="#">手机</a></li>
						<li><a href="#">音箱</a></li>
						<li><a href="#">MP3</a></li>
						<li class="nav-header">时装</li>
						<li><a href="#">女装</a></li>
						<li><a href="#">男装</a></li>
						<li><a href="#">包包</a></li>
					</ul>
				</div>
				<!--/.well -->
			</div>
			<!--/span-->
			<div class="span9" style="padding: 0px 0px 14px 0px;">
				<div class="row-fluid">
					<div class="span5">
						<a href="<?php echo url_for('walnut/query')?>"><button
								class="btn btn-success">图 片 搜 索</button> </a>
					</div>
					<div class="span4" style="text-align: right;">
						<h4>
							
							
							
							
						<?php echo $count?>
							images are indexed.
						</h4>
					</div>
				</div>

			</div>
			<div class="span9">




			<?php for($i=0;$i<count($imageArray)/3;++$i):?>
				<div class="row-fluid">
					<ul class="thumbnails">




					<?php for($j=0;$j<3;++$j):?>
						<li class="span3">
							<div class="thumbnail">
							<p><span class="label label-important" style="font-size:14px;">￥<?php echo $imageArray[$i*3+$j]['price']?></span></p>
								<img src="<?php echo $imageArray[$i*3+$j]['image'] ?>"
									style="height: 180px;">
								<div class="caption">
									<h5><?php echo $imageArray[$i*3+$j]['title']?></h5>
									<br/>
									<p>
										<a href="<?php echo $imageArray[$i*3+$j]['url']?>" class="btn btn-info">购 买</a> <a href="#"
											class="btn btn-danger">收 藏</a>
									</p>
								</div>
							</div>
						</li>
						
						
						
						
<?php endfor;?>
					</ul>
				</div>
				
				
				
				
				<?php endfor;?>
				<!--/row-->
			</div>
			<!--/span-->
		</div>
		<!--/row-->

		<hr>

		<footer>
			<p>&copy; Company 2012</p>
		</footer>

	</div>
	<!--/.fluid-container-->
</body>
