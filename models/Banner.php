<?php

/**
 * Created by PhpStorm.
 * User: Esdras
 * Date: 24/08/2016
 * Time: 23:25
 */
class Banner extends Model
{

    const TABLE_NAME = 'banner';

    public function __construct()
    {
        parent::__construct(Banner::TABLE_NAME);
    }

    public function setBanner($data = array()) {
        if(count($data) > 0) {
            return $this->insert($data);
        } else {
            return -1;
        }
    }

    public function getBanners() {
        return $this->selectAll();
    }
}