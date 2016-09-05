<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this templates file, choose Tools | Templates
 * and open the templates in the editor.
 */

/**
 * Classe responsável por preparar os SQL's.
 *
 * @author Esdras
 */
class PrepareSQL
{

    /**
     * Prepara a instrução SQL UPDATE
     * @param string $table Nome da tabela.
     * @param array $data Array do tipo chave=>valor com os dados a serem atuaizados, onde a KEY é o nome da coluna e o VALUE o valor da coluna. Por padrão é vazio.
     * @param array $where Array do tipo chave=>valor com as condições para atualização, onde a KEY é o nome da coluna e o VALUE o valor da coluna. Por padrão é vazio.
     * @param string $cond Condição AND ou OR. Por padrão é AND.
     * @return string|NULL Retorna a string SQL montada ou NULL caso nenhum nome para a tebela ou nenhum dado seja passado.
     */
    public function update($table, $data = array(), $where = array(), $cond = 'AND')
    {
        if (empty($table) || count($data) == 0) {
            return NULL;
        }

        $table = addslashes($table);
        $cond = addslashes($cond);

        $sql = "UPDATE " . $table . " SET ";
        $dados = array();
        foreach ($data as $key => $value) {
            array_push($dados, $key . "='" . $value . "'");
        }

        $sql .= implode(", ", $dados);

        if (count($where) > 0) {
            $dados = array();
            $sql .= " WHERE ";
            foreach ($where as $key => $value) {
                array_push($dados, $key . "='" . $value . "'");
            }

            $sql .= implode(" " . $cond . " ", $dados);
        }

        return $sql;
    }

    /**
     * Prepara a instrução SQL INSERT
     * @param string $table Nome da tabela.
     * @param array $data Array do tipo chave=>valor com os dados a serem inseridos, onde a KEY é o nome da coluna e o VALUE o valor da coluna. Por padrão é vazio.y
     * @return string Retorna a string SQL montada ou NULL caso nenhum nome para tabela seja passado ou o array de dados esteja vazio.
     */
    public function insert($table, $data = array())
    {

        if (empty($table) || count($data) == 0) {
            return NULL;
        }

        $table = addslashes($table);
        $sql = "INSERT INTO " . $table . " (";

        $dados = array();
        foreach ($data as $key => $value) {
            array_push($dados, $key);
        }

        $sql .= implode(', ', $dados) . ") VALUES ('";

        $dados = array();
        foreach ($data as $value) {
            array_push($dados, $value);
        }

        $sql .= implode("', '", $dados) . "')";
        return $sql;
    }

    /**
     * Prepara a instrução SQL SELECT
     * @param string $table Nome da tabela.
     * @param array $columns Array com os nomes das colunas a serem retornadas. Por padrão é vazio retornando assim todas as colunas da tabela.
     * @param array $where Array do tipo chave=>valor com as condições para seleção, onde a KEY é o nome da coluna e o VALUE o valor da coluna. Por padrão é vazio.
     * @param string $cond Condição AND ou OR. Por padrão é AND.
     * @return string Retorna a string SQL montada ou NULL caso nenhum nome para tabela seja passado.
     */
    public function select($table, $columns = array(), $where = array(), $cond = 'AND')
    {
        if (empty($table)) {
            return NULL;
        }

        $table = addslashes($table);
        $sql = 'SELECT ';

        $dados = array();
        if (count($columns) > 0) {
            foreach ($columns as $value) {
                array_push($dados, $value);
            }
            $sql .= implode(', ', $dados) . ' FROM ' . $table;
        } else {
            $sql .= ' * FROM ' . $table;
        }

        if (count($where) > 0) {
            $dados = array();
            foreach ($where as $key => $value) {
                array_push($dados, $key . "='" . $value . "'");
            }
            $sql .= " WHERE " . implode(" " . $cond . " ", $dados);
        }

        return $sql;
    }

    /**
     * Prepara a instrução SQL DELETE
     * @param string $table Nome da tabela.
     * @param array $where Array do tipo chave=>valor com as condições para seleção, onde a KEY é o nome da coluna e o VALUE o valor da coluna. Por padrão é vazio.
     * @param type $cond Condição AND ou OR. Por padrão é AND.
     * @return string Retorna a string SQL montada ou NULL caso nenhum nome para tabela seja passado.
     */
    public function delete($table, $where = array(), $cond = 'AND')
    {
        if (empty($table)) {
            return NULL;
        }

        $table = addslashes($table);
        $sql = 'DELETE ';

        if (count($where) > 0) {
            $sql .= ' FROM ' . $table;
            $dados = array();
            foreach ($where as $key => $value) {
                array_push($dados, $key . "='" . $value . "'");
            }
            $sql .= " WHERE " . implode(' ' . $cond . " ", $dados);
        } else {
            $sql .= 'FROM ' . $table;
        }
        return $sql;
    }

}
