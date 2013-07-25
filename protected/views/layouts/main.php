<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7">   <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8">          <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9">                 <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js">                        <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
        <?php echo CHtml::encode($this->pageTitle); ?>
        </title>
        <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/Font-awesome/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/calendar.css">

        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme.css">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE 7]>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/Font-awesome/css/font-awesome-ie7.min.css"/>
        <![endif]-->

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!-- BEGIN WRAP -->
        <div id="wrap">


            <!-- BEGIN TOP BAR -->
            <div id="top">
                <!-- .navbar -->
                <div class="navbar navbar-inverse navbar-static-top">
                    <div class="navbar-inner">
                        <div class="container-fluid">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <a class="brand" href="index.html">基线监测管理系统</a>
                            <!-- .topnav -->
                            <div class="btn-toolbar topnav">
                                <div class="btn-group">
                                    <a id="changeSidebarPos" class="btn btn-success" rel="tooltip"
                                       data-original-title="显示/隐藏主菜单" data-placement="bottom">
                                        <i class="icon-resize-horizontal"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-inverse" rel="tooltip" data-original-title="通用警报配置" data-placement="bottom">
                                        <i class="icon-envelope"></i>
                                        <span class="label label-warning">5</span>
                                    </a>
                                   
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-inverse" rel="tooltip" href="#" data-original-title="新建监控客户端"
                                       data-placement="bottom">
                                        <i class="icon-file"></i>
                                    </a>
                                    <a href="#helpModal" class="btn btn-inverse" rel="tooltip" data-placement="bottom"
                                       data-original-title="帮助" data-toggle="modal">
                                        <i class="icon-question-sign"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-inverse" data-placement="bottom" data-original-title="登出" rel="tooltip"
                                       href="login.html"><i class="icon-off"></i></a></div>
                            </div>
                            <!-- /.topnav -->
                            <div class="nav-collapse collapse">
                                <!-- .nav -->
                                <ul class="nav">
                                    <li class="active"><a href="index.html">主面板</a></li>
                                    <li><a href="table.html">监视器</a></li>
                                    <li><a href="file.html"></a></li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            系统报表<b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="form-general.html">日报表</a></li>
                                            <li><a href="form-validation.html">周报表</a></li>
                                            <li><a href="form-wysiwyg.html">月报表</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.navbar -->
            </div>
            <!-- END TOP BAR -->


            <!-- BEGIN HEADER.head -->
            <header class="head">
                 <div class="search-bar">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="search-bar-inner">
                                <a id="menu-toggle" href="#menu" data-toggle="collapse"
                                   class="accordion-toggle btn btn-inverse visible-phone"
                                   rel="tooltip" data-placement="bottom" data-original-title="Show/Hide Menu">
                                    <i class="icon-sort"></i>
                                </a>

                                <form class="main-search">
                                    <input class="input-block-level" type="text" placeholder="快速搜索监控机...">
                                    <button id="searchBtn" type="submit" class="btn btn-inverse"><i class="icon-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ."main-bar -->
                <div class="main-bar">
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="span12">
                                <h3><i class="icon-home"></i> Dashboard</h3>
                            </div>
                        </div>
                        <!-- /.row-fluid -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.main-bar -->
            </header>
            <!-- END HEADER.head -->

            <!-- BEGIN LEFT  -->
            <div id="left">
                <!-- .user-media -->
                <div class="media user-media hidden-phone">
                    <a href="" class="user-link">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/user.gif" alt="" class="media-object img-polaroid user-img">
                    </a>

                    <div class="media-body hidden-tablet">
                        <h5 class="media-heading">atpking</h5>
                        <ul class="unstyled user-info">
                            <li><a href="">管理员</a></li>
                            <li>最后登录时间<br/>
                                <small><i class="icon-calendar"></i> 16 Mar 16:32</small>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.user-media -->

                <!-- BEGIN MAIN NAVIGATION -->
                <ul id="menu" class="unstyled accordion collapse in">

                            <li class="<?php echo $this->currentCategory=="Dashboard"?"active":""; ?>"><a href="index.php"><i class="icon-dashboard icon-large"></i>主面板</a></li>

                   

                    <li class="accordion-group <?php echo $this->currentCategory=="Component"?"active":""; ?>">
                        <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                            <i class="icon-tasks icon-large"></i> 监控端管理 <span class="label label-inverse pull-right">2</span>
                        </a>
                        <ul class="collapse " id="component-nav">
                            <li><a href="icon.html"><i class="icon-angle-right"></i>新建监控端</a></li>
                            <li><a href="progress.html"><i class="icon-angle-right"></i>管理监控端</a></li>
                        </ul>
                    </li>
                    

					<li class="accordion-group <?php echo $this->currentCategory=="Diff"?"active":""; ?>">
						<a data-parent="#menu" data-target="#diff-nav" class="accordion-toggle" data-toggle="collapse">
                            <i class="icon-camera-retro icon-large"></i> 快照比较查看<span class="label label-inverse pull-right">3</span>
						</a>
						<ul class="collapse" id="diff-nav">
						        <li><a href=""><i class="icon-angle-right">当日比较</i></a></li>
						        <li><a href=""><i class="icon-angle-right">自由比较</i></a></li>
						        <li><a href=""><i class="icon-angle-right">初始基线比较</i></a></li>
						</ul>
					</li>
                    <li class="accordion-group <?php echo $this->currentCategory=="Error"?"active":""; ?> ">
                        <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                            <i class="icon-flag-checkered icon-large"></i> 警报系统 <span
                                class="label label-inverse pull-right">7</span>
                        </a>
                        <ul class="collapse" id="error-nav">
                            <li><a href="403.html"><i class="icon-angle-right"></i> 403</a></li>
                            <li><a href="404.html"><i class="icon-angle-right"></i> 404</a></li>
                            <li><a href="405.html"><i class="icon-angle-right"></i> 405</a></li>
                            <li><a href="500.html"><i class="icon-angle-right"></i> 500</a></li>
                            <li><a href="503.html"><i class="icon-angle-right"></i> 503</a></li>
                            <li><a href="offline.html"><i class="icon-angle-right"></i> offline</a></li>
                            <li><a href="countdown.html"><i class="icon-angle-right"></i> Under Construction</a></li>
                        </ul>
                    </li>
					<li class="accordion-group <?php echo $this->currentCategory=="Report"?"active":""; ?>">
                        <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#report-nav">
                            <i class="icon-calendar-empty icon-large"></i> 报表系统 <span
                                class="label label-inverse pull-right">3</span>
                        </a>
                        <ul class="collapse" id="report-nav">
                            <li><a href="403.html"><i class="icon-angle-right"></i>日报表</a></li>
                            <li><a href="405.html"><i class="icon-angle-right"></i>周报表</a></li>
                            <li><a href="404.html"><i class="icon-angle-right"></i>月报彪</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $this->currentCategory=="Monitor"?"active":""; ?>"><a href="grid.html"><i class="icon-eye-open icon-large"></i> 监视器</a></li>
                    <li class="<?php echo $this->currentCategory=="Setting"?"active":""; ?>"><a href="grid.html"><i class="icon-wrench icon-large"></i> 系统设置</a></li>
                    <li><a href="login.html"><i class="icon-signin icon-large"></i> 登出系统</a></li>
                </ul>
                <!-- END MAIN NAVIGATION -->

            </div>
            <!-- END LEFT -->

            <!-- BEGIN MAIN CONTENT -->
            <div id="content">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">
							 <?php echo $content; ?>
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.row-fluid -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- END CONTENT -->


            <!-- #push do not remove -->
            <div id="push"></div>
            <!-- /#push -->
        </div>
        <!-- END WRAP -->

        <div class="clearfix"></div>

        <!-- BEGIN FOOTER -->
        <div id="footer">
            <p>2013 © Sixuan Tech.</p>
        </div>
        <!-- END FOOTER -->

        <!-- #helpModal -->
        <div id="helpModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel"
             aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="helpModalLabel"><i class="icon-external-link"></i> Help</h3>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.
                </p>
            </div>
            <div class="modal-footer">

                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <!-- /#helpModal -->

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/jquery-1.10.1.min.js"></script>



		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/jquery-ui-1.10.0.custom.min.js"></script>


        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lib/jquery.tablesorter.min.js"></script>

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lib/jquery.mousewheel.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lib/jquery.sparkline.min.js"></script>


        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
        

        <script type="text/javascript">
            $(function() {
               // dashboard();
            });
        </script>


    </body>
</html>
