<?php require_once "../templates/header.php" ?>
<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['array']['color']; ?>">Penjelasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Array adalah cara untuk menyimpan banyak nilai dalam satu tempat.<br><small class="text-muted">Penjelasan umum</small></p>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Setiap nilai memiliki nomor tertentu yang disebut indeks, yang memungkinkan kita mengakses nilai tersebut. Ini membantu dalam mengatur dan mengelola data dengan lebih efisien.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['array']['color']; ?>">Pembahasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <ul>
                        <?php foreach ($data['array']['example'] as $row) : ?>
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
                            <h1 class="card-title fs-5 mg-b-10 text-<?= $data['array']['color']; ?>"><?= $data['array']['title']; ?></h1>
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
                            <p class="card-title fs-5 text-<?= $data['array']['color']; ?>">Output:</p>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <?php //! ================  Array PHP ================ //

                        // ? Array adalah salah satu struktur data 
                        // ? yang berisi sekumpulan data dan memiliki indeks.
                        // ? Indeks digunakan untuk mengakses nilai array.

                        /*
                        * -------------------------- *
                        * [ Jenis-jenis Array ]      *
                        * 1. Array Indexed           *
                        * 2. Array Associative       *
                        * 3. Array Multidimensional  *
                        * -------------------------- *
                        */

                        //  ! [ Array Indexed }
                        // * Indeks array selalu dimulai dari nol (0).

                        // * Contoh:
                        $hobi = [];

                        // * array dapat kita isi dengan tipe data apa saja. Bahkan dicampur juga boleh.

                        // * Contoh:
                        $item = ["Bunga", 123, 39.12, true];

                        // * Untuk menampilkan isi array, kita bisa mengaksesnya melalui indeks.
                        $barang = ["Buku Tulis", "Penghapus", "Spidol"];
                        echo $barang[0] . "<br>";
                        echo $barang[1] . "<br>";
                        echo $barang[2] . "<br>";

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // * Kita juga bisa menampilkan isi array dengan cara meloopingnya.
                        // ? Menampilkan isi array dengan perulangan for
                        for ($i = 0; $i < count($barang); $i++) {
                            echo $barang[$i] . "<br>";
                        }
                        // * Selain for bisa juga menggunakan while & foreach

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // ? Menampilkan isi array dengan perulangan while
                        $i = 0;
                        while ($i < count($barang)) {
                            echo $barang[$i] . "<br>";
                            $i++;
                        }

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // ? Menampilkan isi array dengan perulangan foreach
                        foreach ($barang as $isi) {
                            echo $isi . "<br>";
                        }

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // * Kita bisa menggunakan fungsi print_r() untuk menampilkan array secara mentah (raw).
                        // * Biasanya fungsi ini digunakan untuk debugging.
                        print_r($barang);

                        // ! [ Array Associative ]
                        // * Contoh:
                        $dataPersonal = [
                            "nama" => "Elgin Al-wafi",
                            "nit" => 2223594,
                            "jurusan" => "Rekayasa Perangkat Lunak"
                        ]; // ? "key" = "value"


                        // * Untuk menampilkan Array Associative
                        echo $dataPersonal["nama"] . "<br>";
                        echo $dataPersonal["nit"] . "<br>";
                        echo $dataPersonal["jurusan"] . "<br>";

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // ! [ Array Multidimensional ]
                        // * Contoh:
                        // ? ini adalah array dua dimensi
                        $matriks = [
                            [2, 3, 4],
                            [7, 5, 0],
                            [4, 3, 8],
                        ];

                        // * Untuk menampilkan array multidimensional
                        echo $matriks[1][0] . "<br>"; // Output: 7

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // * Membuat array 2 dimensi yang berisi array asosiatif
                        $dataTaruna = [
                            [
                                "nama" => "Elgin Al-wafi",
                                "nit" => 2223594,
                                "jurusan" => "Rekayasa Perangkat Lunak",
                            ],
                            [
                                "nama" => "Revan Permana",
                                "nit" => 2223610,
                                "jurusan" => "Rekayasa Perangkat Lunak",
                            ],
                            [
                                "nama" => "Deden Ahmad Jammil",
                                "nit" => 2223590,
                                "jurusan" => "Rekayasa Perangkat Lunak",
                            ]
                        ];

                        // * Untuk menampilkan array multidimensional menggunakan foreach   
                        foreach ($dataTaruna as $taruna) {
                            echo "Nama: $taruna[nama]" . "<br>";
                            echo "Nit: $taruna[nit]" . "<br>";
                            echo "Jurusan: $taruna[jurusan]" . "<br>";
                            echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "../templates/footer.php" ?>