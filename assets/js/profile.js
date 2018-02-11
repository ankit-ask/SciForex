

function toggleSignup(){
   document.getElementById("login-toggle").style.backgroundColor="#fff";
    document.getElementById("login-toggle").style.color="#222";
    document.getElementById("signup-toggle").style.backgroundColor="#57b846";
    document.getElementById("signup-toggle").style.color="#fff";
    document.getElementById("login-form").style.display="none";
    document.getElementById("signup-form").style.display="block";
}

function toggleLogin(){
    document.getElementById("login-toggle").style.backgroundColor="#57B846";
    document.getElementById("login-toggle").style.color="#fff";
    document.getElementById("signup-toggle").style.backgroundColor="#fff";
    document.getElementById("signup-toggle").style.color="#222";
    document.getElementById("signup-form").style.display="none";
    document.getElementById("login-form").style.display="block";
}


function modal_toggleSignup(){
   document.getElementById("login-toggle-modal").style.backgroundColor="#fff";
    document.getElementById("login-toggle-modal").style.color="#222";
    document.getElementById("signup-toggle-modal").style.backgroundColor="#57b846";
    document.getElementById("signup-toggle-modal").style.color="#fff";
    document.getElementById("login-form-modal").style.display="none";
    document.getElementById("signup-form-modal").style.display="block";
}

function modal_toggleLogin(){
    document.getElementById("login-toggle-modal").style.backgroundColor="#57B846";
    document.getElementById("login-toggle-modal").style.color="#fff";
    document.getElementById("signup-toggle-modal").style.backgroundColor="#fff";
    document.getElementById("signup-toggle-modal").style.color="#222";
    document.getElementById("signup-form-modal").style.display="none";
    document.getElementById("login-form-modal").style.display="block";
}
