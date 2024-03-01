$(".toggle-menu").on('click', ()=> {
    if($("#menu-lateral").css("display") == 'none') {
        $("#menu-lateral").css("display", "block");
    }
    else {
        $("#menu-lateral").css("display", "none");
    }
})