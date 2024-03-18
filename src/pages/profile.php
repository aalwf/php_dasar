<?php

session_start();
include "../functions.php";

$id = $_SESSION['id'];

if (isset($_POST["submit"])) {

  if (changeProfile($_POST) > 0) {
    echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = '/index.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = '/index.php';
			</script>
		";
  }
}


?>

<?php require_once "../templates/header.php" ?>
<div class="row row-sm ">
  <div class="col-xl-8 col-lg-12 col-sm-12 mx-auto">
    <div class="card overflow-hidden">
      <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
        <div class="d-flex justify-content-between">
          <h4 class="card-title mg-b-10">Your Profile</h4>
          <i class="mdi mdi-dots-horizontal text-gray"></i>
        </div>
        <p class="tx-12 text-muted mb-2 lh-0">Your Personal Profile</p>
      </div>
      <div class="card-body pd-y-7">
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="old_picture" value="<?= $user["picture"]; ?>">
          <div class="row">
            <div class="col-3 main-profile-overview d-flex justify-content-between mt-1">
              <div class="main-img-user profile-user">
                <input type="hidden" name="id" value="<?= $user["id"]; ?>">
                <img alt="" src="/assets/img/faces/<?= $user['picture']; ?>">
                <label for="pic" class="profile-edit fas fa-camera" style="cursor:pointer"></label>
                <input type="file" name="pic" id="pic" id="edit-profile" hidden></input>
                </i>
              </div>
            </div>
            <div class="col-9">
              <div class="form-outline mb-4">
                <label class="form-label" for="username">Username:</label>
                <input class="form-control" type="text" value="<?= $user['username']; ?>" id="username" name="username">
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="bio">Bio:</label>
                <textarea class="form-control" type="text" id="bio" name="bio" rows="3"><?= $user['bio']; ?></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-2" name="submit">Submit Change</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require_once "../templates/footer.php" ?>