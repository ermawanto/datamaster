$(document).ready(function() {
    let page = 1;

    manageDataMaterial();

    editCustomer();
    formMaterial();


    /* manage data list material */
    function manageDataMaterial() {
        $.ajax({
            dataType: 'json',
            url: '/material/show',
            data:{page:page}
        }).done(function(data){
          manageRow(data.data);
        });
    }

      // edit data list material
    function editMaterial() {
        let id = getParameterByName('id');

        $.ajax({
            dataType: 'json',
            url: '/material/id/'+id,
            data:{page:page}
        }).done(function(data){
          formMaterial(data);
        });
    }

    /* create data material */
    function createMaterial() {
      $('#kirim').click(function(){
        let url = window.location.pathname + '/post';

        let produk_desc = $('#produk_desc').val();
        let material_code = $('#material_code').val();
        let code_jenis_produk = $('#code_jenis_produk').val();
        let nama_jenis_produk = $('#nama_jenis_produk').val();
        let group_produk = $('#group_produk').val();
        let group_produk_desc = $('#group_produk_desc').val();
        let sales_group = $('#sales_group').val();
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

        // untuk membantu edit data material
    function formCustomer(value){
      let produk_desc = $('#produk_desc').val(value.produk_desc);
      let material_code = $('#material_code').val(value.material_code);
      let code_jenis_produk = $('#code_jenis_produk').val(value.code_jenis_produk);
      let nama_jenis_produk = $('#nama_jenis_produk').val(value.nama_jenis_produk);
      let group_produk = $('#group_produk').val(value.group_produk);
      let group_produk_desc = $('#group_produk_desc').val(value.group_produk_desc);
      let active = $('#active').val(value.active);
    }

    /* Add new Item table row */
    function manageRow(data) {
        var rows = '';
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
            rows = rows + '<td>'+value.active+'</td>';
            rows = rows + '<td>';
            rows = rows + '<a href="material/edit?id='+value.id+'" class="btn btn-primary btn-md">Edit</a>'
            rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
            rows = rows + '</td>';
            rows = rows + '</tr>';
        });

        $("#material").html(rows);
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


