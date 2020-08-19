<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php
$file = file_get_contents('https://h2o-space.com/feed/json/');
// jsonファイルが読み込まれる

$json = json_decode($file);
// 上記のファンクションで処理する

// phpのオブジェクトになる

foreach ($json->items as $item):?>
・<a href="<?php print($item->url);?>"><?php print($item->title);?></a>
<?php endforeach; ?>

</pre>
</main>
</body>
</html>
