$(document).ready(function() {
    let page = 1;

    manageDataCustomer();

    editCustomer();
    createCustomer();


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

    // edit data customer
    function editCustomer() {
        let id = getParameterByName('id');

        $.ajax({
            dataType: 'json',
            url: '/customer/id/'+id,
            data:{page:page}
        }).done(function(data){
          formCustomer(data);
        });
    }

    /* create data customer */
    function createCustomer() {
      $('#kirim').click(function(){
        let url = window.location.pathname + '/post';

        let kode_customer = $('#kode_customer').val();
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
          type: 'POST',
          data: {
            kode_customer:kode_customer, nama_customer:nama_customer, nama_pimpinan:nama_pimpinan, alamat:alamat, kode_provinsi:kode_provinsi, kode_kabupaten:kode_kabupaten,
            sales_group:sales_group, no_telepon:no_telepon, npwp:npwp, email:email, active:active
          },
        }).done(function(data){
          console.log(data);
        });
      });
    }

    // untuk membantu edit data customer
    function formCustomer(value){
      let kode_customer = $('#kode_customer').val(value.kode_customer);
      let nama_customer = $('#nama_customer').val(value.nama_customer);
      let nama_pimpinan = $('#nama_pimpinan').val(value.nama_pimpinan);
      let alamat = $('#alamat').val(value.alamat);
      let kode_provinsi = $('#kode_provinsi').val(value.kode_provinsi);
      let kode_kabupaten = $('#kode_kabupaten').val(value.kode_kabupaten);
      let sales_group = $('#sales_group').val(value.sales_group);
      let no_telepon = $('#no_telepon').val(value.no_telepon);
      let npwp = $('#npwp').val(value.npwp);
      let email = $('#email').val(value.email);
      let active = $('#active').val(value.active);
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
            rows = rows + '<td>';
            rows = rows + '<a href="customer/edit?id='+value.id+'" class="btn btn-primary btn-md">Edit</a>'
            rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
            rows = rows + '</td>';
    	  	rows = rows + '</tr>';
    	});

    	$("#customer").html(rows);
    }

    // jangan lupa copy di file lain juga
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }
});
