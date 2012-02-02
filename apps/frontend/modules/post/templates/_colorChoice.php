<table>
<tr id='candidateColorRow'>
<?php foreach($candidateColors as $color):?>
<td bgColor='<?php echo $color->colorName?>' id='<?php echo 'cc_'.$color->id?>' width='20px' height='20px'></td>
<?php endforeach;?>
</tr>
</table>
<table>
<tr id='selectedColorRow'>
</tr>
</table>
