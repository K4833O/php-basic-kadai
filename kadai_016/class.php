<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>kadai_016</title>
</head>
<body>
  <p>
    <?php
    // クラスを定義する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      // メソッドを定義する
      public function show_price() {
        echo $this->price . '<br>';
      }

      // コンストラクタを定義
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    class Animal {
      // プロパティを定義
      private $name;
      private $height;
      private $width;

      // メソッドを定義
      public function show_height() {
        echo $this->height . '<br>';
      }

      // コンストラクタを定義
      public function __construct(string $name, int $height, int $width) {
        $this->name = $name;
        $this->height = $height;
        $this->width = $width;
      }
    }

    // インスタンス化
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    // インスタンス$foodの各プロパティの値を出力する
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // メソッドにアクセスして実行
    $food->show_price();
    $animal->show_height();
    ?>
  </p>
</body>
</html>