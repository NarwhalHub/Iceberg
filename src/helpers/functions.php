<?php
use Managads\Ad;

function managads_load_template()
{
    $loader = \Managads\Template\Loader::getInstance();
}

if (! function_exists('array_get')) {
    function array_get($arr, $arrayIndex, $defaultValue = null)
    {
        if (is_string($arrayIndex)) {
            $arrayIndex = explode('.', $arrayIndex);
        } else {
            $arrayIndex = (array) $arrayIndex;
        }
        foreach ($arrayIndex as $index) {
            if (! isset($arr[ $index ])) {
                return $defaultValue;
            }
            $arr = $arr[ $index ];
        }
        return $arr;
    }
}


function get_managads_ad($id)
{
    return new Ad($id);
}

function get_managads_ad_metas($ad_id)
{
}

function get_managads_ad_meta($ad, $metaKey, $defaultValue = '')
{
    if (!($ad instanceof Ad)) {
        $ad = new Ad($id);
    }
    if (!$ad->isExists()) {
        return $defaultValue;
    }

    return $ad->getMeta($metaKey, $defaultValue);
}
