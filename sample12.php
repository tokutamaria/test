<?php
session_start();
$_SESSION['session_message'] = '値をセッションに記録しました。';

?>

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
<p>セッションに値を保存しました。次のページに移動してみましょう</p>
<a href="page02.php">page02へ</a>
</pre>
</main>
</body>
</html>
