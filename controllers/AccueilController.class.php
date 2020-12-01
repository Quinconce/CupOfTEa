<?php

class AccueilController
{
    public function display()
    {
        
            //instance de mes class model pour les appeller dans les "phtml"
            $theModel = new ThesModel();
            $cdc=$theModel -> getCdc();
            $new=$theModel -> getNew();
            $best=$theModel -> getBest();
            //aller chercher les catégories
            $categoriesModel= new CategoriesModel();
            $cat = $categoriesModel ->getAllCategories();
            //aller les slides
            $sliderModel= new SliderModel();
            $sliders= $sliderModel -> getSlider();
            //promos
            $promoModel= new PromoModel();
            $promo=$promoModel -> getPromo();
            //nouveautés
            
            //coup de coeur
            
            
            $template = "accueil.phtml";
            include 'views/layout.phtml';
    }    
}