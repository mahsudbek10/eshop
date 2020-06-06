<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lang
 *
 * @author m.kurvanbayev
 */
require 'db/db.php';

class Lang {
    //put your code here
    
    public $lang="ru";
    private $R;
    
    public function Lang(){
        $this->R = new R();
    }
    
    public function getSentence(){
        
    }
}
