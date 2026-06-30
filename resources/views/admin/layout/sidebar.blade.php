<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="" class="d-flex flex-row align-items-center gap-2"><img
                    class="img-fluid for-light" src="{{asset('/theme/images/GBA-removebg-preview.png') }}" alt=""><img
                    class="img-fluid for-dark" src="{{asset('/theme/images/GBA-removebg-preview.png') }}"
                    alt=""><span>Admin - PAR-BHARGAVI</span></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        </div>
        <div class="logo-icon-wrapper"><a href=""><img class="img-fluid" src="{{asset('/theme/images/logo-icon.png') }}"
                    alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links " id="simple-bar">
                    <li class="back-btn"><a href=""><img class="img-fluid"
                                src="{{asset('/theme/images/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"> </i></div>
                    </li>


                    <li class="sidebar-list mb-2"><a class="sidebar-link sidebar-title link-nav text-white" href="{{ url('/dashboard') }}">
                            <span class="text-white"><i class="bi bi-house-door-fill"></i></span>
                            <span class="text-white">Dashboard</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav text-white {{ request()->routeIs('patient/index') ? 'active1' : '' }}"
                            href="{{ url('patient/index') }}" >
                            <span class="text-white"><i class="bi bi-person"></i></span>
                            <span class="text-white">Add Patient</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav text-white {{ request()->routeIs('registered/list') ? 'active' : '' }}"
                            href="{{ url('registered/list') }}" >
                            <span class="text-white"><i class="bi bi-person"></i></span>
                            <span class="text-white">Registered Hospitals</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title d-flex flex-row gap-2 text-white"
                            href="#">
                            <span class="text-white"><i class="bi bi-gear-fill"></i></span><span
                                class="text-white">Master</span></a>
                        <ul class="sidebar-submenu ">


                            <li>
                                <a class="sidebar-link sidebar-title link-nav text-white"
                                    href="{{ route('admin.hospital.index') }}">
                                    <i class="bi bi-building text-white"></i> <span
                                        class="text-white">Hospitals</span>
                                </a>
                            </li>
                            <!-- <li>
                                <a class="sidebar-link sidebar-title link-nav text-white"
                                    href="{{ url('/patient/index') }}">
                                    <i class="bi bi-geo-alt text-white"></i> <span class="text-white">Patient</span>
                                </a>
                            </li> -->
                           
                            <li>
                                <a class="sidebar-link sidebar-title link-nav text-white"
                                    href="{{ url('admin/version/index') }}">
                                    <i class="bi bi-file-earmark-text text-white"></i> <span
                                        class="text-white">Version</span>
                                </a>
                            </li>

                        </ul>
                    </li>


                </ul>

            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>

<style>
    .sidebar-link.active {
    background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%) !important;
    border-color: #ff6b6b !important;
    color: #ffffff !important;
    box-shadow: 0 5px 20px rgba(255, 107, 107, 0.4) !important;
}
    .page-wrapper.compact-wrapper .page-body-wrapper .page-body {
        margin-top: 0px;
    }

    .sidebar-list {
        margin: 8px 8px !important;
    }
 .active1 {
    background-color: #0d6efd !important;
    color: #fff !important;
    border-radius: 8px;
}

.active1 span,
.active1 i {
    color: #fff !important;
}
</style>