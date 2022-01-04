<header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <a href="<?php base_url(); ?>index" class="brand-logo"><img src="../img/logo.png" alt="logo" style="padding-left: 10px; padding-top:10px; height:50px; width:120px;"></a>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">

              <li style="padding-right: 20px;">
                <a href="#" class="waves-effect waves-block waves-light profile-button" data-target="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="../img/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                </a> 
              </li>

            </ul>

            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Profile</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Settings</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Lock</a>
              </li>
              <li>
                <a href="<?php base_url(); ?>logout" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
</header>