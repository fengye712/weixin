<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>调查问卷</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">

    <link rel="stylesheet" href="{{ url('/style/weui.css') }}"/>
    <link rel="stylesheet" href="{{ url('/example/example.css') }}"/>
    <script src="{{ url('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ url('js/zepto.min.js') }}"></script>
    <script src="{{ url('js/router.min.js') }}"></script>
    <script src="{{ url('js/example.js') }}"></script>
</head>
<body>
	<div class="bd">
 
    <center>调查问卷</center>
<form action="{{ url('subIndex') }}" method="post" id='sub_add'>
    <div class="weui_cells weui_cells_form">
        <div class="weui_cell">
           
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="text" id="showDialog2" name='sub_title'  placeholder="请输入调查主题"/>
            </div>
        </div>
            <div class="weui_cell">
           
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="text" id='content'  name='sub_content' placeholder="请输入调查内容"/>
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
      <div class="weui_cell weui_cell_select weui_select_after">
            <div class="weui_cell_hd">
                <label for="" class="weui_label">调查对象</label>
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <select class="weui_select" name="m_add">
                    <option value="1">本部门</option>
                    <option value="2">特定部门</option>
                    <option value="3">特定人员</option>
                </select>
            </div>
        </div>
 <div class="weui_cell weui_cell_select weui_select_after">
            <div class="weui_cell_hd">
                <label for="" class="weui_label">+添加新题目</label>
            </div>
            <!-- <div class="weui_cell_bd weui_cell_primary">
                <select class="weui_select" name="m_add">
                    <option value="1">本部门</option>
                    <option value="2">特定部门</option>
                    <option value="3">特定人员</option>
                </select>
            </div> -->
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><label for="" class="weui_label">截止时间</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="datetime-local" value="" placeholder=""/>
            </div>
        </div> 
       
      <div class="button_sp_area">
        <button class="weui_btn weui_btn_mini weui_btn_default" id="savebox">保存草稿</button>
        <!-- <a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_default"></a> -->
        <button class="weui_btn weui_btn_mini weui_btn_primary" id="sub" >立即提交</button>
<!--         <input type="button" name="submit" id="submit" value="注册">
<input type="button" name="quit" id="quit" value="退出"> -->
    </div>

</div>
</form>
<!-- 弹框信息 -->
<!--BEGIN dialog2-->
<div class="weui_dialog_alert" id="dialog2" style="display: none;">
    <div class="weui_mask"></div>
    <div class="weui_dialog">
        <div class="weui_dialog_hd"><strong class="weui_dialog_title">弹窗标题</strong></div>
        <div class="weui_dialog_bd">弹窗内容，告知当前页面信息等</div>
        <div class="weui_dialog_ft">
            <a href="javascript:;" class="weui_btn_dialog primary">确定</a>
        </div>
    </div>
</div>
<!--END dialog2-->

</body>

<script type="text/javascript" language="javascript">
$(function(){

alert(333);


});
    var flag1=true;

      $("#showDialog2").blur(function(){
            var title=$("#showDialog2").val();
            if (title=='') {
            flag1=false;
            sAlert('请填写标题！');
        }
      });
       var flag2=true;
        $("#content").blur(function(){
            var c=$("#content").val();
        if (c=='') {
          flag2=false;
          sAlert('请填写内容!');
        }
      });  
       $("form").submit(function(){
                 
                    if(flag1==true&&flag2==true) 
                    {
                           return true;
                    }
                    
                   else{
                      sAlert('请认真填写!');
                      return false;
                    }
        });     

  
  
</script>
<script type="text/javascript" language="javascript">

function sAlert(str){
var msgw,msgh,bordercolor;
msgw=300;//提示窗口的宽度
msgh=200;//提示窗口的高度
titleheight=50 //提示窗口标题高度
bordercolor="#04BE02";//提示窗口的边框颜色
titlecolor="#99CCFF";//提示窗口的标题颜色
var sWidth,sHeight;
sWidth=document.body.offsetWidth;
sHeight=screen.height;
var bgObj=document.createElement("div");
bgObj.setAttribute('id','bgDiv');
bgObj.style.position="absolute";
bgObj.style.top="0";
bgObj.style.background="#777";
bgObj.style.filter="progid:DXImageTransform.Microsoft.Alpha(style=3,opacity=25,finishOpacity=75";
bgObj.style.opacity="0.6";
bgObj.style.left="0";
bgObj.style.width=sWidth + "px";
bgObj.style.height=sHeight + "px";
bgObj.style.zIndex = "10000";
document.body.appendChild(bgObj);
var msgObj=document.createElement("div")
msgObj.setAttribute("id","msgDiv");
msgObj.setAttribute("align","center");
msgObj.style.background="white";
msgObj.style.border="1px solid " + bordercolor;
msgObj.style.position = "absolute";
msgObj.style.left = "50%";
msgObj.style.top = "50%";
msgObj.style.font="12px/1.6em Verdana, Geneva, Arial, Helvetica, sans-serif";
msgObj.style.marginLeft = "-225px" ;
msgObj.style.marginTop = -75+document.documentElement.scrollTop+"px";
msgObj.style.width = msgw + "px";
msgObj.style.height =msgh + "px";
msgObj.style.textAlign = "center";
msgObj.style.lineHeight ="50px";
msgObj.style.zIndex = "10001";
var title=document.createElement("h4");
title.setAttribute("id","msgTitle");
title.setAttribute("align","right");
title.style.margin="0";
title.style.padding="3px";
title.style.background=bordercolor;
title.style.filter="progid:DXImageTransform.Microsoft.Alpha(startX=20, startY=20, finishX=100, finishY=100,style=1,opacity=75,finishOpacity=100);";
title.style.opacity="0.75";
title.style.border="1px solid " + bordercolor;
title.style.height="18px";
title.style.font="12px Verdana, Geneva, Arial, Helvetica, sans-serif";
title.style.color="white";
title.style.cursor="pointer";
title.innerHTML="关闭";
title.onclick=function(){
document.body.removeChild(bgObj);
document.getElementById("msgDiv").removeChild(title);
document.body.removeChild(msgObj);
}
document.body.appendChild(msgObj);
document.getElementById("msgDiv").appendChild(title);
var txt=document.createElement("p");
txt.style.margin="1em 0"
txt.setAttribute("id","msgTxt");
txt.innerHTML=str;
document.getElementById("msgDiv").appendChild(txt);
}
</script>
</html>