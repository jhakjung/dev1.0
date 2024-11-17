<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
	<meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1>
  <meta name="robots" content="noindex, nofollow">
  <title>
      <?php wp_title(' | ', 'echo', 'right');?>
      <?php bloginfo('name');?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php wp_head();?>
<body <?php body_class();?>>

<div class="container my-4">
    <!-- Row 1: Header with Site Name, Search Bar, and Write Button -->
    <div class="row align-items-center">
        <div class="col-3">
          <h4><a class="fs-3 navbar-brand text-left" href="<?php echo esc_url(site_url('/')); ?>"><?php bloginfo('name');?></a>
          </h4> // 사이트명
        </div>
        <div class="col-6">
            <input type="text" class="form-control" placeholder="Search...">
        </div>
        <div class="col-3 text-end">
            <button class="btn btn-custom">작성</button>
        </div>
    </div>

    <hr>

    <!-- Row 2: Favorite Section -->
    <div class="section-title">즐겨찾기</div>
    <div class="d-flex justify-content-center mb-3 gap-2">
        <button class="btn btn-primary">시험서</button>
        <button class="btn btn-primary">견적서</button>
        <button class="btn btn-primary">실적보고</button>
    </div>

    <hr>

    <!-- Row 3: Issue Section -->
    <div class="section-title">이슈</div>
    <div class="d-flex flex-wrap gap-2 justify-content-center mb-3">
        <button class="btn btn-issue">회의록</button>
        <button class="btn btn-issue">실적보고</button>
        <button class="btn btn-issue">LTE-R</button>
        <button class="btn btn-issue">전파간섭</button>
        <button class="btn btn-issue">#회의록</button>
        <button class="btn btn-issue">#회의록</button>
        <button class="btn btn-issue">#회의록</button>
        <button class="btn btn-issue">#회의록</button>
        <button class="btn btn-issue">#회의록</button>
        <button class="btn btn-issue">보고자료</button>
    </div>

    <hr>

    <!-- Row 4: 성과물 Section with Nested Table -->
    <div class="section-title">성과물</div>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <!-- Box 1 -->
        <div class="col">
            <div class="card h-100">
                <div class="card-header text-center success-bg">
                    <a href="#" class="text-white">01 계약 단계</a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">제안요청서</a></li>
                    <li class="list-group-item"><a href="#">제안서</a></li>
                    <li class="list-group-item"><a href="#">계약서</a></li>
                    <li class="list-group-item"><a href="#">선정통보</a></li>
                </ul>
            </div>
        </div>

        <!-- Box 2 -->
        <div class="col">
            <div class="card h-100">
                <div class="card-header text-center success-bg">
                    <a href="#" class="text-white">02 착수 단계</a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">착수제</a></li>
                    <li class="list-group-item"><a href="#">착수회의회의록</a></li>
                    <li class="list-group-item"><a href="#">품질경영계획서</a></li>
                    <li class="list-group-item"><a href="#">공정일정계획서</a></li>
                    <li class="list-group-item"><a href="#">교육계획서</a></li>
                    <li class="list-group-item"><a href="#">계약자정보제출</a></li>
                </ul>
            </div>
        </div>

        <!-- Additional Boxes (Box 3 to Box 12) -->
        <!-- Repeat similar structure for each additional box, changing title and items accordingly -->
    </div>

    <hr>

    <!-- Row 5: Footer -->
    <div class="footer">
        &copy; Company
    </div>
  </div>



  <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left">
        <a href="<?php echo site_url(); ?>"><strong>위례선(트램)</strong></a>
      </h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <?php
wp_nav_menu(array(
    'theme_loacation' => 'headerMenuLocation',
))?>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>