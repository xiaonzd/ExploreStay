    var nav = document.getElementById("navbar");
    var intro = document.getElementById("intro");


    window.onscroll = () => {
        if(intro.getBoundingClientRect().y <= 0){
            if(!nav.classList.contains("navbar-fixed-position")){
                nav.classList.add("navbar-fixed-position");
            }   
        }else{
            nav.classList.remove("navbar-fixed-position");
        }

    };