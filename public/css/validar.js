function setLogin(){
    try {
        var user = document.getElementById("user").value;
        var pass = document.getElementById("pass").value;

        if(user == "")
        {
            var inputUser = document.getElementById("user");
            inputUser.classList.add("error-input");
            alert("Campo usuario obligatorio.");
        }
        if(pass==""){
            var inputUser = document.getElementById("pass");
            inputUser.classList.add("error-input");
            alert("Ingrese contraseña");
        }

        //alert("Usuario: " + user + "Password: " + pass);
    } catch (error) {
        console.log(error);
    }
}

function cambios(){
    try {
        var inputUser = document.getElementById("user");
        inputUser.classList.add("edit-input");
    } catch (error) {
        console.log(error);
    }

    
}