<body>
	<form encType="multipart/form-data" method="post"
		action="<?php echo url_for ( 'product/upload' )?>">
		<fieldset>
			<legend>上传图片</legend>
			<div class="clearfix">
				<label for="">名称：</label>
				<div class="input">
					<input type="text" size="30" name="productName" id="productName"
						class="xlarge">
				</div>
			</div>
			<!-- /clearfix -->
			<div class="clearfix">
				<label for="">描述：</label>
				<div class="input">
					<textarea cols="40" rows="10" name="productDescription"
						id="productDescription" class="xlarge"></textarea>
				</div>
			</div>
			<!-- /clearfix -->
			<div class="clearfix">
				<label for="">类别：</label>
				<div class="input">
					<select name="productCategory" id="productCategory">
				<?php foreach($categories as $category):?>
					<option value="<?php echo $category->getId();?>"><?php echo $category->getDescription()?></option>
					<?php endforeach;?>
				</select>
				</div>
			</div>
			<!-- /clearfix -->
			<div class="clearfix">
				<label for="">价格：</label>
				<div class="input">
					<input type="text" size="30" name="productPrice" id="productPrice"
						class="xlarge">
				</div>
			</div>
			<!-- /clearfix -->
			<div class="clearfix">
				<label for="xlInput">图片</label>
				<div class="input">
					<input type="file" name="productImage" id="productImage"
						class="input-file" value="选择图片">
				</div>
			</div>
			<!-- /clearfix -->
			<div class="actions">
				<button class="btn primary" type="submit">上传</button>
				&nbsp;
				<button class="btn" type="reset">取消</button>
			</div>
		</fieldset>
	</form>
</body>