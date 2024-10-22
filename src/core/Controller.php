<?php

namespace Core;

abstract class Controller
{
    protected function render($view, $data)
    {
        extract($data);
        require('../app/views/' . str_replace('.', DIRECTORY_SEPARATOR, $view) . '.php');

    }

    protected function redirect($url)
    {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $url);
        exit;
    }
}
