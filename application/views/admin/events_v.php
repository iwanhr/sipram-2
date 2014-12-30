<!-- start: Content -->
<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?= $url_home; ?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="<?= $current_url_breadcrumb; ?>"><?= $title_page; ?></a></li>
    </ul>
    <div style="margin-top:-1em;margin-bottom:1em">
        <a href="<?= base_url('secretadmin/events/new_event'); ?>"><button class="btn btn-small btn-primary"><i class="halflings-icon white"></i> Add Events</button></a>
    </div>
    <div class="container-fluid-full" style="border:2px black">
        <div class="row-fluid">
            <div class="row-fluid sortable">	
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Events</h2>
                        <div class="box-icon">
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th style="width:22%">Event Name</th>
                                    <th style="width:18%">Type</th>
                                    <th>Description</th>
                                    <th style="width: 5%;text-align:center">Status</th>
                                    <th style="width:11%"><div align="center">Actions</div></th>
                                </tr>
                            </thead>   
                            <tbody>
                                <?php
                                $noUrut = 0;
                                foreach ($dataEvents as $k => $v) :
                                    ++$noUrut;    
                                    ?>
                                    <tr>
                                        <td><?= $noUrut; ?></td>
                                        <td><?= $v->event_name; ?></td>
                                        <td><?= $v->type->event_type_name_parent; ?> <small>></small> <?= $v->type->event_type_name; ?></td>
                                        <td><?= $v->event_short_description; ?></td>
                                        <td><div align="center">
                                            <span class="label label-<?= $convert->eventStatus($v->event_status)->id; ?>"><?= $convert->eventStatus($v->event_status)->label; ?></span></div>
                                        </td>
                                        <td><div align="center">
                                                <a class="btn btn-success" href="#" style="padding: 1px 6px"><i class="halflings-icon white zoom-in"></i></a>
                                                <a class="btn btn-info" href="#" style="padding: 1px 6px"><i class="halflings-icon white edit"></i></a>
                                                <a class="btn btn-danger" href="" style="padding: 1px 6px"><i class="halflings-icon white trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                                ?>
                            </tbody>                          
                        </table>
                                <div class="pagination pagination-centered">
                        <?=$paginator?>
                                </div>  
                    </div>
                </div><!--/span-->
            </div><!--/row-->
           <!-- end: Content -->
        </div><!--/#content.span10-->
    </div><!--/fluid-row-->
</div>
