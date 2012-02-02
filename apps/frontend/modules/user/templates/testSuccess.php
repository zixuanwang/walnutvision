<table>
<?php foreach($products as $product):?>
<?php 
$images=$product->getImages();
$image=$images[0];
$url=$image->getUrl();


?>
<tr>
<td><img src="<?php echo '/uploads/' . basename($url)?>" height="175px" /><br/><?php echo $product->getName()?><br/></td>

</tr>
<?php endforeach;?>
</table>