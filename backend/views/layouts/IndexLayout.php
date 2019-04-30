<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

DashboardAsset::register($this);
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
       
        <a href="/zalego/backend/web/index.php?r=site" class="logo"> 
        <span class="logo-lg"><b>Zalego </b>SMIS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo url::to('@web/images/zalego.jpeg');?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= \Yii::$app->user->identity->username?></span>
                </a>
                <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="<?php echo url::to('@web/images/zalego.jpeg');?>" class="img-circle" alt="User Image">

                    <p>
                    <?= \Yii::$app->user->identity->username?>-system admin
                    <small>Member  since  2018</small>
                    </p>
                </li>
               
                <li class="user-footer">
                    <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">profile</a>
                    </div>

                    <div class="pull-left">
                    <?=
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-default btn-flat']
                    )
                    . Html::endForm()
                    . '</li>';
                    
                    ?>
                    </div>
                </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
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
            <i class="fa fa-user"></i> <span>student </span>
          </a>
        </li>

        <li>
        <a href="/zalego/backend/web/index.php?r=project">
          <i class="fa fa-laptop"></i><span>student project </span>
          </a>
        </li>

        <li>
        <a href="/zalego/backend/web/index.php?r=certificate">
          <i class="fa fa-files-o"></i> <span>student certificate </span>
          </a>
        </li>

    
        <li>
        <a href="/zalego/backend/web/index.php?r=balance">
            <i class="fa fa-money"></i> <span>student finance </span>
          </a>
        </li>

        <li>
        <a href="/zalego/backend/web/index.php?r=staff">
            <i class="fa fa-user"></i> <span>Staff </span>
          </a>
        </li>

        <li>
        <a href="/zalego/backend/web/index.php?r=course">
            <i class="fa fa-calendar"></i> <span>courses</span>
          </a>
        </li>
        <li>
        <a href="/zalego/backend/web/index.php?r=campus">
          <i class="fa fa-folder"></i> <span>campuses</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content --> 

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
