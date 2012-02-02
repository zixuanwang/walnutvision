<body>
<form encType="multipart/form-data" method="post" action="<?php echo url_for ( 'user/register' )?>" >
<fieldset>
<legend>注册</legend>
<div class="clearfix">
<label for="">用户名：</label>
<div class="input">
<input type="text" size="30" name="username" id="username" class="xlarge">
</div>
</div> <!-- /clearfix -->
<div class="clearfix">
<label for="">密码：</label>
<div class="input">
<input type="password" size="30" name="password" id="password" class="xlarge">
</div>
</div> <!-- /clearfix -->
<div class="clearfix">
<label for="">确认密码：</label>
<div class="input">
<input type="password" size="30" name="passwordConfirm" id="passwordConfirm" class="xlarge">
</div>
</div> <!-- /clearfix -->
<div class="clearfix">
<label>真实姓名：</label>
<div class="input">
<input type="text" size="10" name="realname" id="realname" class="xlarge">
</div>
</div> <!-- /clearfix -->
<div class="clearfix">
<label>性别：</label>
<div class="input">
<select name="sex" id="sex">
<option>女</option>
<option>男</option>
</select>
</div>
</div> <!-- /clearfix -->
<div class="clearfix">
<label>年龄：</label>
<div class="input">
<input type="text" size="3" name="age" id="age" class="xlarge">
</div>
</div> <!-- /clearfix -->
<div class="clearfix">
<label for="xlInput">头像照片</label>
<div class="input">
<input type="file" name="headurl" id="headurl" class="input-file">
</div>
</div> <!-- /clearfix -->
<div class="actions">
<button class="btn primary" type="submit">注册</button>&nbsp;<button class="btn"
type="reset">取消</button>
</div>
</fieldset>
</form>
</body>