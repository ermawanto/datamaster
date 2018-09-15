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
        let kd_customer = $('#kd_customer').val();
        let nama_customer = $('#nama_customer').val();
        let nama_pimpinan = $('#nama_pimpinan').val();
        let alamat = $('#alamat').val();
        let kode_provinsi = $('#kode_provinsi').val();
        let kode_kabupaten = $('#kode_kabupaten').val();
        let sales_group = $('#sales_group').val();
        let no_telepon = $('#no_telepon').val();
        let npwp = $('#npwp').val();
        let email = $('#email').val();
        let active = $('#active').val();


        $.ajax({
          url: url,
          type: 'post',
          data: {
            kd_customer:kd_customer, nama_customer:nama_customer, nama_pimpinan:nama_pimpinan, alamat:alamat, kode_provinsi:kode_provinsi, kode_kabupaten:kode_kabupaten,
            sales_group:sales_group, no_telepon:no_telepon, npwp:npwp, email:email, active:active
          }
        }).done(function(data){
          console.log(data);
        });
      });
    }
});
