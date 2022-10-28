
var bool = false;
function menu(){
    var men = document.querySelector("#ham_option");
    if(bool == false)
    {
        men.style.display = "block";
        bool = true;
    }
    else if (bool == true)
    {
        men.style.display = "none";
        bool = false;
    }
    console.log(men);
}