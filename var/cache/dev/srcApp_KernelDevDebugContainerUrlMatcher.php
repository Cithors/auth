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
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/breakfast' => [[['_route' => 'app_breakfast', '_controller' => 'App\\Controller\\BreakfastController::show'], null, null, null, false, false, null]],
            '/breakfast/list' => [[['_route' => 'app_breakfast_list', '_controller' => 'App\\Controller\\BreakfastController::listbreakfast'], null, null, null, false, false, null]],
            '/annuler' => [[['_route' => 'app_del_missing', '_controller' => 'App\\Controller\\MissingListController::del'], null, null, null, false, false, null]],
            '/traitement/delabs' => [[['_route' => 'trait.delabs', '_controller' => 'App\\Controller\\MissingListController::validedel'], null, null, null, false, false, null]],
            '/valider' => [[['_route' => 'app_add_missing', '_controller' => 'App\\Controller\\MissingListController::addmissing'], null, null, null, false, false, null]],
            '/traitement/addabs' => [[['_route' => 'trait.addabs', '_controller' => 'App\\Controller\\MissingListController::valideadd'], null, null, null, false, false, null]],
            '/refuser' => [[['_route' => 'app_nope_missing', '_controller' => 'App\\Controller\\MissingListController::nomissing'], null, null, null, false, false, null]],
            '/traitement/noabs' => [[['_route' => 'trait.noabs', '_controller' => 'App\\Controller\\MissingListController::valideno'], null, null, null, false, false, null]],
            '/askabs' => [[['_route' => 'app_askabs', '_controller' => 'App\\Controller\\MissingListController::askabs'], null, null, null, false, false, null]],
            '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\UserController::main'], null, null, null, false, false, null]],
            '/updateuser' => [[['_route' => 'update.home', '_controller' => 'App\\Controller\\UserController::up'], null, null, null, false, false, null]],
            '/deluser' => [[['_route' => 'deluser', '_controller' => 'App\\Controller\\UserController::del'], null, null, null, false, false, null]],
            '/traitement/deluser' => [[['_route' => 'trait.deluser', '_controller' => 'App\\Controller\\UserController::valide'], null, null, null, false, false, null]],
            '/adduser' => [[['_route' => 'ajout.user', '_controller' => 'App\\Controller\\UserController::adduser'], null, null, null, false, false, null]],
            '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, ['GET' => 0], null, false, false, null]],
            '/absences' => [[['_route' => 'app_absences', '_controller' => 'App\\Controller\\UserController::abs'], null, null, null, false, false, null]],
            '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'homepage', 'path' => '/login', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
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
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
