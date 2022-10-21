//sticky navbar
//window.onscroll = function() {sticky_nav()};


function sticky_nav() {

    const navbar = document.querySelector("#navbar");
    var sticky = navbar.offsetTop;

    if (window.pageYOffset >= sticky)
    {
        navbar.classList.add("sticky")
    } 
    else 
    {
        navbar.classList.remove("sticky");
    }
} 