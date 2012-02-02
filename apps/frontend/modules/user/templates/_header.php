<noscript class="header_noscript robots-nocontent">
<div class="public_notice">
<div class="notice_inner"><strong>Please enable JavaScript on your web
browser to use this web site!</strong></div>
</div>
</noscript>
<a id="top_of_page" name="top_of_page">&nbsp;</a>
<div id="header">

<div id="logo_block" class="no_img" style="height: 60px;">
<h1 id="header_logo" style="font-size: 60px; height: 60px;"><a
	href="http://www.egoshishang.com"><img
	src="/images/banner_text.png" /></a></h1>
<div class="clear"></div>
<div id="header_forms">
<div id="header_newsletter">
<form method="post"
	action=""><input
	type="text" name="YMP0" size="20" value="加入关注" /> <input
	type="submit" value="Go" /></form>

</div>
<div id="header_search">
<form method="get" name="search"
	action=""
	class="click_clear"><input id="header_search_text" type="text"
	name="search" value="查询" />
<button id="header_search_submit" name="search-submit" type="submit"
	title="GO"><span>GO</span></button>
</form>
</div>
</div>
<div class="clear"></div>
</div>
<!-- #logo_block -->

<div id="top_nav">
<div class="clear"></div>
<div id="top_nav_link">
<ul>
	<li><a href="<?php
	echo url_for ( 'user/home' )?>"><span>主页</span></a></li>
	<?php
	foreach ( $categories as $category ) :
		?>
		<li><span class="bul"></span> <a
		href="<?php
		echo url_for ( 'user/home?cid=' . $category->getId () )?>"><span><?php
		echo $category->getDescription ()?></span></a></li>
				<?php
	endforeach
	?>
</ul>
</div>

<div class="clear"></div>
</div>
<!-- #top_slim --></div>
<!-- #header -->

<?php
if (! empty ( $subcategories )) :
	?>
<div id="shop_menu">
<div id="shop_menu_top">
<ul class="shop_menu_list">
	<?php
	foreach ( $subcategories as $subcategory ) :
		?>
			<li class="menu-item"><a
		href="<?php
		echo url_for ( 'user/home?cid=' . $currentCategory->getId () . '&scid=' . $subcategory->getId () )?>"><span
		class="link_text"><?php
		echo $subcategory->getDescription ()?></span></a></li>
				<?php
	endforeach
	?>
</ul>
<div class="clear"></div>
</div>
<!-- #shop_menu_top -->
<?php
	if (! empty ( $subsubcategories )) :
		?>
<div id="shop_menu_sub">
	<?php
	foreach ( $subsubcategories as $subsubcategory ) :
		?>
			<li><a
		href=""><span
		class="link_text"><?php
		echo $subsubcategory->getDescription ()?></span></a></li>
				<?php
	endforeach
	?>
<div class="clear"></div>
</div>
<!-- #shop_menu_sub -->

	<?php endif?>
<div class="clear"></div>
</div>
<!-- #shop_menu -->

<?php endif?>
