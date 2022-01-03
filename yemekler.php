<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">   <!-- Türkçe karakter sorunu olmasın -->
</head>
<body> 
 
 <!-- <img src="images/kebap.jpg" width="250" height="200"/> -->

<?php 

include 'maincon.php';  // Bağlantıyı dahil et

$sql = "SELECT * FROM yemekler";
$result = $conn->query($sql);  // Sorguyu çalıştır

if ($result->num_rows > 0) {  // tabloda veri olup olmadığını kontrol et
  // output data of each row
  echo "<table border=1 cellspacing=0>";
  echo "<th>Id</th><th>Ad</th><th>Tarif</th>
  <th>Resim</th><th>Aktif</th>";
  while($row = $result->fetch_assoc()) {  // her seferinde bir satır oku
      echo "<tr><td>" . $row["Id"]. "</td><td>" 
                      . $row["Ad"]. "</td><td>" 
                      . $row["Tarif"]. "</td><td>" 
                      . "<img src='" . $row["Resim"] . "' width='50' height='50'/>"   
                      . "</td><td>" 
                      . $row["Aktif"]   . "</td></tr>";
} 
echo "</table>";
}
else {
  echo "0 Kayıt";
}
$conn->close();
?>

</body>
</html>