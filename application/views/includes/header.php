<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('public/css/module_page_new.css'); ?>" rel="stylesheet" type="text/css"/>
        <!--<link href="<?php // echo base_url('public/css/password_reset.css');                  ?>" rel="stylesheet" type="text/css"/>-->
        <link href="<?php echo base_url('public/css/new_header.css'); ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <!--MENU STARTS-->
        <div class="header no-subnav" id="top_header">
            <div class="header-top">
         
                <a href="<?php echo base_url();?>index.php/home/"><img src="<?php echo base_url('public/img/logo_mrt.png'); ?>" style="margin-top: -20px;" title="Profund" alt="Profund"></a>
                <div class="primary-nav-tools-bottom">
                                    <a href="<?php echo base_url();?>index.php/home/logout" class="logout" title="Logout">
                                        <span class="displace">Profile</span>
                                    </a>
                                </div>
                <div class="header-user">
                    <p>
                        <span class="user">Welcome <?php echo $username; ?> </span> | Role: Administrator
                    </p>
                    
                    
                </div>
                
                <div class="clearer"></div>
            </div>
            <!--HEADER-TOP-->
            <!--<div class="header-bottom">-->
                <!--<nav class="header-navigation">-->
<!--                    <div class="primary-nav-holder">
                        <div class="primary-nav-white-background"></div>
                        <div class="primary-nav-holder-inside">
                            <ul class="primary-nav">
                                <li class="primary-nav-white"></li>
                                <li class="primary-home active">
                                    <a class="active" href="#">System Setup</a>
                                </li>
                                <li class="">
                                    <a href="#">Transactions</a>
                                </li>
                                <li class="primary-report">
                                    <a href="#">Reports</a>
                                </li>
                                <li class="primary-manage">
                                    <a href="#">Admin</a>
                                </li>
                            </ul>
                            PRIMARY NAV
                            <div class="primary-nav-tools">
                                <div class="primary-nav-tools-top">
                                    <a href="#" class="help" title="help">
                                        <span class="displace">Help</span>
                                    </a>
                                    <div class="profile-help-seperator"></div>
                                    <a href="#" class="profile" title="Profile">
                                        <span class="displace">Profile</span>
                                    </a>
                                </div>
                                END PRIMARY NAV TOOLS TOP
                              
                            <div class="primary-nav-tools-bottom">
                                    <a href="/PROFUND/index.php/home/logout" class="logout" title="Logout">
                                        <span class="displace">Profile</span>
                                    </a>
                                </div>
                            </div>
                            PRIMARY NAV TOOLS


                        </div>-->
                        <!--END PRIMARY NAV TOOLS BOTTOM-->
                    </div>
                    <!--END PRIMARY NAV HOLDER-->
                    <div class="secondary-nav-holder">
                        <div class="secondary-nav-holder-inside">
                            <ul class="secondary-nav">
                                <li class="program_menu">
                                    <a class="active" href="#">Program</a>
                                    <div class="header_submenu_hide" id="program_submenu_hide">

                                        <ul class="header_submenu" id="program_submenu">
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/create_program">
                                                    
                                                    <span class="title">Create Program</span>
                                                    <!--<span class="description">Click to create new program</span>-->
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/view_program">
                                                    <span class="title">View Program</span>
                                                    <!--<span class="description">Click to view program details and perform edit and deletion</span>-->
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </li>
<!--                                <li class="trans_menu">
                                    <a href="#first_child" id="sub_menu">Component</a>
                                    <div class="header_submenu_hide" id="trans_submenu_hide">

                                        <ul class="header_submenu" id="trans_submenu">
                                            <li>
                                                <a href="create_component">
                                                    <span class="title">Create Component</span>
                                                    <span class="description">Click to create new Component</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="view_component">
                                                    <span class="title">View Component</span>
                                                    <span class="description">Click to view Component and perform edit and deletion</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </li>-->
<!--                                <li class="admin_menu">
                                    <a href="#">Sub Components</a>
                                    <div class="header_submenu_hide" id="admin_submenu_hide">

                                        <ul class="header_submenu" id="admin_submenu">
                                            <li>
                                                <a href="create_sub_component">
                                                    <span class="title">Create Sub component</span>
                                                    <span class="description">Click to create new Sub component</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="view_sub_component">
                                                    <span class="title">View Sub component</span>
                                                    <span class="description">Click to view Sub component and perform deletion and editing</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </li>-->
                              
                                <li class="funds_menu">
                                    <a href="#">Transactions</a>
                                    <div class="header_submenu_hide" id="funds_submenu_hide">

                                        <ul class="header_submenu" id="funds_submenu">
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/payment_certificate/create">
                                                 
                                                    <span class="title">Payment  certificate</span>
                                                    <!--<span class="description">Click to create new Sub component</span>-->
                                                </a>
                                            </li>
<!--                                            <li>
                                                <a href="view_fund">
                                                    <span class="title">View Fund</span>
                                                    <span class="description">Click to view Sub component and perform deletion and editing</span>
                                                </a>
                                            </li>-->
                                        </ul>

                                    </div>
                                </li>
<!--                                <li class="contracts_menu">
                                    <a href="">Setup</a>
                                    <div class="header_submenu_hide" id="contracts_submenu_hide">

                                        <ul class="header_submenu" id="contracts_submenu">
                                            <li>
                                                <a href="#">
                                                    <span class="title"></span>
                                                    <span class="description">Click to create new Sub component</span>
                                                </a>
                                            </li>
                                            
                                            
                                        </ul>

                                    </div>
                                </li>-->
                            </ul>

                        </div>
                        <!--END SECONDARY HOLDER INSIDE-->
                    </div>
                    <!--END SECONDARY NAV HOLDER-->
                </nav>
            </div>
            <!--HEADER BOTTOM-->
        </div>