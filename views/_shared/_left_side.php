<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php if(isset($_SESSION["dmfs"]["photo"])){ echo $_SESSION["dmfs"]["photo"]; }else{ echo "dist/img/avatar5.png";} ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["dmfs"]["firstname"]; ?></p>
          <small><?php echo $_SESSION["dmfs"]["job"]; ?></small>
          <!-- Status -->
          <a href="#" class="hidden"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="post" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header hidden">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="<?php if(isset($_REQUEST["controller"])){ if($_REQUEST["controller"] == "home"){ echo " active "; } } ?>">
          <a href="?controller=home">
            <i class="fa fa-list"></i> <span>Reservations</span>

            <span class="pull-right-container">
              <span class="label label-<?php echo $reservation_status; ?> pull-right"><?php echo $reservation_incompletes["total"]." / ".$reservation_total["total"]; ?></span>
            </span>
          </a>
        </li>
        <li class="<?php if(isset($_REQUEST["controller"])){ if($_REQUEST["controller"] == "events"){ echo " active "; } } ?>">
          <a href="?controller=events">
            <i class="fa fa-calendar"></i> <span>Events</span>

            <span class="pull-right-container">
              <span class="label label-<?php echo $events_status; ?> pull-right"><?php echo $events_incompletes["total"]." / ".$events_total["total"]; ?></span>
            </span>
          </a>
        </li>
        <li class="treeview <?php if(isset($_REQUEST["controller"])){ if(strpos($_REQUEST["controller"],"settings") !== false){ echo " active menu-open "; } } ?>">
          <a href="#"><i class="fa fa-gears"></i> <span>Configurations</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($_REQUEST["controller"])){ if($_REQUEST["controller"] == "settings/users"){ echo " active "; } } ?>"><a href="?controller=settings/users">Users</a></li>
            <li class="<?php if(isset($_REQUEST["controller"])){ if($_REQUEST["controller"] == "settings/notifications"){ echo " active "; } } ?>"><a href="?controller=settings/notifications">Notifications</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>