  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('images/'.$user->photo) ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $user->first_name.' '.$user->last_name ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu">
        <li class="header">Main menu</li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?= base_url('dashboard/change/language') ?>"><i class="fa fa-circle-o"></i> Language</a></li>
            <li><a href="<?= base_url('dashboard/change/profile') ?>"><i class="fa fa-circle-o"></i> Theme</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-server"></i> <span>Server</span></a></li>
         <li>
          <a href="<?= base_url('pages/mailbox/mailbox.html') ?>">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">5</small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-edit"></i> <span>Preference</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('auth/edit_user/'. $user->id) ?>">Change password</a></li>
            <li><a href="<?= base_url('auth/logout') ?>">Logout</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>
