<?php
require_once 'ReadItemDataStrategy.class.php';

class ReadTabSeparatedDataStrategy extends ReadItemDataStrategy {
  protected function readData($filename)
  {
    $fp = fopen($filename, 'r');

    $dummy = fgets($fp, 4096);

    $return_value = [];
    while ($buffer = fgets($fp, 4096)) {
      list($item_code, $item_name, $price, $release_date) = split("\t", $buffer);

      $obj = new stdClass();
      $obj->item_name = $item_name;
      $obj->item_code = $item_code;
      $obj->price = $price;

      list($year, $mon, $day) = split('/', $release_date);

      $obj->release_date = mktime(0, 0, 0, $mon, $day, $year);
      $return_value[] = $obj;
    }
    fclose($fp);
    return $return_value;
  }
}
 ?>
