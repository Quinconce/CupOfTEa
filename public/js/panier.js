let produit = [];

document.addEventListener('DOMContentLoaded', function() {
   restore()
   displayBdd()

})

function restore() {
    //recupere le storage,si c'est pas null, parse pour passer de json a tableau 

    //trouver le moyen de calculer le total du panier et de l'afficher en haut 
    let recupTab = window.localStorage.getItem(`achat`);
    if (recupTab !== null) {


        produit = JSON.parse(recupTab);


        // const reducer = (accumulator, currentValue) => accumulator + currentValue;
        // console.log((recupTab.prix).reduce(reducer));

        let tot = 0
        for (let i = 0; i < produit.length; i++) {

            tot += parseFloat(produit[i].prix)

        }

        console.log(tot)
        document.querySelector('#valeurPanier').innerHTML = tot.toFixed(2) + "€"; //pourquoi?
    }
}    
    
    function displayBdd(){
    
    //faire une requete asynchrone de type POST
    console.log(produit)
    //récupérer tout ce qu'il y a dans mon formulaire
    
    //créer un objet Request
    let req = new Request('index.php?page=tester',{
        method:"POST",
        body:JSON.stringify(produit)
    })
    
    fetch(req)
        .then(response => response.json())
        .then(jeu=>{
            document.getElementById('result').innerHTML=`<strong>${jeu['image_the']}</strong>`;
        })
        .catch(err => console.log(err));
}
 
       
         
