var table = $('#table');
table.find('.group-checkable').change(function() {
    var set = jQuery(this).attr("data-set");
    var checked = jQuery(this).is(":checked");
    jQuery(set).each(function() {
        if (checked) {
            $(this).prop("checked", true);
        } else {
            $(this).prop("checked", false);
        }
    });
    jQuery.uniform.update(set);
});

//琛ㄥ崟婊氬姩
function scoll() {
    var table = $('#table');
    table.dataTable({
        ordering: false,
        searching: false,
        bLengthChange: false,
        scroller: true,
        deferRender: true,
        scrollX: true,
        scrollCollapse: true,
        bInfo: false,
        sScrollX: "100%",
        sScrollXInner: "100%",
        bScrollCollapse: true,
        "language": {
            "lengthMenu": " _MENU_ 璁板綍",
            "sSearch": "鎼滅储:",
            "sInfo": "鏄剧ず _START_ 鍒� _END_ 鎬昏 _TOTAL_ 鏉¤褰�",
            "sInfoEmpty": "鏄剧ず 0 鍒� 0 鎬昏 0 鏉¤褰�",
            "sEmptyTable": "褰撳墠琛ㄦ牸娌℃湁鏁版嵁"
        },
    });
}

//琛ㄥ崟鍒嗛〉
function tableShow(obj) {
    obj.dataTable({
        "lengthMenu": [[5, 15, 20, -1], [5, 15, 20, "鎵€鏈�"] // change per page values here
        ],
        "pageLength": 5,

        "language": {
            "lengthMenu": " _MENU_ 璁板綍",
            "sSearch": "鎼滅储:",
            "sInfo": "鏄剧ず _START_ 鍒� _END_ 鎬昏 _TOTAL_ 鏉¤褰�",
            "sInfoEmpty": "鏄剧ず 0 鍒� 0 鎬昏 0 鏉¤褰�",
            "sEmptyTable": "褰撳墠琛ㄦ牸娌℃湁鏁版嵁"
        },
        "columnDefs": [{ // set default column settings
            'orderable': true,
            'targets': [0]
        },
        {
            "searchable": true,
            "targets": [0]
        }],
        "order": [[2, "asc"]]
    });
}