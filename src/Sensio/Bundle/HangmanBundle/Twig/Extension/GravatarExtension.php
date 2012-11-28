<?php

namespace Sensio\Bundle\HangmanBundle\Twig\Extension;

class GravatarExtension extends \Twig_Extension
{
    public function getFunction()
    {
        return array(
            'gravatar' => new \Twig_Function_Method($this, 'getGravatar'),
        );
    }

    public function getGravatar($email,$size = 120)
    {
        $url = 'http://www.gravatar.com/avatar/%s?size=%u';

        $hash = md5(strtolower(trim($email)));

        return sprintf($url, $hash, (int) $size);
    }

    public function getName()
    {
        return 'sensio_hangman.gravatar';
    }
}