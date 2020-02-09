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
                    html += ++index;
                    html += '</td>';
                    html += '<td>';
                    html += value['name'];
                    html += '</td>';
                    html += '<td>';
                    html += value['class'];
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
                    html += ++index;
                    html += '</td>';
                    html += '<td>';
                    html += value['name'];
                    html += '</td>';
                    html += '<td>';
                    html += value['status'];
                    html += '</td>';
                    html += '<td>';
                    html += '<button data-id="' + value['id'] + '"  class="btn btn-primary select-book">';
                    html += 'Chon'
                    html += '</button>';
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
            url: 'http://localhost:8000/admin/customers/' + idCustomer,
            type: 'GET',
            success: function (result) {
                //dong model lai
                $('.modal-right').modal('hide');
                //gan gia tri tra ve vao form
                $('#name-customer').val(result['name']);
                $('#code-customer').val(result['codeID']);
                $('#class-customer').val(result['class']);
                $('#dob-customer').val(result['dob']);
                $('#customer-id').attr("data-id", result['id']);
            }
        });
    });


    $('body').on('click', '.select-book', function () {
        let idBook = $(this).attr("data-id");
        $.ajax({
            url: 'http://localhost:8000/admin/books/' + idBook,
            type: 'GET',
            success: function (result) {
                let status = (result['status'] === 1) ? 'Mới' : 'Cũ';


                $('.modal-right').modal('hide');
                let html = '';
                html += '<tr id="book-item" data-id="' + result['id'] + '">';
                html += '<td>';
                html += result['name'];
                html += '</td>';
                html += '<td>';
                html += status;
                html += '</td>';
                html += '</tr>';

                $('#book-table-choose').html(html)
            }
        });
    });

    $('.submit-br').click(function () {
        //lay id book
        let idBook = $('#book-item').attr("data-id");

        //lay id khach
        let idCustomer = $('#customer-id').attr("data-id");

        //lay ngay tra du kien
        let day_expected_return = $('#date-re').val();
         //tao request form data
        let data = new FormData();
        data.append('book_id', idBook);
        data.append('customer_id', idCustomer);
        data.append('day_expected_return', day_expected_return);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });//lay ngay muon hien tai
         $.ajax({
            url: 'http://localhost:8000/admin/borrows/create',
            type: 'POST',
            data: data ,
            dataType: 'json',
            processData: false,
            success: function (result) {
                  console.log(result);
            },
            error: function (errors) {
                  console.log(errors)
            }

         })
    });

});
