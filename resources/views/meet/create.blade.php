<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="/pubic/css/demo.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>新建会议</title>
</head>
<body>
	<center>
		<form action="{{ url('createMeeting') }}" method='post'>
		  <div class="form-group">
		   
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="会议标题">
		  </div>
		  <div class="form-group">
		 
		    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="会议内容">
		  </div>
		  <div class="form-group">
		    <label for="图片内容">图片上传</label>
		    <input type="file" id="exampleInputFile">
		 
		  </div>
		   <div class="form-group">
		 
		    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="会议开始时间">
		  </div>
		    <div class="form-group">
		 
		    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="会议结束时间">
		  </div>
		<ul class="dropdown-menu" aria-labelledby="会议地点选择">
                     <li><a href="#">第一会议</a></li>
                     <li><a href="#">第二会议</a></li>
		 <li><a href="#">第三会议</a></li>
		  <li><a href="#">Separated link</a></li>
		 </ul>
		  <button type="submit" class="btn btn-primary">保存草稿</button> 
		    <input type="submit" class="btn btn-success" value="立即提交"/>
		
		
		</form>
	</center>
</body>
<script>
$("#exampleInputEmail1").blur(function(){
	alert($("#exampleInputEmail1").val());
});
</script>	
</html>
