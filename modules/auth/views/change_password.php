<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <?php echo lang('change_password_heading'); ?>
                        <small><?php echo lang('change_password_subheading'); ?></small>
                    </h1>
                    <p><?= lang('change_password_description'); ?></p>
                </div>
                <div class="col-sm-6">
                    <?= $breadcrumbs ?>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-warning">
                        <div class="card-header with-border">
                            <div class="card-title"><?php echo lang('change_password_heading'); ?></div>
                            <div id="infoMessage"><?php echo $message; ?></div>
                        </div>
                        <?php echo form_open("auth/change_password"); ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo lang('change_password_old_password_label', 'old_password'); ?>
                                        <?php echo form_input($old_password); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length); ?></label>
                                        <?php echo form_input($new_password); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm'); ?> <br />
                                        <?php echo form_input($new_password_confirm); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?php echo form_input($user_id); ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="float-sm-left">
                                        <a href="<?= site_url('dashboard'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Back </a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-sm-right">
                                        <?php echo form_submit('submit', lang('change_password_submit_btn'), $submit_btn); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>