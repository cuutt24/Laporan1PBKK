<?php
class Customer {
    private $id;            // Mendefinisikan properti 'id' sebagai variabel privat.
    private $name;          // Mendefinisikan properti 'name' sebagai variabel privat.
    private $email;         // Mendefinisikan properti 'email' sebagai variabel privat.

    public function __construct($id, $name, $email) {
        $this->id = $id;     // Menginisialisasi properti 'id' dengan nilai dari parameter 'id'.
        $this->name = $name; // Menginisialisasi properti 'name' dengan nilai dari parameter 'name'.
        $this->email = $email; // Menginisialisasi properti 'email' dengan nilai dari parameter 'email'.
    }

    public function getId() {
        return $this->id;    // Metode 'getId()' mengembalikan nilai properti 'id'.
    }

    public function getName() {
        return $this->name;  // Metode 'getName()' mengembalikan nilai properti 'name'.
    }

    public function getEmail() {
        return $this->email; // Metode 'getEmail()' mengembalikan nilai properti 'email'.
    }
}
?>
//
