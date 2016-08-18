<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Util
 *
 * @author DIGIFUND
 */
class Util {

    const UPLOAD_ERROR_FAIL = 0;
    const UPLOAD_ERROR_NO_SUPORT = 1;

    public static function sanitizeString($str) {
        $str = preg_replace('/[áàãâä]/ui', 'a', $str);
        $str = preg_replace('/[éèêë]/ui', 'e', $str);
        $str = preg_replace('/[íìîï]/ui', 'i', $str);
        $str = preg_replace('/[óòõôö]/ui', 'o', $str);
        $str = preg_replace('/[úùûü]/ui', 'u', $str);
        $str = preg_replace('/[ç]/ui', 'c', $str);
        // $str = preg_replace('/[,(),;:|!"#$%&/=?~^><ªº-]/', '_', $str);
        $str = preg_replace('/[^a-z0-9]/i', '_', $str);
        $str = preg_replace('/_+/', '-', $str);
        return strtolower($str);
    }

    /**
     * Retorna a conversão de byte para megabyte.
     * @param int $size
     * @return int O valor arredondado ou FALSE caso o valor passado não seja um número.
     */
    public static function converByteForMegaByte($size = 0) {
        if (is_numeric($size)) {
            $val = $size / 1024;
            $val = round(number_format($val, 2));
            return $val;
        }
        return false;
    }

    /**
     * 
     * @param string $upload_dir Path do local para salvar os uploads. 
     * Caso não seja informado será criado um diretório uploads no local onde a 
     * classe Util se encontra.
     * @param Upload $upload Objeto da classe Upload com os dados para upload.
     * @return mixed Caso o upload seja realizado é retornado o caminho do arquivo. 
     * Caso a extenção não seja aceita retorna UPLOAD_ERROR_NO_SUPORT.
     * Caso haja algum erro no upload retorna UPLOAD_ERROR_FAIL.
     */
    public static function prepareUpload($upload_dir = '', Upload $upload) {
        $extencions = array("pdf", "doc", "docx", "ppt", "pptx", "mp4", "mp3", "jpg", "jpeg", "gif", "png");

        if (empty($upload_dir)) {
            $upload_dir = __DIR__ . '/uploads';
            mkdir($upload_dir);
        } else if (!file_exists($upload_dir)) {
            mkdir($upload_dir);
        }

        $array_name = explode('.', $upload->getName());
        $name = $array_name[0];
        $ext = end($array_name);

        if (!in_array($ext, $extencions)) {
            return Util::UPLOAD_ERROR_NO_SUPORT;
        }

        $name = Util::sanitizeString($name) . '-' . time();

        if (move_uploaded_file($upload->getTmp_name(), $upload_dir . "/" . $name . "." . $ext)) {
            return $name . "." . $ext;
        } else {
            return Util::UPLOAD_ERROR_FAIL;
        }
    }

}
