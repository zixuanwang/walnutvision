<?php
//$content=array(1=>'hi');
//echo $categories;
//$content=array();
//foreach($categories as $category){
//	$content[]=$category->toArray();
//}
//$content=$categories->toArray();
//print_r($sf_data->getRaw('content'));
echo json_encode($sf_data->getRaw('content'));
?>