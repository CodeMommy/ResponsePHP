<?php

/**
 * CodeMommy ResponsePHP
 * @author  Candison November <www.kandisheng.com>
 */

namespace CodeMommy\ResponsePHP;

/**
 * Class Response
 * @package CodeMommy\ResponsePHP
 */
class Response
{
    public static function json($data)
    {
        echo json_encode($data);
        return true;
    }

    public static function text($data)
    {
        echo $data;
        return true;
    }

    public static function redirect($url)
    {
        header('Location:' . $url);
        return true;
    }
}