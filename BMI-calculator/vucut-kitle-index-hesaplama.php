<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<form action="vucut-kitle-index-hesaplama.php" method="GET">
    <input type="text" name="boy" placeholder="Boyunuzu Girin"> </br> </br>
    <input type="text" name="kilo" placeholder="Kilonuzu Girin"> </br> <br>
    <button type="submit">Gönder</button>
</form>

</html>

<?php 
$boy = $_GET["boy"];
$kilo = $_GET["kilo"];

$sonuc = $_GET["boy"] * $_GET["boy"];
?> <div class="sonuc">
    <h2> Vücut Kitle İndexiniz = <?php echo $kilo / $sonuc ?> </h2>

</div>