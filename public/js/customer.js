$(document).ready(function () {
    $("#itable").DataTable({
        ajax: {
            url: "/api/customer/all",
            dataSrc: "",
        },
        dom: '<"top"<"left-col"B><"center-col"l><"right-col"f>>rtip',
        buttons: [
            {
                extend: "pdf",
                className: "btn btn-success glyphicon glyphicon-file",
            },
            {
                extend: "excel",
                className: "btn btn-success glyphicon glyphicon-list-alt",
            },
            {
                text: "Add Item",
                className: "btn btn-success",
                action: function (e, dt, node, config) {
                    $("#iform").trigger("reset");
                    $("#itemModal").modal("show");
                },
            },
        ],
        columns: [
         {
                data: "id",
            },
            {
                data: "fname",
            },

            {
                data: "address",
            },
            {
                data: "phone",
            },
            {
                data: "town",
            },
             {
                data: "city",
            },
            {
                data: null,
                render: function (data, type, JsonResultRow, row) {
                    return `<img src= ${data.customer_image} "height="100px" width="100px">`;
                },
            },
            {
                data: null,
                render: function (data, type, row) {
                    return (
                        "<a href='#' class='editBtn' id='editbtn' data-id=" + data.id + "><i class='fa-solid fa-pen' aria-hidden='true' style='font-size:24px' ></i></a> <a href='#' class='deletebtn' data-id=" + data.id + "><i class='fa-solid fa-trash-can' style='font-size:24px; color:red; margin-left:15px;'></i></a>"
                    );
                },
            },
        ],
    });

    });