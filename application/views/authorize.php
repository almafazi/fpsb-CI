<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/login.css">
</head>

<body>
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>FPSB</h1>
                <img src="<?php echo base_url(); ?>assets/login/logo-uii-bg-biru.png" width="100" height="150"><br>
            </div>
<br>
            <div class="login-form">
                <?= form_open('login') ?>
                    <div class="control-group">
                        <input type="text" class="login-field" name="username" value="<?=set_value('username') ?>" placeholder="username" id="login-name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    <?= form_error('email'); ?>

                    <div class="control-group">
                        <input type="password" class="login-field" name="password" value="" placeholder="password" id="login-pass">
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    <?= form_error('password'); ?>
                    <input type="submit" class="btn btn-primary btn-large btn-block" name="submit" value="login">
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</body>
</html>
