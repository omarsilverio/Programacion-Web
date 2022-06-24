let modal = document.getElementById('modal');
let abrir = document.getElementById('abrir');
let cerrar = document.getElementById('close');

abrir.addEventListener('click',()=>{
    modal.showModal();
});

cerrar.addEventListener('click', ()=>{
    modal.close();
});
