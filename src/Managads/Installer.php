<?php

namespace Managads;

class Installer
{
    public static function install()
    {
        self::setupDB();
    }

    public static function setupDB()
    {
        global $wpdb;

        /**
         * Create table managads ads
         */
        $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}managads_ads(
            `ID` BIGINT NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(255) NOT NULL,
            `ad_type` VARCHAR(100) NOT NULL,
            `ad_data` LONGTEXT,
            `ad_size` VARCHAR(255),
            `category_id` BIGINT,
            `description` TEXT,
            PRIMARY KEY (ID)
        )";
        $wpdb->query($sql);

        /**
         * Create table managads ad categories
         */
        $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}managads_ad_categories(
            `ID` BIGINT NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(255) NOT NULL,
            `data` LONGTEXT,
            `description` LONGTEXT,
            PRIMARY KEY (ID)
        )";
        $wpdb->query($sql);

        /**
         * Create table managads ad metas
         */
        $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}managads_ad_metas(
            `meta_id` BIGINT NOT NULL AUTO_INCREMENT,
            `ad_id` BIGINT NOT NULL,
            `meta_key` VARCHAR(255) NOT NULL,
            `meta_value` LONGTEXT,
            PRIMARY KEY (meta_id)
        )";
        $wpdb->query($sql);
    }
}
