<?php $data = getContent("sidebar"); ?>

<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<div class="sticky">
  <aside class="app-sidebar sidebar-scroll pb-3">
    <div class="main-sidebar-header active">
      <a class="desktop-logo logo-light active" href="index.html"><img src="/assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
      <a class="desktop-logo logo-dark active" href="index.html"><img src="/assets/img/brand/logo-white.png" class="main-logo" alt="logo"></a>
      <a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="/assets/img/brand/favicon.png" alt="logo"></a>
      <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="/assets/img/brand/favicon-white.png" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
      <div class="main-sidebar-loggedin">
        <div class="app-sidebar__user">
          <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
              <img src="/assets/img/faces/<?= $user['picture']; ?>" alt="user-img" class="rounded-circle mCS_img_loaded object-fit-cover" width="200" height="200">
            </div>
            <div class="user-info">
              <h6 class=" mb-0 text-dark"><?= $user['username']; ?></h6>
              <span class="text-muted app-sidebar__user-name text-sm"><?= $user['bio']; ?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="sidebar-navs">
        <ul class="nav  nav-pills-circle">
          <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="instagram" aria-describedby="tooltip365540">
            <a class="nav-link text-center m-2" href="https://instagram.com/_si.alwf">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="facebook" aria-describedby="tooltip143427">
            <a class="nav-link text-center m-2" href="https://www.facebook.com/elgin.elgin.3114">
              <i class="fab fa-facebook"></i> </a>
          </li>
          <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="github">
            <a class="nav-link text-center m-2" href="https://github.com/aalwf">
              <i class="fab fa-github"></i>
            </a>
          </li>
          <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="telegram">
            <a class="nav-link text-center m-2" href="https://t.me/alwwwf">
              <i class="fab fa-telegram"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
          <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
        </svg></div>
      <ul class="side-menu">
        <li class="slide">
          <a class="side-menu__item" href="/index.php" data-bs-toggle="slide"><i class="side-menu__icon fa fa-home"></i><span class="side-menu__label">Home</span></a>
        </li>
        <li class="slide">
          <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fa fa-spinner"></i><span class="side-menu__label">Output</span><i class="angle fe fe-chevron-down"></i></a>
          <ul class="slide-menu">
            <?php foreach ($data as $row) : ?>
              <li><a class="slide-item" href="/src/pages/<?= $row['link']; ?>"><?= $row['title']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
      </ul>

      <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
          <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
        </svg></div>
    </div>
  </aside>
</div>
<!-- main-sidebar -->