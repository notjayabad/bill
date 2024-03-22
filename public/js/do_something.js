$(document).ready(function(){
    $('#route_codes').inputmask('***-****-**');
    
$( 'body' ).on( "click", '#submit_button', function() {
    // gets value of month and route code
    var dash_month = $('#month').val();
    var dash_route_code = $('#route_code').val();

    // removes dashes
    var month = dash_month.replace(/-/g, "");
    var route_code = dash_route_code.replace(/-/g, "");
    
    console.log(month);
    console.log(route_code);

} );

$( 'body' ).on( "click", '#submit_button', function() {
    $('#priv_message1').html('<i>brrp</i>');
    $('#priv_message2').html('sdf');
    $('#spinner').attr('class','absolute opacity-100 -translate-x-1/2 -translate-y-1/2 top-1/4 left-1/2');
} );

});