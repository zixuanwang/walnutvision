<body>
	<form method="post" action="<?php echo url_for ( 'user/login' )?>">
		<fieldset>
			<legend>登录</legend>
			<div class="clearfix">
				<label for="">用户名：</label>
				<div class="input">
					<input type="text" size="30" name="username" id="username"
						class="xlarge">
				</div>
			</div>
			<!-- /clearfix -->
			<div class="clearfix">
				<label for="">密码：</label>
				<div class="input">
					<input type="password" size="30" name="password" id="password"
						class="xlarge">
				</div>
			</div>

			<!-- /clearfix -->
			<div class="actions">
				<button class="btn primary" type="submit">登录</button>
				&nbsp;
				<button class="btn" type="reset">取消</button>
			</div>
		</fieldset>
	</form>
	<div class="row">
		<div class="span4">
			<a href="<?php
			echo url_for ( 'user/loginRenRen' );
			?>"><img src="/images/renren_button_blue.png" height="28px" /></a>
		</div>
		<div class="span4">
			<a href="<?php
			echo url_for ( 'user/loginQQ' );
			?>"><img src="/images/qq_button_blue.png" height="28px" /></a>
		</div>
	</div>
</body>