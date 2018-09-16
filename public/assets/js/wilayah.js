$(document).ready(function() {
    let page = 1;

    manageDataWilayah();
    formWilayah();


    /* manage data list customer */
    function manageDataWilayah() {
        $.ajax({
            dataType: 'json',
            url: '/wilayah/show',
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
    	  	  rows = rows + '<td>'+value.sales_office+'</td>';
            rows = rows + '<td>'+value.sales_office_desc+'</td>';
            rows = rows + '<td>'+value.code_kabupaten+'</td>';
            rows = rows + '<td>'+value.kabupaten+'</td>';
            rows = rows + '<td>'+value.sales_group+'</td>';
            rows = rows + '<td>'+value.code_kecamatan+'</td>';
            rows = rows + '<td>'+value.kecamatan+'</td>';
            rows = rows + '<td>';
            rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
            rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
            rows = rows + '</td>';
    	  	rows = rows + '</tr>';
    	});

    	$("#wilayah").html(rows);
    }

    function formWilayah() {
      $('#kirim').click(function(){
        let url = window.location.pathname + '/post';
        let sales_office = $('#sales_office').val();
        let sales_office_desc = $('#sales_office_desc').val();
        let code_kabupaten = $('#code_kabupaten').val();
        let kabupaten = $('#kabupaten').val();
        let sales_group = $('#sales_group').val();
        let code_kecamatan = $('#code_kecamatan').val();
        let kecamatan = $('#kecamatan').val();


        $.ajax({
          url: url,
          type: 'post',
          data: {
            sales_office:sales_office, sales_office_desc:sales_office_desc, code_kabupaten:code_kabupaten, kabupaten:kabupaten, sales_group:sales_group, code_kecamatan:code_kecamatan,
            kecamatan:kecamatan
          }
        }).done(function(data){
          console.log(data);
        });
      });
    }
});
