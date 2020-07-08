<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>Index</title>
                    <!--/resoces/css/ と /public/css/　のCSSファイルを読み込む-->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
        <!--LaravelでVueを使用する際のお約束！-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <h1>Hello/Index</h1>
        
        <!--VueのComponentを読み込むためにはappというidのdiv要素を配置する-->
        <div id="app">
            <!--「appというidのdiv要素」の中にcomponentの設置-->
            <example-component />
        </div>
         <!--/resoces/js/ と /public/js/　のJSファイルを読み込む-->
         <!--コンテナタグ（= <div id="app"> ）の後に記述する-->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>