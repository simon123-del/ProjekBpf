var table = $('.js-basic-example');
var index = $(table).find('th:last').index();
$('.js-basic-example').DataTable({
    responsive: true,
    "order": [
        [index, "desc"]
    ]
});

//Exportable table
var d = new Date();
var table = $('.js-exportable').DataTable({
    dom: 'Bfrtip',
    responsive: true,
    buttons: [
        {
            extend: 'copyHtml5',
            text:'Salin Tabel',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'excelHtml5',
            text:'Konversikan ke Excel',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'print',
            text: 'Cetak Laporan',
            autoPrint: true,
            title: '',
            footer: true,
            exportOptions: {
                columns: ':visible'
            },
            customize: function ( win ) {
                $(win.document.body)
                    .css( 'font-size', '10pt');


                $(win.document.body).find( 'table' )
                    .addClass( 'compact' )
                    .css('border', '1px')
                    .css( 'font-size', 'inherit' );
            }
        }
    ]
});

