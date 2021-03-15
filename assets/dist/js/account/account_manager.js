$(document).ready(function() {
    $('#menu-users').addClass("menu-open");
    $('#menu-users-child').css("display", "block");
    $('#menu-list-users').addClass("active");

    var table = $('#data_account').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );