<?php
include 'customer.php'; // Memasukkan file 'customer.php' yang berisi definisi kelas 'Customer'.
include 'customerrepository.php'; // Memasukkan file 'customerrepository.php' yang berisi definisi kelas 'CustomerRepository'.

// Membuat objek CustomerRepository
$repository = new CustomerRepository(); // Membuat objek 'CustomerRepository' untuk menyimpan pelanggan.

// Membaca data pelanggan dari formulir
if (isset($_POST['submit'])) { // Memeriksa apakah formulir telah disubmit.
    $name = $_POST['name']; // Membaca nama pelanggan dari formulir.
    $email = $_POST['email']; // Membaca alamat email pelanggan dari formulir.

    // Membuat objek Customer dengan ID yang baru dan data dari formulir
    $customer = new Customer(count($repository->getCustomers()) + 1, $name, $email);

    // Menambahkan pelanggan ke repository
    $repository->addCustomer($customer); // Menambahkan objek 'Customer' yang baru ke dalam 'CustomerRepository'.

    // Redirect ke halaman index
    header("Location: index.php"); // Mengarahkan kembali ke halaman index setelah menambahkan pelanggan.
    exit(); // Keluar dari skrip untuk mencegah eksekusi lebih lanjut.
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
</head>
<body>
    <h2>Create Customer</h2>
    <form method="post" action="createcustomer.php"> <!-- Formulir untuk membuat pelanggan baru -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br> <!-- Input untuk nama -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br> <!-- Input untuk alamat email -->
        <input type="submit" name="submit" value="Create"> <!-- Tombol 'Create' untuk mengirimkan formulir -->
    </form>
</body>
</html>
