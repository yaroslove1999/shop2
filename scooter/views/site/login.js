$(window).on("hashchange", function(){
    if(location.hash.slice(1)=="version"){
        $(".zation").addClass("extend");
        $("#usines").removeClass("selected");
        $("#version").addClass("selected");
    } else {
        $(".zation").removeClass("extend");
        $("#usines").addClass("selected");
        $("#version").removeClass("selected");
    }
});
$(window).trigger("hashchange");
