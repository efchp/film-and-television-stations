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
        <title>简洁影视</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="icon" href="/favicon.ico">
        <style>
            * {
                margin: 0;
                padding: 0;
                text-decoration: none;
            }
            
            body {
                width: 100%;
                height: 100%;
            }
            
            .head {
                background: white;
                width: 100%;
                height: 50px;
                position: fixed;
                top: 0;
                z-index: 1000;
            }
            
            .head .back {
                width: 50px;
                height: 50px;
                position: fixed;
                left: 0;
                top: 0;
            }
            
            .head .title {
                width: 250px;
                height: 50px;
                margin: 0 auto;
            }
            
            .head .search {
                width: 50px;
                height: 50px;
                position: fixed;
                right: 0;
                top: 0;
            }
            
            .searchbox {
                width: 100%;
                height: 100%;
                margin: 0 auto;
                position: fixed;
                z-index: 1500;
                display: none;
            }
            
            .searchbox .cover {
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.5);
                position: fixed;
                top: 0;
                right: 0;
            }
            
            .searchbox .content {
                background: white;
                width: 300px;
                height: 200px;
                margin: 0 auto;
                position: relative;
                top: 100px;
                border-radius: 10px;
                padding: 10px;
            }
            
            #cover:target {
                display: block;
            }
            
            .body {
                margin-top: 50px;
            }
            
            .body .vod {
                width: 100%;
                height: 200px;
            }
            
            .body .class {
                text-align: center;
            }
            
            .body .class .item {
                display: inline-block;
                color: black;
                border-radius: 20%;
                border: 1px solid lightgrey;
                padding: 5px;
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <div class="head">
            <a class="back" href="/">
                <svg style="width: 30px;height: 30px;padding: 10px" t="1762006240836" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1551" width="200" height="200"><path d="M771.988 947.44l-403.54-405.135c-15.95-15.95-15.95-43.065 0-60.61l406.73-406.73c17.545-15.95 19.14-43.065 3.19-60.61C770.393 4.785 759.228 0 746.468 0s-23.926 4.785-31.901 14.355l-9.57 9.57-457.77 459.365c-15.95 15.95-15.95 43.065 0 60.61l467.34 467.34c7.975 7.975 17.545 12.76 28.71 12.76 23.925 0 43.066-19.14 43.066-41.47 1.595-14.356-4.785-27.116-14.355-35.09z" fill="#666666" p-id="1552"></path></svg>
            </a>
            <div class="title" style="text-align: center;font-size: 30px;font-weight: bold;line-height: 50px;">
                播放
            </div>
            <a class="search" href="#cover">
                <svg style="width: 30px;height: 30px;padding: 10px" t="1762002444623" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4655" data-spm-anchor-id="a313x.search_index.0.i2.117c3a81Swzppj" width="200" height="200"><path d="M415.59889935 818.40673751c-103.69194019 0-207.38388041-39.48836529-286.31642412-118.42090898-157.86508737-157.87981634-157.86508737-414.78248979 0-572.66230613 157.85035841-157.85035841 414.76776082-157.90927428 572.64757719 0 157.86508737 157.87981634 157.86508737 414.78248979 0 572.66230613-78.93254368 78.93254368-182.63921287 118.42090898-286.33115307 118.42090898z m0-725.22496474c-82.09927197 0-164.21327292 31.25487175-226.70828746 93.74988629-125.00475803 125.00475803-125.00475803 328.44127481 0 453.44603281 125.01948701 124.9753001 328.41181686 125.03421596 453.43130386 0 125.00475803-125.00475803 125.00475803-328.44127481 0-453.44603281-62.5097435-62.49501453-144.60901547-93.74988627-226.7230164-93.74988629z" fill="#2c2c2c" p-id="4656" data-spm-anchor-id="a313x.search_index.0.i0.117c3a81Swzppj"></path><path d="M973.48804978 1013.69813456c-10.78160515 0-21.57793927-4.10938229-29.79670383-12.34287584L658.31757585 715.95203069c-16.46698708-16.46698708-16.46698708-43.14114955 0-59.60813666s43.14114955-16.46698708 59.60813665 0l285.37377009 285.38849908c16.46698708 16.46698708 16.46698708 43.14114955 0 59.60813663a42.07329932 42.07329932 0 0 1-29.81143281 12.35760482z" fill="#2c2c2c" p-id="4657"></path></svg>
            </a>
        </div>
        <div class="searchbox" id="cover">
            <a href="#" class="cover"></a>
            <div class="content">
                <a class="close" href="#" style="font-size: 30px;color: black;">
                    ×
                </a>
                <div class="title" style="font-size: 30px;line-height: 50px;font-weight: blod;text-align: center;">
                    简洁影视
                </div>
                <form action="search.php" method="post" style="display: flex;border: 1px solid lightgrey;border-radius: 10px;">
                    <input type="text" name="search" placeholder="搜点什么吧。。。" style="width: 100%;outline: none;border: none;padding: 10px;border-radius: 10px 0 0 10px;font-size: 15px;"/>
                
                    <button type="submit" style="width: 70px;outline: none;border: none;border-radius: 0 10px 10px 0;font-size: 20px;background: white;">
                        <svg style="width: 20px;height: 20px" t="1762002444623" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4655" data-spm-anchor-id="a313x.search_index.0.i2.117c3a81Swzppj" width="200" height="200"><path d="M415.59889935 818.40673751c-103.69194019 0-207.38388041-39.48836529-286.31642412-118.42090898-157.86508737-157.87981634-157.86508737-414.78248979 0-572.66230613 157.85035841-157.85035841 414.76776082-157.90927428 572.64757719 0 157.86508737 157.87981634 157.86508737 414.78248979 0 572.66230613-78.93254368 78.93254368-182.63921287 118.42090898-286.33115307 118.42090898z m0-725.22496474c-82.09927197 0-164.21327292 31.25487175-226.70828746 93.74988629-125.00475803 125.00475803-125.00475803 328.44127481 0 453.44603281 125.01948701 124.9753001 328.41181686 125.03421596 453.43130386 0 125.00475803-125.00475803 125.00475803-328.44127481 0-453.44603281-62.5097435-62.49501453-144.60901547-93.74988627-226.7230164-93.74988629z" fill="#2c2c2c" p-id="4656" data-spm-anchor-id="a313x.search_index.0.i0.117c3a81Swzppj"></path><path d="M973.48804978 1013.69813456c-10.78160515 0-21.57793927-4.10938229-29.79670383-12.34287584L658.31757585 715.95203069c-16.46698708-16.46698708-16.46698708-43.14114955 0-59.60813666s43.14114955-16.46698708 59.60813665 0l285.37377009 285.38849908c16.46698708 16.46698708 16.46698708 43.14114955 0 59.60813663a42.07329932 42.07329932 0 0 1-29.81143281 12.35760482z" fill="#2c2c2c" p-id="4657"></path></svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="body">
            <video class="vod" controls autoplay>
                <source src="<?php echo $vod;?>">
            </video>
            <div class="title" style="font-size: 25px;font-weight: bold;">
                <?php echo $name;?> - <?php echo $ji;?>
            </div>
            <div class="class">
                <?php for ($class = 1;$class <= $count;$class++) { ?>
                
                <a href="vod.php?id=<?php echo($id);?>&class=<?php echo($class);?>" class="item">第<?php echo($class);?>集</a>
                
                <?php }?>
            </div>
        </div>
    </body>
</html>