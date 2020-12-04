let select;
let price;
let id;
let size;
let panier = [];
document.addEventListener('DOMContentLoaded', function() {
    let addPanier = document.getElementById('test');
    addPanier.addEventListener('click', sauvegard);

    document.getElementById("price").addEventListener("change", displayPrice);
    displayPrice();
    restore();
    addPanier.addEventListener('click', restore);

})

function displayPrice() {
    select = document.querySelector("#price option:checked");
    price = select.dataset.price;

    document.getElementById("prix").innerHTML = price + "€";

}

function sauvegard() {
    //this prend on compte l'evenement actuel



    id = this.dataset.id
    size = document.querySelector("#price").value;
    let data = { prix: price, poids: size, article: id };
    console.log(data)

    panier.push(data)

    //transformer en JSON
    let achat = JSON.stringify(panier)
    window.localStorage.setItem(`achat`, achat);
    
    


}

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
    
 
        
}

