<?php
  class MyKnowleges { 
      public $str = <<<EOD
      Task '8.6 Practical work' includes work with php, html, css, 
      local web servers and etc...
      EOD;

      function getSumExample() { 
        $a = 10;
        $b = 20;
        $c = $a + $b;
        echo $c; 
    }

    function equals() {
      $x = 2; 
      $y = 3; 
      $z = 2; 
      echo '$x = ', $x."<br>";  
      echo '$y = ', $y."<br>"; 
      echo '$z = ', $z."<br>"; 
      echo '$x == $y: ', var_dump($x == $y)."<br>";   // Сравнение по значению (1 равен 2)
      echo '$x === $y: ', var_dump($x === $y)."<br>"; // Сравнение по значению и типу(оба значения должны быть не только равнозначны, но и одного и того же типа)
      echo '$x === $z: ', var_dump($x === $z)."<br>"; // Сравнение по значению и типу(оба значения должны быть не только равнозначны, но и одного и того же типа)
      echo '$x === 2 (str): ', var_dump($x === '2');  // Сравнение по значению и типу(оба значения должны быть не только равнозначны, но и одного и того же типа)

      // echo '$x <> $y: ', var_dump($x <> $y)."<br>";   // Не равно
      // echo '$x != $y: ', var_dump($x != $y)."<br>";   // 1 не равно 2?
      // echo '$x !== $y: ', var_dump($x !== $y)."<br>"; // 1 не равен 2 без приведения типов
    }
  } 

  $a = 'Мои знания на';
  $b = 100;
  $c = '%';
?>

<?php
  $price = 15;

  if ($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
?>
