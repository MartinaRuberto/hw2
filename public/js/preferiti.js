

const data={
    id:'',
    immagine:'',
    text:'',
};

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


function onResponse(response) {
    
    return response.json();
}

function onJson(json) {
    
    for (let result of json)
    {
       
       const id = result.id;
       const movie = result.title;
       const image = result.immagine;
       
       const cuore_vuoto = document.createElement("img");
       const recensione = document.createElement("img");
       const container = document.createElement("div");
       const immagine = document.createElement("img");
       const name = document.createElement("strong");
       const optional = document.createElement("div");
       cuore_vuoto.src = "/images/cuore_pieno.svg";
       recensione.src= "/images/bxcomment.svg";
       
       cuore_vuoto.dataset.id = id;
       cuore_vuoto.dataset.title = movie;
       cuore_vuoto.dataset.immagine = image;
       immagine.src = image;
       name.textContent = movie;
      
       recensione.dataset.id = id;
       recensione.dataset.title = movie;
       recensione.dataset.immagine = image;
       immagine.src = image;
       name.textContent = movie;

       const movie_container = document.querySelector('.container_movie');
       container.classList.add('container');
       immagine.classList.add('immagine');
       cuore_vuoto.classList.add('checkbox2');
       recensione.classList.add('recensione_botton');
       name.classList.add('name');
       optional.classList.add('optional');

       container.appendChild(name);
       container.appendChild(immagine);
       optional.appendChild(cuore_vuoto);
       optional.appendChild(recensione);
       container.appendChild(optional);
       movie_container.appendChild(container);

    }
       
    const cuore_vuoto_click = document.querySelectorAll('.checkbox2');
    for (const box of cuore_vuoto_click) {
        box.addEventListener('click', click2);
    }


    function click2(event)
     {
        const e = event.currentTarget;
     
        if (e.src.indexOf("/images/cuore_pieno.svg" != -1))
         {
            e.src = '/images/cuore_vuoto.svg';
            fetch(BASE_URL + "/preferiti/remove_like/id/" + e.dataset.id)
             .then(function(){
                 e.parentNode.parentNode.remove();
        
                 });
        }

    }
    const recensioni=document.querySelectorAll('.recensione_botton');
    for (const reviews of recensioni) {
        reviews.addEventListener('click',RecensioneClick);
        
    }

    
    const invio= document.querySelector('.interno')
    invio.addEventListener('click',InvioClick);

    const button=document.querySelector('#invia');
    button.addEventListener('click',AggiungiRecensione);

    function InvioClick(event){
    event.stopPropagation();
   
    }


   function RecensioneClick(event){
       
       const e = event.currentTarget;
        const modale=document.querySelector('.recensione_modale');
        modale.classList.remove('hidden');
        modale.classList.add('modale');
        document.body.classList.add('no-scroll');
        const no_modale=document.querySelector('.recensione_modale');
        no_modale.addEventListener('click',nomodale);
        e.removeEventListener('click',RecensioneClick);

        data['id']=e.dataset.id;
        data['immagine']=e.dataset.immagine;
        data['title']=e.dataset.title;
        
    }
    
    function nomodale(){
        const modale=document.querySelector('.recensione_modale');
        modale.classList.add('hidden');
        modale.classList.remove('modale');
        document.body.classList.remove('no-scroll');
        for (const reviews of recensioni) {
           
            reviews.addEventListener('click',RecensioneClick);
        }
    }
  
    
   

   function AggiungiRecensione(event) {
    event.preventDefault();
    nomodale();
    const text = document.querySelector('#feedback').value;
    const encodedText = encodeURIComponent(text);
   if(encodedText==''){
         nomodale();
   }else{
    const formData=new FormData();
    formData.append('id',(data['id']));
    formData.append('title',(data['title']));
    formData.append('immagine',(data['immagine']));
    formData.append('text',(encodedText));
    formData.append('_token',CSFR_TOKEN);
 
    fetch(BASE_URL + '/add_recensioni/',{method:'post',body :formData});
    
   }
}
}



 
function fetch_load_preferiti() {
    
    fetch("/GetPreferiti").then(onResponse).then(onJson);

}

fetch_load_preferiti();
