// login form
document.getElementById('login-form').addEventListener('submit',function(e){
    e.preventDefault();
    const enroll = document.getElementById('enrollment').value;
    const email = document.getElementById('email').value;
    const formData = new FormData(this);
    if(enroll.length !=12 || isNaN(enroll)) {
        toast('Enter valid 12 length Enrollment number');
    } else if(email === ""){
        toast ('enter registered Email');
    } else {
        //fetch api
        fetch("php/log.php", {
            method : "post" ,
            body : formData,
        
        })
        .then((response) => {
            return response.text();
            
        })
        .then((text) => {
            toast(text);
           
        })
        .catch((error) => {
            toast(error);
        })
    }
})