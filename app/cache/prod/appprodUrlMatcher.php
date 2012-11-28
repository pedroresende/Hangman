<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
