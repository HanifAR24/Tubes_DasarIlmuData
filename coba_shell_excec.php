<?php 
/* // Menjalankan perintah dir
$hasil = shell_exec('dir');
echo $hasil; */
?> 

<?php
$perintah = "C:\Users\muham\AppData\Local\Programs\Python\Python311\python.exe C:\\xampp\\htdocs\\Machine_Learning\\heart_attack.py";
$output = shell_exec($perintah); 
echo "hasil: <pre>$output</pre>"; 
?>