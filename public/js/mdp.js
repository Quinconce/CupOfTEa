function stopsubmit(event){
	console.log("poil a frire")
	event.preventDefault()
				 //ecrit un msg dans une balise vide 
	document.getElementById("errors").innerHTML ="veuillez entrer un mdp identique"
	
}


window.addEventListener("DOMContentLoaded", (event) => {



	let police = document.getElementById("passwords")


	police.addEventListener('change', passverif)
		

		function passverif() {
			let pass = document.getElementById('pass').value;
			let vpass = document.getElementById('vpass').value;
			let submit= document.getElementById('submit');
			console.log(event);
			if (pass != vpass) {
				document.getElementById('vpass').style.borderColor = "red";
				document.getElementById('pass').style.borderColor = "red";
				//empecher l'utilisateur de mettre valider le formulaire en empecher le click du bouton submit
				submit.addEventListener("click", stopsubmit);
					console.log("nop")
				console.log(pass)
				console.log(vpass)
			}
			else {
				document.getElementById('vpass').style.borderColor = "green";
				document.getElementById('pass').style.borderColor = "green";
				//doit annuler la ligne 20-21
				submit.removeEventListener("click", stopsubmit);
				submit.addEventListener("click", function(event){
					document.getElementById("errors").innerHTML ="votre compte a bien ete enregistrer"
				 
				 return true
				
					});
					
				console.log("salut")
				console.log(pass)
				console.log(vpass)
			}
		}

	
});
