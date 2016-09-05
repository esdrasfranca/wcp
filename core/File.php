<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this templates file, choose Tools | Templates
 * and open the templates in the editor.
 */

/**
 * Description of Upload
 *
 * @author DIGIFUND
 */
class File {

    private $name;
    private $size;
    private $tmp_name;
    private $type;
    private $erro;

    function getName() {
        return $this->name;
    }

    function getSize() {
        return $this->size;
    }

    function getTmp_name() {
        return $this->tmp_name;
    }

    function getType() {
        return $this->type;
    }

    function getErro() {
        return $this->erro;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSize($size) {
        $this->size = $size;
    }

    function setTmp_name($tmp_name) {
        $this->tmp_name = $tmp_name;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setErro($erro) {
        $this->erro = $erro;
    }

}
