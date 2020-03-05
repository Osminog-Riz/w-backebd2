<?php 

// Отправляем правильную кодировку. 
header('Content-Type: text/html; charset=UTF-8'); 

// Выводим все полученные через POST параметры. 
// если запрос 2-5) сделан правильно, то можно будет увидеть 
// отправленный комментарий в ответе веб-сервера. 
print_r($_POST); 

print('Мяу, мир!'); 
?> 
<html> 
<head></head> 
<body> 
<img class="img" src="11.png" alt="1"> 
<img class="img" src="2.png" alt="2"> 
<img class="img" src="3.png" alt="3"> 
<img class="img" src="4.png" alt="4"> 
<img class="img" src="5.png" alt="5"> 
<img class="img" src="6.png" alt="6"> 
<img class="img" src="7.png" alt="7"> 

</body>
