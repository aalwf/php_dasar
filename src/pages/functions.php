<?php require_once "../templates/header.php" ?>
<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['functions']['color']; ?>">Penjelasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Function adalah kumpulan instruksi di dalam program yang dapat dipanggil untuk melakukan tugas tertentu. <br><br>Function menerima input atau argumen, melakukan operasi tertentu, dan menghasilkan output atau nilai kembali.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['functions']['color']; ?>">Pembahasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <ul>
                        <?php foreach ($data['functions']['example'] as $row) : ?>
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
                            <h1 class="card-title fs-5 mg-b-10 text-<?= $data['functions']['color']; ?>"><?= $data['functions']['title']; ?></h1>
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
                            <p class="card-title fs-5 text-<?= $data['functions']['color']; ?>">Output:</p>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <?php //! ================  Functions PHP ================ //
                        /* 
                        ? Function adalah blok kode program yang berfungsi untuk
                        ? melakukan sebuah tugas tertentu dan dapat di panggil
                        ? secara berulang
                        */

                        // * Contoh sederhana :
                        // ? Contoh pendeklarasian function
                        function cetak()
                        {
                            echo "Hello World!";
                        }
                        cetak(); // Contoh pemanggilan function

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // * Contoh function dengan parameter :
                        // ? Parameter adalah sebuah variable yang bisa kita kirimkan ke function
                        function sayHello($name /* parameter yang dikirim akan disimpan disini */)
                        {
                            echo "Hello $name"; // variable name yang diambil dari parameter
                        }
                        sayHello("Elgin"); // "Elgin yang ada di dalam kurung adalah nilai parameter yang akan dikirim"

                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // * Contoh built-in functions :
                        // ? built-in function dapat digunakan untuk memanggil function yang sudah dimiliki PHP
                        $waktu_sekarang = date('H:i'); //? date() adalah built-in function
                        echo "Waktu saat ini adalah: " . $waktu_sekarang;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "../templates/footer.php" ?>