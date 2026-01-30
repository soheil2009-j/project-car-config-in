<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معرفی ماشین</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        <?php
include("meno_css.php")
        ?>
        body {
    font-family: "Vazirmatn", sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    direction: rtl;
    text-align: right;
}



h1 {
    margin: 0;
    font-size: 2.5rem;
}

section {
    margin: 30px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    font-size: 1.8rem;
    color: #7800e1ff;
    border-bottom: 2px solid #ccc;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.car-details ul {
    list-style-type: none;
    padding: 0;
}

.car-details li {
    font-size: 1.1rem;
    margin-bottom: 10px;
}

.car-images {
    justify-content: space-between;
    flex-wrap: wrap;
}

.car-images img {
    width: 170px;
    border-radius: 8px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.car-images img:hover {
            transform: scale(1.10);
        }

audio {
    width: 100%;
    margin-top: 20px;
}

    </style>
</head>
<body>
    
<?php
include("meno_html.php")
    ?>


    <section class="car-introduction">
        <h2>BMW m5 e60</h2>
        <p>این ماشین یکی از بهترین مدل‌های سال 2025 است که با طراحی منحصر به فرد و موتور قدرتمند خود، توانسته توجه بسیاری را به خود جلب کند.</p>
    </section>

    <section class="car-details">
        <h2>config</h2>
        <ul>
            <li><strong>مدل:</strong> ماشین مدل 2025</li>
            <li><strong>قدرت موتور:</strong> 400 اسب بخار</li>
            <li><strong>شتاب 0 تا 100:</strong> 3.5 ثانیه</li>
            <li><strong>حداکثر سرعت:</strong> 320 کیلومتر بر ساعت</li>
            <li><strong>رنگ:</strong> مشکی مات</li>
        </ul>
    </section>

    <section class="car-images">
        <h2>image car</h2>
        <div class="images">
            <img src="e60.jpg" alt="تصویر اول ماشین">
            <img src="SnapInsta.to_403084724_1796307554131826_8288953609359163629_n.webp" alt="تصویر دوم ماشین">
            <img src="unnamed.jpg" alt="تصویر سوم ماشین">
            <img src="unnamed.jpg" alt="تصویر سوم ماشین">
            <img src="unnamed.jpg" alt="تصویر سوم ماشین">
            <img src="unnamed.jpg" alt="تصویر سوم ماشین">
        </div>
    </section>

    <section class="car-sound">
        <h2>صدای اگزوز ماشین</h2>
        <audio controls>
            <source src="exhaust-sound.mp3" type="audio/mp3">
        </audio>
        <audio controls>
            <source src="exhaust-sound.mp3" type="audio/mp3">
        </audio>
        <audio controls>
            <source src="exhaust-sound.mp3" type="audio/mp3">
        </audio>
    </section>

</body>
</html>
