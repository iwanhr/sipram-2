<!-- start: Content -->
<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?= $url_home; ?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="<?= $url_back; ?>">Member</a><i class="icon-angle-right"></i></li>
        <li><a href="<?= $current_url_breadcrumb; ?>"><?= $title_page; ?></a></li>
    </ul>
    <div class="container-fluid-full" style="border:2px black">
        <div class="row-fluid">
            <div class="row-fluid sortable">	
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon edit"></i><span class="break"></span><?= $title_page; ?></h2>
                    </div>
                    <div class="box-content">
                        <?php
                        if (!empty($error)) {
                            ?>
                            <div class="alert alert-error">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <?=$error;?>
                            </div>
                            <?php
                        }
                        ?>
                        <form class="form-horizontal" action="<?=$current_url_breadcrumb;?>" method="post">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Username</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="<?=htmlspecialchars(set_value('username'))?>" id="username" name="username">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Email</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="<?=htmlspecialchars(set_value('email'))?>" id="email" name="email">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Phone</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="<?=htmlspecialchars(set_value('phone'))?>" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Password</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="" id="password" name="password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Repeat Password</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="" id="confirm-password" name="confirm-password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="fileInput">Your Avatar</label>
                                    <div class="controls">
                                        <input class="input-file uniform_on" id="fileInput" type="file">
                                    </div>
                                </div>          
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary" id="save" name="save">Save changes</button>
                                    <a href="<?=$url_back;?>"<button type="reset" class="btn">Cancel</button></a>
                                </div>
                            </fieldset>
                        </form>   

                    </div>
                </div><!--/span-->
            </div><!--/row-->
            <!-- end: Content -->
        </div><!--/#content.span10-->
    </div><!--/fluid-row-->
</div>