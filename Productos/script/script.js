

$(document).ready(function(){

    if($(document).scrollTop()>100){
        $("nav").removeClass("small").addClass("big");
    } else{
        $("nav").removeClass("big").addClass("small");
    }

});
