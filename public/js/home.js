   
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

    let movie_container = document.querySelector('.container_movie');
    for (let i = 0; i < 4; i++) {
        
        let movie = json[i].title;
        let image = json[i].immagine;

        let container = document.createElement("div");
        let immagine = document.createElement("img");
        let nome = document.createElement("strong");
        immagine.src = image;
        nome.textContent = movie;
        
        container.classList.add('container');
        immagine.classList.add('immagine');
        nome.classList.add('name');

        container.appendChild(nome);
        container.appendChild(immagine);
        movie_container.appendChild(container);

    }

}

//fara una fetch alla load_home
function fetch_load_home() {
  
    fetch("/load_home").then(onResponse).then(onJson);

}

fetch_load_home();
fetch_load_home1();



function onresponse(response) {
    
    return response.json();
}

function onjson(json) {

  
    let movie_container = document.querySelector('.container_movie2');
    for (let i = 0; i < 4; i++) {
        let name = json[i].title;
        let imag = json[i].immagine;


        let container = document.createElement("div");
        let immagine = document.createElement("img");
        let nome = document.createElement("strong");
        immagine.src = imag;
        nome.textContent = name;

        
        container.classList.add('container');
        immagine.classList.add('immagine');
        nome.classList.add('name');
        
        container.appendChild(nome);
        container.appendChild(immagine);
        movie_container.appendChild(container);

    }
}
    

 


function onresponse(response) {
    
    return response.json();
}

function onjson(json) {

   
    let movie_container = document.querySelector('.container_movie2');
    for (let i = 0; i < 4; i++) {
        
        let movie = json.results[i].original_name;
        const image = 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2' + json.results[i].poster_path;
    

        let container = document.createElement("div");
        let immagine = document.createElement("img");
        let nome = document.createElement("strong");
        immagine.src = image;
        nome.textContent = movie;
        

        container.classList.add('container');
        immagine.classList.add('immagine');
        nome.classList.add('name');

        container.appendChild(nome);
        container.appendChild(immagine);
        movie_container.appendChild(container);
    }
}

function fetch_load_home1() {
   
    fetch(BASE_URL +"/load_home1").then(onresponse).then(onjson);

}

