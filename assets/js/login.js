/* 
Bryan Pearson
2013
 */

//dont start playing with the dom till jquery says it's ready
jQuery(function($) {

//onloading the page automatically display userid and password in the fields
$('#username').val('User ID');
$('#password').val('Password');


//once the user clicks in the box remove it to make it sweet and easy for input
$('#username').click(function(){
    $('#username').val('');
});

$('#password').click(function(){
    $('#password').val('');
});

$('#loginform').click(function(){
    $(".result").load("login");
});


});