<div id="sidebar" class="shadow">
    <ul class="sidebar-nav">
        <!-- Home -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>admin" class="sidebar-link <?php if ($page == 'home') {echo 'active';} ?>">Home</a>
        </li>
        <!-- Book new appointment -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>admin/new-appointment.php" class="sidebar-link <?php if ($page == 'new') {echo 'active';} ?>">Book new appointment</a>
        </li>
        <!-- Incoming appointment -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>admin/incoming.php" class="sidebar-link <?php if ($page == 'incoming') {echo 'active';} ?>">Incoming appointment</a>
        </li>
        <!-- Outgoing appointment -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>admin/outgoing.php" class="sidebar-link <?php if ($page == 'outgoing') {echo 'active';} ?>">Outgoing appointment</a>
        </li>
        <!-- All users -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>admin/users.php" class="sidebar-link <?php if ($page == 'users') {echo 'active';} ?>">All users</a>
        </li>

        <!-- Settings -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>admin/configuration.php" class="sidebar-link <?php if ($page == 'config') {echo 'active';} ?>">Manage Time Slots</a>
        </li>
    </ul>
</div>