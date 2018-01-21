<?php
require_once 'ItemDataContext.class.php';
require_once 'ItemDataContextByName.class.php';
require_once 'ReadFixedLengthDataStrategy.class.php';
require_once 'ReadTabSeparatedDataStrategy.class.php';

function dumpData($data)
{
  echo '<dl>';
  foreach ($data as $object) {
    echo '<dt>' . $object->item_name . '</dt>';
    echo '<dd>商品番号:' . $object->item_code . '</dd>';
    echo '<dd>\\' . number_format($object->price) . '-<dd>';
    echo '<dd>' . date('Y/m/d', $object->release_date) . '</dd>';
  }
  echo '</dl>';
}

$strategy1 = new ReadFixedLengthDataStrategy('fixed_length_data.txt');
$context1 = new ItemDataContext($strategy1);
dumpData($context1->getItemData());

echo '<hr>';

$strategy2 = new ReadTabSeparatedDataStrategy('fixed_length_data.txt');
$context2 = new ItemDataContext($strategy2);
dumpData($context2->getItemData());

 ?>
