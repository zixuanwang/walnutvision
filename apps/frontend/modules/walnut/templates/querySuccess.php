<style type="text/css">
body {
	padding-top: 60px;
}
</style>
</head>

<body>

	<div class="topbar">
		<div class="fill">
			<div class="container">
				<a class="brand" href="<?php echo url_for('walnut/index')?>">核桃</a>
				<ul class="nav">
					<li><a href="walnutvision.net">博客</a>
					</li>
					<li><a href="mailto:zixuanwang@gmail.com">联系我们</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">

		<!-- Example row of columns -->
		<div class="row">
			<div class="alert-message block-message warning">
				<p>
					<strong>上传图片： 赶快去照一张照片吧</strong>
				</p>
				<div class="alert-actions">
					<form encType="multipart/form-data" method="post"
						action="<?php echo url_for('walnut/query')?>">
						<div class="clearfix">
							<div class="input">
								<input class="input-file" id="fileInput" name="fileInput"
									type="file" />
							</div>
						</div>
						<!-- /clearfix -->
						<input type="submit" class="btn primary" value="上 传">&nbsp;
						<button type="reset" class="btn">取 消</button>
					</form>
				</div>
			</div>

		</div>
		
		
		
		
		
		
		
		
		<?php 
		if(isset($time)){
			echo "Find results in $time seconds\n";
		}
		?>
		<div class="row">
			<ul class="media-grid">




			<?php foreach($resultArray as $result):?>
				<li><a href="<?php echo $result ?>"> <img
						width="210px" height="210px" class="thumbnail"
						src="<?php echo $result ?>" alt="">
				</a>
				</li>
				
				
				
				
<?php endforeach;?>
    </ul>
		</div>
		<footer>
			<p>&copy; Company 2012</p>
		</footer>

	</div>
	<!-- /container -->

</body>
