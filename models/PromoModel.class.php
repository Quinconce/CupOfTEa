<?php


class PromoModel extends ModelManager{
    
    public function getPromo(){
        $req= "SELECT `id_promo`,`titre_promo`,`legende_promo`,`dateDebut`,`image_promo`,`dateFin`,`publish` FROM `Promos`WHERE publish=1";
       $promo = $this -> queryAll($req);
        return $promo;
    }
    
    
}