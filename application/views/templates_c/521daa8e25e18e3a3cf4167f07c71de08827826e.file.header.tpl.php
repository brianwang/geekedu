<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-05-19 05:48:29
         compiled from "application\views\layouts\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30680555ab28def7436-62922414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521daa8e25e18e3a3cf4167f07c71de08827826e' => 
    array (
      0 => 'application\\views\\layouts\\header.tpl',
      1 => 1432006924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30680555ab28def7436-62922414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_555ab28e516247_08440210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ab28e516247_08440210')) {function content_555ab28e516247_08440210($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['g']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
">
        <meta name="author" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['g']->value['author'])===null||$tmp==='' ? '' : $tmp);?>
">
        <meta name="keyword" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['g']->value['keyword'])===null||$tmp==='' ? '' : $tmp);?>
">
        <title><?php echo $_smarty_tpl->tpl_vars['g']->value['sitename'];?>
</title>
        <!-- Bootstrap core CSS -->
        <?php echo css('bootstrap.css');?>

        <!--external css-->
        <?php echo css('../font-awesome/css/font-awesome.css');?>

        <?php echo css('zabuto_calendar.css');?>

        <?php echo css('../js/gritter/css/jquery.gritter.css');?>

        <?php echo css('../lineicons/style.css');?>
    
        <!-- Custom styles for this template -->
        <?php echo css('style.css');?>

        <?php echo css('style-responsive.css');?>

        <?php echo css('../../bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css');?>


        <?php echo bower('jquery/dist/jquery.js');?>

        <?php echo js('bootstrap.min.js');?>

        
        <?php echo js('date.js');?>

        <?php echo bower('bootstrap-daterangepicker/daterangepicker.js');?>

        <?php echo bower('bootstrap-datepicker/dist/js/bootstrap-datepicker.js');?>

        <?php echo js('jquery.dcjqaccordion.2.7.js');?>

        <?php echo js('jquery.scrollTo.min.js');?>

        <?php echo js('jquery.nicescroll.js');?>

        <?php echo js('jquery.sparkline.js');?>
        
        <!--common script for all pages-->
        <?php echo js('common-scripts.js');?>

        <?php echo js('gritter/js/jquery.gritter.js');?>

        <?php echo js('gritter-conf.js');?>
	
        <?php echo js('fullcalendar/fullcalendar.min.js');?>

        <?php echo js('chart-master/Chart.js');?>

        
        <script src="<?php echo base_url('/assets/js/ie-emulation-modes-warning.js');?>
"></script>
        <script src="<?php echo base_url('/assets/bower_components/holderjs/holder.js');?>
"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php echo bower('jquery-serializeForm/dist/jquery-serializeForm.js');?>

        
        <?php echo bower('knockout/dist/knockout.debug.js');?>

        <?php echo bower('bootstrap-switch/dist/js/bootstrap-switch.js');?>

        <?php echo js('ko.bindingHandlers.bootstrapSwitch.js');?>

        <script src="<?php echo site_url('/remotejs/config');?>
"></script>
    
</head><?php }} ?>
