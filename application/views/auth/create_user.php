<div class="register-box">
	<div class="register-logo"><a href="#"><b>AR</b>Panels</a></div>
	
	<div class="register-box-body">
		<p class="register-box-msg"><?= lang('create_user_subheading') ?></p>
		<?= form_open("auth/create_user") ?>
			<div class="form-group has-feedback">
				<?= form_input($first_name) ?>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
				<?= form_error('first_name', '<small class="text-danger">', '</small>') ?>
			</div>
			<div class="form-group has-feedback">
				<?= form_input($last_name) ?>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
				<?= form_error('last_name', '<small class="text-danger">', '</small>') ?>
			</div>
			<?php if($identity_column!=='email'):  ?>
			<div class="form-group has-feedback">
				<?= form_error('identity') ?>
				<?= form_input($identity) ?>
			</div>
			<?php endif; ?>
			<div class="form-group has-feedback">
				<?= form_input($company) ?>
			</div>
			<div class="form-group has-feedback">
				<?= form_input($email) ?>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				<?= form_error('email', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group has-feedback">
				<?= form_input($phone) ?>
				<span class="glyphicon glyphicon-phone form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<?= form_input($password) ?>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				<?= form_error('password', '<small class="text-danger">', '</small>') ?>
			</div>
			<div class="form-group has-feedback">
				<?= form_input($password_confirm) ?>
				<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				<?= form_error('password_confirm', '<small class="text-danger">', '</small>') ?>
			</div>
			<div class="form-group has-feedback">
				<?= form_submit('submit', lang('create_user_submit_btn'),'class="btn btn-primary btn-block btn-flat"') ?>
				
			</div>
		<?= form_close() ?>
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
