/**
 * Enable add product
 * Checking all filed is filled.
 */
$(document).ready(function(){
    $('#nos').bind('keyup', function() {
        if(allFilled()) $('.list_add_button').removeAttr('disabled');
    });

    function allFilled() {
        var filled = true;
        $('#assetAddProducts input').each(function() {
            console.log($(this).val());
            if($(this).val() == '') filled = false;
        });
        return filled;
    }
});


/**
 * Onclick
 * Sales page 
 * Dropdown
 */
$(".clickReportShow").click(function(){
    $('.reportassets').show();
});

$("#reportToday").click(function(){
    $('#currentFilter').val('today');
});

$("#reportYesterday").click(function(){
    $('#currentFilter').val('yesterday');
});

$("#reportLast7Days").click(function(){
    $('#currentFilter').val('7days');
});

$("#reportThisMonth").click(function(){
    $('#currentFilter').val('month');
});

$("#reportLastMonth").click(function(){
    $('#currentFilter').val('lastmonth');
});

$("#reportCustom").click(function(){
    $('#currentFilter').val('custom');
});
