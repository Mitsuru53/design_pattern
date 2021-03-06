<?php
require_once 'Data.class.php';
require_once 'DataCaretaker.class.php';

// session_start();

$caretaker = new DataCaretaker();
$data = isset($_SESSION['data']) ? $_SESSION['data'] : new Data();

$mode = (isset($_POST['mdode']) ? $_POST['mode'] : '');

switch ($mode) {
  case 'add':
    $data->addComment((isset($_POST['comment']) ? $_POST['comment'] : ''));
    break;
  case 'save':
    $caretaker->setSnapshot($data->takeSnapshot());
    echo '<font style="color: #dd0000;">データを保存しました</font><br>';
    break;
  case 'restore':
    $data->restoreSnapshot($caretaker->getSnapshot());
    echo '<font style="color: #00aa00;">データを復元しました。</font><br>';
    break;
  case 'clear':
    $data = new Data();
}

echo '今までのコメント';
if (!is_null($data)) {
  echo '<ol>';
  foreach ($data->getComment() as $comment) {
    echo '<li>'. htmlspecialchars($comment, ENT_QUOTES, 'euc-jp') .'</li>';
  }
  echo '</ol>';
}
 ?>

 <form action="" method="post">
   コメント: <input type="text" name="comment">
   <input type="submit" name="mode" value="add">
   <input type="submit" name="mode" value="save">
   <input type="submit" name="mode" value="restore">
   <input type="submit" name="mode" value="clear">
 </form>
