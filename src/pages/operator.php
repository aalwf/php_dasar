<?php require_once "../templates/header.php" ?>
<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['operator']['color']; ?>">Penjelasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Operator dalam bahasa pemrograman adalah simbol atau karakter khusus yang digunakan untuk melakukan operasi tertentu pada variabel atau nilai. Operator memungkinkan untuk melakukan berbagai macam tugas seperti penjumlahan, pengurangan, perkalian, pembagian, perbandingan, logika, dan lainnya, tergantung pada jenis operator yang digunakan.</p>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Operator-operator ini digunakan untuk memanipulasi dan memanipulasi data dalam program sehingga dapat melakukan berbagai tugas seperti penghitungan matematika, pengelolaan alur program, dan pengambilan keputusan.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between flex-column">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['operator']['color']; ?>">Pembahasan</h1>
                    <p class="tx-12 text-muted mb-2 lh-0">Standar Output PHP</p>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <ul>
                        <?php foreach ($data['operator']['example'] as $row) : ?>
                            <li><?= $row; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="" class="btn btn-<?= $data['operator']['color']; ?> btn-block">Show Details</a>
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
                            <h1 class="card-title fs-5 mg-b-10 text-<?= $data['operator']['color']; ?>"><?= $data['operator']['title']; ?></h1>
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
                            <p class="card-title text-<?= $data['operator']['color']; ?>">Output:</p>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <?php //! ================  Operator PHP ================ //
                        /*
                        * ------------------------------------------------------ *
                        * [ Operator Aritmatika ]
                        * ( + ) -> operator penjumlahan angka
                        * ( - ) -> operator pengurangan
                        * ( * ) -> operator perkalian
                        * ( / ) -> operator pembagian
                        * ------------------------------------------------------ *
                        * [ Operator String ]
                        * ( . ) -> menggabungkan string
                        * (.= ) -> menggabungkan string
                        * ------------------------------------------------------ *
                        * [ Operator Increment & Decrement ]
                        * ( ++ ) -> increment
                        * ( -- ) -> decrement
                        * Contoh Penggunaan :  $angka++; --$angka;
                        * ------------------------------------------------------ *
                        * [ Operator Penugasan ]
                        * ( += ) -> Contoh : $y += x; sama dengan $y = $y + x;
                        * ( -= ) -> Contoh : $y -= x; sama dengan $y = $y - x;
                        * ( *= ) -> Contoh : $y *= x; sama dengan $y = $y * x;
                        * ( /= ) -> Contoh : $y /= x; sama dengan $y = $y / x;
                        * ( %= ) -> Contoh : $y %= x; sama dengan $y = $y % x;
                        * ------------------------------------------------------ *
                        * [ Operator Perbandingan ]
                        * ( == ) -> Contoh : $y == x;
                        * ( === ) -> Contoh : $y === x;
                        * ( != ) -> Contoh : $y != x;
                        * ( !== ) -> Contoh : $y !== x;
                        * ( > ) -> Contoh : $y > x;
                        * ( < ) -> Contoh : $y < x;
                        * ( >= ) -> Contoh : $y >= x;
                        * ( <= ) -> Contoh : $y <= x;
                        * ------------------------------------------------------ *
                        * [ Operator Logika ]
                        * ( && ) -> Contoh : $y && $x; (and)
                        * ( || ) -> Contoh : $y || $x; (or)
                        * ( ! ) -> Contoh : !($y || $x); (not)
                        * ------------------------------------------------------ *
                        */

                        $x = 10;
                        $y = 5;

                        //? Contoh penggunaan Operator Aritmatika
                        echo $x + $y . " Hasil dari penjumlahan 10 + 5";
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        echo $x - $y . " Hasil dari pengurangan 10 - 5";
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        echo $x * $y . " Hasil dari perkalian 10 x 5";
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        echo $x / $y . " Hasil dari pembagian 10 : 5";
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        echo $x % $y . " Hasil dari sisa pembagian 10 % 5";

                        //? Contoh Penggunaan Operator String
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        echo $x ** $y . " Hasil dari pemangkat 10 ** 5";
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        echo $x++ . " Hasil dari increment 10"; // 11
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        echo $x-- . " Hasil dari decrement 10"; // 10
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        echo ++$x . " Hasil dari increment 10"; // 11
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        echo --$x . " Hasil dari decrement 10"; // 10

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "../templates/footer.php" ?>