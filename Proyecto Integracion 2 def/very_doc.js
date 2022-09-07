
const rud_doc = document.getElementById("rud_doc")
const mail_doc = document.getElementById("mail_doc")
const passw_doc = document.getElementById("passw_doc")
const form_doc = document.getElementById("form_doc")
const parrafo_doc = document.getElementById("warnings2")


if (form_doc){
        form_doc.addEventListener("submit",e=>{
        e.preventDefault()
        let warnings1 = ""
        let entrar = false
        let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
        parrafo_doc.innerHTML = ""
        if(passw_doc.value.length <8){
            warnings1 += `La contraseña no es valida <br>`
            entrar = true
        }
        console.log(regexEmail.test(mail_doc.value))
        if(!regexEmail.test(mail_doc.value)){
            warnings1 += `El email no es valido <br>`
            entrar = true

        }
        if (entrar){
            parrafo_doc.innerHTML = warnings1
        }
    })
}

