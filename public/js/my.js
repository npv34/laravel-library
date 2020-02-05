$(document).ready(function () {
    $('#search-customer').on('keyup', function () {
        let value = $(this).val();
        console.log(value);
        $.ajax({
            url: 'http://localhost:8000/admin/borrows/searchCustomer',
            type: 'GET',
            data: {'keyword': value},
            success: function (data) {
                let html = '';
                $.each(data, function (index, value) {
                    html += '<tr>';
                    html += '<td>';
                    html +=   ++index;
                    html += '</td>';
                    html += '<td>';
                    html +=   value['name'];
                    html += '</td>';
                    html += '<td>';
                    html +=   value['class'];
                    html += '</td>';
                    html += '</tr>';
                });

                $('#customer-table').html(html)
            }
        });
    });
    $('#search-book').on('keyup', function () {
        let value = $(this).val();
        console.log(value);
        $.ajax({
            url: 'http://localhost:8000/admin/borrows/searchBook',
            type: 'GET',
            data: {'keyword': value},
            success: function (data) {
                let html = '';
                $.each(data, function (index, value) {
                    html += '<tr>';
                    html += '<td>';
                    html +=   ++index;
                    html += '</td>';
                    html += '<td>';
                    html +=   value['name'];
                    html += '</td>';
                    html += '<td>';
                    html +=   value['status'];
                    html += '</td>';
                    html += '<td>';
                    html +=   '<button data-id="'+value['id']+'"  class="btn btn-primary select-book">';
                    html += 'Chon'
                    html +=   '</button>';
                    html += '</td>';
                    html += '</tr>';
                });
                $('#book-table').html(html)
            }
        });
    });

   $('.select-customer').click(function () {
        let idCustomer = $(this).attr("data-id");
       $.ajax({
           url: 'http://localhost:8000/admin/customers/' + idCustomer ,
           type: 'GET',
           success: function (result) {
               //dong model lai
                $('.modal-right').modal('hide');
               //gan gia tri tra ve vao form
               $('#name-customer').val(result['name']);
               $('#code-customer').val(result['codeID']);
               $('#class-customer').val(result['class']);
               $('#dob-customer').val(result['dob']);

           }
       });
   });


   $('body').on('click','.select-book', function () {
       let idBook = $(this).attr("data-id");
       $.ajax({
           url: 'http://localhost:8000/admin/books/' + idBook,
           type: 'GET',
           success: function (result) {
               let status = (result['status'] === 1) ? 'Mới' : 'Cũ';


               $('.modal-right').modal('hide');
               let html = '';
               html += '<tr>';
               html += '<td>';
               html +=   result['name'];
               html += '</td>';
               html += '<td>';
               html +=   status;
               html += '</td>';
               html += '</tr>';

               $('#book-table-choose').html(html)
           }
       });
   });
});
