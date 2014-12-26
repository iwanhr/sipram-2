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
        <a href="<?= base_url('secretadmin/member/new_member'); ?>"><button class="btn btn-small btn-primary"><i class="halflings-icon white user"></i> Add Member</button></a>
    </div>
    <div class="container-fluid-full" style="border:2px black">
        <div class="row-fluid">
            <div class="row-fluid sortable">	
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon user"></i><span class="break"></span>Post</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                    <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th style="width:20%">Post Title</th>
                                    <th>Short Content</th>
                                    <th>Category</th>
                                    <th>Channel</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th style="width:12%"><div align="center">Actions</div></th>
                                </tr>
                            </thead>   
                            <tbody>
                                <?php
                                foreach ($dataPost as $k => $v) :
                                    ?>
                                    <tr>
                                        <td><?= $v->post_title; ?></td>
                                        <td class="center"><?= $v->post_short_content; ?></td>
                                        <td class="center"><?= $v->post_category; ?></td>
                                        <td class="center"><?= $v->post_channel; ?></td>
                                        <td class="center"><?= $v->post_author; ?></td>
                                        <td class="center"><span class="label label-<?= htmlspecialchars($convert->userStatus($v->post_status)->id); ?>"><?= htmlspecialchars($convert->postStatus($v->post_status)->label); ?></span></td>                                       
                                   <td><div align="center">
                                                <a class="btn btn-success" href="#" style="padding: 1px 6px"><i class="halflings-icon white zoom-in"></i></a>
                                                <a class="btn btn-info" href="#" style="padding: 1px 6px"><i class="halflings-icon white edit"></i></a>
                                                <a class="btn btn-danger" href="" style="padding: 1px 6px"><i class="halflings-icon white trash"></i></a>
                                            </div></td> 
                                    </tr>
                                    <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div><!--/span-->
            </div><!--/row-->
            <!-- end: Content -->
        </div><!--/#content.span10-->
    </div><!--/fluid-row-->
</div>
