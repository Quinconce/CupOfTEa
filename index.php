<?php

session_start();

//autoload

spl_autoload_register(function ($class) {
    
    //condition
    //quand j'instancie on verfie la presence de "controllers" ou model" et on include le controllers/model correspondant
   if ( stristr ($class,"Controller",)){
    include 'controllers/' . $class . '.class.php';
   }else if(stristr ($class,"Model"))
        include 'models/'.$class.'.class.php';
});


if(isset($_GET['page'])){
    //le redirige ver sla bonne page
    switch($_GET['page']){
        case 'thes':
            $controller = new ThesController();
            $controller->display();
            break;
        case 'register':
            $controller = new RegisterController();
            $controller->display();
            $controller->newUser();
            break;
        case 'connect':
            $controller = new ConnectController();
            $controller->verify();
            $controller->display();
           break;
        case 'panier':
            $controller = new PanierController();
            $controller->verify();
            $controller->display();
           break;
        case 'tester':
            $controller = new PanierController();
            $controller->getInfo();
        case 'disconnect':
            $controller = new DisconnectController();
            $controller->disconnect();    
            break;
        case 'produit':
            $controller = new ProduitController();
            $controller->display();    
            break;
        case 'accueil':
            $controller = new AccueilController();
            $controller->display();    
            break;
        case 'categories':
            $controller = new CategoriesController();
            $controller->display();
            break;    
        default:  
            $controller = new AccueilController();
            $controller->display();
            
    }
    
}
else{
    $controller = new AccueilController();
    $controller->display();
}