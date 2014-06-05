<!--
TODO:
- Reroute all of the navigational functions
- Find a way to connect the database systems together...

-->

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        
        <!-- Profile Section -->
        <ul class="nav" id="side-menu">
        <li>
            <div class="user-info-wrapper">	
                <!-- Profile Image -->
                <div class="user-info-profile-image"><img src="<?php echo url::get_template_path();?>img/profile.jpg" alt="" width="65" height="65" /></div>

                <!-- Profile Information + Welcome! -->
                <div class="user-info">
                    <div class="user-welcome">Welcome</div>
                    <div class="username">John <strong>Doe</strong></div>
                    <div class="status">Status <span class="status-now"><i class="fa fa-circle text-emerald fa"></i> Online</span> </div>
                </div>
            </div>
        </li>
        
        <li><a href="/"><i class="fa fa-dashboard fa-fw fa-3x"></i> Dashboard</a></li>
        
        <li><a href="track"><i class="fa fa-map-marker fa-fw fa-3x"></i> Track</a></li>
        
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw fa-3x"></i> Analytics<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="flot.html">Flot Charts</a></li>
                <li><a href="morris.html">Morris.js Charts</a></li>
            </ul>
        </li>
        
        <li>
            <a href="#"><i class="fa fa-gear fa-fw fa-3x"></i> Settings<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="flot.html">System Account</a></li>
                <li><a href="morris.html">Device</a></li>
                <li><a href="morris.html">Alert and Notification</a></li>
            </ul>
        </li>

        <li><a href="#"><i class="fa fa-power-off fa-fw fa-3x"></i> Logout</a></li>

        </ul>

    </div>
</nav>
