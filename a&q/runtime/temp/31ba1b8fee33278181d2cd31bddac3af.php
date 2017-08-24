<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"D:\wamp64\www\freshmanservice\a&q/application/index\view\index\answer.html";i:1502809667;s:75:"D:\wamp64\www\freshmanservice\a&q/application/index\view\public\header.html";i:1502873261;s:76:"D:\wamp64\www\freshmanservice\a&q/application/index\view\public\sidebar.html";i:1503591727;s:75:"D:\wamp64\www\freshmanservice\a&q/application/index\view\public\footer.html";i:1502803173;}*/ ?>
<!--<!doctype html>-->
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US">
	<!--<![endif]-->

	<head>
		<!-- META TAGS -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>我要提问</title>

		<link rel="shortcut icon" href="__IMG__/favicon.png" />

		<!-- Style Sheet-->
		<link rel="stylesheet" href="__CSS__/style.css" />
		<link rel='stylesheet' id='bootstrap-css-css' href='__CSS__/bootstrap5152.css?ver=1.0' type='text/css' media='all' />
		<link rel='stylesheet' id='responsive-css-css' href='__CSS__/responsive5152.css?ver=1.0' type='text/css' media='all' />
		<link rel='stylesheet' id='pretty-photo-css-css' href='__JS__/prettyphoto/prettyPhotoaeb9.css?ver=3.1.4' type='text/css' media='all' />
		<link rel='stylesheet' id='main-css-css' href='__CSS__/main5152.css?ver=1.0' type='text/css' media='all' />
		<link rel='stylesheet' id='custom-css-css' href='__CSS__/custom5152.html?ver=1.0' type='text/css' media='all' />

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
                <script src="__JS__/html5.js"></script></script>
                <![endif]-->

	</head>

	<body>

		<!-- Start of Header -->
<div class="header-wrapper">
    <header>
        <div class="container">

            <div class="logo-container">
                <!-- Website Logo -->
                <a href="../index.html">
                    <span class="wh">四川农业大学新生服务平台</span>
                </a>
                <span class="tl">新生答疑</span>
            </div>

            <!-- Start of Main Navigation -->
            <nav class="main-nav">
                <div class="menu-top-menu-container">
                    <ul id="menu-top-menu" class="clearfix">
                        <li>
                            <a href="<?php echo url('index'); ?>">Q&A</a>
                        </li>
                        <li>
                            <a href="<?php echo url('index/commonquestion'); ?>">新生百问</a>
                        </li>
                        <li>
                            <a href="<?php echo url('index/answer'); ?>">我要提问</a>
                        </li>
                        <li>
                            <a href="<?php echo url('admin/login'); ?>">管理员</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End of Main Navigation -->

        </div>
    </header>
</div>
<!-- End of Header -->
		</div>
		<!-- End of Header -->

		<!-- Start of Page Container -->
		<div class="page-container">
			<div class="container">
				<div class="row">

					<!-- start of page content -->
					<div class="span8 page-content">
						<section id="comments">
							<div id="respond">
								<h3>你的问题</h3>
								<form action="<?php echo url('index/answer'); ?>" method="post" id="commentform">
									<input type="hidden" name="commit" value="1">
									<div class="form-group">
										<label for="email">邮箱</label>
										<input class="span3 form-control input-lg" type="text" name="email" id="email" value="" size="25">
									</div>
									<div class="form-group">
										<label for="title">标题</label>
										<input class="span3 form-control input-lg" type="text" name="title" id="title" value="" size="25">
									</div>
									<div>
										<label for="comment">问题详情</label>
										<textarea class="span8" name="comment" id="comment" cols="58" rows="13"></textarea>
									</div>
									<br>
									<p style="color: red">*管理员会尽快回复你的疑问，之后会发送一封邮件到你的邮箱，并且在本网站上也能看到回答。</p>

									<div>
										<input class="btn btn-info btn-lg" name="submit" type="submit" id="submit" value="提 交 问 题">
									</div>
								</form>
							</div>
						</section>
						<!-- end of comments -->
					</div>
					<!-- end of page content -->

					<!-- start of sidebar -->
