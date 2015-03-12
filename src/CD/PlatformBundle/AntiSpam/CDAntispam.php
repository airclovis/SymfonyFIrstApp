<?php
/**
 * Created by PhpStorm.
 * User: airclo
 * Date: 11/03/15
 * Time: 16:12
 */

namespace CD\PlatformBundle\Antispam;

class Antispam
{
    private $mailer;
    private $locale;
    private $minLength;

    public function __construct(\Swift_Mailer $mailer, $locale, $minLength)
    {
        $this->mailer = $mailer;
        $this->locale = $locale;
        $this->minLength = (int) $minLength;
    }

    /** Vérifie si le text est un spam
     * @param string $text
     * @return bool
     */
    public function isSpam($text)
    {
        return strlen($text) < $this->minLength ;
    }

}