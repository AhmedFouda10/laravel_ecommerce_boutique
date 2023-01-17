<?php
namespace App\Helpers;

class Helpers{
    public function view($path){
        return view($path);
    }

    public function viewCompact($path,$compact=[]){
        return view($path,$compact[]);
    }
}
?>
