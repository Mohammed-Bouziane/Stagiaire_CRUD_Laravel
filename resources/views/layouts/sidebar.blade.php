<style>
    .sidebar_red {
        background-color: red !important;
        color: white;

    }

    .sidebar_red span {
        font-size: 50px
    }
</style>
<ul class="navbar-nav sidebar_red sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <img width="40" height="40" src="https://img.icons8.com/3d-fluency/94/school-building.png"
                alt="school-building" />
        </div> --}}
        <div class="sidebar-brand-text mx-3">OQP <sup>School</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/profile">
            <img width="20" height="20" src="https://img.icons8.com/ios/50/admin-settings-male.png"
                alt="admin-settings-male" />
            <span>Profile</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <img width="20" height="20"
                src="https://img.icons8.com/external-inkubators-basic-outline-inkubators/32/external-dashboards-dashboard-ui-inkubators-basic-outline-inkubators.png"
                alt="external-dashboards-dashboard-ui-inkubators-basic-outline-inkubators" />
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('stagiaires') }}">
            <img width="20" height="20" src="https://img.icons8.com/ios/50/student-registration.png"
                alt="student-registration" />
            <span>Stagiares</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <img width="20" height="20"
                src="https://img.icons8.com/external-justicon-lineal-justicon/64/000000/external-teacher-avatar-and-occupation-justicon-lineal-justicon.png"
                alt="external-teacher-avatar-and-occupation-justicon-lineal-justicon" />
            <span>Enseignants</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <img width="20" height="20" src="https://img.icons8.com/parakeet-line/48/exam.png" alt="exam" />
            <span>Notes</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <img width="20" height="20" src="https://img.icons8.com/carbon-copy/100/overtime.png"
                alt="overtime" />
            <span>Emplois du temps</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
