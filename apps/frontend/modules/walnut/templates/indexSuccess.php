<style type="text/css">
body {
	padding-top: 60px;
}

.sidebar-nav {
	padding: 9px 0;
}
</style>
<body>

<?php
include_partial ( 'header' )?>
	<div class="container">
		<div class="row">
			<div class="span3">
				<div class="well sidebar-nav">
					<ul class="nav nav-list">
						<li class="nav-header">图书音像</li>
						<li><a href="#">人物传记</a></li>
						<li><a href="#">历史</a></li>
						<li><a href="#">小说</a></li>
						<li class="nav-header">电子产品</li>
						<li><a href="#">笔记本电脑</a></li>
						<li><a href="#">手机</a></li>
						<li><a href="#">音箱</a></li>
						<li class="nav-header">时装</li>
						<li><a href="#">女装</a></li>
						<li><a href="#">男装</a></li>
						<li><a href="#">包包</a></li>
					</ul>
				</div>
				<!--/.well -->
			</div>
			<!--/span-->
			<div class="span9">
				<div class="hero-unit">
					<h2>欢迎访问核桃</h2>
					<p>我们旨在帮助移动互联网用户迅捷买到中意的商品。我们将图像搜索技术应用到电子商务中，用户只需将感兴趣的商品信息，包括照片、商品类别，地理位置等，提交给我们的产品，用户能够轻松锁定相同或者类似的商品，以及这些商品在附近其他商店的销售价格和网店价格。</p>
					<p>
						<a class="btn btn-primary btn-large"
							href="<?php echo url_for('walnut/query')?>">图 片 搜 索</a>
					</p>
				</div>
			</div>
		</div>
		
		
		
		
			<?php $column=4;?>
			<?php for($i=0;$i<count($imageArray)/$column;++$i):?>
				<div class="row">
					<div class="span12">
					<ul class="thumbnails">

					<?php for($j=0;$j<$column;++$j):?>
						<li class="span3">
							<div class="thumbnail">
								<p>
									<span class="label label-important" style="font-size: 14px;">￥<?php echo $imageArray[$i*$column+$j]['price']?>
									</span>
								</p>
								<img src="<?php echo $imageArray[$i*$column+$j]['image'] ?>"
									style="height: 180px;">
								<div class="caption">
									<h5>



									<?php echo $imageArray[$i*$column+$j]['title']?></h5>
									<br />
									<p>
										<a href="<?php echo $imageArray[$i*$column+$j]['url']?>"
											class="btn btn-info">购 买</a> <a href="#"
											class="btn btn-danger">收 藏</a>
									</p>
								</div>
							</div>
						</li>
<?php endfor;?>
					</ul>
					</div>
				</div>
				<?php endfor;?>
		<!--/row-->
    <div class="pagination">
    <ul>
    <li><a href="#">Prev</a></li>
    <?php foreach($pageArray as $page):?>
    <li><a href="<?php echo url_for('walnut/index?page=') . $page?>"><?php echo $page?></a></li>
    <?php endforeach;?>
    <li><a href="#">Next</a></li>
    </ul>
    </div>
		<hr>

		<footer>
			<p>&copy; Company 2012</p>
		</footer>

	</div>
	<!--/.fluid-container-->
</body>
