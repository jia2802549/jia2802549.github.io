
<!DOCTYPE html>
<html lang="zh-cn"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>猫咪免费Q绑在线查询</title>
<meta name="keywords" content="在线查询">
<meta name="description" content="在线Q绑查询手机号官网 输入QQ号即可查询 ">
<link href="/static/css/bootstrap.min.css" rel="stylesheet">
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/layer.js"></script>
<link rel="stylesheet" href="/static/css/layer.css" id="layuicss-layer">
<![endif]-->
    <script>
    document.oncontextmenu=new Function("event.returnValue=false;"); //禁止右键功能
    document.onkeydown=MM_KeyPress;
    function  MM_KeyPress(num){
        //防止系统退格键
        var keycODe = event.keyCODe;
        if(keycode ==8)//屏蔽退格健
        {
            event.keyCode = 0;
            return;
        }
        if(keycode >=122 && keycode <=123)//屏蔽f12功能键
        {
            event.keyCode = 0 ;
            event.returnValue=false;
            return;
        }
    }
    function gg(){
    layer.alert('您好！欢迎来到猫咪免费Q绑在线查询！', {
  icon: 1,
  title: '公告',
  skin: 'layer-ext-moon'
})
}
function click(e) {
if (document.all) {
if (event.button==2||event.button==3) { alert("欢迎光临寒舍，有什么需要帮忙的话，请与站长联系！谢谢您的合作！！！");
oncontextmenu='return false';
}
}
if (document.layers) {
if (e.which == 3) {
oncontextmenu='return false';
}
}
}
if (document.layers) {
document.captureEvents(Event.MOUSEDOWN);
}
document.onmousedown=click;
document.oncontextmenu = new Function("return false;")
document.onkeydown =document.onkeyup = document.onkeypress=function(){
if(window.event.keyCode == 123) {
window.event.returnValue=false;
return(false);
}
}
</script>
<body background="/static/images/bj.jpg">
<div class="container">
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
<br>
<div class="panel panel-primary">
<div class="panel-heading" style="background: linear-gradient(to right,#b221ff,#14b7ff,#8ae68a);">
<h3 class="panel-title">猫咪Q绑在线查询</h3>
</div>
<div class="panel-body" style="text-align: center;">
<div class="list-group">
<div class="list-group-item list-group-item-warning" style="font-weight: bold;">
<span>输入QQ号码即可查询密保手机</span>
</div>
<div class="list-group-item list-group-item-info" style="font-weight: bold;">
<input class="form-control" id="input" placeholder="请输入QQ">
</div>
			<marquee scrollamount="5" direction="left" align="Middle" style="font-weight: bold;line-height: 15px;font-size: 15px;color: #FF0000;">请输入需要查询的QQ号，然后点击查找！</marquee>
<div class="list-group-item">
<a onclick="qbang('cha')" class="btn btn-block btn-primary" style="background: linear-gradient(to right,#b221ff,#14b7ff);">查找</a>

<a class="btn btn-block btn-primary" style="background: linear-gradient(to right,#5A5A5A,#5A5A5A);" href="https://jia2802549.github.io">#广告位内容展示</a>
<a class="btn btn-block btn-primary" style="background: linear-gradient(to right,#48C9B0,#28B463);" href="https://jia2802549.github.io">#广告位内容展示</a>
</div>
<div class="pc_acmsd"><center></center></div>

                    <table class="table table-bordered">
                        <tbody>
                            <tr height="50">
                                                           </tr>
                            <tr height="50">
                                <td>

                                </td>
                                
                               
                            </tr>
                        </tbody>
                    </table>
<div class="list-group-item list-group-item-warning" style="font-weight: bold;display: none;" id="jiexi_data">
<div class="input-group">
<span class="input-group-addon ">密保手机号码</span>
<input type="text" class="form-control" placeholder id="mobile" readonly>
</div>
<div class="input-group">
<span class="input-group-addon">号码归属地</span>
<input type="text" class="form-control" placeholder id="mobileduqu" readonly>
</div>
<div class="input-group">
<span class="input-group-addon">LOL信息</span>
<input type="text" class="form-control" placeholder id="lol" readonly>
</div>
<div class="input-group">
<span class="input-group-addon">微博UID</span>
<input type="text" class="form-control" placeholder id="wbuid" readonly>
</div>
<div style="text-align:center">
        </div>
</div>
</div>
<div style="display: none">
</div>
</div>
<div class="panel panel-default text-center">
<div class="panel-body">
Copyright © 猫咪
<br>
<div id="result"></div>
</div></div></div></div>
<script>
function qbang($mod) {
var qq = $('#input').val();
if (qq == '') {
var alert_1 = layer.msg('请输入QQ', { icon: 5 });
} else {

if($mod=='cha'){
dialog('<div style="text-align:center"><br><b style="color:#ff4425">仅供查询自己的QQ号码<br>不是自己的请立即退出本页面<br>否则，发生的一切后果本人不负责<br><br>确认查询？？</b><br><br><a onclick='+'queren("cha")'+' class="btn btn-block btn-primary" style="background: linear-gradient(to right,#b221ff,#14b7ff);">确认</a><br></div>', 1);
}
}
}
function queren(mod) {
console.log(mod);
layer.close(layer.index);
var qq = $('#input').val();
if(mod=='cha'){
$url = 'https://api1.qqcxdh.top/qbapi.php?qq='+qq;
}

var alert_1 = layer.load(0, { shade: false });
$.getJSON($url, function (json) {
layer.close(alert_1);
if (json['status'] == '200') {
layer.msg('查询成功', { icon: 1 });
$('#mobile').val(json['phone']);
$('#mobileduqu').val(json['phonediqu']);
$('#lol').val(json['lol']);
$('#wbuid').val(json['wb']);
$('#jiexi_data').css("display", "block");
} else {
layer.msg(json['message']);
$('#jiexi_data').css("display", "none");
}
}
);
}
function dialog(code, exit) {
layer.open({
type: 1,
skin: 'layui-layer-lan', //加上边框
area: ['350px', ''], //宽高
closeBtn: exit,
shade: 0.8,
title: '提示',
btnAlign: 'c',
content: code,
});
}
gg()

</script>

</body></html>


