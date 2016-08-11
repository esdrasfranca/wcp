<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author DIGIFUND
 */
class Category extends Model {

    const TABLE_NAME = 'category';

    public function __construct() {
        parent::__construct(Category::TABLE_NAME);
    }

    public function selectAllCategory() {
        return $this->selectAll();
    }

    public function selectCategoryId($id) {
        return $this->select(array(), array(
                    'cat_id' => $id
        ));
    }

    public function deleteCategory($id) {
        return $this->delete(array(
                    'cat_id' => $id
        ));
    }

    public function insertCategory($data) {
        return $this->insert($data);
    }

}
