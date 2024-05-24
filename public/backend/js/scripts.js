/*!
 * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
//
// Scripts
//

window.addEventListener("DOMContentLoaded", (event) => {
    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector("#sidebarToggle");
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener("click", (event) => {
            event.preventDefault();
            document.body.classList.toggle("sb-sidenav-toggled");
            localStorage.setItem(
                "sb|sidebar-toggle",
                document.body.classList.contains("sb-sidenav-toggled")
            );
        });
    }

    // const tableList = document.querySelector('#datatable');

    // tableList.addEventListener("click", (e) => {
    //     if(e.target.classList.contains("delete-btn")){
    //         e.preventDefault();
    //         const url = e.target.href;
    //         console.log(url);
    //     }
    // })
});

$(document).ready(function () {
    "use strict";


    $("#datatable").on("click", ".delete-btn", function(e) {
        e.preventDefault();

        Swal.fire({
            title: "Bạn có chắc chắn?",
            text: "Dữ liệu khong thể khôi phục khi xóa!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Hủy",
            confirmButtonText: "Ok, hãy xóa nó!"
          }).then((result) => {
            if (result.isConfirmed) {
                let csrfToken = $('meta[name="csrf-token"]').attr('content');
                let url = $(this).attr("href");
              $.ajax({
                method: "DELETE",
                url: url,
                data: {
                    _token: csrfToken
                },
                success: function (response) {
                    Swal.fire({
                        title: "Đã xóa!",
                        text: response.message,
                        icon: "success"
                      });

                      setTimeout(() => window.location.reload(), 1500);
                },
                error: function (xhr,status ,error) {
                    swal(xhr.responseJSON.message, {
                        icon: "error",
                    });
                },
            });
            } else {
                Swal.fire("Đã hủy!");
            }
          });
    });

    const getSlug = (title) => {
        // Đổi chữ hoa thành chữ thường
        let slug = title.toLowerCase();

        // Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, "a");
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, "e");
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, "i");
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, "o");
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, "u");
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, "y");
        slug = slug.replace(/đ/gi, "d");

        // Xóa các ký tự đặt biệt
        slug = slug.replace(
            /\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi,
            ""
        );

        // Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");

        // Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        // Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, "-");
        slug = slug.replace(/\-\-\-\-/gi, "-");
        slug = slug.replace(/\-\-\-/gi, "-");
        slug = slug.replace(/\-\-/gi, "-");

        // Xóa các ký tự gạch ngang ở đầu và cuối
        slug = slug.replace(/^\-+|\-+$/g, "");

        return slug;
    };

    const slug = $('.slug');
    const title = $('.title');
    let isChangeSlug = false;

    if (slug.val() === "") {
        title.on("keyup", (e) => {
            if (!isChangeSlug) {
                const titleValue = $(e.target).val();
                slug.val(getSlug(titleValue));
            }
        });
    }

    slug.on("change", () => {
        if ($(this).val() === "") {
            const titleValue = title.val();
            slug.val(getSlug(titleValue));
        }
        isChangeSlug = true;
    });

    $('.logout-btn').on('click', function(e) {
        e.preventDefault();
        const action = $(this).attr("href");
        const form = $('.form-logout');
        form.attr('action', action)
        form.submit();
    })

});
