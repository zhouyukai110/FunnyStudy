<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/header.css">
	<title>@yield('title')</title>
</head>
<body>
<!--导航栏开始-->
@section('header')
    <header class="qs-header">
        <nav class="collapse navbar-collapse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">趣学教育</a>
                </div>
                <ul class="nav navbar-nav navbar-letf">
                    <li class=""><a href="#">首页</a></li>
                    <li class=""><a href="#">最新资讯</a></li>
                    <li class=""><a href="#">找老师</a></li>
                    <li class=""><a href="#">看直播</a></li>
                    <li class=""><a href="#">选课程</a></li>
                </ul>
                <form class="navbar-form pull-right visible-lg" action="http://www.qswangxiao.com/search" method="get">
                    <div class="form-group">
                        <input class="form-control" placeholder="请输入搜索的内容" >
                        <button class="button glyphicon glyphicon-search"></button>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
                </ul>
            </div>
        </nav>
    </header>
@show
<!--导航栏结束-->
<div class="container">
    @yield('content','主要内容区域')
</div>
</body>
</html>

