实验时暂时使用量子资源网的api
量子影视： http://23.224.101.30/
量子资源帮助： http://23.224.101.30/help/
其json的api为： https://cj.lziapi.com/api.php/provide/vod/

对于api里的内容如何处理，在github上找到，其中重点在[[maccms使用文档摘要]]
https://github.com/magicblack/maccms10/blob/master/%E8%AF%B4%E6%98%8E%E6%96%87%E6%A1%A3/API%E6%8E%A5%E5%8F%A3%E8%AF%B4%E6%98%8E.txt

通过使用说明，获得了[[一次api的获取]]
https://cj.lziapi.com/api.php/provide/vod/?wd=%E4%B8%89%E4%BD%93
对于视频的内容很详细，以下是要获取的信息及说明

| 代号           | 性质         | 说明                                                   |
| ------------ | ---------- | ---------------------------------------------------- |
| vod_id       | 影视在接口平台的代号 | 用来区分是否收集了该平台的某个资源，日后名字不对会进行修正，但这就会导致无法用名字定位，必须用该代号定位 |
| vod_name     | 影视名词       |                                                      |
| vod_pic      | 影视封面       |                                                      |
| vod_play_url | 影视视频链接     | 前半部分不要，要后一半m3u8的内容                                   |

对于api获取的信息的处理，采用将json转为数组的方式进行，以下是个案例：
```
<?php
//api
$aaa = 'https://cj.lziapi.com/api.php/provide/vod/?wd=%E4%B8%89%E4%BD%93';
//获取api页面的内容
$bbb = file_get_contents($aaa);
//使页面以json的形式呈现，可以更好的观察信息
header("content-type: text/json");
echo $bbb;
//使json的格式转为数组的格式，true是数组，默认false是对象
$ccc = json_decode($bbb, true);
//echo $ccc['list'][0]['vod_id'];
?>
```
