<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blocked user
        <small>Page descriptions</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('auth')?>"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li><a href="<?=base_url('auth/users_list')?>">Users</a></li><li class="active">Deactivate</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box box-solid box-danger">
			<div class="box-header">
				<h3 class="box-title"><?php echo lang('deactivate_heading');?></h3>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div class="box-body">
					<p class="text-info"><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
					<?php echo form_open("auth/deactivate/".$user->id);?>
						<div class="form-group">
							<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
							<input type="radio" name="confirm" value="yes" checked="checked"/>
							<?php echo lang('deactivate_confirm_n_label', 'confirm');?>
							<input type="radio" name="confirm" value="no" />
						</div>
						<?php echo form_hidden($csrf); ?>
						<?php echo form_hidden(array('id'=>$user->id)); ?>
						<p><?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-danger btn-flat"');?></p>
					<?php echo form_close();?>
			</div>
		</div>
    </section>
    <!-- /.content -->
</div>
