<?php

namespace Simple\Php\Mvc\App;

class View {

    public static function render(string $pathToView, array $data = []) {
        require_once __DIR__."/../view/$pathToView";
    }

    public static function redirect(string $path) {
        header("location: $path");
        exit();
    }

}