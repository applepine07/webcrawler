<?php
$page=file_get_contents("https://www.taiwanlottery.com.tw/index_new.aspx");
$file=fopen("lotto.txt","w");
fwrite($file,$page);
fclose($file);
/* $pos1=strpos($page,"***************威力彩區塊***************");
$pos2=strpos($page,"***************38樂合彩區塊***************");
$len=mb_strlen("***************威力彩區塊***************");
$target=mb_substr($page,$pos1,$len);

echo $target; */
//echo $page;