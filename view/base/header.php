<?php
$_video = new Video();
$video_count = $_video->count();
$_user = new User();
$user_count = $_user->count();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>艾墨镇，ATer的小村子</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="AnimeTaste">
<meta name="author" content="AnimeTaste">

<!-- Le styles -->
<link href="/media/css/bootstrap.css" rel="stylesheet">
<link href="/media/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<link rel="shortcut icon" href="/assets/ico/favicon.ico">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="/media/jBox/jquery.jBox-2.3.min.js"></script>
	<script type="text/javascript" src="/media/jBox/jquery.jBox-zh-CN.js"></script>
	<link type="text/css" rel="stylesheet" href="/media/jBox/jbox.css"/>

<? $url=explode("?",$_SERVER['REQUEST_URI']);$num =(count($url))-1;
if ($url[$num]=="welcome") { 
	if ($visitor->id) {
		echo "<script> $(function(){ $.jBox.tip('欢迎回来！别忘记分享几部好作品哟！', 'success');}); </script>";} 
		} 
if ($url[$num]=="err") {
	echo "<script> $(function(){ $.jBox.tip('登录失败！用户名或密码错误！', 'error');}); </script>";}
if ($url[$num]=="login") {
	echo "<script> $(function(){ $.jBox.tip('请您先登录！', 'error');}); </script>";}
if ($url[$num]=="bye") {
	echo "<script> $(function(){ $.jBox.tip('记得有空常来哦！', 'success');}); </script>";}
if ($url[$num]=="wrong") {
	echo "<script> $(function(){ $.jBox.tip('您没有权限修改他人的视频~', 'success');}); </script>";}
 ?>
    

</script>
</head>

  <body background="/images/web_bg.jpg">

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <ul class="nav">
              <?php if ($pagename=="index"){ echo '<li class="active">';}else{echo '<li>';} ?><a href="/">首页</a></li>
              <?php if ($pagename=="hot"){ echo '<li class="active">';}else{echo '<li>';} ?><a href="/hot/">热榜</a></li>
              <li><a href="http://animetaste.net/" target="_blank">AT</a></li>
            </ul>
            <div class="navbar-form pull-right">
<!--search 
<div class="input-append">
  <input class="span2" id="appendedInputButton" type="text">
  <button class="btn" type="button">Go!</button>
</div> /search -->
<div id="card-button" style="float:right; ">
<? if ($visitor->id) { ?>
                      <a href="#share" role="button" class="btn btn-block btn-red" style="height:30px;width:80px;padding-top:3px; margin:7px 30px 0 0;" data-toggle="modal">分享视频</a> </div>
					<? } else { ?>
                     <a href="#login" role="button" class="btn btn-block btn-red" style="height:30px;width:40px;float:right;margin:7px 30px 0 0;" data-toggle="modal">登录</a>
                     </div>
					<? } ?>
                    <? if ($visitor->id) { ?>
                    <div id="user" style="float:right; margin-right:20px; padding:7px 0 0 0"> 
                     <div class="btn-group">
  <a data-toggle="dropdown" href="#"><img width="24" height="24" style=" margin:-13px 5px 0 0" src="<?=$visitor->avatar()->link(24)?>"/><span style="color: #E1E1E1; font-weight: 500;font-size: 14px"><?=$visitor->username?></span></a>
  <ul class="dropdown-menu">
    <li><a href="/home/videos/"><i class="icon-film"></i> 我的分享</a></li>
    <li><a href="/home/likes/"><i class="icon-heart"></i> 我的收藏</a></li>
    <li><a href="/home/following/"><i class="icon-user"></i> 关注的人</a></li>
    <li><a href="/home/settings/"><i class="icon-cog"></i> 修改信息</a></li>
    <li class="divider"></li>
    <li><a href="/logout.php"><i class="icon-off"></i> 登出</a></li>
  </ul>
</div>
</div>
<? } ?>
                    
        </div>
            
          </div><!--/.nav-collapse -->
          <div class="nav-collapse collapse">
        </div>
      </div>        <div style="background-image:url(/images/bgline.png); background-repeat:repeat-x; height:2px"></div>
    </div>