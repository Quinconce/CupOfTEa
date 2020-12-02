<?php

class ProduitController
{
   
    public function display()
    {
        
            //instance de mes class model pour les appeller dans les "phtml"
           
            $thesModel= new ThesModel();
            $id= $_GET['idThes'];
            $thesModel= $thesModel ->  getOneThes($id);
            
            
            
            $template ='produit.phtml';
            require 'views/layout.phtml';
            
            
            
            
            
    }
}    