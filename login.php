<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <title>ورود به سایت</title>
  <style>
    body {
      font-family: 'Vazir', sans-serif;
      background-color: #8b04da;
      display:block;   
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    <?php
include("meno_css.php")
    ?>

    .login-box{
          display: flex;
          justify-content: center;
        }

    .login-box1 {
      background-color: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      text-align: center;
      width: 300px;
    }

    input[type="text"] {
      width: 80%;
      padding: 10px;
      margin: 15px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      text-align: center;
    }

    button {
      background-color: #7906c0;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
    }

    #content {
      display: none;
      margin-top: 20px;
      font-size: 18px;
      color: #333;
    }
    #show{
      margin: 15px;
      display:block; 
      color: #ffffffff;
      text-align: center;
    }
  </style>
</head>
<body>
  <?php
include("meno_html.php")
    ?>
    <div class="login-box">
  <div class="login-box1">
    <h2>ماشین مورد علاقه و نام خود را وارد کنید</h2>
    <form action="save_databass.php"method="post">
      <input type="text" name="name_car" placeholder="نام ماشین">
    <input type="text" name="name_self" placeholder="نام و نام خوانوادگی خود">
    <input type="submit"value="ورود">
  </form>
    
    <div id="content"> خوش آمدید.</div>
  </div>
</div>
<a href="show_databass.php" id="show">نمایش اطلاعات</a>
</body>
</html>
