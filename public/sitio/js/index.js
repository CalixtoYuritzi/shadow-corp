function validarMensaje()
{
    const nombre=document.getElementById("nombre");
    const correo=document.getElementById("correo");
    const titulo=document.getElementById("titulo");
    const mensaje=document.getElementById("mensaje");

    if(nombre.value.length ===0 ||  correo.value.length ===0 ||  titulo.value.length ===0 ||  mensaje.value.length ===0)
    {
        alert("Error: Debes rellenar todos los datos");

    }

}


function color(){

    const nombre=document.getElementById("nombre");
    const correo=document.getElementById("correo");
    const titulo=document.getElementById("titulo");
    const mensaje=document.getElementById("mensaje");

    if(nombre.value.length ===0){
      nombre.style.borderColor='#DD052A';
    }
    else
    {
        nombre.style.borderColor='';
    }

    if( correo.value.length ===0)
    {
        correo.style.borderColor='#DD052A';
    }
    else
    {
        correo.style.borderColor='';
    }

    if( titulo.value.length ===0)
    {
        titulo.style.borderColor='#DD052A';
    }
    else
    {
        titulo.style.borderColor='';
    }


    if( mensaje.value.length ===0)
    {
        mensaje.style.borderColor='#DD052A';
    }
    else
    {
        mensaje.style.borderColor='';
    }
    

 

}

