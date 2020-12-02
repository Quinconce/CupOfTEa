<?php

class ProduitController
{
   
    public function display()
    {
        
            //instance de mes class model pour les appeller dans les "phtml"
           
            $thesModels= new ThesModel();
            $id= $_GET['idThes'];
            $thesModel= $thesModels ->  getOneThes($id);
            $thesPrice= $thesModels ->  getPrice($id);
            
            
            
            $template ='produit.phtml';
            require 'views/layout.phtml';
            
            
            
            
            
    }
}    