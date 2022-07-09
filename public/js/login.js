const username=document.querySelector('input[name="Username"]');
username.addEventListener('blur',checkusername);





function checkusername(event){
const e=event.currentTarget;
console.log(e.value);
const errore=e.parentNode.querySelector('span');
if(e.value.length===0){

    errore.textContent="inserire username";
    errore.classList.add("errore");
    
}else{
    errore.textContent='';
    errore.classList.remove("errore");
   
        

}
  
}
  
const password=document.querySelector('input[name="Password"]');
password.addEventListener('blur',checkpassword);

function checkpassword(event){
const e=event.currentTarget;

if(e.value.length===0){

    const errore=e.parentNode.querySelector('span');
    errore.textContent="inserire password";
    errore.classList.add("errore");
    
}else{
    const errore=e.parentNode.querySelector('span');
    errore.textContent='';
    errore.classList.remove("errore");
    
}


}
      





