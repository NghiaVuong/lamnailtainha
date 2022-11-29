$("#button-add").click(function () {
    $('#modal-form').toggle();
    $('#modal-form-overlay').toggle();
    $("#button").text('Thêm danh mục');
    $("#button").attr("id", "storeAdd");
});
$("#button-close").click(function () {
    $('#modal-form').toggle();
    $('#modal-form-overlay').toggle();
    $("#name").val('')
    $("#description").val('')
    $(".btn.btn-primary.button").attr("id", "button");
    $("#button").text('')
    $('#name').removeClass('is-invalid')
    $('.nameErr').text('')
    $('#description').removeClass('is-invalid')
    $('.errDes').text('')
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//Data Insert Code
$('body').on('click', '#storeAdd', function (e) {
    e.preventDefault();
    $.ajax({
        url: "/admin/category",
        type: "post",
        dataType: "json",
        data: {
            name: $('#name').val(),
            description: $('#description').val(),
        },
        success: function (response) {
            Swal.fire(
                'Successful!',
                'Thêm danh mục thành công!',
                'success'
            )
            table.ajax.reload();
        },
        error: function (mess) {
            if (mess.responseJSON == 3) {
                $('#name').addClass('is-invalid')
                $('.nameErr').text('Tên đã tồn tại!')
                $('#description').removeClass('is-invalid')
                $('#name').addClass('is-invalid')
                $('.errDes').text('')
            }
            if (mess.responseJSON.errors.name) {
                $('#name').addClass('is-invalid')
                $('.nameErr').text(mess.responseJSON.errors.name)
            } else {
                $('#name').removeClass('is-invalid')
                $('.nameErr').text('')
            }
            if (mess.responseJSON.errors.description) {
                $('#description').addClass('is-invalid')
                $('.errDes').text(mess.responseJSON.errors.description)
            } else {
                $('#description').removeClass('is-invalid')
                $('.errDes').text('')
            }
        }
    });
});
// edit
$('body').on('click', '#button-edit', function () {
    var category_id = $(this).data('id');
    $.ajax({
        type: "GET",
        url: "/admin/category/" + category_id + "/edit",
        data: {
            category_id: category_id
        },
        dataType: "JSON",
        success: function (data) {
            $('#modal-form').toggle();
            $('#modal-form-overlay').toggle();
            $("#edit_id").val(data.data.id)
            $("#name").val(data.data.name)
            $("#description").val(data.data.description)
            $("#button").text('Sửa danh mục')
            $("#button").attr("id", "storeEdit");
        }
    });

});
// Change status
$('body').on('click', '.btn-status', function () {
    if (!confirm("Xác nhận đổi trạng thái.")) {
        return;
    }
    var category_id = $(this).data("id");
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: "/admin/category/status",
        data: {
            'id': category_id
        },
        success: function (data) {
            Swal.fire(
                'Successful!',
                'Đổi trạng thái thành công!',
                'success'
            )
            table.ajax.reload();
        },
    });
});
// Update city code goes here
$('body').on('click', '#storeEdit', function () {
    if (confirm('Bạn có muốn sửa danh mục này?')) {
        $.ajax({
            url: "/admin/category/" + $("#edit_id").val(),
            type: 'put',
            dataType: 'json',
            data: {
                name: $('#name').val(),
                description: $('#description').val(),
            },
            success: function (response) {
                Swal.fire(
                    'Successful!',
                    'Sửa thành công!',
                    'success'
                )
                table.ajax.reload();
            },
            error: function (mess) {
                if (mess.responseJSON == 3) {
                    $('#name').addClass('is-invalid')
                    $('.nameErr').text('Tên đã tồn tại!')
                    $('#description').removeClass('is-invalid')
                    $('#name').addClass('is-invalid')
                    $('.errDes').text('')
                }
                if (mess.responseJSON.errors.name) {
                    $('#name').addClass('is-invalid')
                    $('.nameErr').text(mess.responseJSON.errors.name)
                } else {
                    $('#name').removeClass('is-invalid')
                    $('.nameErr').text('')
                }
                if (mess.responseJSON.errors.description) {
                    $('#description').addClass('is-invalid')
                    $('.errDes').text(mess.responseJSON.errors.description)
                } else {
                    $('#description').removeClass('is-invalid')
                    $('.errDes').text('')
                }
            }
        })
    }
})
// delete city code goes here
$(document).on('click', '.btn-delete', function () {
    $("#id_delete").val($(this).data('id'));
})
$(document).on('click', '#btnDelete', function () {
    $.ajax({
        url: "/admin/category/" + $(this).data('id'),
        type: "delete",
        dataType: 'json',
        data: {
            "id": $("#id_delete").val()
        },
        success: function (response) {
            Swal.fire(
                'Successful!',
                'Xóa thành công!',
                'success'
            )
            $('#warning').css('display', 'none');
            $('#warning').removeClass('show');
            $('.modal-backdrop.fade.show').addClass('d-none');
            table.ajax.reload();
        }
    })
})
// });
