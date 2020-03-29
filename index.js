function btn() {
    const nameAlert=document.getElementById("nameAlert"), emailAlert=document.getElementById("emailAlert"), srnAlert=document.getElementById("srnAlert"), nPAlert=document.getElementById("nPasswordAlert"), cPAlert= document.getElementById("cPasswordAlert");
    if(nameAlert.style.display === "none" && emailAlert.style.display ==="none" && srnAlert.style.display ==="none" && nPAlert.style.display ==="none" && cPAlert.style.display ==="none"){document.getElementById("btnSignUp").removeAttribute("disabled");}else {document.getElementById("btnSignUp").setAttribute("disabled", "disabled");}
}
function validate(name,value){
    if(value!==""){
        switch (name){
            case "name" :   const posName=/^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/;
                            if(!posName.test(value)){document.getElementById("nameAlert").style.display = "inline-block";} else{document.getElementById("nameAlert").style.display = "none";}
            break;
            case "srn" :    const posSrn =/^[P][E][S]\d[A-Z][A-Z]\d{2}[A-Z][A-Z]\d{3}/; const zero = /^[P][E][S]\d[A-Z][A-Z]\d{2}[A-Z][A-Z][0][0][0]$/;
                            if(!posSrn.test(value)|| zero.test(value)){document.getElementById("srnAlert").style.display = "inline-block";} else{document.getElementById("srnAlert").style.display = "none";}
            break;
            case "email" :  const posEmail=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                            if(!posEmail.test(value)){document.getElementById("emailAlert").style.display = "inline-block";} else{document.getElementById("emailAlert").style.display = "none";}
            break;
            case "nPassword" :  const posNPassword=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
                                if(!posNPassword.test(value)){document.getElementById("nPasswordAlert").style.display = "inline-block";} else{document.getElementById("nPasswordAlert").style.display = "none";}
            break;
            case "cPassword" :  const nPassword=document.getElementById("nPassword").value;
                                if(nPassword === value){document.getElementById("cPasswordAlert").style.display = "none";} else{document.getElementById("cPasswordAlert").style.display = "inline-block";}
            break;
        }
        btn();
    }

}
