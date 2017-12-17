<?       
<div class="col-md-4">
    <div class="panel panel-default mb20 list-widget">
        <ul class="list-unstyled clearfix">
            <li>
                <i class="fa fa-bookmark-o"></i>
                <span class="text">操作系统：<?php echo $os[0];?> &nbsp;</span>
                <!-- <span class="badge badge-xs circle badge-warning right">2</span> -->
            </li>
            <li>
                <i class="fa fa-file-o"></i>
                <span class="text">内核版本：<?php if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];} ?></span>
                <span class="badge badge-xs badge-primary right"></span>
            </li>
            <li>
                <i class="fa fa-file-o"></i>
                <span class="text">域名/IP地址：<?php echo $_SERVER['SERVER_NAME'];?></span>
                <span class="badge badge-xs badge-primary right"></span>
            </li>
            <li>
                <i class="fa fa-comments-o"></i>
                <span class="text">目录：<?php echo $_SERVER['DOCUMENT_ROOT'];?></span>
                <!-- <span class="badge badge-xs badge-info right">40+</span> -->
            </li>
            <li>
                <i class="fa fa-bullhorn"></i>
                <span class="text">客户端IP：<?=$_SERVER['REMOTE_ADDR']?></span>
                <!-- <span class="badge badge-xs badge-success right">22</span> -->
            </li>
            <li>
                <i class="fa fa-hdd-o"></i>
                <span class="text">PHP运行方式：<?php echo strtoupper(php_sapi_name());?></span>
                <!-- <span class="badge badge-xs badge-danger right">80%</span> -->
            </li>
            <li>
                <i class="fa fa-microphone"></i>
                <span class="text">上传最大限制：</span>
                <!-- <span class="badge badge-xs badge-info circle right">5</span> -->
            </li>

            <li>
                <i class="fa fa-bug"></i>
                <span class="text">PHP版本：<?php echo PHP_VERSION;?></span>
                <!-- <span class="badge badge-xs circle badge-danger right">8</span> -->
            </li>
        </ul>
    </div>
</div>