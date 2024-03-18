<?php require_once "../templates/header.php" ?>
<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['object']['color']; ?>">Penjelasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Objek adalah dengan perumpamaan dengan objek di dunia nyata. Misalnya, kita bisa memikirkan mobil sebagai objek.</p>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Setiap mobil memiliki ciri-ciri tertentu seperti warna, merek, dan model, serta perilaku seperti bisa dihidupkan, dimatikan, dan bisa bergerak.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['object']['color']; ?>">Pembahasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <ul>
                        <?php foreach ($data['object']['example'] as $row) : ?>
                            <li><?= $row; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="" class="btn btn-<?= $data['functions']['color']; ?> btn-block">Show Details</a>
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
                            <h1 class="card-title fs-5 mg-b-10 text-<?= $data['object']['color']; ?>"><?= $data['object']['title']; ?></h1>
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
                            <p class="card-title fs-5 text-<?= $data['object']['color']; ?>">Output:</p>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <?php //! ================  OOP PHP ================ //

                        // ? Istilah Object dalam Object Oriented Programming (OOP), 
                        // ? sebenarnya terdiri dari class, property, method dan object.

                        // ? Class digunakan hanya untuk membuat kerangka dasar.
                        // ? Yang akan kita pakai nantinya adalah hasil cetakan dari class, yakni object.

                        // Mendefinisikan kelas Mahasiswa
                        class Taruna
                        {
                            // Properti
                            public $nama;
                            public $nit;
                            public $jurusan;

                            // Konstruktor untuk inisialisasi objek dengan nilai awal
                            public function __construct($nama, $nit, $jurusan)
                            {
                                $this->nama = $nama;
                                $this->nit = $nit;
                                $this->jurusan = $jurusan;
                            }

                            // Metode untuk menampilkan informasi mahasiswa
                            public function tampilkanInfo()
                            {
                                echo "Nama: " . "<br>" . $this->nama . "<br><br>";
                                echo "Nit: " . "<br>" . $this->nit . "<br><br>";
                                echo "Jurusan: " . "<br>" . $this->jurusan . "<br><br>";
                            }
                        }

                        // Membuat objek dari kelas Mahasiswa
                        $taruna1 = new Taruna("Elgin", 2223594, "Rekayasa Perangkat Lunak");

                        // Memanggil metode untuk menampilkan informasi mahasiswa
                        $taruna1->tampilkanInfo();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "../templates/footer.php" ?>