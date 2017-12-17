<div class="col-md-4">
<div class="panel panel-default mb20 activities">
    <div class="panel-heading">访问记录</div>
    <div class="panel-body">
        <ul class="list-unstyled">
            <li class="primary">
                <span class="point"></span>
                <span class="time small text-muted">今日：</span>
                <p>IP：<?=count($now_visit);?>  &nbsp;&nbsp;  PV：<?=$now_pvcount;?></p>
            </li>            
            <li class="success">
                <span class="point"></span>
                <span class="time small text-muted">昨天</span>
                <p>IP：<?=count($prev_visit);?>  &nbsp;&nbsp;  PV：<?=$prev_pvcount;?></p>
            </li>
            <li class="warning">
                <span class="point"></span>
                <span class="time small text-muted">前天</span>
                <p>IP：<?=count($prev2_visit);?>  &nbsp;&nbsp;  PV：<?=$prev2_pvcount;?></p>
            </li>
            <li class="info">
                <span class="point"></span>
                <span class="time small text-muted">本月以来</span>
               <p>IP：<?=count($month);?>  &nbsp;&nbsp;  PV：<?=$month_pvcount;?></p>
            </li>
            <li class="primary">
                <span class="point"></span>
                <span class="time small text-muted">从运行以来</span>
                <p>IP：<?=count($all);?>  &nbsp;&nbsp;  PV：<?=$all_pvcount;?></p>
            </li>
        </ul>
    </div>
</div>
</div>