<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        HOME Page
        <small>Page descriptions</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">upload img</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<? $status; ?>
		<?= form_open_multipart('upload/img_upload/') ?>
		<div class="form-group has-feedback">
			<input type="file" name="img" size="20" class="form-contol">
		</div>
		<input type="submit" value="upload">
		</form>
    </section>
    <!-- /.content -->
</div>
