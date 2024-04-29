<?php
include 'configg.php';

<<<<<<< HEAD
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to check if data exists based on ID
    $query_check = "SELECT * FROM anggota WHERE id=$id";
    $result_check = mysqli_query($conn, $query_check);

    if (mysqli_num_rows($result_check) > 0) {
        $query = "DELETE FROM anggota WHERE id = $id";

        // Execute query
        if (mysqli_query($conn, $query)) {
            // Reset auto-increment after deleting all data
            mysqli_query($conn, "ALTER TABLE anggota AUTO_INCREMENT = 1");

            header("Location: index.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // If data with the given ID is not found, show JavaScript popup
        echo '<script>
                alert("Data dengan ID ' . $id . ' tidak ditemukan dalam tabel.");
                window.location.href = "hapus.php";
              </script>';
        exit;
=======
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM anggota WHERE id = $id";
    
    // Eksekusi query
    if(mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
>>>>>>> fea2b45 (Default)
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
