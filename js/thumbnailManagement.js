//chrome xmlhttprequest warning here for some reason... conflicting js files?
$("button[name = 'button']").click(function(){
    $("#contents").load('php/removedata.php');
});