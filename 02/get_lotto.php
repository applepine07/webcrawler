<?php
include_once "./simplehtmldom/simple_html_dom.php";

$html =file_get_html("https://www.taiwanlottery.com.tw/index_new.aspx");
echo "威力彩".$html->find(".contents_box02 .font_black15",0)->plaintext."<br>";
echo "彩號:";
echo $html->find(".contents_box02 .ball_tx",0)->plaintext."<br>";
echo $html->find(".contents_box02 .ball_tx",1)->plaintext."<br>";
echo $html->find(".contents_box02 .ball_tx",2)->plaintext."<br>";
echo $html->find(".contents_box02 .ball_tx",3)->plaintext."<br>";
echo $html->find(".contents_box02 .ball_tx",4)->plaintext."<br>";
echo $html->find(".contents_box02 .ball_tx",5)->plaintext."<br>";
echo "第二區".$html->find(".contents_box02 .ball_red",0)->plaintext."<br>";


echo "大樂透".$html->find(".contents_box02 .font_black15",2)->plaintext."<br>";
echo "彩號:";
echo $html->find(".contents_box02 .ball_yellow",0)->plaintext."<br>";
echo $html->find(".contents_box02 .ball_yellow",1)->plaintext."<br>";
echo $html->find(".contents_box02 .ball_yellow",2)->plaintext."<br>";
echo $html->find(".contents_box02 .ball_yellow",3)->plaintext."<br>";
echo $html->find(".contents_box02 .ball_yellow",4)->plaintext."<br>";
echo $html->find(".contents_box02 .ball_yellow",5)->plaintext."<br>";
echo "第二區".$html->find(".contents_box02 .ball_red",1)->plaintext."<br>";
//$html->find(".contents_box02 .ball_tx ball_green",0)->plaintext."<br>";
?>
