<?php
ob_start();
ini_set('display_errors', 1);
$pages = $_GET['page'];
if (empty($pages)) {
    header('location:index.php?page=web/index');
}
$script     = "";
$explode    = explode('/', $pages);
$controller = $explode[0];
$action     = $explode[1];
$id         = (isset($explode[2])) ? $explode[2] : '' ;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Predatech Kulgram Adalah Kegiatan Dari Alumni Untuk Memberikan Kuliah Secara Online di Telegram">
    <title>Predatech Kulgram - Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">Predatech Kulgram</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
          <a class="app-menu__item active" href="index.php?page=web/index">
            <i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="index.php?page=booking/index">
            <i class="app-menu__icon fa fa-bookmark"></i><span class="app-menu__label">Booking</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="index.php?page=items/index">
            <i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Items</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="index.php?page=manufacturers/index">
            <i class="app-menu__icon fa fa-archive"></i><span class="app-menu__label">Manufacturer</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="index.php?page=locations/index">
            <i class="app-menu__icon fa fa-dot-circle-o"></i><span class="app-menu__label">Location</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="index.php?page=reports/index">
            <i class="app-menu__icon fa fa-files-o"></i><span class="app-menu__label">Report</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="index.php?page=users/index">
            <i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Users</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="index.php?page=web/logout">
            <i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Logout</span>
          </a>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> <?= ucwords($controller) ?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item">
            <i class="fa fa-home fa-lg"></i>
          </li>
          <li class="breadcrumb-item">
            <a href="index.php?page=<?= $controller ?>/index"><?= ucwords($controller) ?></a>
          </li>
          <?php if ($action): ?>
          <li class="breadcrumb-item">
            <a href="index.php?page=<?= $controller ?>/<?= $action ?>/<?= $id ?>"><?= ucwords($action) ?></a>
          </li>
          <?php endif ?>
        </ul>
      </div>
      <?php
        require 'load.php';
        require 'controllers/'.ucwords($controller).'Controller.php';
        switch ($controller) {
            case 'web':
              $controller = new WebController();
              $controller->{$action}($id);
              break;
            case 'users':
                $controller = new UsersController();
                $controller->{$action}($id);
                break;
        }
      ?>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="assets/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="assets/js/plugins/chart.js"></script>
    <script type="text/javascript" src="assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/jquery.validation.js"></script>
    <script type="text/javascript">
      $('#table-user').DataTable();

      $('#form').validate({
        submit: {
          settings: {
            inputContainer: '.form-group',
            scrollToError: {
                offset: -100,
                duration: 500
            }
          }
        }
      });
    </script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
  </body>
</html>