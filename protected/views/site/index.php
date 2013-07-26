<?php 
    $this->
pageTitle="主控面板";
    $this->currentCategory= "Dashboard";
 ?>
<div class="tac">
    <a class="quick-btn" href="#"> <i class="icon-desktop icon-2x"></i>
        <span>监控总数</span>
        <span class="label label-inverse">21</span>
    </a>
    <a class="quick-btn" href="#"> <i class="icon-exclamation icon-2x"></i>
        <span>今日异动数</span>
        <span class="label label-important">2</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-user icon-2x"></i>
        <span>用户数</span>
        <span class="label btn-metis-3">3</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-envelope icon-2x"></i>
        <span>监控模板数</span>
        <span class="label label-success">3</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-laptop icon-2x"></i>
        <span>添加监控机</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-male icon-2x"></i>
        <span>添加用户</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-bolt icon-2x"></i>
        <span>报警配置</span>
        
    </a>

</div>
<hr>
<div class="row-fluid">
    <div class="span8">
        <div class="box">
            <header>
                <h5>最近添加监控主机列表</h5>
                <div class="toolbar">
                    <span class="label label-info">更多...</span>
                </div>
            </header>
            <div class="body" id="trigo" style="min-height: 250px;">
                <table class="table table-bordered table-condensed table-hovered sortableTable">
                    <thead>
                        <tr>
                            <th>编号</th>
                            <th>主机名</th>
                            <th>IP</th>
                            <th>添加时间</th>

                            <th>是否在线</th>
                            <th>查看</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>1</td>
                            <td>client_1</td>
                            <td>192.168.168.19</td>
                            <td>2013-07-25 09:00:00</td>
                            <td>
                                <span class="badge badge-success">在线</span>
                            </td>
                            <td>
                                <a href="www.google.com">查看</a>
                            </td>

                        </tr>

                        <tr>
                            <td>2</td>
                            <td>client_1</td>
                            <td>192.168.168.19</td>
                            <td>2013-07-25 09:00:00</td>
                            <td>
                                <span class="badge badge-success">在线</span>
                            </td>
                            <td>
                                <a href="www.google.com">查看</a>
                            </td>
                        </tr>

                        <tr class="error">
                            <td>3</td>
                            <td>client_1</td>
                            <td>192.168.168.19</td>
                            <td>20/13-07-25 09:00:00</td>
                            <td>
                                <span class="badge badge-success">在线</span>
                            </td>
                            <td>
                                <a href="www.google.com">查看</a>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>client_1</td>
                            <td>192.168.168.19</td>
                            <td>2013-07-25 09:00:00</td>
                            <td>
                                <span class="badge badge-success">在线</span>
                            </td>
                            <td>
                                <a href="www.google.com">查看</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>client_1</td>
                            <td>192.168.168.19</td>
                            <td>2013-07-25 09:00:00</td>
                            <td>
                                <span class="badge">下线</span>
                            </td>
                            <td>
                                <a href="www.google.com">查看</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="box">
             <header>
                <h5>最近用户登录列表</h5>
                <div class="toolbar">
                    <span class="label label-info">更多...</span>
                </div>
            </header>
            <div class="body"  style="min-height: 250px;">
                <table class="table table-bordered table-condensed table-hovered sortableTable">
                    <thead>
                        <tr>
                            <th>
                                用户名 
                             
                            </th>
                            <th>
                                
                                IP
                             
                            </th>
                            <th>
                                登录时间
                              
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>admin</td>
                            <td>192.168.1.19</td>
                            <td>2013-07-26 09:00:00</td>
                        </tr>
                        <tr>
                            <td>admin</td>
                            <td>192.168.1.19</td>
                            <td>2013-07-26 09:00:00</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row-fluid">
    <div class="span8">
        <div class="box">
            <header>
                <h5>最近警告列表</h5>
            </header>
            <div id="calendar_content" class="body">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
    <div class="span4">

        <div class="box">
            <header>
                <h5>快速监控区今日异动文件</h5>
            </header>
            <div class="body">
                <ul class="stats_box">
                    <li>
                        <div class="sparkline">
                            <div><i class="icon-hdd icon-3x"></i></div>
                        </div>
                        <div class="stat_text"> <strong>监控服务器1</strong>
                            <span>二小区</span>
                            <span class="percent">
                                8
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="sparkline">
                            <div><i class="icon-hdd icon-3x"></i></div>
                        </div>
                        <div class="stat_text"> <strong>监控服务器2</strong>
                            <span>二小区</span>
                            <span class="percent red">
                                21
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="sparkline">
                            <div><i class="icon-hdd icon-3x"></i></div>
                        </div>
                        <div class="stat_text"> <strong>监控服务器3</strong>
                            <span>二小区</span>
                            <span class="percent green">
                                0
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="sparkline">
                            <div><i class="icon-hdd icon-3x"></i></div>
                        </div>
                        <div class="stat_text"> <strong>监控服务器4</strong>
                            <span>二小区</span>
                            <span class="percent">
                                18
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>