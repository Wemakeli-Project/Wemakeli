﻿<?php //By WMProject1217
echo "<head>";
include('./main/patterns/autoexec.php');
echo "<title>" . $websitename . "</title>";
echo "</head>";
echo "<body>";
include('./main/patterns/topline.php');
include('./main/patterns/leftline.php');
echo "<table>";
echo "<tr>";
echo "<td class='maindata'>";
echo "<br>";

echo "<table border='1'>";
echo "<tr>";
echo "<td >";
echo "<h3>投稿推送</h3>";
include('./push.php');
echo "</td>";
echo "</tr>";
echo "</table>";

echo "<table border='1'>";
echo "<tr>";
echo "<td>";
echo "<h3>正在建设 " . $websitename . " ...</h3>";
print "By WMProject1217<br>";
print "奥利给!淦就完了!<br>我们遇到什么困难,也不要怕!微笑着面对它!消除恐惧的最好办法就是面对恐惧!坚持,才是胜利!加油,奥利给!<br>";
print "AMD YES<br>LBWNB LBWNB LBWNB LBWNB LBWNB LBWNB LBWNB LBWNB LBWNB LBWNB LBWNB LBWNB LBWNB LBWNB<br>";
echo "使用了以下Github项目的一部分<br>";
echo "<a href='https://github.com/stevenjoezhang/live2d-widget' target='_blank'>https://github.com/stevenjoezhang/live2d-widget</a><br>";
echo "<a href='https://github.com/chiruom/DanmuPlayer' target='_blank'>https://github.com/chiruom/DanmuPlayer</a><br>";
echo "当前项目的Github地址<br>";
echo "<a href='https://github.com/wmproject1217/wemakeli' target='_blank'>https://github.com/wmproject1217/wemakeli</a><br>";
echo "</td>";
echo "</tr>";
echo "</table>";

echo "<table border='1'>";
echo "<tr>";
echo "<td class='log'>";
echo "<h3>开发日志</h3>";
readfile("./main/txt/mainmsg.txt");
echo "</td>";
echo "</tr>";
echo "</table>";

if (isset($_COOKIE["username"])){
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td class='talk'>";
    echo "<h3>评论区</h3>";
    echo "<form action='posttalk.php' method='POST'>";
    echo "<textarea style='OVERFLOW:  Visble' name='usertalk' value='' class='talkboxinput'></textarea>";
    echo "<input type='submit' value='提交'>";
    echo "</form>";
    include('talk.php');
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    goto netfx;
  }else{
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td class='talk'>";
    echo "<h3>评论区</h3>";
    echo "你必须登录才能发表评论。";
    include('talk.php');
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    goto netfx;
}
netfx:
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</body>";
?>