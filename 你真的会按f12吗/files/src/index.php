<script>
var arr = [123, 17, 18];
document.oncontextmenu = new Function("event.returnValue=false;"),
document.onselectstart = new Function("event.returnValue=false;"),
window.onkeydown = function (e) {
    var code = e.keyCode;
    if (arr.indexOf(code) > -1) {
        console.log("出题人键盘坏了", code);
        e.preventDefault();
    }
}, window.oncontextmenu = function (e) {
    e.preventDefault();
}
</script>

<?php
$flag='flag_here';
echo '<!--'.$flag.'--><br>';
?>
出题人的f12又坏了QWQ，你知道该怎么查看源码吗