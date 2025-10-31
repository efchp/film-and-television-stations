<?php
$search = $_POST['search'];
$db = new mysqli("localhost", "vod", "s5e58XMT86MMjBmf", "vod");
$sql = "SELECT * FROM `vod` WHERE `name` LIKE '%$search%' ORDER BY `id` ASC LIMIT 1000";
$result = $db->query($sql);



?>










<html>
    <head>
        <meta charset="UTF-8">
        <title>影视 - 搜索</title>
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
        <form action="" method="post">
            <input type="text" name="search"/>
            <input type="submit" value="搜索"/>
        </form>
        <div>
            <?php while($row = $result->fetch_assoc()) { ?>
            
            <a href="vod.php?id=<?php echo($row['id']);?>"><?php echo($row['name']);?></a><br/>
            
            <?php }?>
        </div>
    </body>
</html>