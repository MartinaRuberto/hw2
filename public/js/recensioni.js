

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
    const container_reviews = document.querySelector('.container_reviews');
    for (let result of json)
    {
       
       const id = result.id;
       const movie = result.title;
       const image = result.immagine;
       const review=decodeURIComponent(result.text); 

      const container = document.createElement("div");
       const immagine = document.createElement("img");
       const name = document.createElement("strong");
       const commento= document.createElement("p");
       const blocco_commento=document.createElement("div");
       const blocco_immagine=document.createElement("div");
      
       immagine.src = image;
       name.textContent = movie;
       commento.textContent=review;

       container.classList.add('container');
       immagine.classList.add('immagine');
       name.classList.add('name');
       commento.classList.add('commento');
       blocco_commento.classList.add('blocco_commento');
       blocco_immagine.classList.add('blocco_immagine');
     
       blocco_immagine.appendChild(name);
      blocco_immagine.appendChild(immagine);
      blocco_commento.appendChild(commento);
      container.appendChild(blocco_immagine);
      container.appendChild(blocco_commento);
      container_reviews.appendChild(container);
    }

}

function fetch_load_recensioni() {
   
    fetch("/GetRecensioni").then(response).then(json);

}

fetch_load_recensioni();