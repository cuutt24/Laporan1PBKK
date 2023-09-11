<?php
include 'customerrepository.php'; // Memasukkan file 'customerrepository.php' yang berisi definisi kelas 'CustomerRepository'.

// Membuat objek Customer
$customer1 = new Customer(1, "John Doe", "john@example.com"); // Membuat objek 'Customer' dengan data pelanggan pertama.
$customer2 = new Customer(2, "Jane Smith", "jane@example.com"); // Membuat objek 'Customer' dengan data pelanggan kedua.

// Membuat objek CustomerRepository
$repository = new CustomerRepository(); // Membuat objek 'CustomerRepository' untuk menyimpan pelanggan.

// Menambahkan pelanggan ke repository
$repository->addCustomer($customer1); // Menambahkan pelanggan pertama ke dalam 'CustomerRepository'.
$repository->addCustomer($customer2); // Menambahkan pelanggan kedua ke dalam 'CustomerRepository'.

// Menampilkan daftar pelanggan
$customers = $repository->getCustomers(); // Mengambil daftar pelanggan dari 'CustomerRepository'.

foreach ($customers as $customer) {
    echo "ID: " . $customer->getId() . "<br>"; // Menampilkan ID pelanggan.
    echo "Name: " . $customer->getName() . "<br>"; // Menampilkan nama pelanggan.
    echo "Email: " . $customer->getEmail() . "<br><br>"; // Menampilkan alamat email pelanggan dan membuat baris kosong.
}
?>
