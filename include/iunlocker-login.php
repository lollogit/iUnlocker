<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name');?> › 登录</title>
    <link rel="stylesheet" href="<?php echo admin_url("/css/login.min.css");?>">
    <link rel="stylesheet" href="<?php echo $this->source("css/style-14c3df36d7.css");?>">
</head>
<body class="login login-action-login wp-core-ui locale-zh-cn">
    <div id="login">
        <h1><a href="https://wordpress.org/" title="Powered by WordPress"><?php bloginfo('name');?></a></h1>
        <div class="login_qrcode">
            <div class="login-qrcode-image"></div>
            <div class="tips">
                <span class="login-icon"><i class="icono-check"></i></span>
                <span class="login-text">扫描成功，点击手机上的确认即可登录</span>
            </div>
        </div>
        <p id="nav">
            <a href="http://www.puckjs.com/wp-unlocker" title="无法登录？">扫描上方二维码登录，无法登录？</a>
        </p>
        <p id="backtoblog">
            <a href="<?php echo site_url();?>" title="Are you lost?">← 返回 <?php bloginfo('name');?>.</a>
        </p>
    </div>
    <div class="clear">
    </div>
    <script>var iunlocker = {admin_url: '<?php echo IUNLOCKER_ADMIN_URL;?>', session: '<?php $this->session();?>'}</script>
    <script src="<?php echo $this->source("js/main-d2c54b79c1.js");?>"></script>
</body>
</html>
