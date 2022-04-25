<?php
$page=file_get_contents("lotto.txt");
$data=explode("\n",$page);
/* $file=fopen("lotto.txt",'r');
$data=fgets($file);
$data=fgets($file); */
foreach($data as $key => $d){
    if(mb_strpos($d,"<!--***************威力彩區塊***************-->")!=false){
        $end=mb_strpos($data[$key+2],"第二區")+3;

        $str=mb_substr($data[$key+2],$end);
        $replace='</div><div class="ball_tx ball_green">';
        $result=str_replace($replace,"-",$str);
        $result=str_replace("</div>","",$result);
        $result=str_replace('<div class="ball_red">',"-",$result);
        $result=explode("-",$result);
    }
}
?>
<h1>威力彩號</h1>
依開出順序:
<div>第一區:
<span><?=$result[7];?></span>
<span><?=$result[8];?></span>
<span><?=$result[9];?></span>
<span><?=$result[10];?></span>
<span><?=$result[11];?></span>
<span><?=$result[12];?></span>
<br>
第二區:
<span><?=$result[13];?></span>
</div>
<?php

foreach($data as $key => $d){
    if(mb_strpos($d,"<!--***************大樂透區塊***************-->")!=false){
        $end=mb_strpos($data[$key+2],"特別號")+3;
        $str=mb_substr($data[$key+2],$end);
        $replace='</div><div class="ball_tx ball_yellow">';
        $result=str_replace($replace,"-",$str);
        $result=str_replace("</div>","",$result);
        $result=str_replace('<div class="ball_red">',"-",$result);
        $result=explode("-",$result);
    }
}

?>

<h1>大樂透</h1>
依開出順序:
<div>第一區:
<span><?=$result[7];?></span>
<span><?=$result[8];?></span>
<span><?=$result[9];?></span>
<span><?=$result[10];?></span>
<span><?=$result[11];?></span>
<span><?=$result[12];?></span>
<br>
特別號:
<span><?=$result[13];?></span>
</div>

