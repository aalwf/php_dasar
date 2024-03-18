<?php require_once "../templates/header.php" ?>
<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['looping']['color']; ?>">Penjelasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Looping (perulangan) dalam bahasa pemrograman adalah proses eksekusi berulang dari satu atau lebih pernyataan dalam sebuah program. <br><small class="text-muted">Penjelasan umum</small></p>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Hal tersebut memungkinkan program untuk menjalankan serangkaian instruksi secara berulang berdasarkan kondisi tertentu, hingga kondisi tersebut tidak lagi terpenuhi.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['looping']['color']; ?>">Pembahasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <ul>
                        <?php foreach ($data['looping']['example'] as $row) : ?>
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
                            <h1 class="card-title fs-5 mg-b-10 text-<?= $data['looping']['color']; ?>"><?= $data['looping']['title']; ?></h1>
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
                            <p class="card-title fs-5 text-<?= $data['looping']['color']; ?>">Output:</p>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <?php //! ================  Looping PHP ================ //

                        /*
                        * ------------------------------------------------------------------------------------------ *
                        * [ Looping PHP ]                                                                            *
                        * 1. while -> "perulangan dengan metode pengecekan kondisi yang ditentukan bernilai benar."  *
                        * 2. for -> "perulangan dengan metode penghitungan angka yang ditentukan."                   *
                        * 3. foreach -> "perulangan untuk mengulang isi elemen pada array."                          *
                        * 4. do-while -> "dieksekusi satu kali dan kemudian kondisi dievaluasi."                     *
                        * ------------------------------------------------------------------------------------------ *
                        */

                        // * Contoh perulangan while
                        $i = 1;
                        while ($i <= 3) {
                            $i++;
                            echo "Sekarang no nomor " . $i . " pada while" . "<br>";
                        }

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // * Contoh perulangan for
                        for ($i = 1; $i <= 3; $i++) {
                            echo "Sekarang no nomor " . $i . " pada for" . "<br>";
                        }

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // * Contoh perulangan foreach
                        $colors = array("bereum", "koneng", "hejo");

                        // Loop through colors array
                        foreach (array_values($colors) as $i => $value) {
                            echo "index ke $i berisi $value" . "<br>";
                        }

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // * Contoh perulangan do-while
                        $i = 1;
                        do {
                            $i++;
                            echo "Sekarang no nomor " . $i . " pada do-while" . "<br>";
                        } while ($i <= 3);

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "../templates/footer.php" ?>