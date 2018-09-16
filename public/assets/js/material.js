$(document).ready(function() {
    let page = 1;

    manageDataMaterial();
    formMaterial();


    /* manage data list customer */
    function manageDataMaterial() {
        $.ajax({
            dataType: 'json',
            url: '/material/show',
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
    	  	  rows = rows + '<td>'+value.produk_desc+'</td>';
            rows = rows + '<td>'+value.material_code+'</td>';
            rows = rows + '<td>'+value.code_jenis_produk+'</td>';
            rows = rows + '<td>'+value.nama_jenis_produk+'</td>';
            rows = rows + '<td>'+value.group_produk+'</td>';
            rows = rows + '<td>'+value.group_produk_desc+'</td>';
            rows = rows + '<td data-id='+value.id+'></td>';
            rows = rows + '<td>'+value.active+'</td>';
            rows = rows + '<td>';
            rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
            rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
            rows = rows + '</td>';
    	  	rows = rows + '</tr>';
    	});

    	$("#material").html(rows);
    }

    function formMaterial() {
      $('#kirim').click(function(){
        let url = window.location.pathname + '/post';
        let produk_desc = $('#produk_desc').val();
        let material_code = $('#material_code').val();
        let code_jenis_produk = $('#code_jenis_produk').val();
        let nama_jenis_produk = $('#nama_jenis_produk').val();
        let group_produk = $('#group_produk').val();
        let group_produk_desc = $('#group_produk_desc').val();
        let active = $('#active').val();


        $.ajax({
          url: url,
          type: 'post',
          data: {
            produk_desc:produk_desc, material_code:material_code, code_jenis_produk:code_jenis_produk, nama_jenis_produk:nama_jenis_produk, group_produk:group_produk, group_produk_desc:group_produk_desc,
            active:active
          }
        }).done(function(data){
          console.log(data);
        });
      });
    }
});
