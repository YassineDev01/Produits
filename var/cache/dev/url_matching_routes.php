<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => null, 'crudAction' => null], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_category_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'admin_category_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category/batch-delete' => [[['_route' => 'admin_category_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/category/autocomplete' => [[['_route' => 'admin_category_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/render-filters' => [[['_route' => 'admin_category_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin_product_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product/new' => [[['_route' => 'admin_product_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product/batch-delete' => [[['_route' => 'admin_product_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/product/autocomplete' => [[['_route' => 'admin_product_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product/render-filters' => [[['_route' => 'admin_product_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product-image' => [[['_route' => 'admin_product_image_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductImageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductImageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product-image/new' => [[['_route' => 'admin_product_image_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductImageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductImageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-image/batch-delete' => [[['_route' => 'admin_product_image_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductImageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductImageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/product-image/autocomplete' => [[['_route' => 'admin_product_image_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductImageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductImageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product-image/render-filters' => [[['_route' => 'admin_product_image_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductImageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductImageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contact/new' => [[['_route' => 'app_contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile_view', '_controller' => 'App\\Controller\\UserController::view'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\UserController::edit'], null, null, null, false, false, null]],
        '/profile/password' => [[['_route' => 'profile_change_password', '_controller' => 'App\\Controller\\UserController::changePassword'], null, null, null, false, false, null]],
        '/profile/email' => [[['_route' => 'profile_change_email', '_controller' => 'App\\Controller\\UserController::changeEmail'], null, null, null, false, false, null]],
        '/api/categories' => [[['_route' => 'api_categories_index', '_controller' => 'App\\Controller\\api\\ApiCategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/products' => [[['_route' => 'api_products_index', '_controller' => 'App\\Controller\\api\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|category/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:48)'
                                .'|delete(*:61)'
                            .')'
                            .'|(*:69)'
                        .')'
                        .'|product(?'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:107)'
                                    .'|delete(*:121)'
                                .')'
                                .'|(*:130)'
                            .')'
                            .'|\\-image/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:166)'
                                    .'|delete(*:180)'
                                .')'
                                .'|(*:189)'
                            .')'
                        .')'
                    .')'
                    .'|pi/(?'
                        .'|categories/([^/]++)(*:225)'
                        .'|products/([^/]++)(?'
                            .'|(*:253)'
                            .'|/images(*:268)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:310)'
                    .'|wdt/([^/]++)(*:330)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:372)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:409)'
                                .'|router(*:423)'
                                .'|exception(?'
                                    .'|(*:443)'
                                    .'|\\.css(*:456)'
                                .')'
                            .')'
                            .'|(*:466)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:501)'
                        .'|/(?'
                            .'|edit(*:517)'
                            .'|products(*:533)'
                        .')'
                        .'|(*:542)'
                    .')'
                    .'|ontact/([^/]++)(?'
                        .'|(*:569)'
                        .'|/edit(*:582)'
                        .'|(*:590)'
                    .')'
                .')'
                .'|/product/(?'
                    .'|([^/]++)(?'
                        .'|(*:623)'
                        .'|/edit(*:636)'
                        .'|(*:644)'
                    .')'
                    .'|image/([^/]++)/delete(*:674)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'admin_category_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        61 => [[['_route' => 'admin_category_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        69 => [[['_route' => 'admin_category_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        107 => [[['_route' => 'admin_product_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        121 => [[['_route' => 'admin_product_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        130 => [[['_route' => 'admin_product_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        166 => [[['_route' => 'admin_product_image_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductImageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductImageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        180 => [[['_route' => 'admin_product_image_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductImageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductImageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        189 => [[['_route' => 'admin_product_image_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\ProductImageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductImageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        225 => [[['_route' => 'categories', '_controller' => 'App\\Controller\\api\\ApiCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'products', '_controller' => 'App\\Controller\\api\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        268 => [[['_route' => 'product_images', '_controller' => 'App\\Controller\\api\\ProductController::images'], ['id'], ['GET' => 0], null, false, false, null]],
        310 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        330 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        372 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        409 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        423 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        443 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        456 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        466 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        501 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        517 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        533 => [[['_route' => 'app_category_products', '_controller' => 'App\\Controller\\CategoryController::products'], ['id'], ['GET' => 0], null, false, false, null]],
        542 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        569 => [[['_route' => 'app_contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        582 => [[['_route' => 'app_contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        590 => [[['_route' => 'app_contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        623 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        636 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        644 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        674 => [
            [['_route' => 'product_image_delete', '_controller' => 'App\\Controller\\ProductController::deleteImage'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
