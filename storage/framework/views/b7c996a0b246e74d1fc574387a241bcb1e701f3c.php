<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会议助手--新建会议</title>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">

    <link rel="stylesheet" href="<?php echo e(url('style/weui.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(url('example/example.css')); ?>"/>
</head>
<body>
 <div class="bd">
 <!--    <div class="weui_cells_title"></div>
    <div class="weui_cells">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <p>标题文字</p>
            </div>
            <div class="weui_cell_ft">说明文字</div>
        </div>
    </div>
    <div class="weui_cells_title">带图标、说明的列表项</div>
    <div class="weui_cells">
        <div class="weui_cell">
            <div class="weui_cell_hd"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAMAAABgZ9sFAAAAVFBMVEXx8fHMzMzr6+vn5+fv7+/t7e3d3d2+vr7W1tbHx8eysrKdnZ3p6enk5OTR0dG7u7u3t7ejo6PY2Njh4eHf39/T09PExMSvr6+goKCqqqqnp6e4uLgcLY/OAAAAnklEQVRIx+3RSRLDIAxE0QYhAbGZPNu5/z0zrXHiqiz5W72FqhqtVuuXAl3iOV7iPV/iSsAqZa9BS7YOmMXnNNX4TWGxRMn3R6SxRNgy0bzXOW8EBO8SAClsPdB3psqlvG+Lw7ONXg/pTld52BjgSSkA3PV2OOemjIDcZQWgVvONw60q7sIpR38EnHPSMDQ4MjDjLPozhAkGrVbr/z0ANjAF4AcbXmYAAAAASUVORK5CYII=" alt="" style="width:20px;margin-right:5px;display:block"></div>
            <div class="weui_cell_bd weui_cell_primary">
                <p>标题文字</p>
            </div>
            <div class="weui_cell_ft">说明文字</div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAMAAABgZ9sFAAAAVFBMVEXx8fHMzMzr6+vn5+fv7+/t7e3d3d2+vr7W1tbHx8eysrKdnZ3p6enk5OTR0dG7u7u3t7ejo6PY2Njh4eHf39/T09PExMSvr6+goKCqqqqnp6e4uLgcLY/OAAAAnklEQVRIx+3RSRLDIAxE0QYhAbGZPNu5/z0zrXHiqiz5W72FqhqtVuuXAl3iOV7iPV/iSsAqZa9BS7YOmMXnNNX4TWGxRMn3R6SxRNgy0bzXOW8EBO8SAClsPdB3psqlvG+Lw7ONXg/pTld52BjgSSkA3PV2OOemjIDcZQWgVvONw60q7sIpR38EnHPSMDQ4MjDjLPozhAkGrVbr/z0ANjAF4AcbXmYAAAAASUVORK5CYII=" alt="" style="width:20px;margin-right:5px;display:block"></div>
            <div class="weui_cell_bd weui_cell_primary">
                <p>标题文字</p>
            </div>
            <div class="weui_cell_ft">说明文字</div>
        </div>
    </div>

    <div class="weui_cells_title">带跳转的列表项</div>
    <div class="weui_cells weui_cells_access">
        <a class="weui_cell" href="javascript:;">
            <div class="weui_cell_bd weui_cell_primary">
                <p>cell standard</p>
            </div>
            <div class="weui_cell_ft">
            </div>
        </a>
        <a class="weui_cell" href="javascript:;">
            <div class="weui_cell_bd weui_cell_primary">
                <p>cell standard</p>
            </div>
            <div class="weui_cell_ft">
            </div>
        </a>
    </div>

    <div class="weui_cells_title">带说明、跳转的列表项</div>
    <div class="weui_cells weui_cells_access">
        <a class="weui_cell" href="javascript:;">
            <div class="weui_cell_bd weui_cell_primary">
                <p>cell standard</p>
            </div>
            <div class="weui_cell_ft">说明文字</div>
        </a>
        <a class="weui_cell" href="javascript:;">
            <div class="weui_cell_bd weui_cell_primary">
                <p>cell standard</p>
            </div>
            <div class="weui_cell_ft">说明文字</div>
        </a>

    </div>

    <div class="weui_cells_title">带图标、说明、跳转的列表项</div>
    <div class="weui_cells weui_cells_access">

        <a class="weui_cell" href="javascript:;">
            <div class="weui_cell_hd"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAMAAABgZ9sFAAAAVFBMVEXx8fHMzMzr6+vn5+fv7+/t7e3d3d2+vr7W1tbHx8eysrKdnZ3p6enk5OTR0dG7u7u3t7ejo6PY2Njh4eHf39/T09PExMSvr6+goKCqqqqnp6e4uLgcLY/OAAAAnklEQVRIx+3RSRLDIAxE0QYhAbGZPNu5/z0zrXHiqiz5W72FqhqtVuuXAl3iOV7iPV/iSsAqZa9BS7YOmMXnNNX4TWGxRMn3R6SxRNgy0bzXOW8EBO8SAClsPdB3psqlvG+Lw7ONXg/pTld52BjgSSkA3PV2OOemjIDcZQWgVvONw60q7sIpR38EnHPSMDQ4MjDjLPozhAkGrVbr/z0ANjAF4AcbXmYAAAAASUVORK5CYII=" alt="" style="width:20px;margin-right:5px;display:block"></div>
            <div class="weui_cell_bd weui_cell_primary">
                <p>cell standard</p>
            </div>
            <div class="weui_cell_ft">说明文字</div>
        </a>
        <a class="weui_cell" href="javascript:;">
            <div class="weui_cell_hd"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAMAAABgZ9sFAAAAVFBMVEXx8fHMzMzr6+vn5+fv7+/t7e3d3d2+vr7W1tbHx8eysrKdnZ3p6enk5OTR0dG7u7u3t7ejo6PY2Njh4eHf39/T09PExMSvr6+goKCqqqqnp6e4uLgcLY/OAAAAnklEQVRIx+3RSRLDIAxE0QYhAbGZPNu5/z0zrXHiqiz5W72FqhqtVuuXAl3iOV7iPV/iSsAqZa9BS7YOmMXnNNX4TWGxRMn3R6SxRNgy0bzXOW8EBO8SAClsPdB3psqlvG+Lw7ONXg/pTld52BjgSSkA3PV2OOemjIDcZQWgVvONw60q7sIpR38EnHPSMDQ4MjDjLPozhAkGrVbr/z0ANjAF4AcbXmYAAAAASUVORK5CYII=" alt="" style="width:20px;margin-right:5px;display:block"></div>
            <div class="weui_cell_bd weui_cell_primary">
                <p>cell standard</p>
            </div>
            <div class="weui_cell_ft">说明文字</div>
        </a>
    </div>

    <div class="weui_cells_title">单选列表项</div>
    <div class="weui_cells weui_cells_radio">
        <label class="weui_cell weui_check_label" for="x11">
            <div class="weui_cell_bd weui_cell_primary">
                <p>cell standard</p>
            </div>
            <div class="weui_cell_ft">
                <input type="radio" class="weui_check" name="radio1" id="x11">
                <span class="weui_icon_checked"></span>
            </div>
        </label>
        <label class="weui_cell weui_check_label" for="x12">

            <div class="weui_cell_bd weui_cell_primary">
                <p>cell standard</p>
            </div>
            <div class="weui_cell_ft">
                <input type="radio" name="radio1" class="weui_check" id="x12" checked="checked">
                <span class="weui_icon_checked"></span>
            </div>
        </label>
    </div>
    <div class="weui_cells_title">复选列表项</div>
    <div class="weui_cells weui_cells_checkbox">
        <label class="weui_cell weui_check_label" for="s11">
            <div class="weui_cell_hd">
                <input type="checkbox" class="weui_check" name="checkbox1" id="s11" checked="checked">
                <i class="weui_icon_checked"></i>
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <p>standard is dealt for u.</p>
            </div>
        </label>
        <label class="weui_cell weui_check_label" for="s12">
            <div class="weui_cell_hd">
                <input type="checkbox" name="checkbox1" class="weui_check" id="s12">
                <i class="weui_icon_checked"></i>
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <p>standard is dealicient for u.</p>
            </div>
        </label>
    </div>

    <div class="weui_cells_title">开关</div>
    <div class="weui_cells weui_cells_form">
        <div class="weui_cell weui_cell_switch">
            <div class="weui_cell_hd weui_cell_primary">标题文字</div>
            <div class="weui_cell_ft">
                <input class="weui_switch" type="checkbox"/>
            </div>
        </div>
    </div>
 -->

    <center>新建会议</center>
    <div class="weui_cells weui_cells_form">
        <div class="weui_cell">
           
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="text" name='m_title' pattern="" placeholder="请输入会议标题"/>
            </div>
        </div>
            <div class="weui_cell">
           
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="text" pattern="" name='m_content' placeholder="请输入会议内容"/>
            </div>
        </div>
        

     <div class="weui_cell_bd weui_cell_primary">
                    <div class="weui_uploader_bd">
                 <div class="weui_uploader_hd weui_cell">
                        <div class="weui_cell_bd weui_cell_primary">附件上传</div>
                        <div class="weui_cell_ft">0/2</div>
                    </div>
                        <div class="weui_uploader_input_wrp">
                            <input class="weui_uploader_input" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple />
                        </div>
                    </div>
            </div>
             
        </div>
       <div class="weui_cell">
            <div class="weui_cell_hd"><label for="" class="weui_label">开始时间</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="datetime-local" value="" placeholder=""/>
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><label for="" class="weui_label">结束时间</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="datetime-local" value="" placeholder=""/>
            </div>
        </div> 
<div class="weui_cell weui_cell_select weui_select_after">
            <div class="weui_cell_hd">
                <label for="" class="weui_label">会议地点</label>
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <select class="weui_select" name="m_add">
                    <option value="1">第一会议室</option>
                    <option value="2">第二会议室</option>
                    <option value="3">第三会议室</option>
                </select>
            </div>
        </div>
        <div class="weui_cell weui_cell_select weui_select_after">
            <div class="weui_cell_hd">
                <label for="" class="weui_label">提醒时间（5）</label>
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <select class="weui_select" name="m_notify_time">
                    <option value="1">5</option>
                    <option value="2">10</option>
                    <option value="3">20</option>
                </select>
            </div>
        </div>
      <div class="button_sp_area">
     <button class="weui_btn weui_btn_mini weui_btn_primary">保草稿存</button>
        <!-- <a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_default"></a> -->
        <button class="weui_btn weui_btn_mini weui_btn_primary">立即提交</button>
    </div>
</div>

</body>
</html>