
$(document).ready(function(){ 
    $("#menu").css({"width": "90%","padding": "50px","background-color":"#202020", "text-align":"left"})
    $("#menu a").css({"text-decoration": "none", "color": "#333", "font-family": "cursive", "padding": "5px", "font-size": "20px"});
    $("#menu li").css({"display": "inline-block","vertical-align":"top"});
    $(".dropdown-menu").css({"padding-top": "10px", "padding-left": "0px",
        "position": "absolute",
        "width":"fit-content",
        "display": "none","text-align":"left",
        "background-color": "maroon"});
    $(".dropdown-element").css({"display": "block","padding": "15px",
    "padding-top": "0", "font-family": "cursive", "font-size": "20px"});
    $(".link").css({"color": "wheat"});



    $("#menu li").hover(function(){
        $(".dropdown-menu", this).slideDown(200);}, function(){ 
            $(".dropdown-menu", this).stop().slideUp(200)});
        });