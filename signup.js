var fullname = document.querySelector("#name");
var phone = document.querySelector("#phone");
var email = document.querySelector("#email");
var password = document.querySelector("#password");
var button = document.querySelector("#submit");

console.log(phone.id);

const setError = (param, message) =>{
    let input = document.getElementById(param+"_err");
    input.style = "color: red;";
    input.innerHTML = message;
}

const clearError = (param) =>{
    let input = document.getElementById(param+"_err");
    input.innerHTML ="";
}

   //validating surname
    fullname.addEventListener('keyup', (event) =>{
        let val = fullname.value;
        console.log(fullname);
        if(val.length < 3){
            button.setAttribute('disabled', 'disabled');
            fullname.className = "form-control is-invalid";
            setError(fullname.id, 'surname is required');
        }
        else{
            button.removeAttribute('disabled');
            fullname.className = "form-control is-valid";
            clearError(fullname.id);
        }
     });
        // //validating othernames
        // othernames.addEventListener('keyup', (event) =>{
        //     let val = othernames.value;
        //     console.log(othernames);
        //     if(val.length < 3){
        //         button.setAttribute('disabled', 'disabled');
        //         othernames.className = "form-control is-invalid";
        //         setError(othernames.id, 'othernames is required');
        //     }
        //     else{
        //         button.removeAttribute('disabled');
        //         othernames.className = "form-control is-valid";
        //         clearError(othernames.id);
        //     }
        // })  


        //validating phone number
        phone.addEventListener('keyup', (event) =>{
            let val = phone.value;
            console.log(phone);
            if(val.length  < 11){
                button.setAttribute('disabled', 'disabled');
                phone.className = "form-control is-invalid";
                setError(phone.id, 'phone is required');
            }
            else{
                button.removeAttribute('disabled');
                phone.className = "form-control is-valid";
                clearError(phone.id);
            }
        })  

       
        //validating email
        email.addEventListener('keyup', () =>{
            //getting input value
            let val = email.value;
            var search = val.search("@");
            
            if(search < 3){
                button.setAttribute('disabled', 'disabled');
                email.className = "form-control is-invalid";
                setError(email.id, "please enter a valid email address");
            }
            else{
                button.removeAttribute('disabled');
                email.className = "form-control is-valid";
                clearError(email.id);
            }
        })  


        //validating password
        password.addEventListener('keyup', () =>{
            //getting input value
            let val = password1.value;
            console.log(val);
            
            if(val.length < 6){
                button.setAttribute('disabled', 'disabled');
                password.className = "form-control is-invalid";
                setError(password.id, "password is too short");
            }
            else{
                button.removeAttribute('disabled');
                password1.className = "form-control is-valid";
                clearError(password.id);
            }

        //     if(password2.value !== ''){
        //         if(val !== password2.value){
        //             button.setAttribute('disabled', 'disabled');
        //             password2.className = "form-control is-invalid";
        //             setError(password2.id, "password does not match");
        //         }
        //         else{
        //             button.removeAttribute('disabled');
        //             password2.className = "form-control is-valid";
        //             clearError(password2.id)
        //         }
        //     }
        // })  


        // //confirming password
        // password2.addEventListener('keyup', () =>{
        //     let pass = password1.value; let pass2 = password2.value;
        //     if(pass !== pass2){
        //         button.setAttribute('disabled', 'disabled');
        //         password2.className = "form-control is-invalid";
        //         setError(password2.id, "password does not match");
        //     }
        //     else{
        //         button.removeAttribute('disabled');
        //         password2.className = "form-control is-valid";
        //         clearError(password2.id);
        //     }
})  


