<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::signupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'hangman_game' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/game/',    ),  ),),
        'play_letter' => array (  0 =>   array (    0 => 'letter',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::letterAction',  ),  2 =>   array (    'letter' => '[A-Z]',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[A-Z]',      3 => 'letter',    ),    1 =>     array (      0 => 'text',      1 => '/game/letter',    ),  ),),
        'play_word' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::wordAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/game/word',    ),  ),),
        'game_hanged' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::hangedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/game/hanged',    ),  ),),
        'game_won' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::wonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/game/won',    ),  ),),
        'game_reset' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\GameController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/game/reset',    ),  ),),
        'player' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'player_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),  ),),
        'player_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::signupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/signup',    ),  ),),
        'registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create',    ),  ),),
        'player_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),  ),),
        'player_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::updateAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),  ),),
        'player_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::deleteAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),  ),),
        'signin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\HangmanBundle\\Controller\\PlayerController::signinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/signin',    ),  ),),
        'signout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/signout',    ),  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/auth',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
