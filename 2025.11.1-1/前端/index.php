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
            }
            
            body {
                width: 100%;
                height: 100%;
            }
            
            .content {
                width: 300px;
                height: 130px;
                position: relative;
                top: 150px;
                margin: 0 auto;
            }
            
            .content .title {
                width: 200px;
                height: 50px;
                position: absolute;
                margin: 10px 50px;
            }
            
            .content .search {
                width: 250px;
                height: 40px;
                position: absolute;
                bottom: 0;
                margin: 10px 25px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title" style="font-size: 30px;line-height: 50px;font-weight: bold;text-align: center;">
                简洁影视
            </div>
            <form action="search.php" method="post" class="search" style="display: flex;border: 1px solid lightgrey;border-radius: 10px;">
                <input type="text" name="search" placeholder="搜点什么吧。。。" style="width: 100%;outline: none;border: none;padding: 10px;border-radius: 10px 0 0 10px;font-size: 15px;"/>
                
                <button type="submit" style="width: 70px;outline: none;border: none;border-radius: 0 10px 10px 0;font-size: 20px;background: white;">
                    <svg style="width: 20px;height: 20px" t="1762002444623" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4655" data-spm-anchor-id="a313x.search_index.0.i2.117c3a81Swzppj" width="200" height="200"><path d="M415.59889935 818.40673751c-103.69194019 0-207.38388041-39.48836529-286.31642412-118.42090898-157.86508737-157.87981634-157.86508737-414.78248979 0-572.66230613 157.85035841-157.85035841 414.76776082-157.90927428 572.64757719 0 157.86508737 157.87981634 157.86508737 414.78248979 0 572.66230613-78.93254368 78.93254368-182.63921287 118.42090898-286.33115307 118.42090898z m0-725.22496474c-82.09927197 0-164.21327292 31.25487175-226.70828746 93.74988629-125.00475803 125.00475803-125.00475803 328.44127481 0 453.44603281 125.01948701 124.9753001 328.41181686 125.03421596 453.43130386 0 125.00475803-125.00475803 125.00475803-328.44127481 0-453.44603281-62.5097435-62.49501453-144.60901547-93.74988627-226.7230164-93.74988629z" fill="#2c2c2c" p-id="4656" data-spm-anchor-id="a313x.search_index.0.i0.117c3a81Swzppj"></path><path d="M973.48804978 1013.69813456c-10.78160515 0-21.57793927-4.10938229-29.79670383-12.34287584L658.31757585 715.95203069c-16.46698708-16.46698708-16.46698708-43.14114955 0-59.60813666s43.14114955-16.46698708 59.60813665 0l285.37377009 285.38849908c16.46698708 16.46698708 16.46698708 43.14114955 0 59.60813663a42.07329932 42.07329932 0 0 1-29.81143281 12.35760482z" fill="#2c2c2c" p-id="4657"></path></svg>
                </button>
            </form>
        </div>
    </body>
</html>