
//validacion formulario estudiante


function valid_est(){
    let rut_est = document.getElementById("rut_est")
    let mail_est = document.getElementById("mail_est")
    let passw_est = document.getElementById("passw_est")
    let form_est = document.getElementById("form_est")
    if (rut_est.value == "" || mail_est.value == "" || passw_est.value == ""){
        window.alert("Rellene todos los campos")
    }else{
            form_est.addEventListener("submit",e=>{
            e.preventDefault()
            let warnings = ""
            let entrar = false
            let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
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
                window.alert(warnings)
            }
        })
    }
    localStorage.setItem('rut',rut_est.value);
    localStorage.setItem('pUser','pleb');
}



function valid_doc(){
    let rut_doc = document.getElementById("rud_doc")
    let mail_doc = document.getElementById("mail_doc")
    let passw_doc = document.getElementById("passw_doc")
    let form_doc = document.getElementById("form_doc")
    let parrafo_doc = document.getElementById("warnings2")
    if (rut_doc.value == "" || mail_doc.value == "" || passw_doc.value == ""){
        window.alert("Rellene todos los campos")
    }else{
            form_doc.addEventListener("submit",e=>{
            e.preventDefault()
            let warnings1 = ""
            let entrar = false
            let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
            if(passw_doc.value.length <8){
                warnings1 += `La contraseña no es valida `
                entrar = true
            }
            console.log(regexEmail.test(mail_doc.value))
            if(!regexEmail.test(mail_doc.value)){
                warnings1 += `El email no es valido `
                entrar = true
            }
            if (entrar){
                window.alert(warnings1)
            }
        })
    }  
    localStorage.setItem('rut',rut_doc.value);
    localStorage.setItem('pUser','mod');  
}

