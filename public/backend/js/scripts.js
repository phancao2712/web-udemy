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
});
