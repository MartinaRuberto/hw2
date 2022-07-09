const nome = document.querySelector('input[name="Nome"]');
nome.addEventListener('blur', checknome);


function checknome(event) {
    const e = event.currentTarget;
    const errore = e.parentNode.querySelector('span');
    if (e.value.length === 0) {

        errore.textContent = "inserire il nome";
        errore.classList.add("errore");

    } else {
        errore.textContent = '';
        errore.classList.remove("errore");
    }
}

const cognome = document.querySelector('input[name="Cognome"]');
cognome.addEventListener('blur', checkcognome);


function checkcognome(event) {
    const e = event.currentTarget;
    const errore = e.parentNode.querySelector('span');
    if (e.value.length === 0) {

        errore.textContent = "inserire il cognome";
        errore.classList.add("errore");

    } else {
        errore.textContent = '';
        errore.classList.remove("errore");
    }
}

const username = document.querySelector('input[name="Username"]');
username.addEventListener('blur', checkusername);


function onResponse(response) {
    return response.json();
}

function onJson(json, e) {
    const errore = e.parentNode.querySelector('span');
  
    if ( json[0].exists === true) {

        errore.textContent = "username già in uso";
        errore.classList.add("errore");
    }
    else {

        errore.textContent = '';
        errore.classList.remove("errore");
    }
}

function checkusername(event) {
    const e = event.currentTarget;
   
    const errore = e.parentNode.querySelector('span');
    if (e.value.length === 0) {

        errore.textContent = "inserire username";
        errore.classList.add("errore");

    } else {
        errore.textContent = '';
        errore.classList.remove("errore");
        fetch(BASE_URL + REGISTER_ROUTE + "/username/" + username.value).then(onResponse).then(
            function (json) {
                return onJson(json, e)
            });
    }
}

const mail = document.querySelector('input[name="email"]');
mail.addEventListener('blur', checkemail);

function onresponse(response) {
    return response.json();
}

function onjson(json, e) {
    const errore = e.parentNode.querySelector('span');
    
    if (json[0].exists === true) {

        errore.textContent = "email già in uso";
        errore.classList.add("errore");
    }
    else {

        errore.textContent = '';
        errore.classList.remove("errore");
    }

}


function checkemail(event) {
    const e = event.currentTarget;
  
    const errore = e.parentNode.querySelector('span');
    console.log(errore);
    if (!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(mail.value).toLowerCase())) {

        errore.textContent = "email errata";
        errore.classList.add("errore");

    } else {
        errore.textContent = '';
        errore.classList.remove("errore");
        fetch(BASE_URL + REGISTER_ROUTE +'/email/' + mail.value).then(onresponse).then(
            function (json) {
                return onjson(json, e)
            });

    }
}

const password = document.querySelector('input[name="Password"]');
password.addEventListener('blur', checkPassword);


function checkPassword(event) {
    const e = event.currentTarget;
    const errore = e.parentNode.querySelector('span');
    if (e.value.length <8) {

        errore.textContent = "inserire la password";
        errore.classList.add("errore");

    } else {
        errore.textContent = '';
        errore.classList.remove("errore");
    }
}

const conferma_password = document.querySelector('input[name="Conferma_Password"]');
conferma_password.addEventListener('blur', checkConfermaPassword);


function checkConfermaPassword(event) {
    const e = event.currentTarget;
    const errore = e.parentNode.querySelector('span');
    if (e.value.length <8) {

        errore.textContent = "inserire la password";
        errore.classList.add("errore");

    } else {
        errore.textContent = '';
        errore.classList.remove("errore");
    }
}

