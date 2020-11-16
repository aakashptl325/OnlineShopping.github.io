// JavaScript source code


$(document).ready(function ()
{
    $(":button").click(function ()
    {   
        $(this).next("div").slideToggle(1000);
    });
   /* $("#hide").click(function ()
    {
        $(this).toggle();
        $(this).prev(":button").toggle();
        $(this).prev("div").slideToggle(1000);
    });*/
});