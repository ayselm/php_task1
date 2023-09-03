<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица истинности</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
 // Задание 1
 // Функция для вычисления логической операции not_op (!)
 function not_op($a) {
  if ($a == 0) {
   return 1;
  } else {
   return 0;
  }
 }


 // Функция для вычисления логической операции OR (||)
 function or_op($a, $b) {
  if ($a == 1 || $b == 1) {
   return 1;
  } else {
   return 0;
  }
 }

 // Функция для вычисления логической операции AND (&&)
 function and_op($a, $b) {
  if ($a == 1 && $b == 1) {
   return 1;
  } else {
   return 0;
  }
 }

 // Функция для вычисления логической операции XOR
 function xor_op($a, $b) {
  if (($a == 1 && $b == 0) || ($a == 0 && $b == 1)) {
   return 1;
  } else {
   return 0;
  }
 }

 ?>
    <table>
    <caption>Таблица истинности</caption>
        <tr>
         <th>А</th>
         <th>B</th>
         <th>!A</th>
         <th>A || B</th>
         <th>A && B</th>
         <th>A xor B</th>
        </tr>
        <tr>
         <td>0</td>
         <td>0</td>
         <td><?php echo not_op(0) ?></td>
         <td><?php echo or_op(0, 0)?></td>
         <td><?php echo and_op(0, 0)?></td>
         <td><?php echo xor_op(0, 0)?></td>
       </tr>
       <tr>
        <td>0</td>
        <td>1</td>
        <td><?php echo not_op(0) ?></td>
        <td><?php echo or_op(0, 1)?></td>
        <td><?php echo and_op(0, 1)?></td>
        <td><?php echo xor_op(0, 1)?></td>
      </tr>
      <tr>
        <td>1</td>
        <td>0</td>
        <td><?php echo not_op(1) ?></td>
        <td><?php echo or_op(1, 0)?></td>
        <td><?php echo and_op(1, 0)?></td>
        <td><?php echo xor_op(1, 0)?></td>
      </tr>
      <tr>
        <td>1</td>
        <td>1</td>
        <td><?php echo not_op(1) ?></td>
        <td><?php echo or_op(1, 1)?></td>
        <td><?php echo and_op(1, 1)?></td>
        <td><?php echo xor_op(1, 1)?></td>
      </tr>
    </table>

    <?
