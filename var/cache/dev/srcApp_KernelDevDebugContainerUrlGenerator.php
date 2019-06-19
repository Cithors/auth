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
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'api' => [[], ['_controller' => 'App\\Controller\\ApiController::index'], [], [['text', '/api']], [], []],
        'app_api_calendar' => [[], ['_controller' => 'App\\Controller\\ApiController::calendar'], [], [['text', '/api_calendar']], [], []],
        'app_api_calendar_score' => [[], ['_controller' => 'App\\Controller\\ApiController::score'], [], [['text', '/api_calendar_score']], [], []],
        'app_api_calendar_score2' => [[], ['_controller' => 'App\\Controller\\ApiController::score2'], [], [['text', '/api_calendar_score2']], [], []],
        'app_api_list' => [[], ['_controller' => 'App\\Controller\\ApiController::listbreakfast'], [], [['text', '/api_list']], [], []],
        'app_breakfast' => [[], ['_controller' => 'App\\Controller\\BreakfastController::show'], [], [['text', '/breakfast']], [], []],
        'app_breakfast_list' => [[], ['_controller' => 'App\\Controller\\BreakfastController::listbreakfast'], [], [['text', '/breakfast/list']], [], []],
        'app_api_form' => [[], ['_controller' => 'App\\Controller\\BreakfastController::addbreakfast'], [], [['text', '/api_form']], [], []],
        'app_del_missing' => [[], ['_controller' => 'App\\Controller\\MissingListController::del'], [], [['text', '/annuler']], [], []],
        'trait.delabs' => [[], ['_controller' => 'App\\Controller\\MissingListController::validedel'], [], [['text', '/traitement/delabs']], [], []],
        'app_add_missing' => [[], ['_controller' => 'App\\Controller\\MissingListController::addmissing'], [], [['text', '/valider']], [], []],
        'trait.addabs' => [[], ['_controller' => 'App\\Controller\\MissingListController::valideadd'], [], [['text', '/traitement/addabs']], [], []],
        'app_nope_missing' => [[], ['_controller' => 'App\\Controller\\MissingListController::nomissing'], [], [['text', '/refuser']], [], []],
        'trait.noabs' => [[], ['_controller' => 'App\\Controller\\MissingListController::valideno'], [], [['text', '/traitement/noabs']], [], []],
        'app_askabs' => [[], ['_controller' => 'App\\Controller\\MissingListController::askabs'], [], [['text', '/askabs']], [], []],
        'app_abs' => [[], ['_controller' => 'App\\Controller\\MissingListController::absence'], [], [['text', '/api_abs']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\UserController::main'], [], [['text', '/home']], [], []],
        'update.home' => [[], ['_controller' => 'App\\Controller\\UserController::up'], [], [['text', '/updateuser']], [], []],
        'deluser' => [[], ['_controller' => 'App\\Controller\\UserController::del'], [], [['text', '/deluser']], [], []],
        'trait.deluser' => [[], ['_controller' => 'App\\Controller\\UserController::valide'], [], [['text', '/traitement/deluser']], [], []],
        'ajout.user' => [[], ['_controller' => 'App\\Controller\\UserController::adduser'], [], [['text', '/adduser']], [], []],
        'app_register' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/register']], [], []],
        'app_login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/login']], [], []],
        'app_logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/logout']], [], []],
        'app_absences' => [[], ['_controller' => 'App\\Controller\\UserController::abs'], [], [['text', '/absences']], [], []],
        'app_api_login' => [[], ['_controller' => 'App\\Controller\\UserController::reactlogin'], [], [['text', '/api_login']], [], []],
        'fc_load_events' => [[], ['_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], [], [['text', '/fc-load-events']], [], []],
        'homepage' => [[], ['path' => '/login', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], [], [['text', '/']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
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
