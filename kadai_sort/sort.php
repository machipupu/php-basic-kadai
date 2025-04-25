<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        // ソート関数の定義
        function sort_2way($array, $order) {
            // ソート方向の判定
            if ($order) {
                sort($array); // 昇順ソート
            } else {
                rsort($array); // 降順ソート
            }

            // 1行ずつ出力
            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }

        // ソート対象の配列
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソートの実行
        echo "昇順ソート:<br>";
        sort_2way($nums, true);

        echo "<br>";

        // 降順ソートの実行
        echo "降順ソート:<br>";
        sort_2way($nums, false);
        ?>
    </p>
</body>
</html>