<div class="sidebar" data-color="purple" data-background-color="white">
<!-- data-image="<?php echo base_url()?>resources/assets/img/PUPLogo.jpg" -->
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="<?php echo base_url()?>admin/dashboard" class="simple-text logo-normal">
          EPS
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li <?php if($this->router->fetch_class() == 'projects') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>admin/projects">
              <i class="material-icons">assignment</i>
              <p>Projects</p>
            </a>
          </li>
        </ul>
      </div>
    </div>