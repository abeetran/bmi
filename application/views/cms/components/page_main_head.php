<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $site_name;?></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="description" content="Development by ThanhTrong :: U.P Solutions Co., Ltd." />
    <meta name="keywords" content="Copyright (c) 2016 by ThanhTrong :: U.P Solutions Co., Ltd." />
    <meta name="author" content="">
    
    <!-- CSS : BOOTSTRAP -->
	<link rel="stylesheet" href="<?php inchuoi_duongdanfile('assets/cms/plugins/bootstrap/css/bootstrap.min.css') ;?>" type="text/css"/>
	<link rel="stylesheet" href="<?php inchuoi_duongdanfile('assets/cms/plugins/ressidenav/css/style.css') ;?>" type="text/css"/>
	<link rel="stylesheet" href="<?php inchuoi_duongdanfile('assets/cms/css/style.css') ;?>" type="text/css"/>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
    <script src="<?php inchuoi_duongdanfile('assets/cms/plugins/bootstrap/js/bootstrap.min.js') ;?>"></script>   
    <?php echo $before_head; ?>
</head>