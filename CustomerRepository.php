<?php
include 'customer.php'; // Memasukkan file 'customer.php' yang berisi definisi kelas 'Customer'.

class CustomerRepository {
    private $customers = []; // Mendefinisikan properti 'customers' sebagai array kosong.

    public function addCustomer(Customer $customer) { // Mendefinisikan metode 'addCustomer()' yang menerima objek 'Customer' sebagai parameter.
        $this->customers[] = $customer; // Menambahkan objek 'Customer' ke dalam array 'customers'.
    }

    public function getCustomers() { // Mendefinisikan metode 'getCustomers()'.
        return $this->customers; // Mengembalikan array 'customers' yang berisi daftar pelanggan.
    }
}
?>
