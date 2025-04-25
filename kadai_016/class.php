<?php
// Food クラスの定義
class Food {
    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // price を表示するメソッド
    public function show_price() {
        echo $this->price . "<br>";
    }
}

// Animal クラスの定義
class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // height を表示するメソッド
    public function show_height() {
        echo $this->height . "<br>";
    }
}

// インスタンスの作成
$potato = new Food("potato", 250);
$dog = new Animal("dog", 60, 5000);

// インスタンスを print_r で出力
echo "<pre>";
print_r($potato);
print_r($dog);
echo "</pre>";

// メソッドへアクセス
$potato->show_price();
$dog->show_height();
?>