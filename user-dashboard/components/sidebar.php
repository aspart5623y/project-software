<div id="sidebar" class="shadow">
    <ul class="sidebar-nav">
        <!-- Home -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>user-dashboard" class="sidebar-link <?php if ($page == 'home') {echo 'active';} ?>">Home</a>
        </li>
        <!-- Book new appointment -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>user-dashboard/new-appointment.php" class="sidebar-link <?php if ($page == 'new') {echo 'active';} ?>">Book new appointment</a>
        </li>
        <!-- Incoming appointment -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>user-dashboard/incoming.php" class="sidebar-link <?php if ($page == 'incoming') {echo 'active';} ?>">Incoming appointment</a>
        </li>
        <!-- Outgoing appointment -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>user-dashboard/outgoing.php" class="sidebar-link <?php if ($page == 'outgoing') {echo 'active';} ?>">Outgoing appointment</a>
        </li>
    </ul>
</div>