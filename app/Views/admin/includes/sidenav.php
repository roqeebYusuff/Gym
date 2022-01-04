<aside id="left-sidebar-nav">
    <ul id="slide-out" class="sidenav sidenav-fixed leftside-navigation shift">
        <li class="user-view">
            <div class="row">

                <div class="background">
                    <img src="../img/6.jpg">
                </div>
                <a href="#user"><img class="circle" src="../img/avatar/avatar-7.png"></a>

                <div class="col col s8 m8 l8">
                    <!-- profile dropdown -->
                    <ul id="profile-dropdown-nav" class="dropdown-content">
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">face</i> Profile</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">settings</i> Settings</a>
                        </li>
                        <!-- <li>
                            <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">live_help</i> Help</a>
                        </li> -->
                        <li class="divider"></li>
                        <!-- <li>
                            <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">lock_outline</i> Lock</a>
                        </li> -->
                        <li>
                            <a href="<?php base_url(); ?>logout" class="grey-text text-darken-1">
                            <i class="material-icons">keyboard_tab</i> Logout</a>
                        </li>
                    </ul>
                    

                    <a id="user" class="waves-effect waves-light white-text profile-btn" href="#" data-target="profile-dropdown-nav">
                        <?php echo ucfirst($data->surname); ?>
                    </a>

                    <p class="user-roal">Administrator</p>
                </div>
            </div>
        </li>

        <li class="no-padding">
            <ul class="collapsible" data-collapsible="accordion">
                <li class="<?php if($current == 'index'){echo 'active';} ?>">
                    <a href="<?php base_url(); ?>index" class="waves-effect waves-cyan">
                        <i class="material-icons">home</i>
                        <span class="nav-text">Home</span>
                    </a>
                </li>

                <li class="<?php if($current == 'profile'){echo 'active';} ?>">
                    <a href="<?php base_url(); ?>profile" class="waves-effect waves-cyan">
                        <i class="material-icons">account_circle</i>
                        <span class="nav-text">My profile</span>
                    </a>
                </li>

                <li class="<?php if($current == 'password'){echo 'active';} ?>">
                    <a href="<?php base_url(); ?>password" class="waves-effect waves-cyan">
                        <i class="material-icons">settings</i>
                        <span class="nav-text">Change Password</span>
                    </a>
                </li>

                <li class="<?php if($current == 'members'){echo 'active';} ?>">
                    <a href="<?php base_url(); ?>members" class="waves-effect waves-cyan">
                        <i class="material-icons">insert_link</i>
                        <span class="nav-text">Members</span>
                    </a>
                </li>

                <li class="<?php if($current == 'order'){echo 'active';} ?>">
                    <a href="<?php base_url(); ?>orders" class="waves-effect waves-cyan">
                        <i class="material-icons">cast</i>
                        <span class="nav-text">Check Orders</span>
                    </a>
                </li>

                <li>
                    <a class="waves-effect waves-light gradient-45deg-red-pink" href="<?php base_url(); ?>logout">
                    <i class="material-icons">arrow_back</i>Log out
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>