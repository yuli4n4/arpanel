<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users List
        <small>Users descriptions</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users List Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
					
					
                <tr>
                  <th>User name</th>
                  <th>Email</th>
                  <th>Groups</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
					<?php foreach ($users as $user):?>
					<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8') .' '.htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                <?php endforeach?>
			</td>
			<td><?= ($user->active) ? '<a class="btn btn-success btn-xs btn-flat" href=" '.base_url('auth/deactivate/'.$user->id).'">'.lang('index_active_link').'</a>' : '<a class="btn btn-danger btn-xs btn-flat" href=" '.base_url('auth/activate/'.$user->id).'">'.lang('index_inactive_link').'</a>' ?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
				<?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>User name</th>
                  <th>Email</th>
                  <th>Groups</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
              <br/>
              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <?php
					$count = 0;
					echo '<li>'.anchor("auth/users_list", "&laquo;").'</li>';
					for ($i=$page; $i <= $total_pages; $i++){
						echo '<li>'.anchor("auth/users_list/".$i, $i).'</li>';
						$count ++;
						if ($count == 3) { break; }
					}
					echo '<li>'.anchor("auth/users_list/".$total_pages, "&raquo;").'</li>';
                  ?>
                </ul>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
</div>
