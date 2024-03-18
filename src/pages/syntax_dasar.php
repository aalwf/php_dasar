<?php include "../templates/header.php" ?>
<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['syntax_dasar']['color']; ?>">Penjelasan</h1>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="d-flex justify-content-between flex-column my-2">
                    <p>Standar output merujuk pada aliran data yang digunakan oleh program untuk menampilkan informasi kepada pengguna. Biasanya, standar output terhubung dengan perangkat lunak atau lingkungan tempat program dijalankan</p>
                </div>
                <div class="d-flex justify-content-between flex-column">
                    <p class="tx-12 text-muted mb-2 lh-0">Contoh:</p>
                    <ul>
                        <?php foreach ($data['syntax_dasar']['example'] as $row) : ?>
                            <li><?= $row; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
        <div class="card overflow-hiddem review-project">
            <div class="card-body">
                <div class="d-flex justify-content-between flex-column">
                    <h1 class="card-title fs-5 mg-b-10 text-<?= $data['syntax_dasar']['color']; ?>">Pembahasan</h1>
                    <p class="tx-12 text-muted mb-2 lh-0">Standar Output PHP</p>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <ul>
                        <li>echo();</li>
                        <li>print();</li>
                        <li>print_r();</li>
                        <li>var_dump();</li>
                    </ul>
                </div>
                <a href="" class="btn btn-<?= $data['syntax_dasar']['color']; ?> btn-block">Show Details</a>
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
                            <h1 class="card-title fs-5 mg-b-10 text-<?= $data['syntax_dasar']['color']; ?>"><?= $data['syntax_dasar']['title']; ?></h1>
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
                            <p class="card-title text-<?= $data['syntax_dasar']['color']; ?>">Output:</p>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <?php //! ================  Sintaks Dasar PHP ================ //
                        //? --- Standat Output --- ?//

                        /* 
                            * ------------------------------------------------------------------------ *
                            * [ echo & print ]                                                         *
                            * "Sintaks ini berfungsi untuk menampilkan sesuatu ke layar browser,       *
                            *  bisa berupa Teks/String, Variable,                                      *
                            *  dan Type data lainnya."                                                 *
                            * ------------------------------------------------------------------------ *
                            * [ Perbedaan echo & print ]                                               *
                            * "Fungsi (print) hanya boleh diberikan satu parameter saja,               *
                            *  sedangkan (echo) boleh lebih dari satu."                                *    
                            * ------------------------------------------------------------------------ *
                        */

                        // * Contoh echo :
                        echo "hello world!"; // Output => hello world!
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        echo "hello", "world", "!"; // Output => helloworld!
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru

                        // * Contoh print :
                        print "hello world!"; // Output => hello world!
                        echo "<br>"; //? sintaks ini berfungsi untuk membuat baris baru
                        // print("hello", "world", "!"); //! ini akan error

                        /*
                            * ------------------------------------------------------------------------ *
                            * [ print_r ]                                                              *
                            * "print_r ini hanya digunakan untuk debug program,                        *
                            *  biasanya digunakan untuk mengetahui isi dari                            *
                            *  array maupun objek (class)."                                            *
                            * ------------------------------------------------------------------------ *
                        */

                        /*
                            * ------------------------------------------------------------------------ *
                            * [ var_dump ]                                                             *
                            * "sama seperti print_r, var_dump ini digunakan hanya untuk                *
                            *  proses debugging, dimana kita ingin mengetahui                          *
                            *  struktur informasi (nilai dan tipe data)                                *
                            *  dari suatu variabel"                                                    *
                            * ------------------------------------------------------------------------ *
                            * [ Perbedaan var_dump & print_r ]                                         *
                            * "print_r(): Menghasilkan output yang lebih mudah dibaca oleh manusia.    *
                            *  Array dijelaskan secara hierarkis dengan indentasi                      *
                            *  dan struktur yang jelas."                                               *
                            *                                                                          *
                            * "var_dump(): Menghasilkan output yang lebih rinci dan eksplisit.         *
                            *  Menyertakan tipe data dan panjang variabel serta nilai-nilai            *
                            *  dengan tipe data spesifik."                                             *
                            * ------------------------------------------------------------------------ *
                        */

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../templates/footer.php" ?>