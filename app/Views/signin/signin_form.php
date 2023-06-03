<div class="col-12 ">
    <div class="card bg-white">
    <div class="card-header bg-white text-center">
        <img class="p20 mw100p" src="/assets/images/logo_lengkap.png" />
        <h5>Collaboration Simplified, Success Amplified</h5>
    </div>
    <div class="card-body p30 rounded-bottom">
        <?php echo form_open("signin/authenticate", array("id" => "signin-form", "class" => "general-form", "role" => "form")); ?>

        <?php
        $session = \Config\Services::session();
        $signin_validation_errors = $session->getFlashdata("signin_validation_errors");
        if ($signin_validation_errors && is_array($signin_validation_errors)) {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach ($signin_validation_errors as $validation_error) { ?>
                    <i data-feather="alert-circle" class="icon-16"></i>
                    <?php echo $validation_error; ?>
                    <br />
                <?php } ?>
            </div>
        <?php } ?>
        <div class="form-group">
            <?php
            echo form_input(array(
                "id" => "email",
                "name" => "email",
                "class" => "form-control p10",
                "placeholder" => app_lang('email'),
                "autofocus" => true,
                "data-rule-required" => true,
                "data-msg-required" => app_lang("field_required"),
                "data-rule-email" => true,
                "data-msg-email" => app_lang("enter_valid_email")
            ));
            ?>
        </div>
        <div class="form-group">
            <?php
            echo form_password(array(
                "id" => "password",
                "name" => "password",
                "class" => "form-control p10",
                "placeholder" => app_lang('password'),
                "data-rule-required" => true,
                "data-msg-required" => app_lang("field_required")
            ));
            ?>
        </div>
        <input type="hidden" name="redirect" value="<?php
        if (isset($redirect)) {
            echo $redirect;
        }
        ?>" />


        <?php echo view("signin/re_captcha"); ?>

        <button class="w-100 btn btn-lg btn-primary" type="submit"><?php echo app_lang('signin'); ?></button>

        <!--<?php echo form_close(); ?>-->
        <!--<div class="mt5"><?php echo anchor("signin/request_reset_password", app_lang("forgot_password")); ?></div>-->

        <!--<?php if (!get_setting("disable_client_signup")) { ?>-->
        <!--    <div class="mt20"><?php echo app_lang("you_dont_have_an_account") ?> &nbsp; <?php echo anchor("signup", app_lang("signup")); ?></div>-->
        <!--<?php } ?>-->

        <!--<?php
        app_hooks()->do_action('app_hook_signin_extension');
        ?>-->
    </div>
</div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $("#signin-form").appForm({ajaxSubmit: false, isModal: false});
    });
</script>    