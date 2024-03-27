

<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.4
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en" >
    <!--begin::Head-->
    <head>
        <title>SMKN 1 Jakarta</title>
        <meta charset="utf-8"/>
        <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        "/>
        <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        "/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
        <meta property="og:url" content="https://keenthemes.com/metronic"/>
        <meta property="og:site_name" content="Metronic by Keenthemes" />
        <link rel="canonical" href="https://preview.keenthemes.comhttps://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/sign-up.html"/>
        <link rel="shortcut icon" href="https://preview.keenthemes.comhttps://preview.keenthemes.com/metronic8/demo1/assets/media/logos/favicon.ico"/>

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        </style>
        
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="https://preview.keenthemes.com/metronic8/demo1/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->
        
                    <!--begin::Google tag-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-37564768-1');
</script>
<!--end::Google tag-->        
        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
        </script>
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat" >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}			
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}            
</script>
<!--end::Theme mode setup on page load-->
                    <!--Begin::Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End::Google Tag Manager (noscript) -->
        
        <!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
<style>
    body {
        background-image: url('https://preview.keenthemes.com/metronic8/demo1/assets/media/auth/bg4.jpg');
    }

    [data-bs-theme="dark"] body {
        background-image: url('https://preview.keenthemes.com/metronic8/demo1/assets/media/auth/bg4-dark.jpg');
    }
</style>
<!--end::Page bg image-->

<!--begin::Authentication - Sign-up -->
<div class="d-flex flex-column flex-column-fluid flex-lg-row">
    <!--begin::Aside-->
    <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">              
        <!--begin::Aside-->
        <div class="d-flex flex-center flex-lg-start flex-column">              
            <!--begin::Logo-->
            <a href="https://preview.keenthemes.com/metronic8/demo1/index.html" class="mb-7">
                <img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/logos/custom-3.svg"/>
            </a>    
            <!--end::Logo-->            

            <!--begin::Title-->
            <h2 class="text-white fw-normal m-0"> 
                Branding tools designed for your business
            </h2>  
            <!--end::Title-->         
        </div>
        <!--begin::Aside-->    
    </div>
    <!--begin::Aside-->

    <!--begin::Body-->
    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
        <!--begin::Card-->
        <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
            <!--begin::Wrapper-->
            <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                
<!--begin::Form-->
<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="{{ route('login') }}" action="{{ route('regis-proses') }}" method="POST">
    @csrf
    <!-- @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->
    <div class="text-center mb-11">
        <h1 class="text-gray-900 fw-bolder mb-3">
            Sign Up
        </h1>
        <div class="text-gray-500 fw-semibold fs-6">
            Your Social Campaigns
        </div>
    </div>
    <div class="fv-row mb-9">
        <input type="number" placeholder="Nis" name="nis" autocomplete="off" class="form-control bg-transparent" /> 
    </div>
    <div class="fv-row mb-9">
        <input type="text" placeholder="Nama" name="name" autocomplete="off" class="form-control bg-transparent"/> 
    </div>
    <div class="fv-row mb-9">
        <input type="text" placeholder="Kelas" name="kelas" autocomplete="off" class="form-control bg-transparent"/> 
    </div>
    <div class="fv-row mb-9">   
        <input type="text" placeholder="Phone Number" name="phone" autocomplete="off" class="form-control bg-transparent"/> 
    </div>
    <div class="fv-row mb-8">
        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent"/> 
    </div>
    <div class="fv-row mb-8" data-kt-password-meter="true">
        <div class="mb-1">
            <div class="position-relative mb-3">    
                <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" autocomplete="off"/>
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="ki-duotone ki-eye-slash fs-2"></i>                    <i class="ki-duotone ki-eye fs-2 d-none"></i>                </span>
            </div>
            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
        </div>
        <div class="text-muted">
            Use 8 or more characters with a mix of letters, numbers & symbols.
        </div>
    </div>
    <div class="fv-row mb-8">    
        <input type="password" placeholder="Repeat Password" type="password" autocomplete="off" class="form-control bg-transparent"/>
    </div>
    <div class="fv-row mb-8">
        <label class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toc" value="1"/>
            <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                I Accept the <a href="#" class="ms-1 link-primary">Terms</a>
            </span>
        </label>
    </div>
    <div class="d-grid mb-10">
        <button type="submit" class="btn btn-primary"><span class="indicator-label">Sign up</span><span class="indicator-progress">Please wait...    <span class="spinner-border spinner-border-sm-middle ms-2"></span></span></button>
    </div>
</form>
    <div class="text-gray-500 text-center fw-semibold fs-6">
        Already have an Account?
            <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/sign-in.html" class="link-primary fw-semibold">
                Sign in
            </a>
        </div>
        <!--end::Sign up-->
    <!--end::Form--> 
            </div>
            <!--end::Wrapper-->

            <!--begin::Footer-->  
            <div class="d-flex flex-stack px-lg-10">
                <!--begin::Languages-->
                <div class="me-0">             
                    <!--begin::Toggle-->
                    <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                        <img  data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/flags/united-states.svg" alt=""/>
                        
                        <span data-kt-element="current-lang-name" class="me-1">English</span>

                        <i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>                    
                    </button>
                    <!--end::Toggle-->

                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
                                                    <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/flags/united-states.svg" alt=""/>
                                    </span>
                                    <span data-kt-element="lang-name">English</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/flags/spain.svg" alt=""/>
                                    </span>
                                    <span data-kt-element="lang-name">Spanish</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/flags/germany.svg" alt=""/>
                                    </span>
                                    <span data-kt-element="lang-name">German</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/flags/japan.svg" alt=""/>
                                    </span>
                                    <span data-kt-element="lang-name">Japanese</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/flags/france.svg" alt=""/>
                                    </span>
                                    <span data-kt-element="lang-name">French</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                                            </div>
                    <!--end::Menu-->           
                </div>
                <!--end::Languages--> 

                <!--begin::Links-->
                <div class="d-flex fw-semibold text-primary fs-base gap-5">
                    <a href="https://preview.keenthemes.com/metronic8/demo1/pages/team.html" target="_blank">Terms</a>

                    <a href="https://preview.keenthemes.com/metronic8/demo1/pages/pricing/column.html" target="_blank">Plans</a>
                    
                    <a href="https://preview.keenthemes.com/metronic8/demo1/pages/contact.html" target="_blank">Contact Us</a>
                </div>
            </div>
                </div>
            </div>
        </div>
        </div>  
        
        <script>
            var hostUrl = "https://preview.keenthemes.com/metronic8/demo1/assets/";        
        </script>

        <script src="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/global/plugins.bundle.js"></script>
        <script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/scripts.bundle.js"></script>


        <script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/custom/authentication/sign-up/general.js"></script>
    </body>
</html> 