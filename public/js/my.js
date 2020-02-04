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
                })

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
                    html += '</tr>';
                })

                $('#book-table').html(html)
            }
        });
    });
});
