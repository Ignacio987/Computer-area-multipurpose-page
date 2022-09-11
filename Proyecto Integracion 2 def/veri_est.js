
//validacion formulario estudiante
const rut_est = document.getElementById("rut_est")
const mail_est = document.getElementById("mail_est")
const passw_est = document.getElementById("passw_est")
const form_est = document.getElementById("form_est")
const parrafo = document.getElementById("warnings")


if (form_est){
    form_est.addEventListener("submit",e=>{
    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    parrafo.innerHTML = ""
    if(passw_est.value.length <8){
        warnings += `La contraseña no es valida <br>`
        entrar = true
    }
    console.log(regexEmail.test(mail_est.value))
    if(!regexEmail.test(mail_est.value)){
        warnings += `El email no es valido <br>`
        entrar = true

    }
    if (entrar){
        parrafo.innerHTML = warnings
    }
})
}

