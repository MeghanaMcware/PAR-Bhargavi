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


                    <li class="sidebar-list mb-2"><a class="sidebar-link sidebar-title link-nav text-white" href="{{ url('hospital-login/dashboard') }}">
                            <span class="text-white"><i class="bi bi-house-door-fill"></i></span>
                            <span class="text-white">Dashboard</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav text-white"
                            href="{{ url('hospital-login/patient/index') }}">
                            <span class="text-white"><i class="bi bi-shop"></i></span>
                            <span class="text-white">Patients List</span></a>
                    </li>
                  


                </ul>

            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>

<style>
    .page-wrapper.compact-wrapper .page-body-wrapper .page-body {
        margin-top: 0px;
    }

    .sidebar-list {
        margin: 8px 8px !important;
    }
</style>