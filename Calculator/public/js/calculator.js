/**
 * Created by Derek on 2017-02-01.
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function equals() {
    var value = $("#screen").text();
    $.ajax({
        type:"post",
        url:"calculate",
        data:{'screen' : value},
        cache: false,
        success: function(html) {
            $("#screen").text(html);
        }
    });
    return false;
}

$(document).ready(function() {
    $("td button").not("#equals, #AC, #percent").click(function(){
        var screen = $("#screen");
        var value = screen.text();
        screen.text(value + $(this).attr("value"));
    });
    $("#AC").click(function() {
        $("#screen").text("");
    });
});