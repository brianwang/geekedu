<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-05-19 05:47:34
         compiled from "application\views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14572555ab256c90036-63370325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '052e2afc1e89fb5d3648c4237f31e587d0587db7' => 
    array (
      0 => 'application\\views\\login.tpl',
      1 => 1432007113,
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
      1 => 1432006924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14572555ab256c90036-63370325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'g' => 0,
    'pendingtasks' => 0,
    'mymessages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_555ab2573ddaa8_76889125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ab2573ddaa8_76889125')) {function content_555ab2573ddaa8_76889125($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
    <section id="container" >
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b><?php echo $_smarty_tpl->tpl_vars['g']->value['sitename'];?>
</b></a>
            <!--logo end-->
            <?php if (isset($_SESSION['user'])) {?>
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                        <!-- settings start -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-tasks"></i>
                                <span class="badge bg-theme"><?php echo sizeof((($tmp = @$_smarty_tpl->tpl_vars['pendingtasks']->value)===null||$tmp==='' ? array() : $tmp));?>
</span>
                            </a>
                            <ul class="dropdown-menu extended tasks-bar">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">你有<?php echo sizeof((($tmp = @$_smarty_tpl->tpl_vars['pendingtasks']->value)===null||$tmp==='' ? array() : $tmp));?>
个未完成的任务</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">DashGum Admin Panel</div>
                                            <div class="percent">40%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Database Update</div>
                                            <div class="percent">60%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Product Development</div>
                                            <div class="percent">80%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Payments Sent</div>
                                            <div class="percent">70%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="sr-only">70% Complete (Important)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="external">
                                    <a href="#">See All Tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- settings end -->
                        <!-- inbox dropdown start-->
                        <li id="header_inbox_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-theme"><?php echo sizeof((($tmp = @$_smarty_tpl->tpl_vars['mymessages']->value)===null||$tmp==='' ? array() : $tmp));?>
</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Zac Snider</span>
                                            <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                            Hi mate, how is everything?
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Divya Manian</span>
                                            <span class="time">40 mins.</span>
                                        </span>
                                        <span class="message">
                                            Hi, I need your help with this.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Dan Rogers</span>
                                            <span class="time">2 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Love your new Dashboard.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Dj Sherman</span>
                                            <span class="time">4 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Please, answer asap.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- inbox dropdown end -->
                    </ul>
                    <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a href="<?php echo site_url('/page/profile');?>
" class='logout'><?php echo (($tmp = @$_SESSION['user']['email'])===null||$tmp==='' ? '' : $tmp);?>
</a></li>
                        <li><a class="logout" href="<?php echo site_url('/auth/logout');?>
">Logout</a></li>
                    </ul>
                </div>
            <?php } else { ?>
                <?php if (cur_uri()!='/page/register'&&cur_uri()!='/page/login') {?>
                    <div class="top-menu">
                        <ul class="nav pull-right top-menu">
                            <li><a href="<?php echo site_url('/page/register');?>
" class='logout'>注册</a></li>
                            <li><a href="<?php echo site_url('/page/login');?>
" class='logout'>登录</a></li>
                        </ul>
                    </div>
                <?php }?>
            <?php }?>
        </header>
        <!--header end-->
        
    
    
    <div id="login-page">
        <div class="container">

            <form class="form-login" id="form_register" action="<?php echo site_url('/auth/login');?>
" method='POST'>

                <input type='hidden' name='sessiontime' value='<?php echo $_smarty_tpl->tpl_vars['sessiontime']->value;?>
'/>
                <h2 class="form-login-heading">现在登录</h2>
                <?php if ((($tmp = @$_SESSION['flash_data'])===null||$tmp==='' ? false : $tmp)) {?>
                    <div class="alert alert-danger" >
                        <?php echo $_SESSION['flash_data'];?>

                    </div>
                <?php }?>
                <div class="login-wrap">
                    <input type="text" class="form-control" placeholder="邮箱/QQ/用户名" autofocus name="email">
                    <br>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <label class="checkbox">
                        <span class="pull-right">
                            <a data-toggle="modal" href="login.html#myModal"> 忘记密码?</a>
                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" href="<?php echo site_url('/page/register');?>
" type="submit">
                        <i class="fa fa-lock"></i> 登录</button>
                    <hr>

                    <div class="login-social-link centered">
                        <p>通过社交网络登录</p>
                        <button class="btn btn-facebook" type="submit"><i class="fa fa-qq"></i> QQ</button>
                        <button class="btn btn-twitter" type="submit"><i class="fa fa-weibo"></i> 微博</button>
                    </div>
                    <div class="registration">
                        还没注册?<br/>
                        <a class="" href="<?php echo site_url('/page/register');?>
">
                            注册帐号
                        </a>
                    </div>

                </div>
            </form>
            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter your e-mail address below to reset your password.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-theme" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->          	  	

        </div>
    </div>
   
    <?php echo $_smarty_tpl->getSubTemplate ("layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</section>

<link rel="stylesheet" href="<?php echo base_url('/assets/css/dashboard.css');?>
">
</body>
</html>


<?php }} ?>
