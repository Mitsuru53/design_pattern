<?php
require_once 'ItemManager.class.php';
require_once 'DeepCopyItem.class.php';
require_once 'ShallowCopyItem.class.php';

function testCopy(ItemManager $manager, $item_code)
{
  $item1 = $manager->create($item_code);
  $item2 = $manager->create($item_code);

  $item2->getDetail()->comment = 'コメントを書き換えました';

  echo 'original';
  $item1->dumpData();
  echo 'copy';
  $item2->dumpData();
  echo '<hr>';
}

$manager = new ItemManager();

$item = new DeepCopyItem('ABC0001', '限定Tシャツ', 3800);
$detail = new stdClass();
$detail->comment = '商品Aのコメントです';
$item->setDetail($detail);
$manager->registItem($item);
$item = new ShallowCopyItem('AB00002', 'ぬいぐるみ', 1500);
$detail = new stdClass();
$detail->comment = '商品Bのコメントです';
$item->setDetail($detail);
$manager->registItem($item);
testCopy($manager, 'ABC0001');
testCopy($manager, 'AB00002');
 ?>
