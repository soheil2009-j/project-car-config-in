<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarFig</title>
    <style>
        body {
            font-family: "Vazirmatn", sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            direction: rtl;
        }

        <?php
include("meno_css.php")
        ?>

        .cars {
            background-color: #5a0286;
            color: rgb(255, 255, 255);
            margin: 45px;
            text-align: center;
            padding: 20px 0;
            font-size: 1.8rem;
            border-radius: 20px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 30px;
            gap: 20px;
        }

        .car-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(111, 0, 136, 0.804);
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .car-card:hover {
            transform: scale(1.10);
        }

        .car-card img {
            width: 100%;
            border-radius: 10px 10px 0 0;
        }

        .car-card h3 {
            margin: 15px 0;
            color: #333;
        }

        .info-box {
            background: #5a0286;
            color: #ffffff;
            border-radius: 20px;
            padding: 20px;
            margin: 20px auto;
            max-width: 900px;
            text-align: center;
            line-height: 1.8;
            transition: transform 0.3s ease;
        }

        .info-box:hover {
            transform: scaleX(1.10);
            box-shadow: 0 5px 10px #5a0286;
        }
    </style>
</head>

<body>
    <?php
include("meno_html.php")
    ?>

    <div class="cars">
        ماشین ها
    </div>

    <div class="container">
        <div class="car-card">
            <img src="e60.jpg" alt="BMW">
            <a href="info_e60.php">
                <h3>BMW M5 e60</h3>
            </a>
        </div>

        <div class="car-card">
            <img src="cls.jpg" alt="Audi">
            <a href="e2.html">
                <h3>Mercedes Benz cls 500</h3>
            </a>

        </div>

        <div class="car-card">
            <img src="mk4.jpg" alt="Ferrari">
            <a href="e2.html">
                <h3>Supra mk4</h3>
            </a>

        </div>

        <div class="car-card">
            <img src="dodge.jpg" alt="Mercedes">
            <a href="e2.html">
                <h3>dodge challenger</h3>
            </a>

        </div>
    </div>

    </div>
    <a href="info.php">
        <h2 class="info-box">برای اطلاعات سایت اینجا کلیک کن
        </h2>
    </a>
</body>

</html>
