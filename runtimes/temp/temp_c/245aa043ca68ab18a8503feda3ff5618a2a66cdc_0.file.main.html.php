<?php
/* Smarty version 3.1.31, created on 2017-09-21 12:20:32
  from "C:\Object\linkphp-bbs\assets\views\main\login\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c39270d7c589_85736162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '245aa043ca68ab18a8503feda3ff5618a2a66cdc' => 
    array (
      0 => 'C:\\Object\\linkphp-bbs\\assets\\views\\main\\login\\main.html',
      1 => 1505989230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/u_header.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_59c39270d7c589_85736162 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="LinkPHP" content="liugene" />
    <link href="/resource/static/layui/css/layui.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/login.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/footer.css" type="text/css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="/resource/static/layui/layui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/main/js/jquery.min.js"><?php echo '</script'; ?>
>

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-LinkPHP开源框架</title>
</head>
<body>
<div id="body">
    <!-- 头部  -->
    <?php $_smarty_tpl->_subTemplateRender("file:public/u_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="body">
        <div class="body-box">
            <div class="body-left">
                <div class="input-item">
                    <label>用    户    名</label>
                    <txt class="txt">您的账号名和密码</txt>
                    <input type="text" class="field">
                </div>
                <div class="input-item">
                    <label>密     码</label>
                    <txt class="txt">您的账号名和密码</txt>
                    <input type="text" class="field">
                </div>
                <div class="input-item loginact">
                    <a href="javascript:;" class="login">立即登入</a>
                </div>
            </div>
            <div class="body-right">
                <div class=""></div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
