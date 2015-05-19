<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-05-19 12:29:46
         compiled from "application\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16963555ab0efbe7ae3-00142762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99d7856ce29c35d8274ed42231fbb03a82953984' => 
    array (
      0 => 'application\\views\\index.tpl',
      1 => 1432030571,
      2 => 'file',
    ),
    '93176af2b02c3e9d0d1ab1ee9a48bdfa4fa9dbbd' => 
    array (
      0 => 'application\\views\\layouts\\col1.tpl',
      1 => 1432006924,
      2 => 'file',
    ),
    '2d95146bc77a184632945935e05611589fc19576' => 
    array (
      0 => 'application\\views\\layouts\\main.tpl',
      1 => 1432031384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16963555ab0efbe7ae3-00142762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_555ab0efc39b91_74009517',
  'variables' => 
  array (
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ab0efc39b91_74009517')) {function content_555ab0efc39b91_74009517($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
    <!--header start-->
    <header class="header black-bg">
        <div class="container">
            <nav class="collapse navbar-collapse bs-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/"><?php echo $_smarty_tpl->tpl_vars['g']->value['sitename'];?>
</a>
                    </li>
                    <li class="active">
                        <a href="../css/">CSS</a>
                    </li>
                    <li>
                        <a href="../components/">Components</a>
                    </li>
                    <li>
                        <a href="../javascript/">JavaScript</a>
                    </li>
                    <li>
                        <a href="../customize/">Customize</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="javascript:;">注册</a>
                    </li>
                    <li><a href="javascript:;">登录</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
    
    <div class="row">
        <div class="col-xs-4">
            <form class="form">
                <input type="text" name="username" placeholder="用户名"/>
                <input type="text" name="email" placeholder="邮件"/>
                <input type="text" name="password"  placeholder="密码"/>
                <input type="text" name="c_password"  placeholder="确认密码"/>
                <a>添加用户</a>
            </form>
            <button>腾讯登录</button>
            <button>微博登录</button>
        </div>

        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="name">名字</label>
                    <input type="text" name="name" value="XXXXX" placeholder="名字"/>
                </div>
                <div class="form-group">
                    <label for="name">年龄</label>
                    <input type="text" name="age" value="18" placeholder="年龄"/>
                </div>
                <div class="form-group">
                    <label for="gender">性别</label>
                    <select name="gender">
                        <option value="1">男</option>
                        <option value="0">女</option>                
                    </select>
                </div>
                <div class="form-group">
                    <label for="school">学校</label>
                    <select name="school">
                        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</option>
                        <?php } ?>
                    </select></div>
                <div class="form-group">
                    <label for="province">省份</label>
                    <select name="province">
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['provinces']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</option>
                        <?php } ?>
                    </select></div>
                <div class="form-group">
                    <label for="city">城市</label>
                    <select name="city">
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</option>
                        <?php } ?>
                    </select></div>
                <div class="form-group">
                    <label for="master">专业</label>
                    <input type="text" name="master" placeholder="专业"/>
                </div>
                <a>添加学生</a>
            </form>
        </div>
        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="name">名字</label>
                    <input type="text" name="name" value="XXXXX" placeholder="名字"/>
                </div>
            </form>
            <a>添加教师</a>
        </div>

        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="name">名字</label>
                    <input type="text" name="name" value="XXXXX" placeholder="名字"/>
                </div>
            </form>
            <a>添加教室</a>
        </div>


        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="name">名字</label>
                    <input type="text" name="name" value="XXXXX" placeholder="名字"/>
                </div>
            </form>
            <a>添加学校</a>
        </div>
        <div class="col-xs-4">
            <a>添加学校</a>
        </div>
    </div>
   
</div>
<?php echo $_smarty_tpl->getSubTemplate ("layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link rel="stylesheet" href="<?php echo base_url('/assets/css/dashboard.css');?>
">
</body>
</html>


<?php }} ?>
