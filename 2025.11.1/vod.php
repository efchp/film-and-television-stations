<?php
$id = $_GET["id"];
$class = $_GET["class"] ?? 1;
if ($class == "") {
    $class = 1;
}


$class -= 1;

$db = new mysqli("localhost", "vod", "s5e58XMT86MMjBmf", "vod");
$sql = "SELECT * FROM vod WHERE id = '$id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$name = $row['name'];
$pic = $row['pic'];
$vod = $row['vod'];


$parts = explode('$$$',$vod);
$vod = $parts[1];



$count = substr_count($vod, '#') + 1;




$parts = explode('#',$vod);
$vod = $parts[$class];

$parts = explode('$',$vod);
$ji = $parts[0];
$vod = $parts[1];




?>




<html>
    <head>
        <meta charset="UTF-8">
        <title>影视 - 播放</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="icon" href="/favicon.ico">
        <style>
            * {
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <div>
            <a href="search.php">搜索页面</a>
        </div>
        <!--
        <iframe width="100%" height="100%" src="https://lziplayer.com/?url=https://v.cdnlz22.com/20251021/24499_22e1ebf6/index.m3u8"></iframe>
        -->
        <div>
            名称：<?php echo $name;?>
        </div>
        <div>
            集：<?php echo $ji;?>
        </div>
        <div>
            封面：<img src="<?php echo $pic;?>" style="width: 100%"/>
        </div>
        <div>
            视频
            <iframe width="100%" height="100%" src="https://lziplayer.com/?url=<?php echo $vod;?>"></iframe>
            <iframe width="100%" height="100%" src="<?php echo $vod;?>"></iframe>
        </div>
        <div>
            集：<br/>
            <?php for ($class = 1;$class <= $count;$class++) { ?>
            
            <a href="vod.php?id=<?php echo($id);?>&class=<?php echo($class);?>">第<?php echo($class);?>集</a><br/>
            
            <?php }?>
        </div>
    </body>
</html>