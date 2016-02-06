<?php
/**
 * Lettering plugin for Craft CMS
 *
 * Lettering Variable
 *
 * --snip--
 * Craft allows plugins to provide their own template variables, accessible from the {{ craft }} global variable
 * (e.g. {{ craft.pluginName }}).
 *
 * https://craftcms.com/docs/plugins/variables
 * --snip--
 *
 * @author    Fred Carlsen
 * @copyright Copyright (c) 2016 Fred Carlsen
 * @link      http://sjelfull.no
 * @package   Lettering
 * @since     1.0.0
 */

namespace Craft;

class LetteringVariable
{
    public function words($text)
    {
        $parts = explode(' ', trim($text));
        $count = 1;

        $formattedParts = array_map(function($word) use (&$count) {
            $word = '<span class="word' . $count . '" aria-hidden="true">' . $word . '</span> ';
            $count = $count + 1;

            return $word;
        }, $parts);

        $ariaLabel = TemplateHelper::getRaw(' aria-label="'. $text .'"');
        $words = TemplateHelper::getRaw( implode('', $formattedParts) );
        $result = [
            'original' => $text,
            'ariaLabel' => $ariaLabel,
            'words' => $words,
        ];

        return $result;
    }
}
