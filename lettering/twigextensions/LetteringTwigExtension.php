<?php
/**
 * Lettering plugin for Craft CMS
 *
 * Lettering Twig Extension
 *
 * --snip--
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators, global variables, and
 * functions. You can even extend the parser itself with node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 * --snip--
 *
 * @author    Fred Carlsen
 * @copyright Copyright (c) 2016 Fred Carlsen
 * @link      http://sjelfull.no
 * @package   Lettering
 * @since     1.0.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class LetteringTwigExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'Lettering';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return array(
            'lettering' => new \Twig_Filter_Method($this, 'lettering'),
        );
    }

    /**
     * Our function called via Twig; it can do anything you want
     *
     * @return string
     */
    public function lettering($text = null, $class = 'chars')
    {
        $result = method_exists(craft()->lettering, $class) ? craft()->lettering->$class($text) : null;
        return $result ? $result[$class] : $text;
    }

}