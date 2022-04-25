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
echo json_encode([trim($result[7]),trim($result[8]),trim($result[9]),trim($result[10]),trim($result[11]),trim($result[12]),trim($result[13])]);
?>