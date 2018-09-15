$(document).ready(function() {
    let page = 1;

    manageDataCustomer();
    formCustomer();


    /* manage data list customer */
    function manageDataCustomer() {
        $.ajax({
            dataType: 'json',
            url: '/customer/show',
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
    	  	  rows = rows + '<td>'+value.kd_customer+'</td>';
            rows = rows + '<td>'+value.nama_customer+'</td>';
            rows = rows + '<td>'+value.nama_pimpinan+'</td>';
            rows = rows + '<td>'+value.alamat+'</td>';
            rows = rows + '<td>'+value.kode_propinsi+'</td>';
            rows = rows + '<td>'+value.kode_kabupaten+'</td>';
            rows = rows + '<td>'+value.sales_group+'</td>';
            rows = rows + '<td>'+value.no_telepon+'</td>';
            rows = rows + '<td>'+value.npwp+'</td>';
            rows = rows + '<td>'+value.email+'</td>';
            rows = rows + '<td>'+value.active+'</td>';
            rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
            rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
            rows = rows + '</td>';
    	  	rows = rows + '</tr>';
    	});

    	$("#customer").html(rows);
    }

    function formCustomer() {
      $('#kirim').click(function(){
        let url = window.location.pathname + '/post';
        // di tambahin seperti yang di form
        let alamat = $('#alamat').val();
        let nama_customer = $('#nama_customer').val();

        $.ajax({
          url: url,
          type: 'post',
          data: {
            // di tambahin seperti yang di form
            alamat:alamat, nama_customer:nama_customer
          }
        }).done(function(data){
          console.log(data);
        });
      });
    }
});
