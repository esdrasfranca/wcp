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

    public function selectAllPosts() {
        return $this->selectAll();
    }

    /**
     *   Exclui um post
     *   @param array $data Array 
     *   @return mixed Retorna TRUE caso a instruçã seja realizada. Retorna FALSE caso não seja possivel excluir.
     *   Retorna -1 caso o array passado por parâmetro esteja vazio.
     */
    public function deletePost($data = array()) {
        if (count($data) > 0) {
            return $this->delete($data);
        }
        return -1;
    }

    /**
     * Seleciona o post referente ao id informado.
     * @param int $id Id do post.
     * @return mixed Retorna um array caso o id seja válido ou FALSE caso contrário.
     */
    public function selectPostById($id) {
        return $this->select(array(), array(
                    'post_id' => $id
        ));
    }

    public function updatePost($data, $where, $cond = '') {
        return $this->update($data, $where, $cond);
    }

}
