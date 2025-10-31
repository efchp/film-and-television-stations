<?php
$api = "https://cj.lziapi.com/api.php/provide/vod/?ac=detail&pg=";
$json = file_get_contents($api);
$array = json_decode($json,true);
$pageAll = $array['pagecount'];






/*
echo($vodId . "<br/>");
echo($vodName . "<br/>");
echo($vodPic . "<br/>");
echo($vodPlayUrl . "<br/>");
*/



$parts = explode('$$$',$vodPlayUrl);
$part = $parts[1];


/*
echo($part);

*/


$db = new mysqli("localhost", "vod", "s5e58XMT86MMjBmf", "vod");

echo($sql);




for ($page = 1;$page <= $pageAll;$page++) {
    $api = "https://cj.lziapi.com/api.php/provide/vod/?ac=detail&pg=" . $page;
    $json = file_get_contents($api);
    $array = json_decode($json,true);
    for ($i = 0;$i <= 19;$i++) {
        $vodId = $array['list'][$i]['vod_id'];
        $vodName = $array['list'][$i]['vod_name'];
        $vodPic = $array['list'][$i]['vod_pic'];
        $vodPlayUrl = $array['list'][$i]['vod_play_url'];
        $sql = "INSERT INTO vod (id,name,pic,vod) VALUES ('$vodId','$vodName','$vodPic','$vodPlayUrl')";
        $db->query($sql);
    }
}


echo("完毕");





