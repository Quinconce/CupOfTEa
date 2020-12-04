<?php

class ThesModel extends ModelManager{
    
    public function getOneThes($id){
        $req = "SELECT `ref_the`,`titre_the`,`sousTitre_the`,`image_the`,`desc_the`,`publish`,Thes.id_the,     `id_quantite`,`prix`,`poid`,QuantiThes.id_the 
                FROM Thes 
                INNER JOIN QuantiThes on QuantiThes.id_the=Thes.id_the 
                WHERE Thes.id_the = ? AND publish=1 ";
        $tea = $this -> queryOne($req,[$id]);
        return $tea;
    }
    
    public function getPrice($id){
        $req = "SELECT `ref_the`,`titre_the`,`sousTitre_the`,`image_the`,`desc_the`,`publish`,Thes.id_the,     `id_quantite`,`prix`,`poid`,QuantiThes.id_the 
                FROM Thes 
                INNER JOIN QuantiThes on QuantiThes.id_the=Thes.id_the 
                WHERE Thes.id_the = ? AND publish=1 ";
        $tea = $this -> queryAll($req,[$id]);
        return $tea;
    }
    
    // medthode coup de coeur
    public function getCdc(){
        $req = "SELECT Thes.id_the,titre_the,sousTitre_the,desc_the,cdc_the,publish,image_the,min(QuantiThes.prix) as prix 
                 FROM Thes INNER JOIN QuantiThes ON QuantiThes.id_the = Thes.id_the
                 WHERE cdc_the = 1 
                 GROUP BY Thes.id_the
                 "
                 ;
        $cdc = $this -> queryOne($req);
        return $cdc;
    }
    public function getNew(){
        $req = "SELECT titre_the,sousTitre_the,desc_the,cdc_the,publish,image_the,min(QuantiThes.prix) as prix ,max(Thes.id_the) as new FROM Thes INNER JOIN QuantiThes ON QuantiThes.id_the = Thes.id_the GROUP BY Thes.id_the DESC LIMIT 1
                 "
                 ;
        $new = $this -> queryOne($req);
        return $new;
    }
    public function getBest(){
        $req = "SELECT Thes.image_the, Thes.desc_the, Thes.titre_the, Thes.id_the,MIN(prix) as prix FROM        Thes
                INNER JOIN QuantiThes on QuantiThes.id_the = Thes.id_the
                WHERE Thes.id_the = (SELECT id_the FROM Commandes_details GROUP BY id_the ORDER BY COUNT(id_the) DESC LIMIT 1)
                GROUP BY Thes.id_the "
                 ;
        $best = $this -> queryOne($req);
        return $best;
    }
    public function getAllThes($id,$poid,$prix){
        $id = produit.article;
        $poid =produit.poids;
        $prix= produit.prix;
       $query = $bdd -> prepare("SELECT `ref_the`,`titre_the`,`sousTitre_the`,`image_the`,`desc_the`,`publish`,Thes.id_the,     `id_quantite`,`prix`,`poid`,QuantiThes.id_the 
                FROM Thes 
                INNER JOIN QuantiThes on QuantiThes.id_the=Thes.id_the 
                WHERE Thes.id_the = ? AND publish=1 AND poid=? AND prix= ?");
                $query -> execute([$id,$poid,$prix]);
$jeu = $query -> fetch(PDO::FETCH_ASSOC);

echo json_encode($jeu);
    }
    
    
    
}