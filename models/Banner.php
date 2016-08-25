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

    /**
     * Isere novos dados.
     * @param array $data Dados a serem inseridos
     * @return bool|int Retorna TRUE caso a insersão seja realizada. FALSE caso ocorra alguma falha e -1 caso o array data esteja vazio.
     */
    public function insertBanner($data = array())
    {
        if (count($data) > 0) {
            return $this->insert($data);
        } else {
            return -1;
        }
    }

    /**
     * Retorna todos os registros de banner
     * @return mixed
     */
    public function selectAllBanners()
    {
        return $this->selectAll();
    }

    /**
     * Retorna o banner a ser pesquisado.
     * @param $id Id do banner consultado.
     * @return mixed Retorna um array com o resultado da consulta ou FALSE caso nada seja retornado.
     */
    public function selectBannerById($id)
    {
        return $this->select(array(), array(
            'ban_id' => $id
        ));
    }

    public function updateBanner($data = array(), $where = array(), $cond='' ) {
        if (count($data) > 0) {
            return $this->update($data, $where, $cond);
        } else {
            return -1;
        }

    }
}