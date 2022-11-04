
var bool = false;
function menu(){
    var men = document.querySelector("#ham_option");
    if(bool == false)
    {
        //men.style.display = "block";
        men.classList.add('js_ham');
        bool = true;
    }
    else if (bool == true)
    {
        //men.style.display = "none";
        men.classList.remove('js_ham');
        bool = false;
    }
    console.log(men);
}