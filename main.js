(function() {

    var preload = document.getElementById("preload");
    var loading = 0;
    var id = setInterval(frame, 40);

    function frame() {
        if (loading == 50) {
            clearInterval(id);
            window.open("home", "_self");
        } else {
            loading = loading + 1;
            if (loading == 40) {
                preload.style.animation = "fadeout 0.5s ease";
            } 
        }
    }


})();