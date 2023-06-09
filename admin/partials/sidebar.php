<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?= $user_data['fullname'] ?></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item <?php if ($page == 'home'){ echo 'active'; } ?>">
        <a class="nav-link" href="index.php">
            <i class="bi bi-house">
            </i> <span>Home</span></a>
    </li>
    <li class="nav-item <?php if ($page == 'about'){ echo 'active'; } ?>">
        <a class="nav-link" href="about.php">
            <i class="bi bi-file-person"></i>
            <span>About</span>
        </a>
    </li>
    <li class="nav-item <?php if ($page == 'resume'){ echo 'active'; } ?>">
        <a class="nav-link" href="resume.php">
            <i class="bi bi-file-break"></i>
            <span>Resume</span>
        </a>
    </li>
    <li class="nav-item <?php if ($page == 'portfolio'){ echo 'active'; } ?>">
        <a class="nav-link" href="portfolio.php">
            <i class="bi bi-briefcase"></i>
            <span>Portfolio</span>
        </a>
    </li>
    <li class="nav-item <?php if ($page == 'contact'){ echo 'active'; } ?>">
        <a class="nav-link" href="contact.php">
            <i class="bi bi-person-rolodex"></i>
            <span>Contact</span></a>
    </li>
    <li class="nav-item <?php if ($page == 'profile'){ echo 'active'; } ?>">
        <a class="nav-link" href="profile.php">
            <i class="bi bi-person"></i>
            <span>Profile</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link" href="logout.php">
            <i class="bi bi-box-arrow-left"></i>
            <span>Logout</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>