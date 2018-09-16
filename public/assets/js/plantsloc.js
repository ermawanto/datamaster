$(document).ready(function() {
    let page = 1;

    manageDataPlantsloc();
    formPlantsloc();


    /* manage data list customer */
    function manageDataPlantsloc() {
        $.ajax({
            dataType: 'json',
            url: '/plantsloc/show',
            data:{page:page}
        }).done(function(data){
          manageRow(data.data);
        });
    }

    /* Add new Item table row */
    function manageRow(data) {
    	var	rows = '';
    	$.each( data, function( key, value ) {
    	  	rows = rows + '<tr>';
    	  	rows = rows + '<td>'+(key + 1)+'</td>';
            rows = rows + '<td>'+value.id+'</td>';
    	  	  rows = rows + '<td>'+value.code_plant+'</td>';
            rows = rows + '<td>'+value.nama_plant+'</td>';
            rows = rows + '<td>'+value.code_storage_location+'</td>';
            rows = rows + '<td>'+value.nama_storage_location+'</td>';
            rows = rows + '<td>'+value.code_shipping_point+'</td>';
            rows = rows + '<td>'+value.nama_shipping_point+'</td>';
            rows = rows + '<td>'+value.code_propinsi+'</td>';
            rows = rows + '<td>';
            rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
            rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
            rows = rows + '</td>';
    	  	rows = rows + '</tr>';
    	});

    	$("#plantsloc").html(rows);
    }

    function formPlantsloc() {
      $('#kirim').click(function(){
        let url = window.location.pathname + '/post';
        let code_plant = $('#code_plant').val();
        let nama_plant = $('#nama_plant').val();
        let code_storage_location = $('#code_storage_location').val();
        let nama_storage_location = $('#nama_storage_location').val();
        let code_shipping_point = $('#code_shipping_point').val();
        let nama_shipping_point = $('#nama_shipping_point').val();
        let code_propinsi = $('#code_propinsi').val();


        $.ajax({
          url: url,
          type: 'post',
          data: {
            code_plant:code_plant, nama_plant:nama_plant, code_storage_location:code_storage_location, nama_storage_location:nama_storage_location, code_shipping_point:code_shipping_point, nama_shipping_point:nama_shipping_point,
            code_propinsi:code_propinsi
          }
        }).done(function(data){
          console.log(data);
        });
      });
    }
});
