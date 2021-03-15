<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <?php echo lang('edit_user_heading'); ?>
                        <small><?php echo lang('edit_user_subheading'); ?></small>
                    </h1>
                    <p><?= lang('edit_user_description'); ?></p>
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
                            <h3 class="card-title"><?php echo lang('edit_user_heading'); ?></h3>
                            <div id="infoMessage"><?php echo $message; ?></div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open(uri_string()); ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('edit_user_fname_label', 'first_name'); ?> <br />
                                        <?php echo form_input($first_name); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('edit_user_lname_label', 'last_name'); ?> <br />
                                        <?php echo form_input($last_name); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('edit_user_company_label', 'company'); ?> <br />
                                        <?php echo form_input($company); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('edit_user_phone_label', 'phone'); ?> <br />
                                        <?php echo form_input($phone); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('edit_user_password_label', 'password'); ?> <br />
                                        <?php echo form_input($password); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('edit_user_password_confirm_label', 'password_confirm'); ?><br />
                                        <?php echo form_input($password_confirm); ?>
                                    </div>
                                </div>
                            </div>
                            <?php if ($this->ion_auth->is_admin()) : ?>
                                <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
                                <div class="form-group">
                                    <?php foreach ($groups as $group) : ?>
                                        <label>
                                            <?php
                                            $gID = $group['id'];
                                            $checked = null;
                                            $item = null;
                                            foreach ($currentGroups as $grp) {
                                                if ($gID == $grp->id) {
                                                    $checked = ' checked="checked"';
                                                    break;
                                                }
                                            }
                                            ?>
                                            <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                            <input type="radio" class="flat-yellow" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo $checked; ?>>
                                        </label>
                                    <?php endforeach ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <?php echo form_hidden('id', $user->id); ?>
                            <?php echo form_hidden($csrf); ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="float-sm-left">
                                        <a href="<?= site_url('users'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Back </a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-sm-right">
                                        <?php echo form_submit('submit', lang('edit_user_submit_btn'), $submit_btn); ?>
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