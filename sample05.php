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
print ((100+1050+200)*1.10)
?>
</pre>
</main>
</body>
</html>
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
</header>
<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php
$success = file_put_contents('../../new_file/new_file2 ', '2018-06-01 ホームページをリニューアルしました。');
if ($success) {
    print('ファイルの書き込みが完了しました。');
}else{
    print('ファイルの書き込みに失敗しました');
}
?>
</pre>
</main>
</body>
</html>
