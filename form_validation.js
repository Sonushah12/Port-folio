function validationForm(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var description = document.getElementById("description").value;

    if(name === "" || email === "" || description === ""){
        alert("Please fill all fields");
        return false;
    }

    //Email validation
    var emailre = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if(!email.match(emailre)){
        alert("Invailid email address");
        return false;
    }
    alert("Message Sent! Thank you for contacting us.");
    return true;
}