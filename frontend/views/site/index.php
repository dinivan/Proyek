<?php

use yii\helpers\Html
?>

<html>
<head>
</head>

<style>
* {
    margin: 0;
    padding: 0;
    border: 0;
}
h1{
    text-align: center;
    font-size: 575%;
    color: #4A4444;
    text-transform: uppercase;
    letter-spacing: 1%;
    margin: 45% 0;
}
h2, p {
    text-align: center;
    font-size: 275%;
    color: #E5E5E5;
    text-transform: uppercase;
    letter-spacing: 100%;
}
img {
border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}
/*Mulai Parallax OM TELOLET*/

.parallax{
    background:url('gambar/yuumei.jpg') repeat;
    background-attachment: fixed;
}
.parallax-inner{
    padding-top: 25%;
    padding-bottom: 25%

}
/*selesai Parallax*/
    </style>

<body>
    <h1>Yii2</h1>
    <p1></p1>

<section class="parallax">
    <div class="parallax-inner">
        <h2>Yii2 Advanced</h2>
    <p>Ternyata susah</p>

    </div>
</section>

<h1>Space</h1>
</body>
</html>
