<?php require_once "../templates/header.php" ?>
<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['conditional']['color']; ?>">Penjelasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Pengkondisian dalam bahasa pemrograman adalah kemampuan untuk menjalankan kode tertentu berdasarkan suatu kondisi atau serangkaian kondisi tertentu.</p>
                </div>
                <div class="d-flex justify-content-between flex-column">
                    <p>Pengkondisian memungkinkan program untuk membuat keputusan logis, yang memungkinkan jalannya program untuk bercabang ke arah yang berbeda tergantung pada kondisi yang diberikan.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['conditional']['color']; ?>">Pembahasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <ul>
                        <?php foreach ($data['conditional']['example'] as $row) : ?>
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
                            <h1 class="card-title fs-5 mg-b-10 text-<?= $data['conditional']['color']; ?>"><?= $data['conditional']['title']; ?></h1>
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
                            <p class="card-title fs-5 text-<?= $data['conditional']['color']; ?>">Output:</p>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <?php //! ================  Conditional PHP ================ //

                        /*
                        ? Pengkondisian adalah intruksi pada pemrogaman untuk menjalankan 
                        ? suatu logika sesuai dengan kondisi tertentu.
                        ? Pada bahasa PHP ada dua teknik pengkondisian
                        ? yaitu [ if else ] dan [ switch case ]
                        */

                        //? --- Perbedaan Switch Case & if else --- ?//
                        //? --- Kelebihan & kekurangannya masing - masing --- ?//
                        /*
                        * --------------------------------------------------------------------------- *
                        ! [ Penjelasan pertama ]                                                      !
                        * Dalam penggunaan if else, setiap kondisi diproses secara berurutan,         *
                        * sehingga penggunaan memori dapat lebih banyak.                              *
                        * Sementara dalam switch case,                                                *
                        * pemrosesan kondisi menggunakan sebuah tabel,                                *
                        * sehingga penggunaan memori dapat lebih efisien.                             *
                        * --------------------------------------------------------------------------- *
                        ! [ Penjelasan kedua ]                                                        !
                        * If else dapat digunakan untuk kondisi yang kompleks,                        *
                        * sedangkan switch case hanya bisa dipakai untuk                              *
                        * kondisi yang sederhana dan spesifik.                                        *
                        * --------------------------------------------------------------------------- *
                        ! [ Penjelasan ketiga ]                                                       !
                        * Switch case lebih efisien daripada if else dalam penggunaan waktu,          *
                        * karena switch case langsung memproses data yang ada dalam tabel kondisi,    *
                        * sementara if else akan memproses satu per satu dari                         *
                        * atas ke bawah hingga menemukan kondisi yang cocok.                          *
                        * --------------------------------------------------------------------------- *
                        */

                        // * Contoh Pengkondisian sederhana menggunakan if else
                        $umur1 = 34;

                        if ($umur1 <= 5) {
                            echo "Karena usia anda $umur1 tahun berarti anda masih balita\n";
                            //? Symbol \n berfunsi untuk membuat baris baru
                        } else if ($umur1 <= 10) {
                            echo "Karena usia anda $umur1 tahun berarti anda masih anak-anak\n";
                        } else if ($umur1 <= 21) {
                            echo "Karena usia anda $umur1 tahun berarti anda sudah remaja\n";
                        } else if ($umur1 <= 40) {
                            echo "Karena usia anda $umur1 tahun berarti anda sudah dewasa\n";
                        } else {
                            echo "Karena usia anda $umur1 tahun berarti anda sudah lansia\n";
                        }

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // * Contoh Pengkondisian sederhana menggunakan switch case
                        $umur2 = 50;
                        switch ($umur2) {
                            case $umur2 <= 5:
                                echo "Karena usia anda $umur2 tahun berarti anda masih balita\n";
                                break;
                            case $umur2 <= 10:
                                echo "Karena usia anda $umur2 tahun berarti anda masih anak-anak\n";
                                break;
                            case $umur2 <= 21:
                                echo "Karena usia anda $umur2 tahun berarti anda sudah remaja\n";
                                break;
                            case $umur2 <= 40:
                                echo "Karena usia anda $umur2 tahun berarti anda sudah dewasa\n";
                                break;
                            default:
                                echo "Karena usia anda $umur2 tahun berarti anda sudah lansia\n";
                                break;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "../templates/footer.php" ?>