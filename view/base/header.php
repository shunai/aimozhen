<?php
$_video = new Video();
$video_count = $_video->count();
$_user = new User();
$user_count = $_user->count();
$tags = Tag::getAllPreTags();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<? if($pagename == "detail") ($sitedesc = $video->title . " | " . $sitedesc) ?>
<? if($pagename == "user") ($sitedesc = $user->username . " | " . $sitedesc) ?>
<title><?=$sitedesc?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="AIMOZHEN 艾墨镇 分享动画分享精彩">
<meta name="author" content="艾墨镇">
<meta name="keywords" content="aimozhen,艾墨镇,动画" />
<meta property="wb:webmaster" content="dbd6a845d21f945c" />


<!-- Le styles -->
<link href="/media/css/bootstrap.css" rel="stylesheet">
<link href="/media/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<link rel="shortcut icon" href="/assets/ico/favicon.ico">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<?php include BASE_PATH."/include/info.php";?>

</head>

  <body background="/images/web_bg.jpg">

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
		<div class="container" style="padding-top:2px;">
     		<!-- 左侧菜单栏 -->
            <div style="float:left; margin:7px 0 0 0"><a href="/"><img src="/images/logo.png" /></a></div>
     		<ul class="nav nav-pills">
              <?php if ($pagename=="index"){ echo '<li class="active">';}else{echo '<li>';} ?><a href="/">发现</a></li>
              <?php if ($pagename=="issue"){ echo '<li class="active">';}else{echo '<li>';} ?><a href="/page/issue/">反馈</a></li>
              <?php if ($pagename=="register"){ echo '<li class="active">';}else{echo '<li>';} ?><a href="/page/register/">内测申请</a></li>
            </ul>
            
			<ul class="nav nav-pills pull-right">
           		
				<? if (!$visitor->id) { ?>
                <li><a href="#login" data-toggle="modal">登录</a></li> <? } ?>
                <div id="card-button" style="float:right; margin:-1px 30px 0 5px;">
                <!-- 分享 -->
					<? if ($visitor->id) { ?>
					<a href="#share" role="button" class="btn btn-block btn-red" style="height:30px;width:80px;" data-toggle="modal">分享视频</a> </div>
					<? } else { ?>
                    
					<a href="#login" role="button" class="btn btn-block btn-red" style="height:30px;width:80px;" data-toggle="modal">分享视频</a> </div>
					<? } ?>
                    
                <!-- 搜索 -->
               <div class="nav-collapse collapse" style="float:right;margin:-1px 10px 0 5px;">
<form class="navbar-search pull-left" action="/ajax/search.php" method="POST">
                      <input type="text" class="search-query" id="search" name="search" placeholder="搜索 ^_^">
                    </form>
      			</div>
                    
				<!-- 头像模块 -->
                    <? if ($visitor->id) { ?>
					<li class="dropdown" style="float:right;">
                    <a style="padding:5px 10px 5px 5px;" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#"><img width="24" height="24" style="" src="<?=$visitor->avatar()->link(24)?>"/>
                    <b class="caret"></b> </a>
                      <ul class="dropdown-menu">
                        <li class="nav-header"><?=$visitor->username?></li>
                        <li><a href="/home/videos/"><i class="icon-film"></i> 我的分享</a></li>
                        <li><a href="/home/likes/"><i class="icon-heart"></i> 我的收藏</a></li>
                        <li><a href="/home/following/"><i class="icon-star"></i> 关注的人</a></li>
                        <li><a data-toggle="modal" href="#invite"><i class="icon-gift"></i> 邀请入住</a></li>
                        <li><a href="/home/settings/"><i class="icon-cog"></i> 修改信息</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">系统功能</li>
                        <li><a href="/logout.php"><i class="icon-off"></i> 登出</a></li>
                      </ul>
					</li>
					<? } ?>
                    
                    
			 </ul>
            <!-- /右侧模块 -->
		 </div><!--/总菜单 -->
      </div>
      <div style="background-image:url(/images/bgline.png); background-repeat:repeat-x; height:2px"></div>
    </div>