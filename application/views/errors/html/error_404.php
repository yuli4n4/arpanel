<div class="login-box">
		
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>
		 <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

          <p>
            <?= $message ?>
            Meanwhile, you may <a href="<?= base_url('auth') ?>">return to home</a> or try using the search form.
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
      
          <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    <!-- /.content -->
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
