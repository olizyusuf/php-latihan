<?php

if (isset($_POST['search'])) {
    $search = $_POST['search'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bukutamu";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT barcode, nama, alamat, tlp, tgl_lahir, status FROM tbl_tamu WHERE barcode = '%".$search."%'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            echo "Nama: " . $row["nama"];
            echo "<br>";
            echo "Alamat: " . $row["alamat"];
            echo "<br>";
            echo "Telpon: " . $row["tlp"];
            echo "<br>";
            echo "Tanggal Lahir: " . $row["tgl_lahir"];
            echo "<br>";

          }
        }
    }
}
