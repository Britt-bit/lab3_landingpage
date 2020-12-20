var toggleNav = false;

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
        
    })
//}
