<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description"
        content="AAWMS">
    <meta name="keywords"
        content="AAWMS">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('pwa/images/GBA-removebg-preview.png')}}">
    <title>@yield('title') - AAWMS Admin</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/theme/css/vendors/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('/theme/css/vendors/icofont.css') }}">
    <!-- Feather icon-->
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('/theme/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('/theme/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('/theme/css/vendors/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('/theme/css/vendors/date-picker.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/theme/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('/theme/css/vendors/select2.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/theme/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('/theme/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{asset('/theme/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/theme/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
    .btn-close.white-close {
        filter: invert(1);
    }

    .select2-selection {
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
    }

    .select2-container .select2-selection--multiple {
        min-height: 38px !important;
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple {
        border: solid #00000026 1px !important;
    }

    /* Enhanced Sidebar Styling */
    .sidebar-wrapper {
        background: linear-gradient(135deg, #667eea 0%, #1e3a8a 100%) !important;
        box-shadow: 4px 0 15px rgba(0, 0, 0, 0.1);
    }

    .sidebar-links {
        background: transparent !important;
    }

    .sidebar-list {
        margin: 4px 8px !important;
    }

    .sidebar-link {
        background: rgba(255, 255, 255, 0.1) !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        border-radius: 12px !important;
        color: #ffffff !important;
        padding: 12px 16px !important;
        transition: all 0.3s ease !important;
        backdrop-filter: blur(10px) !important;
        font-weight: 500 !important;
        position: relative !important;
        overflow: hidden !important;
    }

    .sidebar-link::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: -100% !important;
        width: 100% !important;
        height: 100% !important;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent) !important;
        transition: left 0.5s ease !important;
    }

    .sidebar-link:hover::before {
        left: 100% !important;
    }

    .sidebar-link:hover {
        background: rgba(255, 255, 255, 0.25) !important;
        border-color: rgba(255, 255, 255, 0.4) !important;
        color: #ffffff !important;
        transform: translateX(4px) !important;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
    }

    .sidebar-link.active {
        background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%) !important;
        border-color: #ff6b6b !important;
        color: #ffffff !important;
        box-shadow: 0 5px 20px rgba(255, 107, 107, 0.4) !important;
    }

    .sidebar-link i {
        color: #ffffff !important;
        font-size: 18px !important;
        margin-right: 12px !important;
        transition: all 0.3s ease !important;
    }

    .sidebar-link:hover i {
        transform: scale(1.1) !important;
        color: #ffd700 !important;
    }

    .sidebar-submenu {
        background: rgba(0, 0, 0, 0.2) !important;
        border-radius: 8px !important;
        margin-top: 8px !important;
        padding: 8px !important;
        backdrop-filter: blur(5px) !important;
    }

    .sidebar-submenu li {
        margin: 4px 0 !important;
    }

    .sidebar-submenu .sidebar-link {
        background: rgba(255, 255, 255, 0.05) !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        padding: 10px 12px !important;
        font-size: 14px !important;
        border-radius: 8px !important;
    }

    .sidebar-submenu .sidebar-link:hover {
        background: rgba(255, 255, 255, 0.15) !important;
        border-color: rgba(255, 255, 255, 0.3) !important;
    }

    .logo-wrapper {
        background: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(10px) !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2) !important;
    }

    .logo-wrapper a {
        color: #ffffff !important;
        font-weight: 600 !important;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3) !important;
    }

    .logo-wrapper a:hover {
        color: #ffd700 !important;
    }

    .back-btn {
        color: #ffffff !important;
        transition: all 0.3s ease !important;
    }

    .back-btn:hover {
        color: #ffd700 !important;
        transform: rotate(180deg) !important;
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
        .sidebar-wrapper {
            background: linear-gradient(135deg, #667eea 0%, #1e3a8a 100%) !important;
        }
        
        .sidebar-link {
            padding: 14px 18px !important;
        }
    }

    /* Animation for sidebar items */
    @keyframes slideInFromLeft {
        0% {
            opacity: 0;
            transform: translateX(-20px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .sidebar-list {
        animation: slideInFromLeft 0.5s ease-out !important;
    }

    .sidebar-list:nth-child(1) { animation-delay: 0.1s !important; }
    .sidebar-list:nth-child(2) { animation-delay: 0.2s !important; }
    .sidebar-list:nth-child(3) { animation-delay: 0.3s !important; }
    .sidebar-list:nth-child(4) { animation-delay: 0.4s !important; }
    .sidebar-list:nth-child(5) { animation-delay: 0.5s !important; }

    /* Enhanced Header Styling */
    .page-header {
        background: linear-gradient(135deg, #667eea 0%, #1e3a8a 100%) !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1) !important;
        border-bottom: none !important;
        position: relative !important;
        z-index: 1000 !important;
    }

    .page-header::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        background: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, transparent 50%, rgba(255,255,255,0.1) 100%) !important;
        pointer-events: none !important;
    }

    .header-wrapper {
        background: transparent !important;
        position: relative !important;
        z-index: 1 !important;
    }

    .logo-wrapper {
        background: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(10px) !important;
        border-radius: 12px !important;
        padding: 8px 16px !important;
        margin: 8px !important;
        transition: all 0.3s ease !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
    }

    .logo-wrapper:hover {
        background: rgba(255, 255, 255, 0.2) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
    }

    .logo-wrapper img {
        /* filter: brightness(0) invert(1) !important; */
        transition: all 0.3s ease !important;
    }

    .logo-wrapper:hover img {
        filter: brightness(0) invert(1) sepia(1) hue-rotate(45deg) saturate(5) !important;
    }

    .toggle-sidebar {
        background: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(10px) !important;
        border-radius: 12px !important;
        margin: 8px !important;
        padding: 12px !important;
        transition: all 0.3s ease !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
    }

    .toggle-sidebar:hover {
        background: rgba(255, 255, 255, 0.2) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
    }

    .toggle-sidebar svg {
        stroke: #ffffff !important;
        transition: all 0.3s ease !important;
    }

    .toggle-sidebar:hover svg {
        stroke: #ffd700 !important;
        transform: rotate(90deg) !important;
    }

    .nav-right {
        background: transparent !important;
    }

    .profile-nav {
        background: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(10px) !important;
        border-radius: 12px !important;
        margin: 8px !important;
        padding: 8px 16px !important;
        transition: all 0.3s ease !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
    }

    .profile-nav:hover {
        background: rgba(255, 255, 255, 0.2) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
    }

    .profile-nav a {
        color: #ffffff !important;
        text-decoration: none !important;
        transition: all 0.3s ease !important;
    }

    .profile-nav:hover a {
        color: #ffd700 !important;
    }

    .profile-nav i {
        color: #ffffff !important;
        transition: all 0.3s ease !important;
    }

    .profile-nav:hover i {
        color: #ffd700 !important;
        transform: scale(1.1) !important;
    }

    .bi-box-arrow-right {
        font-size: 1.25rem !important;
    }

    /* Header responsive */
    @media (max-width: 768px) {
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #1e3a8a 100%) !important;
        }
        
        .logo-wrapper {
            margin: 4px !important;
            padding: 6px 12px !important;
        }
        
        .toggle-sidebar {
            margin: 4px !important;
            padding: 8px !important;
        }
        
        .profile-nav {
            margin: 4px !important;
            padding: 6px 12px !important;
        }
    }

    /* Header animation */
    @keyframes slideDown {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .page-header {
        animation: slideDown 0.6s ease-out !important;
    }

    </style>
    @yield('style')
<style>
    /* DataTables Pagination Override */
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        color: #0d6efd !important;
        background: #fff !important;
        border: 1px solid #dee2e6 !important;
        border-radius: 5px !important;
        padding: 5px 12px !important;
        margin: 0 2px !important;
        font-weight: 600 !important;
        cursor: pointer !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: #0d6efd !important;
        color: white !important;
        border-color: #0d6efd !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        background: #198754 !important;
        border-color: #198754 !important;
        border-radius: 5px !important;
        color: white !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {
        color: #6c757d !important;
        background: #f8f9fa !important;
        border-color: #dee2e6 !important;
        cursor: not-allowed !important;
    }
    </style>
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-ball"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="fa-solid fa-arrow-up"></i></div>
    <!-- tap on tap ends-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('admin.layout.header')
        <div class="page-body-wrapper">
            @include('admin.layout.sidebar')
            <div class="page-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    @include('admin.layout.footer')
    <!-- latest jquery-->
    <script src="{{asset('/theme/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{asset('/theme/js/select2/select2.full.min.js') }}"></script>
    <script src="{{asset('/theme/js/select2/select2-custom.js') }}"></script>
    <!-- Bootstrap js-->

    <script src="{{asset('/theme/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <script src="{{asset('/theme/js/datepicker/daterange-picker/moment.min.js') }}"></script>
    <script src="{{asset('/theme/js/datepicker/daterange-picker/daterangepicker.js') }}"></script>
    <script src="{{asset('/theme/js/datepicker/daterange-picker/daterange-picker.custom.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{asset('/theme/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('/theme/js/datatable/datatables/datatable.custom.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('/theme/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{asset('/theme/js/tooltip-init.js') }}"></script>
    <script src="{{asset('/theme/js/scrollbar/custom.js') }}"></script>







    <!-- Sidebar jquery-->
    <script src="{{asset('/theme/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('/theme/js/sidebar-menu.js') }}"></script>
    <script src="{{asset('/theme/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{asset('/theme/js/height-equal.js') }}"></script>

    <script src="{{asset('/theme/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{asset('/theme/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{asset('/theme/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{asset('/theme/js/form-wizard/form-wizard-three.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('/theme/js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: @json(session('success')),
            confirmButtonColor: '#1f4e79'
        });
    </script>
    @endif
    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: @json(session('error')),
            confirmButtonColor: '#c0392b'
        });
    </script>
    @endif
    <script>
        window.adminConfirmDelete = function (form, title = 'Delete this record?') {
            Swal.fire({
                icon: 'warning',
                title: title,
                text: 'This action cannot be undone.',
                showCancelButton: true,
                confirmButtonColor: '#c0392b',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Delete',
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });

            return false;
        };
    </script>
    <script>
        async function compressImage(file) {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = (e) => {
                    const img = new Image();
                    img.src = e.target.result;
                    img.onload = () => {
                        const canvas = document.createElement('canvas');
                        const MAX_WIDTH = 1200;
                        let width = img.width;
                        let height = img.height;

                        if (width > MAX_WIDTH) {
                            height *= MAX_WIDTH / width;
                            width = MAX_WIDTH;
                        }

                        canvas.width = width;
                        canvas.height = height;
                        const ctx = canvas.getContext('2d');
                        ctx.drawImage(img, 0, 0, width, height);

                        canvas.toBlob((blob) => {
                            resolve(new File([blob], file.name.replace(/\.[^/.]+$/, "") + ".jpg", {
                                type: 'image/jpeg',
                                lastModified: Date.now()
                            }));
                        }, 'image/jpeg', 0.7);
                    };
                };
                reader.onerror = reject;
            });
        }

        async function handleImageUpload(input) {
            if (!input.files || input.files.length === 0) return;

            const files = Array.from(input.files);
            const isAnyImage = files.some(f => f.type.startsWith('image/'));
            if (!isAnyImage || input.getAttribute('data-no-compress')) return;

            // Show Existing Admin Loader
            const loader = document.querySelector('.loader-wrapper');
            if (loader) {
                loader.style.display = 'flex';
                loader.style.opacity = '1';
                loader.style.visibility = 'visible';
            }

            try {
                const compressedFiles = await Promise.all(files.map(async (file) => {
                    if (file.type.startsWith('image/') && file.size > 200 * 1024) { // Only if > 200KB
                        return await compressImage(file);
                    }
                    return file;
                }));

                const dataTransfer = new DataTransfer();
                compressedFiles.forEach(f => dataTransfer.items.add(f));
                input.files = dataTransfer.files;

                // Trigger change event manually so other listeners know it's updated
                input.dispatchEvent(new Event('change', { bubbles: true }));
            } catch (err) {
                console.error('Compression Error:', err);
            } finally {
                if (loader) {
                    loader.style.display = 'none';
                }
            }
        }

        document.addEventListener('change', function(e) {
            if (e.target.tagName === 'INPUT' && e.target.type === 'file' && !e.target.hasAttribute('data-compressing')) {
                e.target.setAttribute('data-compressing', 'true');
                handleImageUpload(e.target).finally(() => {
                    e.target.removeAttribute('data-compressing');
                });
            }
        }, true);
    </script>
    @yield('script')
</body>

</html>
