<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Educabol',
    'title_prefix' => 'Educabol | ',
    'title_postfix' => '', 

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b></b>ite',
    'logo_img' => 'vendor/adminlte/dist/img/solologo.png',
    'logo_img_class' => 'brand-image img-circle',
    'logo_img_xl' => 'vendor/adminlte/dist/img/logo.png',
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'ite',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => false,

    

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => false,
    'layout_boxed' => false,
    'layout_fixed_sidebar' => false,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'bg-primary text-white',
    'classes_auth_header' => 'bg-secondary',
    'classes_auth_body' => 'bg-primary',
    'classes_auth_footer' => 'bg-secondary text-white',
    'classes_auth_icon' => 'fa-fw text-secondary',
    'classes_auth_btn' => 'btn btn-secondary',



    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => 'bg-white',
    'classes_brand_text' => 'text-danger',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-dark navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',
    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => false,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-user-graduate',
    'right_sidebar_theme' => 'light',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => false,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true, // Or "topnav => true" to place on the left.

        ],
        
        // [
        //     'text' =>"Cliente",
        //     'topnav' => true,
        //     'url'  => '/home',
        //     'icon' => 'fas fa-user-graduate',
        //     'icon_color' => 'white',
        //     'classes'=>'text-xs text-white',
        // ],
        // [
        //     'text' => "Hoy",
        //     'topnav' => true,
        //     'url'  => 'programados/hoy',
        //     'icon' => 'far fa-clock',
        //     'icon_color' => 'white',
        //     'classes'=>'text-xs text-white',
        // ],
       
        // [
        //     'text' => "",
        //     'topnav' => true,
        //     'url'  => 'asistencia/estado',
        //     'icon' => 'fas fa-chart-bar',
        //     'icon_color' => 'white',
        //     'classes'=>'text-xs text-white',
        // ],
        // [
        //     'text' => "",
        //     'topnav' => true,
        //     'url'  => 'inscripcines/vigentes/view',
        //     'icon' => 'fas fa-hand-pointer',
        //     'icon_color' => 'white',
        //     'classes'=>'text-xs text-white',
        // ],
        // [
        //     'text' => "",
        //     'topnav' => true,
        //     'url'  => 'presentes',
        //     'icon' => 'fab fa-product-hunt',
        //     'icon_color' => 'white',
        //     'classes'=>'text-xs text-white',
        // ],
        
        /**
         *  Menu personas 
         */
       
        /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% INICIO GRUPO PERSONAS %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
      
        

    
       
        /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% INICIO GRUPO PERSONAS %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
        
        /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% INICIO GRUPO USUARIOS %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
       
        [
            'text'    => 'ACCESO SEGURIDAD',
            'icon'    => 'fas fa-fw fa-users-cog',
            'icon_color' => 'secondary',
            'classes'  => 'text-white text-bold bg-primary',
            'can' => ['Listar Roles'],
            'submenu' => [
                [
                    'text' => 'Administrar Permisos',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'permisos',
                    'classes'  => 'text-dark',
                ],

                [
                    'text' => 'Administrar Roles',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'role',
                    'classes'  => 'text-dark',
                ],
             
                // [
                //     'text' => 'Asignación Rol',
                //     'icon'    => 'fas fa-angle-right',
                //     'url'  => 'rolusers',
                //     'classes'  => 'text-dark',
                // ],
                [   
                    'text' => 'Administrar Usuarios',
                    'icon'    => 'fas fa-angle-right',
                    'route' => 'users.index',
                    'classes'  => 'text-secondary',
                ],
              
            ],
        ],
       

        /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% PARAMETRIZACION %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/

        [
            'text'    => 'PARAMETRIZACION',
            'icon'    => 'fas fa-fw fa-users-cog',
            'icon_color' => 'secondary',
            'classes'  => 'text-white text-bold bg-primary',
            'can' => ['Listar Roles'],
            'submenu' => [
                [
                    'text' => 'Aulas',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'aulas',
                    'classes'  => 'text-dark',
                ],
                
               
    
                [
                    'text' => 'Materias',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'materias',
                    'classes'  => 'text-dark',
                ],
                [
                    'text' => 'Personas',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'personas',
                    'classes'  => 'text-dark',
                ],
                // [
                //     'text' => 'Estudiantes',
                //     'icon'    => 'fas fa-angle-right',
                //     'url'  => '/home',
                //     'classes'  => 'text-dark',
                // ],
                // [
                //     'text' => 'Docentes',
                //     'icon'    => 'fas fa-angle-right',
                //     'url'  => 'docentes',
                //     'classes'  => 'text-dark',
                // ],
                [
                    'text' => 'Grados',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'grados',
                    'classes'  => 'text-dark',
                ],
                [
                    'text' => 'Modalidades',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'modalidads',
                ],
                [
                    'text' => 'Colegios',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'colegios',
                    'classes'  => 'text-dark',
                ],
                [
                    'text' => 'Niveles',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'nivels',
                    'classes'  => 'text-dark',
                ],
            ],
        ],
        /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% TRANSACCIONALES %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
        [
            'text'    => 'TRANSACCIONALES',
            'icon'    => 'fas fa-fw fa-users-cog',
            'icon_color' => 'secondary',
            'classes'  => 'text-white text-bold bg-primary',
         
            'submenu' => [
                [
                    'text' => 'Administrar Inscripciones',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'adminscripciones',
                    'classes'  => 'text-dark',
                ],
                [
                    'text' => 'Administrar Pagos ',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'adminpagos',
                    'classes'  => 'text-dark',
                ],
                [
                    'text' => 'Administrar Programación',
                    'icon'    => 'fas fa-angle-right',
                    'url'  => 'adminprogramacion',
                    'classes'  => 'text-dark',
                ],
            ],
        ],
        /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% TRANSACCIONALES %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
        [
        'text'    => 'REPORTES',
        'icon'    => 'fas fa-fw fa-users-cog',
        'icon_color' => 'secondary',
        'classes'  => 'text-white text-bold bg-primary',
        'can' => ['Listar Roles'],
        'submenu' => [
            [
                'text' => 'Reporte Inscripcion',
                'icon'    => 'fas fa-angle-right',
                'url'  => 'adminreporte',
                'classes'  => 'text-dark',
            ],
            
            [
                'text' => 'Exportar Personas',
                'icon'    => 'fas fa-angle-right',
                'route'  => 'exportar.personas',
                'classes'  => 'text-dark',
            ],
            // [
            //     'text' => 'Exportar Programación',
            //     'icon'    => 'fas fa-angle-right',
            //     'route'  => 'exportar.programacion',
            //     'classes'  => 'text-dark',
            // ],
            // [
            //     'text' => 'Recaudaciones x Usuario',
            //     'icon'    => 'fas fa-angle-right',
            //     'url'  => 'chart/fractales/recaudados/for/user',
            //     'classes'  => 'text-dark',
            // ],
            // [
            //     'text' => 'Ingresos x Modalidades',
            //     'icon'    => 'fas fa-angle-right',
            //     'url'  => 'chart/inscripciones/fractales/for/modalidades',
            //     'classes'  => 'text-dark',
            // ],
            // [
            //     'text' => 'Inscripciones x Usuario',
            //     'icon'    => 'fas fa-angle-right',
            //     'url'  => 'chart/cantidad/inscripciones/for/user',
            //     'classes'  => 'text-dark',
            // ],
            // [
            //     'text' => 'Inscripciones x Modalidades',
            //     'icon'    => 'fas fa-angle-right',
            //     'url'  => 'chart/inscripciones/for/modalidades',
            //     'classes'  => 'text-dark',
            // ],
            // [
            //     'text' => 'Pagos x Usuario',
            //     'icon'    => 'fas fa-angle-right',
            //     'url'  => 'chart/cantidad/pagos/for/user',
            //     'classes'  => 'text-dark',
            // ],
           
        ],
    ],
 
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Jquery' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
                    
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//code.jquery.com/ui/1.12.1/jquery-ui.js',
                    
                ],
            ],
        ],
        'Steepfocus' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'dist/js/steepfocus.js',
                ],
            ],
        ],
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/searchbuilder/1.0.1/js/dataTables.searchBuilder.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css',
                ],
            ],
        ],
        

        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css',
                ],
            ],
        ],

        
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@11',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => true,
];
