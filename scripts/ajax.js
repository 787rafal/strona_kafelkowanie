


window.onload = function(){
    var xhr = new XMLHttpRequest();
    xhr.addEventListener('readystatechange',function(){
        document.getElementById("ajax").innerHTML = this.responseText;
    });
    xhr.open("GET","scripts/ajaxTxt.txt",true);
    xhr.send(); 
};

