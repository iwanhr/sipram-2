<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="<?=$url_home;?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>   
            <li><a href="<?=base_url('secretadmin/inventory');?>"><i class="icon-folder-open"></i><span class="hidden-tablet"> Invetory</span></a></li>
            <li><a href="<?=base_url('secretadmin/member');?>"><i class="halflings-icon white user" style="margin-left:0.1em"></i><span class="hidden-tablet" style="margin-left:0.4em"> Member</span></a></li>
            <li><a href="<?=base_url('secretadmin/events');?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> Events</span></a></li>
            <!-- <li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li> -->
            <!-- <li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li> -->
            <!-- <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li> -->
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Post</span><span class="label label-important"></span></a>
                <ul>
                    <li><a class="submenu" href="<?=base_url('secretadmin/post');?>"><i class="icon-edit"></i><span class="hidden-tablet"> Single Post</span></a></li>
                    <li><a class="submenu" href="<?=base_url('secretadmin/product');?>"><i class="icon-edit"></i><span class="hidden-tablet"> Product</span></a></li>
                    <li><a class="submenu" href="<?=base_url('secretadmin/page');?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Page</span></a></li>
                </ul>   
            </li>

            <!-- <li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li> -->
            <!-- <li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li> -->
            <!-- <li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li> -->
            <!-- <li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li> -->
            <!-- <li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li> -->
            <!-- <li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li> -->
            <!-- <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li> -->
        </ul>
    </div>
</div>
<!-- end: Main Menu -->