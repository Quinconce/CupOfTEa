<?php

class CategoriesModel extends ModelManager{
    
    public function getAllCategories(){
        //this->bdd
        $req = "SELECT id_cat,des_cat,image_cat,nom_cat FROM Categories ";
        $cat = $this -> queryAll($req);
        return $cat;
    }
}