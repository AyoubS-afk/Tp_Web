<?php

class Url_helpers{
    public function redirect($page){
        header('Location'.URL_ROOT.$page);
    }
}
