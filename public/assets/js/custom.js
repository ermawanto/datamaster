$(document).ready(function() {
    let page = 1;

    manageData();


    /* manage data list */
    function manageData() {
        $.ajax({
            dataType: 'json',
            url: '/customer/show',
            data: {page:page}
        }).done(function(data){
          console.log(data);
        });
    }
    /* Add new Item table row */
    function manageRow(data) {
    	var	rows = '';
    	$.each( data, function( key, value ) {
    	  	rows = rows + '<tr>';
    	  	rows = rows + '<td>'+value.title+'</td>';
    	  	rows = rows + '<td>'+value.description+'</td>';
    	  	rows = rows + '<td data-id="'+value.id+'">';
            rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
            rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
            rows = rows + '</td>';
    	  	rows = rows + '</tr>';
    	});


    	$("tbody").html(rows);
    }
});
