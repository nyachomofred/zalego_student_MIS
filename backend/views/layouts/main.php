<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<?php $this->beginBody() ?>

<div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="/zalego/backend/web/site/index" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Zalego</b>Mis</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Zalego</b>SRS</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                        <li><!-- start message -->
                            <a href="#">
                            <div class="pull-left">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                                Support Team
                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <!-- end message -->
                        <li>
                            <a href="#">
                            <div class="pull-left">
                                <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                                AdminLTE Design Team
                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <div class="pull-left">
                                <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                                Developers
                                <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <div class="pull-left">
                                <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                                Sales Department
                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <div class="pull-left">
                                <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                                Reviewers
                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                  <div class="pull-right">
                   
                       <?php
                           echo
                           Html::beginForm(['/site/logout'], 'post'),
                           Html::submitButton(
                          'Logout (' . Yii::$app->user->identity->username . ')',
                           ['class' => 'btn btn-success Sign out']
                           ),
                           Html::endForm() ?>
                    
                  </div>
                </li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
                </ul>
            </div>
            </nav>
        </header>
    <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <img src="<?php echo url::to('@web/images/zalego.jpeg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= \Yii::$app->user->identity->username?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
       
        <li>
          <a href="/zalego/backend/web/index.php?r=personalinfo">
            <i class="fa fa-user"></i> <span>Student </span>
          </a>
        </li>

        <li>
        <a href="/zalego/backend/web/index.php?r=project">
          <i class="fa fa-laptop"></i><span>Students' Project </span>
          </a>
        </li>

        <li>
        <a href="/zalego/backend/web/index.php?r=certificate">
          <i class="fa fa-files-o"></i> <span>Students' Certificate </span>
          </a>
        </li>

    
        <li>
        <a href="/zalego/backend/web/index.php?r=balance">
            <i class="fa fa-money"></i> <span>Students' Finance </span>
          </a>
        </li>

        <li>
        <a href="/zalego/backend/web/index.php?r=staff">
            <i class="fa fa-user"></i> <span>Staff </span>
          </a>
        </li>

        <li>
        <a href="/zalego/backend/web/index.php?r=course">
            <i class="fa fa-calendar"></i> <span>Courses</span>
          </a>
        </li>
        <li>
        <a href="/zalego/backend/web/index.php?r=campus">
          <i class="fa fa-folder"></i> <span>Campuses</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content --> 

       <div class="content-wrapper">
    <!-- Content Header (Page header) -->
           
    <!-- Main content -->
    <section class="content" style="background-color:white">
      <!-- Small boxes (Stat box) -->
        <?= $content ?>
    </section>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
