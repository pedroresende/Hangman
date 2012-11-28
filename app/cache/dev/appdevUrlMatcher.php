<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::signupAction',  '_route' => 'homepage',);
        }

        // hangman_game
        if (rtrim($pathinfo, '/') === '/game') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hangman_game');
            }

            return array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::indexAction',  '_route' => 'hangman_game',);
        }

        // play_letter
        if (0 === strpos($pathinfo, '/game/letter') && preg_match('#^/game/letter/(?P<letter>[A-Z])$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::letterAction',)), array('_route' => 'play_letter'));
        }

        // play_word
        if ($pathinfo === '/game/word') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_play_word;
            }

            return array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::wordAction',  '_route' => 'play_word',);
        }
        not_play_word:

        // game_hanged
        if ($pathinfo === '/game/hanged') {
            return array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::hangedAction',  '_route' => 'game_hanged',);
        }

        // game_won
        if ($pathinfo === '/game/won') {
            return array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::wonAction',  '_route' => 'game_won',);
        }

        // game_reset
        if ($pathinfo === '/game/reset') {
            return array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::resetAction',  '_route' => 'game_reset',);
        }

        // player
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'player');
            }

            return array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::indexAction',  '_route' => 'player',);
        }

        // player_show
        if (preg_match('#^/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::showAction',)), array('_route' => 'player_show'));
        }

        // player_new
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::signupAction',  '_route' => 'player_new',);
        }

        // registration
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_registration;
            }

            return array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::createAction',  '_route' => 'registration',);
        }
        not_registration:

        // player_edit
        if (preg_match('#^/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::editAction',)), array('_route' => 'player_edit'));
        }

        // player_update
        if (preg_match('#^/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_player_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::updateAction',)), array('_route' => 'player_update'));
        }
        not_player_update:

        // player_delete
        if (preg_match('#^/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_player_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::deleteAction',)), array('_route' => 'player_delete'));
        }
        not_player_delete:

        // signin
        if ($pathinfo === '/signin') {
            return array (  '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::signinAction',  '_route' => 'signin',);
        }

        // signout
        if ($pathinfo === '/signout') {
            return array('_route' => 'signout');
        }

        // login_check
        if ($pathinfo === '/auth') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_login_check;
            }

            return array('_route' => 'login_check');
        }
        not_login_check:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
