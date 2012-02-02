<body style="padding-top: 60px;">
	<div class="topbar">
		<div class="topbar-inner">
			<div class="container-fluid">
				<a class="brand" href="#">Project name</a>
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<p class="pull-right">
					Logged in as <a href="#">username</a>
				</p>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="sidebar">
			<div class="well">
				<h5>Sidebar</h5>
				<ul>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
				<h5>Sidebar</h5>
				<ul>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
				<h5>Sidebar</h5>
				<ul>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<!-- Main hero unit for a primary marketing message or call to action -->
			<div class="hero-unit">
				<h1>Hello, world!</h1>
				<p>Vestibulum id ligula porta felis euismod semper. Integer posuere
					erat a ante venenatis dapibus posuere velit aliquet. Duis mollis,
					est non commodo luctus, nisi erat porttitor ligula, eget lacinia
					odio sem nec elit.</p>
				<p>
					<a class="btn primary large">Learn more &raquo;</a>
				</p>
			</div>
			<div class="row">
			<?php foreach($productArray as $product):?>
<?php

				$imageArray = $product->getImages ();
				$image = $imageArray [0];
				$url = $image->getUrl ();
				$userArray = $product->getUserUpload ();
				$priceArray = $product->getPrice ();
				?>
				<div class="span4"><a href="#"> <img class="thumbnail"
							src="<?php echo '/uploads/' . basename($url)?>" alt=""
							width="210px" /></a>
				<?php echo $product->getName()?> <?php echo $userArray[0]->getRealname()?> <?php echo $priceArray[0]->getPrice()?>		
						</div>
<?php endforeach;?>
			</div>
			<div class="pagination">
				<ul>
					<li class="prev disabled"><a href="#">&larr; 上一页</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li class="next"><a href="#">下一页 &rarr;</a></li>
				</ul>
			</div>
			<footer>
				<p>&copy; egoshishang 2011</p>
			</footer>
		</div>
	</div>
</body>