<aside class="span4 page-sidebar">

    <section class="widget">
        <div class="support-widget">
            <h3 class="title">帮助</h3>
            <p class="intro">想要更多的帮助？请扫描页面下方的二维码加入新生群，师兄师姐们会解答你的问题。</p>
        </div>
    </section>

    <section class="widget">
        <h3 class="title">常见问题</h3>
        <ul class="articles">
            <li class="article-entry standard">
                <h4><a href="<?php echo url('index/commonquestion#q1'); ?>">进校后进校的具体流程是什么？</a></h4>
                <br>
            </li>
            <li class="article-entry standard">
                <h4><a href="<?php echo url('index/commonquestion#q2'); ?>">宿舍楼，寝室内部条件设施如何?</a></h4>
                <br>
            </li>
            <li class="article-entry standard">
                <h4><a href="<?php echo url('index/commonquestion#q3'); ?>">大学学习和高中有什么本质区别?</a></h4>
                <br>
            </li>
            <li class="article-entry standard">
                <h4><a href="<?php echo url('index/commonquestion#q4'); ?>">有哪些主要教学设施楼及其用途？</a></h4>
                <br>
            </li>
        </ul>
    </section>
    <section class="widget">
        <h3 class="title">相关链接</h3>
        <ul>
            <li>
                <a href="http://www.sicau.edu.cn/">四川农业大学</a>
            </li>
            <li>
                <a href="http://jiaowu.sicau.edu.cn">川农教务处</a>
            </li>
            <li>
                <a href="http://xxgc.sicau.edu.cn/" >信息工程学院</a>
            </li>
            <li>
                <a href="http://www.wingstudio.org/" >WingStudio工作室</a>
            </li>
        </ul>
    </section>
</aside>
<!-- end of sidebar -->
				</div>
			</div>
		</div>
		<!-- End of Page Container -->

		<!-- Start of Footer -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="widget">
                    <h4 class="title">关于我们</h4>
                    <div class="content">
                        <p>川农信工院新生服务平台主要包括学校与学院的简介、学院专业的介绍、学校生活等方面的攻略</p>
                        <p>Producer for the Web：shy &amp; horol</p>
                        <p>Contact：604728559</p>
                    </div>
                </div>
            </div>
            <div class="span3">
                <div class="widget">
                    <h4 class="title">信工院2017级新生群</h4>
                    <div class="content">
                        <img src="__IMG__/xgy2017.jpg" />
                    </div>
                </div>
            </div>
            <div class="span3">
                <div class="widget">
                    <h4 class="title">四川农业大学官方微信</h4>
                    <div class="content">
                        <img src="__IMG__/cn.jpg" />
                    </div>
                </div>
            </div>
            <div class="span3">
                <div class="widget">
                    <h4 class="title">信息工程学院官方微信</h4>
                    <div class="content">
                        <img src="__IMG__/xgy.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span>更多信息请关注官网和官方微信公众号</span>
                <span>Copyright&copy;2017-新生服务平台</span>
            </div>
        </div>
    </div>
</div>
<!-- End of Footer -->

		<a href="#top" id="scroll-top"></a>

		<!-- script -->
		<script type='text/javascript' src='__JS__/jquery-1.8.3.min.js'></script>
		<script type='text/javascript' src='__JS__/jquery.easing.1.3.js'></script>
		<script type='text/javascript' src='__JS__/prettyphoto/jquery.prettyPhoto.js'></script>
		<script type='text/javascript' src='__JS__/jflickrfeed.js'></script>
		<script type='text/javascript' src='__JS__/jquery.liveSearch.js'></script>
		<script type='text/javascript' src='__JS__/jquery.form.js'></script>
		<script type='text/javascript' src='__JS__/jquery.validate.min.js'></script>
		<script type='text/javascript' src='__JS__/custom.js'></script>

	</body>

</html>