//registration form 
document.getElementById('form').addEventListener('submit',function(e){
    e.preventDefault();
    const name = document.getElementById('name').value;
    const enroll = document.getElementById('enrollm').value;
    const aadh = document.getElementById('aadh').value;
    const party = document.getElementById('part').value;
    const formData = new FormData(this);
     if(name === ""){
        const a = toast("Enter your name");
     } else if (enroll.length != 12 || isNaN(enroll)) {
        toast('Enter valid 12 length Enrollment number');
    }else if (party === ""){
        toast("Enter your Party");
    
    }  else if (aadh.length != 12 || isNaN(aadh)){
        toast('invalid Aadhar');
    } else {
        // Animate add button
        const btn = document.getElementById("b-btn");
        btn.disabled = true;
        btn.innerHTML = 
                        "processing <span class = 'spiner-border' role = 'status' aria-hidden = 'true' style = 'height : 1.5rem; width:1.5rem'></span>";
        //fetch ApI
        fetch("php/check.php", {
            method: "post",
            body : formData,
        })
        .then((response) => {
            return response.text();
        })
        .then((text) => {
          toast(text);
          document.getElementById('b-btn');
          btn.disabled = false ;
          btn.innerHTML = "register";
        })
            .catch((error) => {
                toast(error);
                 btn.disabled = false;
                 btn.innerHTML = 'register here';
        });
    }
})