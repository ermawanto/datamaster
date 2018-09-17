$(document).ready(function() {
    let page = 1;

    manageDataPlantsloc();

    editPlantsloc();
    formPlantsloc();


    /* manage data list plantsloc */
    function manageDataPlantsloc() {
        $.ajax({
            dataType: 'json',
            url: '/plantsloc/show',
            data:{page:page}
        }).done(function(data){
          manageRow(data.data);
        });
    }

     // edit data plantsloc
    function editPlantsloc() {
        let id = getParameterByName('id');

        $.ajax({
            dataType: 'json',
            url: '/plantsloc/id/'+id,
            data:{page:page}
        }).done(function(data){
          formPlantsloc(data);
        });
    }

    /* create data plantsloc */
    function createPlantsloc() {
      $('#kirim').click(function(){
        let url = window.location.pathname + '/post';

        let code_plant = $('#code_plant').val();
        let nama_plant = $('#nama_plant').val();
        let code_storage_location = $('#code_storage_location').val();
        let nama_storage_location = $('#nama_storage_location').val();
        let code_shipping_point = $('#code_shipping_point').val();
        let nama_shipping_point = $('#nama_shipping_point').val();
        let active = $('#active').val();


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

    // untuk membantu edit data customer
    function formCustomer(value){
      let kode_plant = $('#code_plant').val(value.kode_plant);
      let nama_plant = $('#nama_plant').val(value.nama_plant);
      let code_storage_location = $('#code_storage_location').val(value.code_storage_location);
      let nama_storage_location = $('#nama_storage_location').val(value.nama_storage_location);
      let code_shipping_point = $('#code_shipping_point').val(value.code_shipping_point);
      let nama_shipping_point = $('#nama_shipping_point').val(value.nama_shipping_point);
      let code_propinsi = $('#code_propinsi').val(value.code_propinsi);
    }

    /* Add new Item table row */
    function manageRow(data) {
        var rows = '';
        $.each( data, function( key, value ) {
            rows = rows + '<tr>';
            rows = rows + '<td>'+(key + 1)+'</td>';
            rows = rows + '<td>'+value.id+'</td>';
              rows = rows + '<td>'+value.kode_plant+'</td>';
            rows = rows + '<td>'+value.nama_plant+'</td>';
            rows = rows + '<td>'+value.code_storage_location+'</td>';
            rows = rows + '<td>'+value.nama_storage_location+'</td>';
            rows = rows + '<td>'+value.code_shipping_point+'</td>';
            rows = rows + '<td>'+value.nama_shipping_point+'</td>';
            rows = rows + '<td>'+value.code_propinsi+'</td>';
            rows = rows + '<td>';
            rows = rows + '<a href="plantsloc/edit?id='+value.id+'" class="btn btn-primary btn-md">Edit</a>'
            rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
            rows = rows + '</td>';
            rows = rows + '</tr>';
        });

        $("#plantsloc").html(rows);
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

