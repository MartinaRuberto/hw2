button_cerca = document.querySelector('form');
button_cerca.addEventListener('submit', Cerca);

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

function onResult(response) {
    return response.json();

}

function onJsonFinal(json)
{
    
    if(!json==0)
    {
       
       const movie_container = document.querySelector('.container_movie');
       movie_container.innerHTML = '';
       
        for (let result of json)
     {
        const id = result.id;
        const movie = result.name;
        const image = result.image;
       
        const cuore_vuoto = document.createElement("img");
        const container = document.createElement("div");
        const immagine = document.createElement("img");
        const name = document.createElement("strong");
        const carrello_vuoto = document.createElement("img");
        const optional = document.createElement("div");
    
        cuore_vuoto.dataset.id = id;
        cuore_vuoto.dataset.title = movie;
        cuore_vuoto.dataset.immagine = image;
        carrello_vuoto.dataset.id = id;
        carrello_vuoto.dataset.title = movie;
        carrello_vuoto.dataset.immagine = image;
        immagine.src = image;
        name.textContent = movie;

        const movie_container = document.querySelector('.container_movie');
        container.classList.add('container');
        immagine.classList.add('immagine');
        carrello_vuoto.classList.add('checkbox1');
        cuore_vuoto.classList.add('checkbox2');
        name.classList.add('name');
        optional.classList.add('optional');

        container.appendChild(name);
        container.appendChild(immagine);
        optional.appendChild(cuore_vuoto);
        optional.appendChild(carrello_vuoto);
        container.appendChild(optional);
        movie_container.appendChild(container);

            if(result.preferiti===true)
            { 
            cuore_vuoto.src = "/images/cuore_pieno.svg";
            cuore_vuoto.addEventListener('click',RimuoviPreferiti);

           }else if(result.preferiti===false)
           {
            cuore_vuoto.src = "/images/cuore_vuoto.svg";
            cuore_vuoto.addEventListener('click',AggiungiPreferiti );
           }
        
           if(result.salvati===true)
           {
            carrello_vuoto.src ="/images/bxs-save.svg";
            carrello_vuoto.addEventListener('click',RimuoviSalvati );
           }else if(result.salvati===false){

            carrello_vuoto.src = "/images/bx-save.svg";
            carrello_vuoto.addEventListener('click',AggiungiSalvati );
        }

    }         
    
    }else{
      
        const movie_container = document.querySelector('.container_movie');

        movie_container.innerHTML = '';
        
        const not_found=document.createElement('p');
        not_found.textContent="Nessun risultato";
        not_found.classList.add('not_found');
        movie_container.appendChild(not_found);
    }

}
    

function Cerca(event) {
    event.preventDefault();
    const text = document.querySelector('#series').value;
    const encodedText = encodeURIComponent(text);

    fetch('inizia/series/' + encodedText)
        .then(onResult).then(onJsonFinal);
 
}


function RimuoviPreferiti(event){
    
    const e = event.currentTarget;
    e.removeEventListener('click',RimuoviPreferiti);
    e.addEventListener('click',AggiungiPreferiti);
    e.src = '/images/cuore_vuoto.svg';
    fetch(BASE_URL +"/inizia/remove_like/id/" + e.dataset.id);


}


function AggiungiPreferiti(event){

    
    const e = event.currentTarget;
    e.removeEventListener('click',AggiungiPreferiti);
    e.addEventListener('click',RimuoviPreferiti);
    e.src = '/images/cuore_pieno.svg';
    const formData=new FormData();
    formData.append('id',e.dataset.id);
    formData.append('title',(e.dataset.title));
    formData.append('immagine',(e.dataset.immagine));
    formData.append('_token',CSFR_TOKEN);
    fetch(BASE_URL + "/add_like/",{method:'post',body :formData});

}


function AggiungiSalvati(event){
    
        
        const e = event.currentTarget;
        e.removeEventListener('click',AggiungiSalvati);
        e.addEventListener('click',RimuoviSalvati);
        e.src = '/images/bxs-save.svg';
        const formData=new FormData();
        formData.append('id',e.dataset.id);
        formData.append('title',(e.dataset.title));
        formData.append('immagine',(e.dataset.immagine));
        formData.append('_token',CSFR_TOKEN);
        fetch(BASE_URL + "/add_saved/",{method:'post',body :formData});
    
    }


    function RimuoviSalvati(event){
      
        const e = event.currentTarget;
        e.removeEventListener('click',RimuoviPreferiti);
        e.addEventListener('click',AggiungiPreferiti);
        e.src = '/images/bx-save.svg';
        fetch(BASE_URL +"/inizia/remove_saved/id/" + e.dataset.id);
    
    
    }





