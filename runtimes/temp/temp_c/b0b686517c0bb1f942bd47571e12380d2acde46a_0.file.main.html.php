<?php
/* Smarty version 3.1.31, created on 2017-09-25 12:15:26
  from "E:\phpstudy\phpStudy20160101\WWW\linkphp-bbs\assets\views\main\home\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c8f35e309c51_55866478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0b686517c0bb1f942bd47571e12380d2acde46a' => 
    array (
      0 => 'E:\\phpstudy\\phpStudy20160101\\WWW\\linkphp-bbs\\assets\\views\\main\\home\\main.html',
      1 => 1506341485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_59c8f35e309c51_55866478 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="LinkPHP" content="liugene" />
    <link href="/resource/static/layui/css/layui.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/index.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/footer.css" type="text/css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="/resource/static/main/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/layer/layer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/layui/layui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/main/js/quietflow.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/main/logic/index.js"><?php echo '</script'; ?>
>

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-LinkPHP开源框架</title>
</head>

<body>
<div id="body">
    <!-- 头部  -->
    <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- 首页中间  -->
    <div class="clear"></div>
    <div id="content">
        <div class="class-content">
            <div class="class-content-logo">
                <img src="/resource/static/main/img/icon.png" style="width:220px;height:220px" />
            </div>
            <div class="class-content-item">
                <a href="http://class.linkphp.cn" target="_blank" class="layui-btn layui-btn-big layui-btn-radius">加载类库</a>
                <a href="/index.php/main/wiki/main" class="layui-btn layui-btn-big layui-btn-radius">帮助手册</a>
                <a href="/index.php/main/forum/main" class="layui-btn layui-btn-primary layui-btn-big layui-btn-radius">技术问答社区</a>
                <a href="http://github.com/liugene/linkphp" target="_blank" class="layui-btn layui-btn-big layui-btn-radius layui-btn-warm">GitHub</a>
            </div>
            <div class="class-content-font">
                当前类库大小：<span class="layui-badge layui-bg-green"> 15</span>个 | 最新更新于: <span class="layui-badge layui-bg-blue">2017-09-19</span>
            </div>
        </div>
    </div>

    <div class="clear">
    </div>
    <div class="border"></div>
    <!-- 首页中间  -->
    <div id="center">
        <div class="center-box">
            <!--<div class="center-show">-->
                <!--<div class="right-repeat-img">-->
                    <!--<img src="/resource/static/main/img/photo.png">-->
                <!--</div>-->
                <!--<div class="center-talk-right">-->
                    <!--<div class="right-repeat-title">-->
                        <!--<a href="javascript:;">无法加载数据，请联系管理员!</a>-->
                    <!--</div>-->
                    <!--<div class="right-repeat-dec">-->
                        <!--<p>-->
                            <!--无法加载数据，请联系管理员!-->
                        <!--</p>-->
                    <!--</div>-->
                    <!--<img src="/resource/static/main/img/talk.png">-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="center-show">-->
                <!--<div class="left-repeat-img">-->
                    <!--<img src="/resource/static/main/img/photo.png">-->
                <!--</div>-->
                <!--<div class="center-talk-left">-->
                    <!--<div class="left-repeat-title">-->
                        <!--<a href="javascript:;">响应国家政策，本站评论需实名认证后使用</a>-->
                    <!--</div>-->
                    <!--<div class="left-repeat-dec">-->
                        <!--<p>-->
                            <!--根据网信办《互联网跟帖评论服务管理规定》，要求网站按照“后台实名、前台自愿”原则，对注册用户进行真实身份信息认证，-->
                            <!--不得向未认证真实身份信息的用户提供跟帖评论服务。为了充分落实《规定》精神-->
                        <!--</p>-->
                    <!--</div>-->
                    <!--<img src="/resource/static/main/img/talk-repeat.png">-->
                <!--</div>-->
            <!--</div>-->
        </div>
    </div>
    <!--<div id="center">
     <div class="center-show">
      <div class="center-show-item"><i class="layui-icon" style="font-size:230px; color:#5FB878;">&#xe635;</i></div>
      <div class="center-show-item"><i class="layui-icon" style="font-size:230px; color:#F7B824;">&#xe620;</i></div>
      <div class="center-show-item"><i class="layui-icon" style="font-size:230px; color:#5FB878;">&#xe61e;</i></div>
     </div>
     <div class="center-show">
      <div class="center-show-item center-show-font">
        <p>你可以配置不同的上传方案并绑定至不同的用户组，实现不同用户组的文件以不同方式存储，或者不同用户组对文件有不同的限制。</p>
      </div>
      <div class="center-show-item center-show-font">
        <p>你可以配置不同的上传方案并绑定至不同的用户组，实现不同用户组的文件以不同方式存储，或者不同用户组对文件有不同的限制。</p>
      </div>
      <div class="center-show-item center-show-font">
        <p>你可以配置不同的上传方案并绑定至不同的用户组，实现不同用户组的文件以不同方式存储，或者不同用户组对文件有不同的限制。</p>
      </div>
     </div>
    </div>
    -->

    <!-- 合作展示  -->

    <!--<hr style="margin:0;">
    <div class="library-box">
        <div class="library-content">
            <div class="library-content-child">
            </div>
        </div>
        <div class="library-content">
            <div class="library-content-child">
            </div>
        </div>
        <div class="library-content">
            <div class="library-content-child">
            </div>
        </div>
        <div class="library-content">
            <div class="library-content-child">
            </div>
        </div>
    </div>-->
    <!-- 底部  -->
    <div class="border"></div>
    <?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
</body>
</html>
<?php }
}
