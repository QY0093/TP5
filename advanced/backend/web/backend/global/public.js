//璁剧疆寮瑰嚭灞傝瑷€
bootbox.setDefaults("locale","zh_CN");

//鎼滅储琛ㄥ崟鎻愪氦
$('.search-submit').on('click', function(){
    $('.search-single').submit()
});

//寮瑰嚭楂樼骇绛涢€夊眰 --start
var multi = $('.multi-status').val();
if (multi == 1) {
    $('.search-multi-open').attr('data-toggle', 1);
    $('.table-toolbar').addClass('page-quick-sidebar-open');
}
$('.search-multi-open').click(function(){
    multiOpen($(this));
});

$('.search-multi-close').click(function(){
    multiClose($(this));
});

function multiOpen(obj)
{
    var toggle = obj.attr('data-toggle');
    if (toggle == 0) {
        obj.attr('data-toggle', 1);
        $('.table-toolbar').addClass('page-quick-sidebar-open');
    } else {
        obj.attr('data-toggle', 0);
        $('.table-toolbar').removeClass('page-quick-sidebar-open');
    }
}

function multiClose()
{
    $('.search-multi-open').attr('data-toggle', 0);
    $('.table-toolbar').removeClass('page-quick-sidebar-open');
}
//寮瑰嚭楂樼骇绛涢€夊眰 --end

//鍒犻櫎鎻愮ず
$(table).on('click','.delete',function(){
    var obj = $(this);
    bootbox.confirm("鏄惁纭畾鍒犻櫎,娉ㄦ剰锛氭祴璇曞钩鍙扮殑鍒犻櫎灏嗕笉鏀瑰彉鏁版嵁锛侊紒锛�", function(result) {
        if (result == true) {
            var data_href = obj.attr('data-href');
            var csrf = $('.request-csrf').val();
            App.blockUI({
                target: '.page-container',
                animate: true
            });
            bootbox.hideAll();
            //$.post(
            //    data_href,
            //    {'_csrf': csrf},
            //    function (res) {
            //        App.unblockUI('.page-container');
            //        if (res.code == 500) {
            //            bootbox.alert(res.msg);
            //        } else location.reload();
            //    }, 'json'
            //);
            location.reload();
            return false;
        }
    });
});

//鏃ユ湡鏃堕棿
function datePicker(obj)
{
    obj.datepicker({
        format: "yyyy-mm-dd",
        rtl: App.isRTL(),
        orientation: "left",
        autoclose: true
    });
}
function dateTimePicker(obj)
{
    obj.datetimepicker({
        language:'zh-CN',
        autoclose: true,
        isRTL: App.isRTL(),
        format: "yyyy-mm-dd  hh:ii",
        pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left")
    });
}