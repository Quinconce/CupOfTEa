<?php

class CategoriesController
{
   
    public function display()
    {
        
            //instance de mes class model pour les appeller dans les "phtml"
           
            $categoriesModel= new CategoriesModel();
            $id= $_GET['id'];
            $thesCat= $categoriesModel -> getAllThesFromCategorie($id);
            
            
            
            $template ='categories.phtml';
            require 'views/layout.phtml';
            
            
            
            
            
    }
}    