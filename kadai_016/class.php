<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function show_price(int $price) {
        $this->price = $price;
      }

      public function getPrice() {
        return $this->price;
      }


      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }
    $Food = new Food('potato', 250);

    print_r($Food);

    echo '<br>';

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function show_height(int $height) {
        $this->height = $height;
      }

      public function getHeight() {
        return $this->height;
      }

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }
    $Animal = new Animal('dog', 60, 5000);

    print_r($Animal);

    echo '<br>';

    echo $Food->getPrice();

    echo '<br>';

    echo $Animal->getHeight();
    ?>
  </p>

</body>
</html>
  
