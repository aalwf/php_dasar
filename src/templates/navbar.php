<!-- main-header -->
<div class="main-header side-header sticky nav nav-item">
  <div class="container-fluid main-container ">
    <div class="main-header-left ">
      <div class="app-sidebar__toggle mobile-toggle" data-bs-toggle="sidebar">
        <a class="open-toggle" href="javascript:void(0);"><i class="header-icons" data-eva="menu-outline"></i></a>
        <a class="close-toggle" href="javascript:void(0);"><i class="header-icons" data-eva="close-outline"></i></a>
      </div>
      <div class="responsive-logo">
        <a href="index.html" class="header-logo"><img src="/assets/img/brand/logo.png" class="logo-11"></a>
        <a href="index.html" class="header-logo"><img src="/assets/img/brand/logo-white.png" class="logo-1"></a>
      </div>
    </div>
    <button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
    </button>
    <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0  mg-lg-s-auto">
      <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <div class="main-header-right">
          <li class="dropdown nav-item main-layout">
            <a class="new theme-layout nav-link-bg layout-setting">
              <span class="dark-layout"><i class="fe fe-moon"></i></span>
              <span class="light-layout"><i class="fe fe-sun"></i></span>
            </a>
          </li>
          <div class="dropdown main-profile-menu nav nav-item nav-link">
            <a class="profile-user d-flex" href=""><img src="/assets/img/faces/<?= $user['picture']; ?>" alt="user-img" class="rounded-circle mCS_img_loaded object-fit-cover"><span></span></a>

            <div class="dropdown-menu">
              <div class="main-header-profile header-img">
                <div class="main-img-user"><img alt="" src="/assets/img/faces/<?= $user['picture']; ?>"></div>
                <h6><?= $user['username']; ?></h6><span class="text-center"><?= $user['bio']; ?></span>
              </div>
              <a class="dropdown-item" href="/src/pages/profile.php"><i class="far fa-user"></i> My Profile</a>
              <a class="modal-effect dropdown-item text-danger" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8"><i class="fas fa-sign-out-alt"></i>Sign Out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal effects -->
<div class="modal  fade" id="modaldemo8">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-content-demo">
      <div class="modal-header">
        <h6 class="modal-title">Sign Out</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <h6>Apakah anda akan keluar sekarang?</h6>
        <p>semua perubahan yang belum disimpan akan hilang</p>
      </div>
      <div class="modal-footer">
        <a href="/src/auth/logout.php" class="btn ripple btn-danger" type="button">Logout</a>
        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal effects-->
<!-- /main-header -->