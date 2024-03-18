<?php require_once "../templates/header.php" ?>
<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['variable']['color']; ?>">Penjelasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Variabel dalam pemrograman adalah sebuah tempat yang digunakan untuk menyimpan data atau nilai yang dapat berubah selama proses eksekusi program.<br><small class="text-muted">Penjelasan umum</small></p>
                </div>
                <div class="d-flex justify-content-between flex-column">
                    <p>Setiap variabel memiliki nama yang unik dan dapat digunakan untuk merujuk pada nilai yang disimpan di dalamnya.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['variable']['color']; ?>">Pembahasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <ul>
                        <?php foreach ($data['variable']['example'] as $row) : ?>
                            <li><?= $row; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="" class="btn btn-<?= $data['variable']['color']; ?> btn-block">Show Details</a>
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
                            <h1 class="card-title fs-5 mg-b-10 text-<?= $data['variable']['color']; ?>"><?= $data['variable']['title']; ?></h1>
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
                            <p class="card-title text-<?= $data['variable']['color']; ?>">Output:</p>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <?php //! ================  Variable PHP ================ //

                        //? Variable PHP ditulis menggunakan simbol ( $ )
                        //* Contoh penulisan variable yang benar
                        /*
                        * ------------ *
                        * $variable;   *
                        * $vari_able;  *
                        * $variAble;   *
                        * $VariAble;   *
                        * ------------ *
                        */

                        //* Contoh penulisan variable yang salah
                        /*
                        * ------------ *
                        * $vari-able;  *
                        * $1variable;  *
                        * $vari#able;  *
                        * ------------ *
                        */

                        //* Contoh Inisialisasi variable
                        $variable = "ini variable";

                        //* Contoh untuk menampilkan variable ke layar browser
                        echo $variable;
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // * Variable juga bisa di gabungkan dengan string yang sudah ada
                        $nama = "Elgin";
                        echo "Hallo saya " . $nama;

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "../templates/footer.php" ?>