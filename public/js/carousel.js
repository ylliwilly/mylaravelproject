var scroll_field = document.querySelector(".carousel__viewport");
var $snappers = $(".carousel__snapper");

var scroll_page = 4;
var parameter = (scroll_page - 1) / scroll_page;
var done = false;

const carousel_interval = setInterval(function() {

    let check = scroll_field.scrollLeft >= (scroll_field.scrollWidth * parameter - 50);
    console.log(check);
    if(check && !done){
        done = true;

        $snappers.css("animationName","tostart, snap"); 
        setTimeout(() => {
            done = false;
            $snappers.css("animationName","");
        }, 5000);
    }

}, 4000);