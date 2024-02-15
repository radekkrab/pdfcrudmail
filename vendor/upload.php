<?php
   
    if (isset($_FILES['pdf_file'])) {
      $file_name = $_FILES['pdf_file']['name'];
      $file_temp = $_FILES['pdf_file']['tmp_name'];
      $file_size = $_FILES['pdf_file']['size'];
      
      $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
      if ($file_ext !== 'pdf') {
          echo 'Только файлы PDF';
          ?><a href="../index.php">  Вернуться на Отправка PDF</a><?php
      } else {
          $upload_dir = '../upload/';
          $file_path = $upload_dir . $file_name;
          if(move_uploaded_file($file_temp, $file_path)) {
              echo '<iframe src="../upload/' . $file_name . '">Предварительный просмотр PDF</iframe><br>';
              echo '<a href="sendmail.php">Отправить файл</a><br>'; 
              echo '<a href="../index.php">Вернуться на Главную</a>';
          } else {echo 'Ошибка при загрузке';}
      };
  };

?>