$(function(){                                         // anonymous function call on document ready
$(".states").keyup(function()                        // $(.states)  selector    .keyup eveny is fired
{ 
var searchid = $(this).val();                        // $(this).val()  return value contained in input having class states on keyup
var dataString = 'search='+ searchid;
if(searchid!='')
{
    $.ajax({
    type: "POST",
    url: "db.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
        $("#result").html(html).show();
    }
    });
}return false;
});

/*jQuery("#result").live("click",function(e){ 
    var $clicked = $(e.target);
    var $name = $clicked.find('.name').html();
    var decoded = $("<div/>").html($name).text();
    $('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    jQuery("#result").fadeOut(); 
    }
});
$('#searchid').click(function(){
    jQuery("#result").fadeIn();
});*/
});