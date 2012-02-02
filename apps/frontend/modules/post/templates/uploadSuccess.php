<?php use_javascript('selectCategory.js')?>
<H2>添加产品</H2>
<?php echo $form->renderFormTag ( url_for ( 'post/upload' ) )?>
<?php echo $form ['_csrf_token']?>
<?php echo $form ['name']->renderLabel ()?>
<?php echo $form ['name']->render ()?>
<?php echo $form ['brand_id']->renderLabel ()?>
<?php echo $form ['brand_id']->render ()?>
<?php echo $form['categories']->renderLabel()?>
<?php include_partial('productCategoryPartial')?>
<?php echo $form ['size']->renderLabel ()?>
<?php echo $form ['size']->render ()?>
<?php echo $form ['description']->renderLabel ()?>
<?php echo $form ['description']->render ()?>
<?php echo $form ['photo']->render ()?>
<input type="submit" />
</form>
