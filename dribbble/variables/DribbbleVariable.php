<?php
/**
 * Dribbble
 *
 * @author    Jason Mayo
 * @twitter   @madebymayo
 * @package   Dribbble
 *
 */

namespace Craft;

class DribbbleVariable
{

    public function get($type, $limit)
    {
        return craft()->dribbble->get($type, $limit);
    }
    
    public function getSetting($name)
    {
        return craft()->dribbble->getSetting($name);
    }
}