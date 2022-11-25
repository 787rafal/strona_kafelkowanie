function check_pass(){
    hasloJeden = document.getElementById('haslo_r').value;
    hasloDwa = document.getElementById('haslo_r2').value;
    if(hasloJeden != hasloDwa){
        document.getElementById('haslo_error').style.display = "inline";
    }
    else
    {
        document.getElementById('haslo_error').style.display = "none";
    }
}