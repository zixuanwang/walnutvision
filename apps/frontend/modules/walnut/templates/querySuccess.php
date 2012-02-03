<style type="text/css">
body {
	padding-top: 60px;
}
</style>
</head>

<body>
<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
<div class="container"><a class="btn btn-navbar" data-toggle="collapse"
	data-target=".nav-collapse"> <span class="icon-bar"></span> <span
	class="icon-bar"></span> <span class="icon-bar"></span> </a> <a
	class="brand" href="<?php
	echo url_for ( 'walnut/index' )?>">核桃</a>
<div class="nav-collapse">
<ul class="nav">
	<li><a href="walnutvision.net">博客</a>
	
	
	<li><a href="mailto:zixuanwang@gmail.com">联系我们</a>

</ul>
<form class="navbar-search pull-left" action=""><input type="text"
	class="search-query span2" placeholder="搜索"></form>
<p class="navbar-text pull-right">登录<a href="#">用户名</a></p>
</div>
<!--/.nav-collapse --></div>
</div>
</div>

<div class="container"><!-- Example row of columns -->

<div class="alert alert-block">
<p><strong>上传图片： 赶快去照一张照片吧</strong></p>
<br />
<form encType="multipart/form-data" method="post"
	action="<?php
	echo url_for ( 'walnut/query' )?>">
<div class="input"><input class="input-file" id="fileInput"
	name="fileInput" type="file" /></div>
<div class="row">
<div class="span1"><input type="submit" class="btn btn-info" value="上 传">
</div>

<div class="span1">
<button type="reset" class="btn btn-danger">取 消</button>
</div>
</div>
</form>
</div>



<div class="row">
<div class="span12">
		
				<?php
				if (isset ( $time )) :
					?>
				<div class="alert alert-info">
				Find results in <?php
					echo $time?> seconds.
				</div>
		
				<?php endif;
				?>
		</div>
</div>
<div class="row">
<div class="span12">
			<?php
			for($i = 0; $i < count ( $imageArray ) / 4; ++ $i) :
				?>
				<div class="row-fluid">
<ul class="thumbnails">




					<?php
				for($j = 0; $j < 4; ++ $j) :
					?>
						<li class="span3">
	<div class="thumbnail">
	<p><span class="label label-important" style="font-size: 14px;"><?php
					echo $imageArray [$i * 4 + $j] ['price']?></span></p>
	<img src="<?php
					echo $imageArray [$i * 4 + $j] ['image']?>"
		style="height: 180px;">
	<div class="caption">
	<h5><?php
					echo $imageArray [$i * 4 + $j] ['title']?></h5>
	<br />
	<p><a href="<?php
					echo $imageArray [$i * 4 + $j] ['url']?>"
		class="btn btn-info">购 买</a> <a href="#" class="btn btn-danger">收 藏</a>
	</p>
	</div>
	</div>
	</li>
						
<?php
				endfor
				;
				?>
					</ul>
</div>
				
				
				
				
				<?php
			endfor
			;
			?>
				<!--/row--></div>
</div>
<footer>
<p>&copy; Company 2012</p>
</footer></div>
<!-- /container -->

</body>
