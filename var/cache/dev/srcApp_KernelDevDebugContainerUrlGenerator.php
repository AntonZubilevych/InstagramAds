<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        'index' => array(array(), array('_controller' => 'App\\Controller\\SiteController::index'), array(), array(array('text', '/')), array(), array()),
        'app_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'app_register' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::register'), array(), array(array('text', '/register')), array(), array()),
        'logout' => array(array(), array(), array(), array(array('text', '/logout')), array(), array()),
        'app_product' => array(array('id'), array('_controller' => 'App\\Controller\\TemplateController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/product')), array(), array()),
        'admin_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\AdminController::index'), array(), array(array('text', '/admin/index')), array(), array()),
        'admin_product' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ProductController::index'), array(), array(array('text', '/admin/product')), array(), array()),
        'admin_product_add' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ProductController::add'), array(), array(array('text', '/admin/products/add')), array(), array()),
        'admin_product_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ProductController::edit'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/products/edit')), array(), array()),
        'admin_product_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ProductController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/products/delete')), array(), array()),
        'admin_status' => array(array(), array('_controller' => 'App\\Controller\\Admin\\StatusController::index'), array(), array(array('text', '/admin/status')), array(), array()),
        'admin_status_add' => array(array(), array('_controller' => 'App\\Controller\\Admin\\StatusController::new'), array(), array(array('text', '/admin/status/add')), array(), array()),
        'admin_status_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\StatusController::edit'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/status/edit')), array(), array()),
        'admin_status_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\StatusController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/status/delete')), array(), array()),
        'admin_order' => array(array(), array('_controller' => 'App\\Controller\\Admin\\OrderController::index'), array(), array(array('text', '/admin/order')), array(), array()),
        'admin_order_add' => array(array(), array('_controller' => 'App\\Controller\\Admin\\OrderController::add'), array(), array(array('text', '/admin/order/add')), array(), array()),
        'admin_order_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\OrderController::edit'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/order/edit')), array(), array()),
        'admin_order_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\OrderController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/order/delete')), array(), array()),
        'admin_order_show' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\OrderController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/order/show')), array(), array()),
        'admin_template' => array(array(), array('_controller' => 'App\\Controller\\Admin\\TemplateController::index'), array(), array(array('text', '/admin/template')), array(), array()),
        'admin_template_add' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\TemplateController::add'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/template/add')), array(), array()),
        'admin_template_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\TemplateController::edit'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/template/edit')), array(), array()),
        'admin_template_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\TemplateController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/template/delete')), array(), array()),
        'admin_template_settings' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\TemplateController::more'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/template/setting')), array(), array()),
        'admin_template_description_add' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\DescriptionController::new'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/template/description/add')), array(), array()),
        'admin_template_description_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\DescriptionController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/template/description/delete')), array(), array()),
        'admin_template_comment_add' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\CommentController::new'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/template/comment/add')), array(), array()),
        'admin_template_comment_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\CommentController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/template/comment/delete')), array(), array()),
        'admin_template_info_add' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\InfoController::new'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/template/info/add')), array(), array()),
        'admin_template_info_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\InfoController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/template/info/delete')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
