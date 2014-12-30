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
                                    <label class="control-label" for="focusedInput">Event name</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="<?=htmlspecialchars(set_value('event_name'))?>" id="event_name" name="event_name">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Type</label>
                                    <div class="controls">
                                        <select id="listType" name="listType">
                                            <?php
                                            foreach ($listType as $v) {
                                               ?>
                                            <option value="<?=$v['id'];?>"><?=$v['label'];?></option>
                                                <?php 
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Program</label>
                                    <div class="controls">
                                         <select id="listProgram" name="listProgram">
                                            <?php
                                            foreach ($listProgram as $v) {
                                               ?>
                                            <option value="<?=$v['id'];?>"><?=$v['label'];?></option>
                                                <?php 
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Date Start</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge datepicker" id="dateStart" name="datestart" value="02/16/12">                               
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Date End</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge datepicker" id="dateEnd" name="dateEnd" value="02/16/12">                               
                                    </div>
                                </div>
                                <div class="control-group hidden-phone">
                                    <label class="control-label" for="textarea2">Description</label>
                                    <div class="controls">
                                        <textarea class="cleditor" id="description" name="description" rows="3"></textarea>
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
