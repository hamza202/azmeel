var DatatablesSearchOptionsAdvancedSearch2 = function () {
    $.fn.dataTable.Api.register("column().title()", function () {
        return $(this.header()).text().trim()
    });
    return {
        init: function () {
            var a;
            a = $("#m_table_2").DataTable({
                responsive: !0,
                dom: "<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
                lengthMenu: [5, 10, 25, 50],
                pageLength: 5,
                language: {lengthMenu: "Display _MENU_"},
                searchDelay: 500,
                processing: !0,
                serverSide: !0,
                ajax: {
                    url: "https://keenthemes.com/metronic/preview/inc/api/datatables/demos/server.php",
                    type: "POST",
                    data: {columnsDef: ["RecordID", "OrderID", "Country", "ShipDate", "Actions" ]}
                },
                columns: [{data: "RecordID"}, {data: "OrderID"}, {data: "Country"},  {data: "ShipDate"} , {data: "Actions"}],
                columnDefs: [{
                    targets: -1, title: "More", orderable: !1, render: function (a, t, e, n) {
                        return ' <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View" data-toggle="modal" data-target="#m_modal_7"> <i class="fas fa-eye"></i> </a> ' +
                            '' +
                            '<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete"> <i class="fas fa-trash"></i> </a>'
                    }
                }]
            }),
                $(".m_search").on("click", function (t) {
                    t.preventDefault();
                    var e = {};
                    $(".m-input").each(function () {
                        var a = $(this).data("col-index");
                        e[a] ? e[a] += "|" + $(this).val() : e[a] = $(this).val()
                    }), $.each(e, function (t, e) {
                        a.column(t).search(e || "", !1, !1)
                    }), a.table().draw()
                }), $(".m_reset").on("click", function (t) {
                t.preventDefault(), $(".m-input").each(function () {
                    $(this).val(""), a.column($(this).data("col-index")).search("", !1, !1)
                }), a.table().draw()
            }), $(".m_datepicker").datepicker({
                todayHighlight: !0,
                templates: {
                    leftArrow: '<i class="la la-angle-left"></i>',
                    rightArrow: '<i class="la la-angle-right"></i>'
                }
            })
        }
    };

}();
// $("#m_table_2_info").detach().prependTo('#m_table_2_wrapper .row');
// $("#dataTables_pager").detach().prependTo('#m_table_2_wrapper .row');
jQuery(document).ready(function () {
    DatatablesSearchOptionsAdvancedSearch2.init()
});
