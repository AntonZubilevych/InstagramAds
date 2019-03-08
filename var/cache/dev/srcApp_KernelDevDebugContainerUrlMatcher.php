<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
            '/' => array(array(array('_route' => 'index', '_controller' => 'App\\Controller\\SiteController::index'), null, null, null, false, false, null)),
            '/login' => array(array(array('_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null, false, false, null)),
            '/register' => array(array(array('_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'), null, null, null, false, false, null)),
            '/logout' => array(array(array('_route' => 'logout'), null, null, null, false, false, null)),
            '/admin/index' => array(array(array('_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\AdminController::index'), null, null, null, false, false, null)),
            '/admin/product' => array(array(array('_route' => 'admin_product', '_controller' => 'App\\Controller\\Admin\\ProductController::index'), null, null, null, false, false, null)),
            '/admin/products/add' => array(array(array('_route' => 'admin_product_add', '_controller' => 'App\\Controller\\Admin\\ProductController::add'), null, null, null, false, false, null)),
            '/admin/status' => array(array(array('_route' => 'admin_status', '_controller' => 'App\\Controller\\Admin\\StatusController::index'), null, null, null, false, false, null)),
            '/admin/status/add' => array(array(array('_route' => 'admin_status_add', '_controller' => 'App\\Controller\\Admin\\StatusController::new'), null, null, null, false, false, null)),
            '/admin/order' => array(array(array('_route' => 'admin_order', '_controller' => 'App\\Controller\\Admin\\OrderController::index'), null, null, null, false, false, null)),
            '/admin/order/add' => array(array(array('_route' => 'admin_order_add', '_controller' => 'App\\Controller\\Admin\\OrderController::add'), null, null, null, false, false, null)),
            '/admin/template' => array(array(array('_route' => 'admin_template', '_controller' => 'App\\Controller\\Admin\\TemplateController::index'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/product/([^/]++)(*:186)'
                    .'|/admin/(?'
                        .'|products/(?'
                            .'|edit/([^/]++)(*:229)'
                            .'|delete/([^/]++)(*:252)'
                        .')'
                        .'|status/(?'
                            .'|edit/([^/]++)(*:284)'
                            .'|delete/([^/]++)(*:307)'
                        .')'
                        .'|order/(?'
                            .'|edit/([^/]++)(*:338)'
                            .'|delete/([^/]++)(*:361)'
                            .'|show/([^/]++)(*:382)'
                        .')'
                        .'|template/(?'
                            .'|add/([^/]++)(*:415)'
                            .'|edit/([^/]++)(*:436)'
                            .'|de(?'
                                .'|lete/([^/]++)(*:462)'
                                .'|scription/(?'
                                    .'|add/([^/]++)(*:495)'
                                    .'|delete/([^/]++)(*:518)'
                                .')'
                            .')'
                            .'|setting/([^/]++)(*:544)'
                            .'|comment/(?'
                                .'|add/([^/]++)(*:575)'
                                .'|delete/([^/]++)(*:598)'
                            .')'
                            .'|info/(?'
                                .'|add/([^/]++)(*:627)'
                                .'|delete/([^/]++)(*:650)'
                            .')'
                        .')'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            38 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            57 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            102 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            116 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            136 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            149 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            159 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
            186 => array(array(array('_route' => 'app_product', '_controller' => 'App\\Controller\\TemplateController::show'), array('id'), null, null, false, true, null)),
            229 => array(array(array('_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'), array('id'), null, null, false, true, null)),
            252 => array(array(array('_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'), array('id'), array('DELETE' => 0), null, false, true, null)),
            284 => array(array(array('_route' => 'admin_status_edit', '_controller' => 'App\\Controller\\Admin\\StatusController::edit'), array('id'), null, null, false, true, null)),
            307 => array(array(array('_route' => 'admin_status_delete', '_controller' => 'App\\Controller\\Admin\\StatusController::delete'), array('id'), array('DELETE' => 0), null, false, true, null)),
            338 => array(array(array('_route' => 'admin_order_edit', '_controller' => 'App\\Controller\\Admin\\OrderController::edit'), array('id'), null, null, false, true, null)),
            361 => array(array(array('_route' => 'admin_order_delete', '_controller' => 'App\\Controller\\Admin\\OrderController::delete'), array('id'), array('DELETE' => 0), null, false, true, null)),
            382 => array(array(array('_route' => 'admin_order_show', '_controller' => 'App\\Controller\\Admin\\OrderController::show'), array('id'), null, null, false, true, null)),
            415 => array(array(array('_route' => 'admin_template_add', '_controller' => 'App\\Controller\\Admin\\TemplateController::add'), array('id'), null, null, false, true, null)),
            436 => array(array(array('_route' => 'admin_template_edit', '_controller' => 'App\\Controller\\Admin\\TemplateController::edit'), array('id'), null, null, false, true, null)),
            462 => array(array(array('_route' => 'admin_template_delete', '_controller' => 'App\\Controller\\Admin\\TemplateController::delete'), array('id'), array('DELETE' => 0), null, false, true, null)),
            495 => array(array(array('_route' => 'admin_template_description_add', '_controller' => 'App\\Controller\\Admin\\DescriptionController::new'), array('id'), null, null, false, true, null)),
            518 => array(array(array('_route' => 'admin_template_description_delete', '_controller' => 'App\\Controller\\Admin\\DescriptionController::delete'), array('id'), array('DELETE' => 0), null, false, true, null)),
            544 => array(array(array('_route' => 'admin_template_settings', '_controller' => 'App\\Controller\\Admin\\TemplateController::more'), array('id'), null, null, false, true, null)),
            575 => array(array(array('_route' => 'admin_template_comment_add', '_controller' => 'App\\Controller\\Admin\\CommentController::new'), array('id'), null, null, false, true, null)),
            598 => array(array(array('_route' => 'admin_template_comment_delete', '_controller' => 'App\\Controller\\Admin\\CommentController::delete'), array('id'), array('DELETE' => 0), null, false, true, null)),
            627 => array(array(array('_route' => 'admin_template_info_add', '_controller' => 'App\\Controller\\Admin\\InfoController::new'), array('id'), null, null, false, true, null)),
            650 => array(array(array('_route' => 'admin_template_info_delete', '_controller' => 'App\\Controller\\Admin\\InfoController::delete'), array('id'), array('DELETE' => 0), null, false, true, null)),
        );
    }
}
