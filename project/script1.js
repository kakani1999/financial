const form=document.getElementById('form');
const wct=document.getElementById('wct');
const itr=document.getElementById('itr');
const tr=document.getElementById('tr');
form.addEventListener('submit', (e)=>{
     const wctValue=wct.value.trim();
    const itrValue=itr.value.trim();
    const trValue=tr.value.trim();
    if(wctValue === ''){
         e.preventDefault();
        setErrorFor(wct,'This field is required');
    }
    else{
        setSuccess(wct);
    }
    
    if(itrValue === ''){
        e.preventDefault();
        setErrorFor(itr,'This field is required');
    }
    else{
        setSuccess(itr);
    }
    if(trValue === ''){
        e.preventDefault();
        setErrorFor(tr,'This field is required');
    }
    else{
        setSuccess(tr);
    }

   
});

function setSuccess(input){
    const element=input.parentElement;
    element.className='element success';
   
    
}

function setErrorFor(input,message){
    const element=input.parentElement;
    const small=element.querySelector('small');
    small.innerText=message;
    element.className='element error';
}

const result1=wctValue+itrValuelue+trValue;


    const result=document.getElementById("result");
    result.innerText=result1;
