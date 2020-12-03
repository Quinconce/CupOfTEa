function restore() {
    //recupere le storage,si c'est pas null, parse pour passer de json a tableau 

    //trouver le moyen de calculer le total du panier et de l'afficher en haut 
    let recupTab = window.localStorage.getItem(`achat`);
    if (recupTab !== null) {


        panier = JSON.parse(recupTab);


        // const reducer = (accumulator, currentValue) => accumulator + currentValue;
        // console.log((recupTab.prix).reduce(reducer));

        let tot = 0
        for (let i = 0; i < panier.length; i++) {

            tot += parseFloat(panier[i].prix)

        }

        console.log(tot)
        document.querySelector('#valeurPanier').innerHTML = tot.toFixed(2) + "€"; //pourquoi?
    }
    
 
       for (let i = 0; i < panier.length; i++){

            $.post('controllers/PanierController.class.php',{idtry:panier.id},displayall)

        }
         
}