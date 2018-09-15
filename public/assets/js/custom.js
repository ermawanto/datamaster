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
    	  	rows = rows + '<td>'+value.alamat+'</td>';
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
        let alamat = $('#alamat').val();

        $.ajax({
          url: url,
          type: 'post',
          data: {alamat:alamat}
        }).done(function(data){
          console.log(data);
        });
      });
    }
});
