<?php
require_once 'ReaderFactory.class.php';
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>作曲家と作品達</title>
   </head>
   <body>
     <?php
       $filename = 'music.xml';
       // $filename = 'music.csv';

       $factory = new ReaderFactory();
       $data = $factory->create($filename);
       $data->read();
       $data->display();
      ?>
   </body>
 </html>
