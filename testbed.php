<?php

spl_autoload_register(function ($className) {
    $file = './modules/' . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

    if (!file_exists($file)) {
        return false;
    } else {
        require_once $file;
        return true;
    }
});

use Cards\Robinson\Distracted;
use Cards\Robinson\Eating;
use Cards\Robinson\Focused;
use Cards\Robinson\Genius;
use Cards\Robinson\Weak;

var_dump([
             Distracted::cardCreationSpec()->toArray(),
             Weak::cardCreationSpec()->toArray(),
             Focused::cardCreationSpec()->toArray(),
             Genius::cardCreationSpec()->toArray(),
             Eating::cardCreationSpec()->toArray(),]);