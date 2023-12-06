$(".toggle-menu").on('click', (e)=> {
    const display = $("#menu-lateral").css("display");
    if(display == 'none') {
        $("#menu-lateral").css("display", "block");
    }
    else {
        $("#menu-lateral").css("display", "none");
    }
})