// Задание 2

 // Функция для гибкого сравнения
 function flexible_compare($a, $b) {
  if ($a == $b) {
   return 1;
  } else {
   return 0;
  }
 }

 // Функция для жесткого сравнения
 function strict_compare($a, $b) {
  if ($a === $b) {
   return  1;
  } else {
   return 0;
  }
 }
 ?>
    <table class ="comparativeTable">
    <caption>Гибкое сравнение</caption>
      <tr>
       <th></th>
       <th>true</th>
       <th>false</th>
       <th>1</th>
       <th>0</th>
       <th>-1</th>
       <th>"1"</th>
       <th>null</th>
       <th>"php"</th>
      </tr>
      <tr>
       <td>true</td>
       <td><?php echo flexible_compare(true, true)?></td>
       <td><?php echo flexible_compare(true, false)?></td>
       <td><?php echo flexible_compare(true, 1)?></td>
       <td><?php echo flexible_compare(true, 0)?></td>
       <td><?php echo flexible_compare(true, -1)?></td>
       <td><?php echo flexible_compare(true, "1")?></td>
       <td><?php echo flexible_compare(true, null)?></td>
       <td><?php echo flexible_compare(true, "php")?></td>
     </tr>
     <tr>
      <td>false</td>
       <td><?php echo flexible_compare(false, true)?></td>
       <td><?php echo flexible_compare(false, false)?></td>
       <td><?php echo flexible_compare(false, 1)?></td>
       <td><?php echo flexible_compare(false, 0)?></td>
       <td><?php echo flexible_compare(false, -1)?></td>
       <td><?php echo flexible_compare(false, "1")?></td>
       <td><?php echo flexible_compare(false, null)?></td>
       <td><?php echo flexible_compare(false, "php")?></td>
    </tr>
    <tr>
      <td>1</td>
      <td><?php echo flexible_compare(1, true)?></td>
       <td><?php echo flexible_compare(1, false)?></td>
       <td><?php echo flexible_compare(1, 1)?></td>
       <td><?php echo flexible_compare(1, 0)?></td>
       <td><?php echo flexible_compare(1, -1)?></td>
       <td><?php echo flexible_compare(1, "1")?></td>
       <td><?php echo flexible_compare(1, null)?></td>
       <td><?php echo flexible_compare(1, "php")?></td>
    </tr>
    <tr>
      <td>0</td>
      <td><?php echo flexible_compare(0, true)?></td>
       <td><?php echo flexible_compare(0, false)?></td>
       <td><?php echo flexible_compare(0, 1)?></td>
       <td><?php echo flexible_compare(0, 0)?></td>
       <td><?php echo flexible_compare(0, -1)?></td>
       <td><?php echo flexible_compare(0, "1")?></td>
       <td><?php echo flexible_compare(0, null)?></td>
       <td><?php echo flexible_compare(0, "php")?></td>
    </tr>
    <tr>
      <td>-1</td>
      <td><?php echo flexible_compare(-1, true)?></td>
       <td><?php echo flexible_compare(-1, false)?></td>
       <td><?php echo flexible_compare(-1, 1)?></td>
       <td><?php echo flexible_compare(-1, 0)?></td>
       <td><?php echo flexible_compare(-1, -1)?></td>
       <td><?php echo flexible_compare(-1, "1")?></td>
       <td><?php echo flexible_compare(-1, null)?></td>
       <td><?php echo flexible_compare(-1, "php")?></td>
    </tr>
    <tr>
      <td>"1"</td>
      <td><?php echo flexible_compare("1", true)?></td>
       <td><?php echo flexible_compare("1", false)?></td>
       <td><?php echo flexible_compare("1", 1)?></td>
       <td><?php echo flexible_compare("1", 0)?></td>
       <td><?php echo flexible_compare("1", -1)?></td>
       <td><?php echo flexible_compare("1", "1")?></td>
       <td><?php echo flexible_compare("1", null)?></td>
       <td><?php echo flexible_compare("1", "php")?></td>
    </tr>
    <tr>
      <td>null</td>
      <td><?php echo flexible_compare(null, true)?></td>
       <td><?php echo flexible_compare(null, false)?></td>
       <td><?php echo flexible_compare(null, 1)?></td>
       <td><?php echo flexible_compare(null, 0)?></td>
       <td><?php echo flexible_compare(null, -1)?></td>
       <td><?php echo flexible_compare(null, "1")?></td>
       <td><?php echo flexible_compare(null, null)?></td>
       <td><?php echo flexible_compare(null, "php")?></td>
    </tr>
    <tr>
      <td>"php"</td>
      <td><?php echo flexible_compare("php", true)?></td>
       <td><?php echo flexible_compare("php", false)?></td>
       <td><?php echo flexible_compare("php", 1)?></td>
       <td><?php echo flexible_compare("php", 0)?></td>
       <td><?php echo flexible_compare("php", -1)?></td>
       <td><?php echo flexible_compare("php", "1")?></td>
       <td><?php echo flexible_compare("php", null)?></td>
       <td><?php echo flexible_compare("php", "php")?></td>
    </tr>
  </table>
  <table class ="comparativeTable">
    <caption>Жесткое сравнение</caption>
      <tr>
       <th></th>
       <th>true</th>
       <th>false</th>
       <th>1</th>
       <th>0</th>
       <th>-1</th>
       <th>"1"</th>
       <th>null</th>
       <th>"php"</th>
      </tr>
      <tr>
       <td>true</td>
       <td><?php echo strict_compare(true, true)?></td>
       <td><?php echo strict_compare(true, false)?></td>
       <td><?php echo strict_compare(true, 1)?></td>
       <td><?php echo strict_compare(true, 0)?></td>
       <td><?php echo strict_compare(true, -1)?></td>
       <td><?php echo strict_compare(true, "1")?></td>
       <td><?php echo strict_compare(true, null)?></td>
       <td><?php echo strict_compare(true, "php")?></td>
     </tr>
     <tr>
      <td>false</td>
       <td><?php echo strict_compare(false, true)?></td>
       <td><?php echo strict_compare(false, false)?></td>
       <td><?php echo strict_compare(false, 1)?></td>
       <td><?php echo strict_compare(false, 0)?></td>
       <td><?php echo strict_compare(false, -1)?></td>
       <td><?php echo strict_compare(false, "1")?></td>
       <td><?php echo strict_compare(false, null)?></td>
       <td><?php echo strict_compare(false, "php")?></td>
    </tr>
    <tr>
      <td>1</td>
      <td><?php echo strict_compare(1, true)?></td>
       <td><?php echo strict_compare(1, false)?></td>
       <td><?php echo strict_compare(1, 1)?></td>
       <td><?php echo strict_compare(1, 0)?></td>
       <td><?php echo strict_compare(1, -1)?></td>
       <td><?php echo strict_compare(1, "1")?></td>
       <td><?php echo strict_compare(1, null)?></td>
       <td><?php echo strict_compare(1, "php")?></td>
    </tr>
    <tr>
      <td>0</td>
      <td><?php echo strict_compare(0, true)?></td>
       <td><?php echo strict_compare(0, false)?></td>
       <td><?php echo strict_compare(0, 1)?></td>
       <td><?php echo strict_compare(0, 0)?></td>
       <td><?php echo strict_compare(0, -1)?></td>
       <td><?php echo strict_compare(0, "1")?></td>
       <td><?php echo strict_compare(0, null)?></td>
       <td><?php echo strict_compare(0, "php")?></td>
    </tr>
    <tr>
      <td>-1</td>
      <td><?php echo strict_compare(-1, true)?></td>
       <td><?php echo strict_compare(-1, false)?></td>
       <td><?php echo strict_compare(-1, 1)?></td>
       <td><?php echo strict_compare(-1, 0)?></td>
       <td><?php echo strict_compare(-1, -1)?></td>
       <td><?php echo strict_compare(-1, "1")?></td>
       <td><?php echo strict_compare(-1, null)?></td>
       <td><?php echo strict_compare(-1, "php")?></td>
    </tr>
    <tr>
      <td>"1"</td>
      <td><?php echo strict_compare("1", true)?></td>
       <td><?php echo strict_compare("1", false)?></td>
       <td><?php echo strict_compare("1", 1)?></td>
       <td><?php echo strict_compare("1", 0)?></td>
       <td><?php echo strict_compare("1", -1)?></td>
       <td><?php echo strict_compare("1", "1")?></td>
       <td><?php echo strict_compare("1", null)?></td>
       <td><?php echo strict_compare("1", "php")?></td>
    </tr>
    <tr>
      <td>null</td>
      <td><?php echo strict_compare(null, true)?></td>
       <td><?php echo strict_compare(null, false)?></td>
       <td><?php echo strict_compare(null, 1)?></td>
       <td><?php echo strict_compare(null, 0)?></td>
       <td><?php echo strict_compare(null, -1)?></td>
       <td><?php echo strict_compare(null, "1")?></td>
       <td><?php echo strict_compare(null, null)?></td>
       <td><?php echo strict_compare(null, "php")?></td>
    </tr>
    <tr>
      <td>"php"</td>
      <td><?php echo strict_compare("php", true)?></td>
       <td><?php echo strict_compare("php", false)?></td>
       <td><?php echo strict_compare("php", 1)?></td>
       <td><?php echo strict_compare("php", 0)?></td>
       <td><?php echo strict_compare("php", -1)?></td>
       <td><?php echo strict_compare("php", "1")?></td>
       <td><?php echo strict_compare("php", null)?></td>
       <td><?php echo strict_compare("php", "php")?></td>
    </tr>
  </table>

</body>
</html>