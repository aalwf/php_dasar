<?php require_once "../templates/header.php" ?>
<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['type_data']['color']; ?>">Penjelasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Tipe Data atau Data Type, adalah atribut yang terkait dengan sepotong data yang bisa memberi tahu sistem komputer cara untuk menafsirkan nilainya. <br><small class="text-muted">Penjelasan umum</small></p>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p class="text-justify">
                        Tipe data sendiri dapat digambarkan sebagai alat yang digunakan dalam dunia programming untuk menentukan tipe nilai pada suatu objek dan operasi. Saat program komputer menyimpan data dalam bentuk variabel, setiap variabel harus diterapkan tipe data tertentu.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['type_data']['color']; ?>">Pembahasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <ul>
                        <?php foreach ($data['type_data']['example'] as $row) : ?>
                            <li><?= $row; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="" class="btn btn-<?= $data['type_data']['color']; ?> btn-block">Show Details</a>
                <small>W3Schools.com</small>
            </div>
        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card overflow-hidden review-project">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex justify-content-between">
                            <h1 class="card-title fs-5 mg-b-10 text-<?= $data['type_data']['color']; ?>"><?= $data['type_data']['title']; ?></h1>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <div class="col dark-theme bg-dark rounded-1 p-3">
                            <div class="d-flex justify-content-between">
                                <p class="tx-12 text-muted mb-2">Input</p>
                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex justify-content-between">
                            <p class="card-title text-<?= $data['type_data']['color']; ?>">Output:</p>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <?php //! ================  Type Data PHP ================ //
                        /* 
                        * ---------------------------- *
                        * - string                     *
                        * - int / numerik              *
                        * - float / bilangan pecahan   *
                        * - boolean                    *
                        * - array                      *
                        * - object                     *
                        * - dll.                       *
                        * ---------------------------- *
                        */

                        // * Contoh implementasi type data  :
                        //? String
                        echo "ini string";
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        //? int
                        echo 31337; // ini integer
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        //? float
                        echo 2.5; // ini float
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        //? boolean
                        echo true; // boolean yang bernilai 1 / benar
                        echo false; // boolean yang bernilai 0 / salah
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        //? array
                        print_r(["satu", 2, true]); // array indeks
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        print_r([
                            "string" => "satu",
                            "int" => 2,
                            "boolean", true
                        ]);

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "../templates/footer.php" ?>