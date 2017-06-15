<div class="login-box">
	<div class="login-logo"><?= lang('forgot_password_heading') ?></div>
	<div class="login-box-body">
		<p class="text-muted"><?= sprintf(lang('forgot_password_subheading'), $identity_label) ?></p>
		<?= $message ?>
		<?= form_open("auth/forgot_password") ?>
		<div class="form-group has-feedback">
			<label for="identity"><?= (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)) ?></label>
			<?= form_input($identity) ?>
		</div>
		<div class="form-group has-feedback">
		  <?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-primary btn-block btn-flat"');?>
		</div>
		<?php echo form_close();?>
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
