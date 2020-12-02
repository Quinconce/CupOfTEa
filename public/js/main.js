document.addEventListener('DOMContentLoaded',function(){
   // let searchBar =document.getElementById('searchBar');
    //searchBar.addEventListener('input',inputExecute);
    // let more = document.getElementById('result');
    // more.addEventListener('click',moreExecute);
    //delegation d'evenement permet de verifier EN CONTINUE si on click sur une id qui s'appelle ide et on lance moreExecute
   
    $(document).on('click','#test',sauvegard);
    document.getElementById("price").addEventListener("change",displayPrice)
   // displayPrice()
    
})

function displayPrice()
{
    let select= document.querySelector("#price option:checked");
    let price= select.dataset.price;
    document.getElementById("prix").innerHTML = price+"€";
    
}
function sauvegard(){
    //this prend on compte l'evenement actuel
   
    
    
    let data=['price','size']
    console.log(data)

    //transformer en JSON
    data =JSON.stringify(data)
    window.localStorage.setItem('panier',data);
    
    
    
    
}