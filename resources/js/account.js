import $ from "jquery";
import select2 from "select2";
select2();

$(document).ready(function () {
    let status = "table";

    function renderBtn() {
        if (status === "table") {
            $(".js-btn").text("Cập nhật thông tin");
            $(".js-btn").addClass("-purple-1");
            $(".js-btn").removeClass("-red-1");
        } else {
            $(".js-btn").text("Hủy");
            $(".js-btn").addClass("-red-1");
            $(".js-btn").removeClass("-purple-1");
        }
    }

    function renderForm() {
        if (status === "table") {
            $(".js-table").css({
                display: "block",
            });
            $(".js-form").css({
                display: "none",
            });
        } else {
            $(".js-form").css({
                display: "block",
            });
            $(".js-table").css({
                display: "none",
            });
        }
    }

    function beforeUpdate() {
        $(".btn-submit").text("Đang cập nhật...");
        $(".btn-submit").prop("disabled", true);
    }

    function afterUpdate() {
        $(".btn-submit").text("Cập nhật");
        $(".btn-submit").prop("disabled", false);
    }

    $(".js-btn").on("click", function (e) {
        e.preventDefault();
        status = status === "table" ? "form" : "table";
        renderBtn();
        renderForm();
    });

    $(".js-form").on("submit", function (e) {
        e.preventDefault();
        $(".text-danger").text("");
        let csrfToken = $('meta[name="csrf-token"]').attr("content");
        const data = $(this).serializeArray();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "",
            data: data,
            beforeSend: function () {
                beforeUpdate();
            },
            success: function (response) {
                if (response.status === "success") {
                    FuiToast.success("Cập nhật thành công.");
                } else {
                    FuiToast.error("Cập nhật không thành công.");
                }
                afterUpdate();
            },
            error: function (response) {
                const error = $.parseJSON(response.responseText);
                $.each(error.errors, function (key, value) {
                    $(`.error-${key}`).text(value);
                });
                afterUpdate();
            },
        });
    });

    $(".setup-select2").select2();
});
