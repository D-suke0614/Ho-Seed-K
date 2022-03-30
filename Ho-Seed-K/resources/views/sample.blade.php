<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRFトークンをhead内metaタグにセット -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Title</title>
</head>
<body>
<h1>sample hoshi-me</h1>
<!-- Vueで描画する領域としてdivタグを設置し、id名を「app」とする。

ExampleComponentを表示するため、example-componentタグを設置する。 -->
<div id="app">
    <example-component></example-component>
    <!-- <sample-component></sample-component> -->
   <a href="/try">ページ遷移</a> 
</div>
<!-- ビルドされ出力されるapp.jsを読み込む -->
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
