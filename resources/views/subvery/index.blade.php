<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>调查问卷</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <base href="/" />
      <script src="weixin/public/js/jquery-1.11.0.min.js"></script>

    <link rel="stylesheet" href="weixin/public/style/weui.css"/>
    <link rel="stylesheet" href="weixin/public/example/example.css"/>
  
    <script src="weixin/public/js/zepto.min.js"></script>
    <script src="weixin/public/js/router.min.js"></script>
    <script src="weixin/public/js/example.js"></script>
</head>
<body>
	<div class="bd">
 
    <center>调查问卷</center>
<form action="{{ url('subIndex') }}" method="post" id='id ="myform"' autocomplete="on">
    <div class="weui_cells weui_cells_form">
        <div class="weui_cell">
           
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="text" id="showDialog2" name='sub_title'  placeholder="请输入调查主题" required="required" />
            </div>
        </div>
            <div class="weui_cell">
           
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="text" id='content'  name='sub_content' placeholder="请输入调查内容" required="required" />
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
                <select class="weui_select" name="m_object">
                    <option value="1">本部门</option>
                    <option value="2">特定部门</option>
                    <option value="3">特定人员</option>
                </select>
            </div>
        </div>
<div class="weui_cells_title">单选列表项</div>
    <div class="weui_cells weui_cells_radio">
        <label class="weui_cell weui_check_label" for="x11">
            <div class="weui_cell_bd weui_cell_primary">
                <p>单选</p>
            </div>
            <div class="weui_cell_ft">
                <input type="radio" class="weui_check" name="m_type" id="x11" value="1" checked="checked">
                <span class="weui_icon_checked"></span>
            </div>
        </label>
        <label class="weui_cell weui_check_label" for="x12">

            <div class="weui_cell_bd weui_cell_primary">
                <p>复选</p>
            </div>
            <div class="weui_cell_ft">
                <input type="radio" name="m_type" class="weui_check" id="x12" value="2">
                <span class="weui_icon_checked"></span>
            </div>
        </label>
    </div>

        
 <div class="weui_cell weui_cell_select weui_select_after">
            <div class="weui_cell_hd">
                <label for="" class="weui_label" id="diao_add">+添加新题目</label>
            </div>

    <div id="Inputsub">  
     <div>投票项1<input type="text" class="weui_input" name="m_item[]" id="field_1" value="" required="required" /><a href="#" class="removeclass">[-]</a></div>  
    </div>
          
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><label for="" class="weui_label">截止时间</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" name="m_endtime" type="datetime-local" value="" placeholder=""/>
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


</body>

<script type="text/javascript" language="javascript">

//添加输入框

window.onload=function(){

  var maxinput      = 7; //投票项的最大个数
        var Inputsub   = $("#Inputsub"); //得到将要添加的标签

        var diao_add  = $("#diao_add"); //Add button ID  
  
        var x = Inputsub.length; //initlal text box count  
        var FieldCount=1; //to keep track of text box added  

         $("#diao_add").click(function(e){
      
  
                        if(x <= maxinput) //max input box allowed  
                        {  
                            FieldCount++; //text box added increment  
                            //add input box  
                            $(Inputsub).append('<tr><div><td></td><td>投票项'+ FieldCount +'<input type="text"  class="weui_input" name="m_item[]" id="field_'+ FieldCount +'" value="" required="required" /><a href="javascript:void(0);" class="removeclass">[-]</a></td></div></tr>');  
                            x++; //text box increment  
                        }  
                        return false;  
    });

    $("body").on("click",".removeclass", function(e){ //user click on remove text  
        if( x > 1 ) {  
                $(this).parent('td').remove(); //remove text box  
                x--; //decrement textbox  
        }  
       return false;  
})        

}
     
  
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