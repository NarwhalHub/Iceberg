<?php
namespace Managads;

class Query
{
    public function getAd($adId, $returnType = 'ARRAY_A')
    {
        $pre = apply_filters('managads_pre_get_ad', null, $adId);
        if ($pre !== null) {
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

    public function getAdMeta($adId, $metaKey)
    {
        $pre = apply_filters('managads_pre_get_ad_meta', null, $adId, $metaKey);
        if ($pre !== null) {
            return $pre;
        }
        global $wpdb;
        $sql = $wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}managads_ad_metas WHERE ad_id=%d AND meta_key=%s",
            $adId,
            $metaKey
        );

        return $wpdb->get_row($sql);
    }
}
