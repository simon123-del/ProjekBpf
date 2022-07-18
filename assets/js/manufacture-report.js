$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = Date.parse( $('#min').val());
        var max = Date.parse( $('#max').val());
        var age = Date.parse( data[3] ) || 0; // use data for the age column
         
        if ( (( isNaN( min ) && isNaN( max )   ) ||
             ( (isNaN( min ) && age <= max)    ) ||
             ( min <= age && isNaN( max )   )  ||
             ( (min <= age && age <= max)   )) )
        {
            return true;
        }
        return false;
    }
);




$('#min, #max').change( function() {
    table.draw();
});
