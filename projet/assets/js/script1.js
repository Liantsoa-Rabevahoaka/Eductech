// La recuperation des éléments
const form = document.querySelector("#form");
const username = doument.querySelector("#username");
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const password2 = document.querySelector("#password2");

// Evenements 
form.addEventListener('submit', e=>{
    e.preventDefault();

    form_verify();
})

//fonctions
function  form_verify(){

    //Obtenir toutes les valeurs des inputs
    const userValue = username.value.trim();
    const emailValue = email.value.trim();
    const pwdValue = password.value.trim();
    const pwd2Value = password2.value.trim();

    //Username verify
    if (userValue === ""){
        let message ="Username ne peut pas être vide";
        setError(username,message);
    }else if (!userValue.match(/^[a-zA-Z]/)){
        let message ="Username doit commencer par une lettre";
        setError(username,message);
    }else{
        let letterNum = userValue.length;
        if (letterNum<3){
            let message = setError(username,message)
        }else{
            setSuccess(username);
        }
    }
}


function setError(elem,message){
    const formControl = elem.parentElement;
    const small = formControl.querySelector('small');
    //Ajout du message d'Erreur
    small.innerText = message

    //Ajout de la classe Error
    formControl.className = "form-control error";
}
function setSuccess(elem){
    const formControl = elem.parentElement;
    formControl.className = "form-control success";
}