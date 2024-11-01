<?php 

class BaseController {
    protected $folder;

    public function render($file, $data = [], $subFolder = '') {
        $subFolderPath = $subFolder ? $subFolder . '/' : '';
        $exists_file = 'views/' . $this->folder . '/' . $subFolderPath . $file . '.php';

        if(is_file($exists_file)) {
            extract($data);
            ob_start();
            require_once($exists_file);
            $content = ob_get_clean();

            require_once 'views/layouts/application.php';
        }
        else {
            header("Location: index.php?controller=pages&action=error");
        }
    }
}