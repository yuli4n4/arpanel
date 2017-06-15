<div class="login-box">
	<div class="login-logo"><?= lang('login_heading') ?></div>
	<div class="login-box-body">
		<?= $message ?>
		<?= form_open("auth/login") ?>
		<div class="form-group has-feedback">
			<?php if($label == 'email'): ?>
			<label for="email"> Email </label>
				<?= form_input($identity) ?>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				<?= form_error('identity', '<small class="text-danger">', '</small>') ?>
				<?php else: ?>
					<label for="username"> Username </label>
					<?= form_input($identity) ?>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
					<?= form_error('username', '<small class="text-danger">', '</small>') ?>
			<?php endif; ?>
		</div>
		<div class="form-group has-feedback">
			<?= lang('login_password_label', 'password') ?>
			<?= form_input($password)  ?>
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<?= form_error('password', '<small class="text-danger">', '</small>') ?>
		</div>
		<div class="form-group checkbox">
            <label>
               <?= form_checkbox('remember', '1', FALSE, 'id="remember"', 'class="form-control"') ?> Remember Me
            </label>
         </div>
		<div class="form-group">
			<?= form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary btn-block btn-flat"') ?>
		</div>
		<?= form_close() ?>
		<a href="<?= base_url('auth/forgot_password') ?>"><?= lang('login_forgot_password') ?></a><br/>
		<a href="<?= base_url('auth/create_user') ?>"><?= lang('create_new_account') ?></a>
	</div>
</div>
<div class="container">
	<div class="row">
	<footer>
		<center>
		<strong>Copyright &copy; 2016 <a href="#">AR Panel</a>.</strong> All rights reserved.
		</center>
	</footer>
	</div>
</div>
