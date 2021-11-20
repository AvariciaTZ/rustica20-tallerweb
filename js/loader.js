

function time() {

    return 500;
}

var tiempo = time();

$(document).ready(function () {
    setTimeout(
        function () {
            $(".container-loader").hide();
        }, tiempo);
});
