<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>TrustClinic</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
</head>

<body>
  
  <div class="container">
  
  <h1>Добре дошли в клиника "Доверие"</h1>
  <h2>за Вашето здраве и стабилност</h2>
  <p>За допълнително информация и записване на часове, моля попълнете формата за регистрация!</p>
  

  <form method="post" action="get_data.php">
    Име: <input type="text" name="Име" style="float:right; width: 23em;"> <br>
    E-mail: <input type="text" name="email" style="float:right; width: 23em;"> <br>      
    
    
    <div class="form-group" style="width:800px; margin:0 auto;">
        <label style="float:left; width:16em; text-align:right;"> Съобщение:</label>
        <textarea rows="5" name="name" class="form-item"></textarea>
    </div>
  
    <input type="submit" name="Изпращане" style="float:center; width: 10em;">
  
  </form>

    <img src='picture1.jpg' width="540" height="350" />
    <img src='background.jpg' width="540" height="350" />

</body>
</html>

