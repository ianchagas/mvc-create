<?php


class Router
{
    public static function defineRota($path, $arg)
    {
        $url = @$_GET['url'];
        if ($url == $path) {
            $arg();
            die();
        }

        $path = explode('/', $path);
        $url = explode('/', @$_GET['url']);

        $ok = true;
        $parameter = [];

        if (count($path) == count($url)) {
            foreach ($path as $key => $value) {
                if ($value == '?') {
                    $parameter[$key] = $url[$key];
                } else if ($url[$key] != $value) {
                    $ok = false;
                    break;
                }
            }

            if ($ok) {
                $arg($parameter);
                die();
            }
        }
    }
}
