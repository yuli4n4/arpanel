<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">User Data</h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<?= form_open(uri_string(), 'class="form-horizontal"')?>
						<div class="form-group">
							<label for="first_name" class="col-sm-2 control-label">
								<?= lang('edit_user_fname_label', 'first_name') ?>
							</label>
							<div class="col-sm-10">
								<?= form_input($first_name) ?>
							</div>
						</div>
						<div class="form-group">
							<label for="last_name" class="col-sm-2 control-label">
								<?= lang('edit_user_lname_label', 'last_name') ?>
							</label>
							<div class="col-sm-10">
								<?= form_input($last_name) ?>
							</div>
						</div>
						<div class="form-group">
						<label for="company" class="col-sm-2 control-label">
							<?= lang('edit_user_company_label', 'company')?>
						</label>
						<div class="col-sm-10">
							<?= form_input($company) ?>
						</div>
					</div>
						<div class="form-group">	
						<label for="phone" class="col-sm-2 control-label">
							<?= lang('edit_user_phone_label', 'phone') ?>
						</label>
						<div class="col-sm-10">
							<?= form_input($phone) ?>
						</div>
					</div>
						<?php if ($this->ion_auth->is_admin()): ?>
						<div class="form-group">
						<label for="saldo" class="col-sm-2 control-label">
							Saldo:
						</label>
						<div class="col-sm-10">
							<?= form_input($saldo) ?>
						</div>
						</div>
						<?php endif; ?>
						<div class="form-group">
						<label for="password" class="col-sm-2 control-label">
							Password:
						</label>
						<div class="col-sm-10">
							<?= form_input($password) ?>
							<small class="text-muted">
								<?= lang('edit_user_password_label', 'password') ?>
							</small>
						</div>
					</div>
						<div class="form-group">
						<label for="password" class="col-sm-2 control-label">
							Confirm password:
						</label>
						<div class="col-sm-10">
							<?= form_input($password_confirm) ?>
							<small class="text-muted">
								<?= lang('edit_user_password_confirm_label', 'password_confirm') ?>
							</small>
						</div>
					</div>
					<?php if ($this->ion_auth->is_admin()): ?>
					<div class="form-group">
						<label class ="col-sm-2 control-label"><?= lang('edit_user_groups_heading') ?></label>
						<?php foreach ($groups as $group):?>
						<label class="col-sm-2 control-label checkbox">
								<?php
									$gID=$group['id']; $checked = null; $item = null;
									foreach($currentGroups as $grp) {
										if ($gID == $grp->id) { $checked= ' checked="checked"'; break;}
									}
								?>
							<input type="radio"  name="groups[]" value="<?= $group['id'] ?>"<?= $checked ?>>
							<?= htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8') ?>
						</label>
							<?php endforeach; ?>
					</div>
					<?php endif; ?>
					<?= form_hidden('id', $user->id) ?>
					<?= form_hidden($csrf) ?>
					<div class="form-group">
						<label class ="col-sm-2 control-label pull-right">
						<?= form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-success btn-flat form-control"')?>
						</label>
					</div>
					<?= form_close() ?>
				</div><!-- /.box-body -->
		</div><!-- /.box -->
    </section>
</div>
