/*var toggleNav = false;

//function navigation(){
    document.querySelector('#nav-toggle').addEventListener('click', function() {
        if(!toggleNav){
            //document.querySelector('nav ul').style.transition='all .5s';
            document.querySelector('nav ul').style.top='0px';
            toggleNav = true;
        } else {
            //document.querySelector('nav ul').style.transition='all .5s';
            document.querySelector('nav ul').style.top='-5000px';
            toggleNav = false;
        }
        
    })*/
//}


document.addEventListener('scroll',function(){
var y = window.scrollY;

if(y>648){

document.querySelector(".navbar").id ="bg-show"; 
}else{
  document.querySelector(".navbar").id = "bg-hidden";   
}
});


/* Footer dynamic year */
var curentYear = new Date().getFullYear();
                               
var copyrightText =
  "Copyright © " + curentYear + " Don't be quiet . All rights reserved.";
  document.querySelector('footer p').innerHTML=copyrightText;

