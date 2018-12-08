<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://use.typekit.net/ycf8mvp.css">
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>
<body>

<div class="bg"></div>
<div class="main-menu"></div>

<header>
    <div class="left">
        <div class="menu-tab">
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <p class="menu-state">Menu</p>
        </div>
        <div class="chat-tab">
            <i class="far fa-comment-alt"></i><span><p>Chat</p></span>
        </div>
    </div>
    <div class="head-line"></div>
    <div class="right">
        <div class="svg"><?php echo file_get_contents(TEMPLATEPATH . "/assets/img/symbol.svg"); ?></div>
    </div>

</header>

<main>
