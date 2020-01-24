<?php

namespace Managads;

class Ad
{
    protected $loaded = false;
    protected $isExists = false;

    public $id, $name, $type, $data, $description, $category_id = null;

    public function __construct($id)
    {
        $this->setId($id);
        $this->getAdFromDb();
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function isExists()
    {
        return $this->isExists !== false;
    }

    public function getAdFromDb()
    {
        global $managads_query;
        try {
            $ad = $managads_query->getAd($this->id);
            /**
             * Make the flag is loaded ad from the database.
             */
            $this->loaded = true;

            // If the ad is not exists stop this process.
            if (!$ad) {
                return;
            }

            /**
             * Make the flag to check the ad is exists in the database
             */
            $this->isExists = true;

            $dbMapToObject = array(
                'ID' => 'id',
                'name' => 'name',
                'ad_type' => 'type',
                'ad_data' => 'data',
                'description' => 'decription',
                'category_id' => 'category_id'
            );

            // Set ad from DB to Objects
            foreach ($ad as $key => $value) {
                if (isset($dbMapToObject[$key])) {
                    $objKey = $dbMapToObject[$key];
                    $this->$objKey = $value;
                }
            }
        } catch (\Exception $e) {
        }
    }

    public function getData()
    {
        return apply_filters(
            'managads_ad_data',
            $this->data,
            $this,
        );
    }

    public function getContent()
    {
        $pre = apply_filters('managads_pre_ad_content', null, $this);
        if ($pre !== null) {
            return $pre;
        }

        $content = '';
        if ($this->type === 'html') {
            $content = $this->getData();
        }

        return apply_filters('managads_ad_content', $content, $this);
    }

    public function getMeta($metaKey, $defaultValue = false)
    {
        global $managads_query;
        $meta = $managads_query->getAdMeta($this->id, $metaKey);
        if ($meta === null) {
            return apply_filters('managads_ad_meta_value', $defaultValue);
        }

        return apply_filters(
            'managads_ad_meta_value',
            maybe_unserialize($meta->meta_value)
        );
    }
}
