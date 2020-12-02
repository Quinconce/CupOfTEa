<?php

class CategoriesModel extends ModelManager{
    
    public function getAllCategories(){
        //this->bdd
        $req = "SELECT id_cat,des_cat,image_cat,nom_cat FROM Categories ";
        $cat = $this -> queryAll($req);
        return $cat;
    }
    
    public function getAllThesFromCategorie($numCat){
        $req = "SELECT `id_the`,`titre_the`,`image_the`,`desc_the`,`publish`,Thes.id_cat,Categories.id_cat 
                FROM`Thes` 
                INNER JOIN Categories ON Categories.id_cat = Thes.id_cat 
                WHERE Thes.id_cat= ?";
        $cat = $this -> queryAll($req,[$numCat]);
        return $cat;
    }
}