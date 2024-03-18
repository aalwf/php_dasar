<?php

// Connects to the database
$db = mysqli_connect('localhost', 'root', '', 'php_dasar');

function query($query)
{
  global $db;
  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function reg($data)
{
  global $db;

  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($db, $data['password']);
  $password2 = mysqli_real_escape_string($db, $data['password2']);
  $pic = 'default.png';
  $bio = 'No bio..';

  if ($password != $password2) {
    echo "
            <script>
                alert('Konfirmasi password salah');
            </script>
        ";
    return false;
  }

  $result = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "
            <script>
                alert('Username sudah terdaftar');
            </script>
        ";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($db, "INSERT INTO users VALUES(NULL, '$username', '$password', '$bio', '$pic');");

  return mysqli_affected_rows($db);
}

function upload()
{

  $namaFile = $_FILES['pic']['name'];
  $ukuranFile = $_FILES['pic']['size'];
  $error = $_FILES['pic']['error'];
  $tmpName = $_FILES['pic']['tmp_name'];

  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'C:\laragon\www\arghh\assets\img\faces\\' . $namaFileBaru);

  return $namaFileBaru;
  // print_r($_FILES['pic']['tmp_name']);
  // die;
}


function changeProfile($data)
{
  global $db;

  $id = $data["id"];
  $username = htmlspecialchars($data["username"]);
  $bio = htmlspecialchars($data["bio"]);
  $old_picture = htmlspecialchars($data["old_picture"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['pic']['error'] === 4) {
    $pic = $old_picture;
  } else {
    $pic = upload();
  }


  $query = "UPDATE users SET
				username = '$username',
        bio = '$bio',
        picture = '$pic'
			  WHERE id = $id
			";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

function getContent($path = '')
{
  // Mendapatkan file json
  $file = file_get_contents("C:\laragon\www\arghh\data.json");

  // Ubah menjadi Array
  $data = json_decode($file, true);

  return $data;
}
