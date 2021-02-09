<div class="sidebar" data-color="purple" data-background-color="white">
<!-- data-image="<?php echo base_url()?>resources/assets/img/PUPLogo.jpg" -->
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="<?php echo base_url()?>user/dashboard" class="simple-text logo-normal">
          EPS
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li <?php if($this->router->fetch_class() == 'dashboard') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>user/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li <?php if($this->router->fetch_class() == 'projects') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>user/projects">
              <i class="material-icons">assignment</i>
              <p>Projects</p>
            </a>
          </li>
          <li <?php if($this->router->fetch_class() == 'proposal') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>user/proposal">
                  <i class="material-icons">post_add</i>
                  <p>Project Proposal</p>
            </a>
          </li>
          <li <?php if($this->router->fetch_class() == 'monitoring') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>user/monitoring">
                  <i class="material-icons">track_changes</i>
                  <p>Project Monitoring</p>
              </a>
          </li>
          <li <?php if($this->router->fetch_class() == 'evaluation') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>user/evaluation">
                <i class="material-icons">manage_search</i>
                <p>Project Evaluation</p>
            </a>
            
           <ul style="padding-left:15px; padding-top:10px; list-style-type:none;">
              <li <?php if($this->router->fetch_class() == 'proposal') {?> class="active has-sub" <?php } ?>>
                <a class="nav-link" href="<?php echo base_url()?>user/proposal">
                  <i class="material-icons">post_add</i>
                  <p  style="font-size:12px">Project Proposal</p>
                </a>
              </li>
              <li <?php if($this->router->fetch_class() == 'monitoring') {?> class="active has-sub" <?php } ?>>
                <a class="nav-link" href="<?php echo base_url()?>user/monitoring">
                  <i class="material-icons">track_changes</i>
                  <p  style="font-size:12px">Project Monitoring</p>
                </a>
              </li>
              <li <?php if($this->router->fetch_class() == 'evaluation') {?> class="active has-sub" <?php } ?>>
                <a class="nav-link" href="<?php echo base_url()?>user/evaluation">
                  <i class="material-icons">manage_search</i>
                  <p style="font-size:12px">Project Evaluation</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <!--    <ul style="padding-left:15px; padding-top:10px; list-style-type:none;">
              <li <?php if($this->router->fetch_class() == 'proposal') {?> class="active has-sub" <?php } ?>>
                <a class="nav-link" href="<?php echo base_url()?>user/proposal">
                  <i class="material-icons">post_add</i>
                  <p  style="font-size:12px">Project Proposal</p>
                </a>
              </li>
              <li <?php if($this->router->fetch_class() == 'monitoring') {?> class="active has-sub" <?php } ?>>
                <a class="nav-link" href="<?php echo base_url()?>user/monitoring">
                  <i class="material-icons">track_changes</i>
                  <p  style="font-size:12px">Project Monitoring</p>
                </a>
              </li>
              <li <?php if($this->router->fetch_class() == 'evaluation') {?> class="active has-sub" <?php } ?>>
                <a class="nav-link" href="<?php echo base_url()?>user/evaluation">
                  <i class="material-icons">manage_search</i>
                  <p style="font-size:12px">Project Evaluation</p>
                </a>
              </li>
            </ul> -->