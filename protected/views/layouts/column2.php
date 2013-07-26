<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>


<div class="row-fluid">
	<div class="span8">
		<?php echo $content; ?>

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
        <hr />
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



<?php $this->endContent(); ?>