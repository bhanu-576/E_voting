// alert box

const toast = (msg) =>{
    const alertboox = document.getElementById('alert');
    alertboox.innerHTML = msg +'!';
    alertboox.style.transform = 'translateY(0)';
    setTimeout(()=>{
        alertboox.style.transform = 'translateY(-150px)';
    },5000);
}