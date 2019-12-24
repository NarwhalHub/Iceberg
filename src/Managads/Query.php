<?php
namespace Managads;

class Query
{
    public function getAd($adId, $returnType = 'ARRAY_A')
    {
        $pre = apply_filters('managads_pre_get_ad', null, $adId);
        if ($pre) {
            return $pre;
        }

        global $wpdb;
        $sql = "SELECT * FROM {$wpdb->prefix}managads_ads WHERE ID=%d";
        $ad = $wpdb->get_row($wpdb->prepare(
            $sql,
            $adId,
        ), $returnType);
        return apply_filters('managads_get_ad', $ad, $adId);
    }

    public function getAds($wheres = array())
    {
        global $wpdb;
        $sql = "SELECT * FROM {$wpdb->prefix}managads_ads";
        return $wpdb->get_results($sql);
    }
}
