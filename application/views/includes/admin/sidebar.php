<div class="sidebar" data-color="azure" data-background-color="white">
<!-- data-image="<?php echo base_url()?>resources/assets/img/PUPLogo.jpg" -->
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="<?php echo base_url()?>admin/dashboard" class="simple-text logo-normal">
          EPMS
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li <?php if($this->router->fetch_class() == 'dashboard') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>admin/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li <?php if($this->router->fetch_class() == 'implementer') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>admin/implementer">
                  <i class="material-icons">post_add</i>
                  <p>Implementer</p>
            </a>
          </li>
          <li <?php if($this->router->fetch_class() == 'campuses') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>admin/campuses">
                  <i class="material-icons">roofing</i>
                  <p>Campuses</p>
            </a>
          </li>
          <li <?php if($this->router->fetch_class() == 'branches') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>admin/branches">
                  <i class="material-icons">foundation</i>
                  <p>Branches</p>
            </a>
          </li>
          <li <?php if($this->router->fetch_class() == 'colleges') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>admin/colleges">
                  <i class="material-icons">school</i>
                  <p>Colleges</p>
            </a>
          </li>
          <li <?php if($this->router->fetch_class() == 'users') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>admin/users">
                  <i class="material-icons">track_changes</i>
                  <p>User Role</p>
            </a>
          </li>
          <li <?php if($this->router->fetch_class() == 'reports') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>admin/reports">
                <i class="material-icons">manage_search</i>
                <p>Reports</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!--    <ul style="padding-left:15px; padding-top:10px; list-style-type:none;">
              <li <?php if($this->router->fetch_class() == 'proposal') {?> class="active has-sub" <?php } ?>>
                <a class="nav-link" href="<?php echo base_url()?>admin/proposal">
                  <i class="material-icons">post_add</i>
                  <p  style="font-size:12px">Project Proposal</p>
                </a>
              </li>
              <li <?php if($this->router->fetch_class() == 'monitoring') {?> class="active has-sub" <?php } ?>>
                <a class="nav-link" href="<?php echo base_url()?>admin/monitoring">
                  <i class="material-icons">track_changes</i>
                  <p  style="font-size:12px">Project Monitoring</p>
                </a>
              </li>
              <li <?php if($this->router->fetch_class() == 'evaluation') {?> class="active has-sub" <?php } ?>>
                <a class="nav-link" href="<?php echo base_url()?>admin/evaluation">
                  <i class="material-icons">manage_search</i>
                  <p style="font-size:12px">Project Evaluation</p>
                </a>
              </li>
            </ul> -->