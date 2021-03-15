var getUrl = window.location;
var baseUrl = getUrl.protocol + "//" + getUrl.host;

$(document).ready(function(){

})

function switchLang($lang) {
    $.ajax({
        url: baseUrl + "/index/switch_lang",
        type: "POST",
        data: {
            idiom: $lang
        },
        success: function (data) {
            location.reload();
        }
    });
}