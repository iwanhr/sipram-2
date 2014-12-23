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

    <div class="container-fluid-full">
        <div class="row-fluid">

            <div class="row-fluid sortable">	
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon user"></i><span class="break"></span>Member</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Date registered</th>
                                    <th>Role</th>
                                    <th>Status</th>                                          
                                </tr>
                            </thead>   
                            <tbody>
                                <tr>
                                    <td>Dennis Ji</td>
                                    <td class="center">2012/01/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Dennis Ji</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Dennis Ji</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Admin</td>
                                    <td class="center">
                                        <span class="label">Inactive</span>
                                    </td>                                        
                                </tr>
                                <tr>
                                    <td>Dennis Ji</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>                                       
                                </tr>
                                <tr>
                                    <td>Dennis Ji</td>
                                    <td class="center">2012/01/21</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>                                        
                                </tr>                                   
                            </tbody>
                        </table>  
                        <div class="pagination pagination-centered">
                            <ul>
                                <li><a href="#">Prev</a></li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>     
                    </div>
                </div><!--/span-->
            </div><!--/row-->
            <div class="row-fluid sortable">	
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon user"></i><span class="break"></span>Administrator</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Date registered</th>
                                    <th>Role</th>
                                    <th>Active</th>
                                    <th>Status</th>
                                </tr>
                            </thead>   
                            <tbody>
                            <?php
                            foreach ($dataAdministrator as $k => $v) :
                            ?>
                                <tr>
                                    <td><?=$v->username;?></td>
                                    <td class="center"><?=$v->email;?></td>
                                    <td class="center"><?=$v->date_registered;?></td>
                                    <td class="center"><?=$v->level_name;?></td>
                                    <td class="center"><?php echo $convert->userStatusActive($v->activate);?></td>
                                    <td class="center">
                                        <span class="label label-<?=$convert->userStatus($v->id_status)->id;?>"><?=$convert->userStatus($v->id_status)->label;?></span>
                                    </td>                                       
                                </tr>
                            <?php
                            endforeach;
                            ?>
                            </tbody>
                        </table>  
                        <div class="pagination pagination-centered">
                            <ul>
                                <li><a href="#">Prev</a></li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>     
                    </div>
                </div><!--/span-->
            </div><!--/row-->
            <!-- end: Content -->
        </div><!--/#content.span10-->
    </div><!--/fluid-row