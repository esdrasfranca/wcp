<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Posts
 *
 * @author DIGIFUND
 */
class Posts extends Model {

    const TABLE_NAME = 'posts';

    public function __construct() {
        parent::__construct(Posts::TABLE_NAME);
    }

    /**
     * Insere um novo post.
     * @param array $data Array com os dados a serem salvos: 
     * @return mixed Retorna o id na tabela dos novos dados adicionados. Retorna FALSE caso a execução falhe. Retorna -1 caso o array de dados estaja vazio.
     */
    public function insertPost($data = array()) {
        if (count($data) > 0) {
            return $this->insert($data);
        }
        return -1;
    }
    
    public function selectAllPosts(){
        return $this->selectAll();
    }

}
