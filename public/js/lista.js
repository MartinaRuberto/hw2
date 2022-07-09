

const bottone=document.querySelector('#menu');
bottone.addEventListener('click',mobilemenu);

function mobilemenu(event){
    
    const mobile=document.querySelector('.links_mobile');
    mobile.classList.remove('hidden');
    mobile.classList.add('mobile');
    document.body.classList.add('no-scroll');
    const e=event.currentTarget;
    const no_mobile=document.querySelector('.links_mobile.mobile');
    no_mobile.addEventListener('click',no_mobil);
    e.removeEventListener('click',mobilemenu);
    
}

function no_mobil(event){
    const e=event.currentTarget;
    e.classList.add('hidden');
    e.classList.remove('mobile');
    const bottone=document.querySelector('#menu');
    bottone.addEventListener('click',mobilemenu);
    document.body.classList.remove('no-scroll');
}

function response(response) {
  
    return response.json();
}

function json(json) {

  
    const movie_container = document.querySelector('.container_movie');
   
    for (let result of json)
    {
       
       const id = result.id;
       const movie = result.title;
       const image = result.immagine;
       
       const container = document.createElement("div");
       const immagine = document.createElement("img");
       const name = document.createElement("strong");
       const carrello_vuoto = document.createElement("img");
       const optional = document.createElement("div");
       carrello_vuoto.src ="/images/bxs-save.svg";
       carrello_vuoto.dataset.id = id;
       carrello_vuoto.dataset.title = movie;
       carrello_vuoto.dataset.immagine = image;
       immagine.src = image;
       name.textContent = movie;
       

    
       container.classList.add('container');
       immagine.classList.add('immagine');
       carrello_vuoto.classList.add('checkbox1');
       name.classList.add('name');
       optional.classList.add('optional');

       container.appendChild(name);
       container.appendChild(immagine);
       optional.appendChild(carrello_vuoto);
       container.appendChild(optional);
       movie_container.appendChild(container);
    }




       const carrello_vuoto_click = document.querySelectorAll('.checkbox1');
       for (const box of carrello_vuoto_click)
        {
         box.addEventListener('click', click1);
        }


         function click1(event) {
            const e = event.currentTarget;
            if (e.src.indexOf("/images/bxs-save.svg" != -1))
            {
                e.src = '/images/bx-save.svg';
                fetch(BASE_URL + "/remove_saved/id/" + e.dataset.id)
                .then(function () {
                    movie_container.innerHTML='';
                    fetch_load_home_saved();
                     }); 
                
               

        }
    }

}
function fetch_load_home_saved() {
   
    fetch("/GetLista").then(response).then(json);

}

fetch_load_home_saved();