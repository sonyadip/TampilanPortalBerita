<!DOCTYPE html>
<html id="top" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--  Boostrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    {{-- Google Fonts --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Aleo:wght@300&family=Open+Sans:wght@500&family=Montserrat:wght@800;900&family=Raleway:wght@850&family=Source+Serif+4:wght@200;300&family=Spectral:wght@200&family=Volkhov&family=Work+Sans:wght@800&family=Zilla+Slab:wght@300&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="kategori pembungkus">


        <div id="header-mobile" class="row px-3 mb-1">
            <div class="container-fluid">
                {{-- Tanggal, Icon Media Sosial --}}
                <div class="col pt-2 pb-2 text-black">
                    <div class="date-top">
                        <div class="d-flex flex-row justify-content-between">
                            <span>SELASA, 22 MARET 2022</span>
                            <div class="d-flex flex-row">
                                <i class="bi bi-facebook mx-1"></i>
                                <i class="bi bi-instagram mx-1"></i>
                                <i class="bi bi-twitter mx-1"></i>
                                <i class="bi bi-youtube mx-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Garis --}}
                <div class="line-top bg-dark">
                </div>
            </div>
        </div>

        {{-- Nama Portal Berita --}}
        <div id="header-mobile" class="judul" style="text-align: center">
            <h1 class="fw-bold">Portal Berita</h1>
        </div>

        {{-- Navbar Start Mobile --}}
        <div id="navbar-mobile" class="sticky-top ">
            <nav style="background-color: #111111!important" class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-white navbar-toggler-icon "></span>
                    </button>
                    {{-- <a class="navbar-brand" href="#"> --}}

                    <div class="btn-group search">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i style="color: white" class="bi bi-search"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <div style="width: 350px;" class="dropdown-item">
                                    <form class="d-flex">
                                        <input style="border-radius: 0px !important; box-shadow:none !important"
                                            class="form-control form-control-sm" type="search" placeholder="Search"
                                            aria-label="Search" autofocus>
                                        <a href="">
                                            <div type="submit" class="post-comment">
                                                <span>Cari</span>
                                            </div>
                                        </a>
                                        {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- </a> --}}

                    <div class="collapse navbar-collapse navbar-custom" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" style="color:#e05560" aria-current="page" href="#">Terkini</a>
                            <a class="nav-link" style="color:#ffffff" aria-current="page" href="#">Politik</a>
                            <a class="nav-link" style="color:#e05560" aria-current="page" href="#">Ekonomi</a>
                            <a class="nav-link" style="color:#ffffff" aria-current="page" href="#">Lingkungan</a>
                            <a class="nav-link" style="color:#ffffff" aria-current="page" href="#">Musik</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        {{-- Navbar End --}}

        <div class="row px-3">
            <div class="container-fluid">
                <div id="desktop" class="">
                    {{-- Tanggal, Icon Media Sosial --}}
                    <div class="col pt-2 pb-2 text-black">
                        <div class="date-top">
                            <div class="d-flex flex-row justify-content-between">
                                <span>SELASA, 22 MARET 2022</span>
                                <div class="d-flex flex-row">
                                    <i class="bi bi-facebook mx-2"></i>
                                    <i class="bi bi-instagram mx-2"></i>
                                    <i class="bi bi-twitter mx-2"></i>
                                    <i class="bi bi-youtube mx-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Garis --}}
                    <div class="line-top bg-dark">
                    </div>

                    {{-- Nama Portal Berita --}}
                    <div class="judul" style="text-align: center">
                        <h1 class="fw-bold">Portal Berita</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- Navbar Start Desktop --}}
        <div id="navbar-desktop" class="sticky-top">
            <nav style="padding-left: 54px !important; padding-right: 27px !important;"
                class="navbar navbar-expand navbar-light  p-0 ps-4 bg-white sticky-top">
                <div class="collapse navbar-collapse">
                    {{-- <ul class="navbar-nav me-auto ms-auto ps-4 mb-2 mb-lg-0 mb-md-0 navbar-custom">
                        <div class="ms-1 col-4 home">
                            <li class="nav-item">
                                <a class="nav-link" onmouseover="this.style='color:#e05560;'"
                                    onmouseout="this.style='color:#e05560';" style="color:#e05560" aria-current="page"
                                    href="#">Terkini</a>
                            </li>
                        </div>
                        <div class="col-4 community">
                            <li class="nav-item dropdown">
                                <a onmouseover="this.style='color:#e05560;'" onmouseout="this.style='color:black;'"
                                    style="color:black" class="nav-link dropdown-toggle penghover" id="button-menu"
                                    href="Tenklee/kategori" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Lingkungan
                                </a>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu mt-0 megamind p-0 megamind-content megamind-content-community bg-light"
                                    aria-labelledby="navbarDropdown" style="
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;
                                    ">
                                    <div class="container bg-light">
                                        <div class="row">
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/28-696x457.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> Artist
                                                        Creates Haunting Ode to Women Who Have Gone Missing
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/28-696x457.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> Artist
                                                        Creates Haunting Ode to Women Who Have Gone Missing
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/28-696x457.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> Artist
                                                        Creates Haunting Ode to Women Who Have Gone Missing
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/28-696x457.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> Artist
                                                        Creates Haunting Ode to Women Who Have Gone Missing
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/28-696x457.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> Artist
                                                        Creates Haunting Ode to Women Who Have Gone Missing
                                                    </H1>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col-4 business">
                            <li class="nav-item dropdown">
                                <a onmouseover="this.style='color:#e05560;'" onmouseout="this.style='color:black; '"
                                    style="color:black" class="nav-link dropdown-toggle penghover" id="button-menu"
                                    href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Politik
                                </a>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu mt-0 megamind p-0 megamind-content megamind-content-business bg-light"
                                    aria-labelledby="navbarDropdown" style="
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;
                                    ">
                                    <div class="container bg-light">
                                        <div class="row">
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/47-696x385.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> Authorities Seeking Expanded
                                                        Education for Student Program
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/47-696x385.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> Authorities Seeking Expanded
                                                        Education for Student Program
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/47-696x385.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> Authorities Seeking Expanded
                                                        Education for Student Program
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/47-696x385.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> Authorities Seeking Expanded
                                                        Education for Student Program
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/47-696x385.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> Authorities Seeking Expanded
                                                        Education for Student Program
                                                    </H1>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col-4 lifestyle">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle penghover" onmouseover="this.style='color:#e05560;'"
                                    onmouseout="this.style='color:black';" style="color:black" id="button-menu" href="#"
                                    id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Sports
                                </a>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu mt-0 megamind p-0 megamind-content megamind-content-lifestyle bg-light"
                                    aria-labelledby="navbarDropdown" style="
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;
                                    ">
                                    <div class="container bg-light">
                                        <div class="row">
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/41-534x462.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> The First Muslim Musician Still
                                                        Remains Just a Forgotten Pioneer
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/41-534x462.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> The First Muslim Musician Still
                                                        Remains Just a Forgotten Pioneer
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/41-534x462.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> The First Muslim Musician Still
                                                        Remains Just a Forgotten Pioneer
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/41-534x462.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> The First Muslim Musician Still
                                                        Remains Just a Forgotten Pioneer
                                                    </H1>
                                                </a>
                                            </div>
                                            <div class="col-lg-15 col-xs-15 py-3 ">
                                                <a class="gambar-kiri" href="#">
                                                    <img src="https://demo.tagdiv.com/newspaper_week/wp-content/uploads/2018/01/41-534x462.jpg"
                                                        class="card-img-top title-gambar mt-1" alt="...">
                                                </a>
                                                <a href="#">
                                                    <H1 class="title-judul-megamind mt-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:black';" color: #111111;
                                                        style="color: #111111"> The First Muslim Musician Still
                                                        Remains Just a Forgotten Pioneer
                                                    </H1>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col-4 more">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle penghover" onmouseover="this.style='color:#e05560;'"
                                    onmouseout="this.style='color:black';" style="color:black" id="button-menu" href="#"
                                    id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    More
                                </a>
                                <ul class="dropdown-menu megamind megamind-content"
                                    aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item fw-bold" onmouseover="this.style='color:#e05560;'"
                                            onmouseout="this.style='color:#111111';" href="#">Careers</a></li>
                                    <li><a class="dropdown-item fw-bold" onmouseover="this.style='color:#e05560;'"
                                            onmouseout="this.style='color:#111111';" href="#">education</a></li>
                                </ul>
                            </li>
                        </div>

                    </ul> --}}
                    <ul class="navbar-nav me-auto ms-auto ps-2 mb-2 mb-lg-0 mb-md-0 navbar-custom">
                        <li class="nav-item dropdown has-megamenu">
                            <a class="nav-link dropdown-toggle penghover" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"> Terkini </a>
                            <div class="dropdown-menu megamenu penghover " role="menu" data-bs-popper="none">
                                <div class="container">
                                    <div class="row g-3">
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/6243fc3e5cf35c00949046b0/lede/1648624569331-gettyimages-860643214.jpeg?crop=1xw:0.843xh;0xw,0.1167xh&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Beli Ganja Malah Dapat Seledri, Lelaki di
                                                    Palembang dengan Polosnya Lapor Polisi
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/6243fc3e5cf35c00949046b0/lede/1648624569331-gettyimages-860643214.jpeg?crop=1xw:0.843xh;0xw,0.1167xh&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Beli Ganja Malah Dapat Seledri, Lelaki di
                                                    Palembang dengan Polosnya Lapor Polisi
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/6243fc3e5cf35c00949046b0/lede/1648624569331-gettyimages-860643214.jpeg?crop=1xw:0.843xh;0xw,0.1167xh&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Beli Ganja Malah Dapat Seledri, Lelaki di
                                                    Palembang dengan Polosnya Lapor Polisi
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/6243fc3e5cf35c00949046b0/lede/1648624569331-gettyimages-860643214.jpeg?crop=1xw:0.843xh;0xw,0.1167xh&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Beli Ganja Malah Dapat Seledri, Lelaki di
                                                    Palembang dengan Polosnya Lapor Polisi
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/6243fc3e5cf35c00949046b0/lede/1648624569331-gettyimages-860643214.jpeg?crop=1xw:0.843xh;0xw,0.1167xh&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Beli Ganja Malah Dapat Seledri, Lelaki di
                                                    Palembang dengan Polosnya Lapor Polisi
                                                </H1>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div> <!-- dropdown-mega-menu.// -->
                        </li>
                        <li class="nav-item dropdown has-megamenu">
                            <a class="nav-link dropdown-toggle penghover" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"> Politik </a>
                            <div class="dropdown-menu megamenu penghover " role="menu" data-bs-popper="none">
                                <div class="container">
                                    <div class="row g-3">
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/62319b13a15766009c5a273b/lede/1647420961294-gettyimages-1231531416.jpeg?crop=1xw:0.8404xh;0xw,0xh&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Ditanya Bukti Publik Dukung Penundaan Pemilu
                                                    2024, Luhut Tolak Buka 'Big Data'-nya
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/62319b13a15766009c5a273b/lede/1647420961294-gettyimages-1231531416.jpeg?crop=1xw:0.8404xh;0xw,0xh&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Ditanya Bukti Publik Dukung Penundaan Pemilu
                                                    2024, Luhut Tolak Buka 'Big Data'-nya
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/62319b13a15766009c5a273b/lede/1647420961294-gettyimages-1231531416.jpeg?crop=1xw:0.8404xh;0xw,0xh&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Ditanya Bukti Publik Dukung Penundaan Pemilu
                                                    2024, Luhut Tolak Buka 'Big Data'-nya
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/62319b13a15766009c5a273b/lede/1647420961294-gettyimages-1231531416.jpeg?crop=1xw:0.8404xh;0xw,0xh&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Ditanya Bukti Publik Dukung Penundaan Pemilu
                                                    2024, Luhut Tolak Buka 'Big Data'-nya
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/62319b13a15766009c5a273b/lede/1647420961294-gettyimages-1231531416.jpeg?crop=1xw:0.8404xh;0xw,0xh&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Ditanya Bukti Publik Dukung Penundaan Pemilu
                                                    2024, Luhut Tolak Buka 'Big Data'-nya
                                                </H1>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div> <!-- dropdown-mega-menu.// -->
                        </li>
                        <li class="nav-item dropdown has-megamenu">
                            <a class="nav-link dropdown-toggle penghover" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"> Ekonomi </a>
                            <div class="dropdown-menu megamenu penghover " role="menu" data-bs-popper="none">
                                <div class="container">
                                    <div class="row g-3">
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/6229d76012f04e009afad14a/lede/1646910075491-gettyimages-1238852436.jpeg?crop=1xw:0.8429xh;0xw,0.0382xh&resize=500:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Sanksi Ekonomi Berdampak, Turis Rusia di Bali
                                                    Bokek Tak Bisa Tarik Tunai dari ATM
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/6229d76012f04e009afad14a/lede/1646910075491-gettyimages-1238852436.jpeg?crop=1xw:0.8429xh;0xw,0.0382xh&resize=500:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Sanksi Ekonomi Berdampak, Turis Rusia di Bali
                                                    Bokek Tak Bisa Tarik Tunai dari ATM
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/6229d76012f04e009afad14a/lede/1646910075491-gettyimages-1238852436.jpeg?crop=1xw:0.8429xh;0xw,0.0382xh&resize=500:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Sanksi Ekonomi Berdampak, Turis Rusia di Bali
                                                    Bokek Tak Bisa Tarik Tunai dari ATM
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/6229d76012f04e009afad14a/lede/1646910075491-gettyimages-1238852436.jpeg?crop=1xw:0.8429xh;0xw,0.0382xh&resize=500:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Sanksi Ekonomi Berdampak, Turis Rusia di Bali
                                                    Bokek Tak Bisa Tarik Tunai dari ATM
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/6229d76012f04e009afad14a/lede/1646910075491-gettyimages-1238852436.jpeg?crop=1xw:0.8429xh;0xw,0.0382xh&resize=500:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Sanksi Ekonomi Berdampak, Turis Rusia di Bali
                                                    Bokek Tak Bisa Tarik Tunai dari ATM
                                                </H1>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div> <!-- dropdown-mega-menu.// -->
                        </li>
                        <li class="nav-item dropdown has-megamenu">
                            <a class="nav-link dropdown-toggle penghover" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"> Lingkungan </a>
                            <div class="dropdown-menu megamenu penghover " role="menu" data-bs-popper="none">
                                <div class="container">
                                    <div class="row g-3">
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/61fb93923d9558009df8e649/lede/1643877640217-bitel-4.jpeg?crop=1xw:0.843850053361793xh;center,center&resize=900:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Perjalanan Bitel: Sosok 'Gila' yang Gigih
                                                    Menghijaukan Pesisir Aceh
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/61fb93923d9558009df8e649/lede/1643877640217-bitel-4.jpeg?crop=1xw:0.843850053361793xh;center,center&resize=900:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Perjalanan Bitel: Sosok 'Gila' yang Gigih
                                                    Menghijaukan Pesisir Aceh
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/61fb93923d9558009df8e649/lede/1643877640217-bitel-4.jpeg?crop=1xw:0.843850053361793xh;center,center&resize=900:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Perjalanan Bitel: Sosok 'Gila' yang Gigih
                                                    Menghijaukan Pesisir Aceh
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/61fb93923d9558009df8e649/lede/1643877640217-bitel-4.jpeg?crop=1xw:0.843850053361793xh;center,center&resize=900:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Perjalanan Bitel: Sosok 'Gila' yang Gigih
                                                    Menghijaukan Pesisir Aceh
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/61fb93923d9558009df8e649/lede/1643877640217-bitel-4.jpeg?crop=1xw:0.843850053361793xh;center,center&resize=900:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Perjalanan Bitel: Sosok 'Gila' yang Gigih
                                                    Menghijaukan Pesisir Aceh
                                                </H1>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div> <!-- dropdown-mega-menu.// -->
                        </li>
                        <li class="nav-item dropdown has-megamenu">
                            <a class="nav-link dropdown-toggle penghover" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"> Musik </a>
                            <div class="dropdown-menu megamenu penghover " role="menu" data-bs-popper="none">
                                <div class="container">
                                    <div class="row g-3">
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/61f1333660250b009a8e6acf/lede/1643197299026-new-project-20.png?crop=1xw:1xh;center,center&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Promotor Festival Emo 'When We Were Young'
                                                    Marak Dituding Menipu Publik
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/61f1333660250b009a8e6acf/lede/1643197299026-new-project-20.png?crop=1xw:1xh;center,center&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Promotor Festival Emo 'When We Were Young'
                                                    Marak Dituding Menipu Publik
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/61f1333660250b009a8e6acf/lede/1643197299026-new-project-20.png?crop=1xw:1xh;center,center&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Promotor Festival Emo 'When We Were Young'
                                                    Marak Dituding Menipu Publik
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/61f1333660250b009a8e6acf/lede/1643197299026-new-project-20.png?crop=1xw:1xh;center,center&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Promotor Festival Emo 'When We Were Young'
                                                    Marak Dituding Menipu Publik
                                                </H1>
                                            </a>
                                        </div>
                                        <div class="col-lg-15 col-xs-15 py-3 ">
                                            <a class="gambar-kiri" href="#">
                                                <img src="https://video-images.vice.com/articles/61f1333660250b009a8e6acf/lede/1643197299026-new-project-20.png?crop=1xw:1xh;center,center&resize=442:*"
                                                    class="card-img-top title-gambar mt-1" alt="...">
                                            </a>
                                            <a href="#">
                                                <H1 class="title-judul-megamind mt-2"
                                                    onmouseover="this.style='color:#e05560;'"
                                                    onmouseout="this.style='color:black';" color: #111111;
                                                    style="color: #111111">Promotor Festival Emo 'When We Were Young'
                                                    Marak Dituding Menipu Publik
                                                </H1>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div> <!-- dropdown-mega-menu.// -->
                        </li>
                    </ul>
                    <div class="btn-group search">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i style="color: black" class="bi bi-search"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <div style="width: 350px;" class="dropdown-item">
                                    <form class="d-flex">
                                        <input style="border-radius: 0px !important; box-shadow:none !important"
                                            class="form-control form-control-sm" type="search" placeholder="Search"
                                            aria-label="Search" autofocus>
                                        <a href="">
                                            <div type="submit" class="post-comment">
                                                <span>Cari</span>
                                            </div>
                                        </a>
                                        {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            {{-- Garis --}}
            <div class="line-mid bg-dark mx-3 sticky-top">
            </div>

            {{-- Navbar End --}}





        </div>

        <div class="row px-3">
            <div class="container-fluid">
                {{-- Isi Berita --}}
                <div class="container px-5">
                    <div class="detail kategori">
                        <div class="row berita-tengah">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-lg-12 kiri">
                                        <div class="link-kategori pt-4">
                                            <span>
                                                <a style="color: #c3c3c3;" onmouseover="this.style='color:#777777;'"
                                                    onmouseout="this.style='color:#c3c3c3';" href="#">
                                                    Beranda
                                                </a>
                                                >
                                                <span>
                                                    <a style="color: #c3c3c3;" onmouseover="this.style='color:#777777;'"
                                                        onmouseout="this.style='color:#c3c3c3';" style="color: #c3c3c3;"
                                                        href="##">
                                                        Ekonomi
                                                    </a>

                                                </span>
                                                <p class="title-judul pt-2">
                                                    EKONOMI
                                                </p>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-bottom:2.4rem !important" class="image1">
            <a class="card img-hover-zoom  text-white " href="#">
                <img src="https://video-images.vice.com/articles/623af76a5cf35c00948cdc29/lede/1648034563712-gettyimages-1239054238.jpeg?crop=1xw:0.8427xh;0xw,0.0182xh&resize=500:*"
                    class="card-img-top title-gambar-detail " alt="...">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <H1 class="title-judul mt-3 mb-3 ps-3" style="color: white;">
                        Minyak Goreng Langka Menurut Polisi Bukan Karena Mafia, Tapi Ulah 'Pedagang Dadakan'
                    </H1>
                    <p class="title-penulis ps-3" style="color:white">Arif Saifudin</p>
                </div>
            </a>
        </div>

        <div class="row px-3">
            <div class="container-fluid">
                {{-- Isi Berita --}}
                <div class="container px-5">
                    <div class="detail">
                        <div class="row mb-3 berita-tengah">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-lg-12 kiri">
                                        <div class="row berita-tengah-2 mb-4">
                                            <div class="col-12 mx-0">
                                                <div style="border: none" class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-4 col-md-6">
                                                            <img src="https://video-images.vice.com/test-uploads/articles/5e9017b3cf9290009c38f736/lede/1586501631284-Untitled-design-21.jpeg?crop=1xw:1xh;center,center&resize=442:*"
                                                                class="card-img-top title-gambar mt-2" alt="...">
                                                            {{-- <img src="..." class="img-fluid rounded-start" alt="..."> --}}
                                                        </div>
                                                        <div class="col-8 col-md-6">
                                                            <div class="card-body ms-3">
                                                                <a href="#">
                                                                    <H1 class="title-judul mb-3"
                                                                        onmouseover="this.style='color:#e05560;'"
                                                                        onmouseout="this.style='color:#111111';"
                                                                        style="color: #111111;">
                                                                        Begini Skenario Krisis Ekonomi yang Mengancam Indonesia Akibat Pandemi Covid-19
                                                                    </H1>
                                                                </a>
                                                                <p class="title-penulis kategori">
                                                                    <a id="mobile-title" href="##"
                                                                        onmouseover="this.style='color:#4d4d4d;'"
                                                                        onmouseout="this.style='color:black';"
                                                                        style="color:black">Udin Suyono</a>
                                                                </p>

                                                                <div id="mobile-title" class="title-isi mt-3">
                                                                    <span>
                                                                        Menurut pengamat ekonomi, krisis keuangan telah terjadi, namun ketidakpastian kapan berakhirnya wabah semakin memperbesar peluang terjadinya krisis.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row berita-tengah-2 mb-4">
                                            <div class="col-12 mx-0">
                                                <div style="border: none" class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-4 col-md-6">
                                                            <img src="https://video-images.vice.com/test-uploads/articles/5e9017b3cf9290009c38f736/lede/1586501631284-Untitled-design-21.jpeg?crop=1xw:1xh;center,center&resize=442:*"
                                                                class="card-img-top title-gambar mt-2" alt="...">
                                                            {{-- <img src="..." class="img-fluid rounded-start" alt="..."> --}}
                                                        </div>
                                                        <div class="col-8 col-md-6">
                                                            <div class="card-body ms-3">
                                                                <a href="#">
                                                                    <H1 class="title-judul mb-3"
                                                                        onmouseover="this.style='color:#e05560;'"
                                                                        onmouseout="this.style='color:#111111';"
                                                                        style="color: #111111;">
                                                                        Begini Skenario Krisis Ekonomi yang Mengancam Indonesia Akibat Pandemi Covid-19
                                                                    </H1>
                                                                </a>
                                                                <p class="title-penulis kategori">
                                                                    <a id="mobile-title" href="##"
                                                                        onmouseover="this.style='color:#4d4d4d;'"
                                                                        onmouseout="this.style='color:black';"
                                                                        style="color:black">Udin Suyono</a>
                                                                </p>

                                                                <div id="mobile-title" class="title-isi mt-3">
                                                                    <span>
                                                                        Menurut pengamat ekonomi, krisis keuangan telah terjadi, namun ketidakpastian kapan berakhirnya wabah semakin memperbesar peluang terjadinya krisis.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row berita-tengah-2 mb-4">
                                            <div class="col-12 mx-0">
                                                <div style="border: none" class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-4 col-md-6">
                                                            <img src="https://video-images.vice.com/test-uploads/articles/5e9017b3cf9290009c38f736/lede/1586501631284-Untitled-design-21.jpeg?crop=1xw:1xh;center,center&resize=442:*"
                                                                class="card-img-top title-gambar mt-2" alt="...">
                                                            {{-- <img src="..." class="img-fluid rounded-start" alt="..."> --}}
                                                        </div>
                                                        <div class="col-8 col-md-6">
                                                            <div class="card-body ms-3">
                                                                <a href="#">
                                                                    <H1 class="title-judul mb-3"
                                                                        onmouseover="this.style='color:#e05560;'"
                                                                        onmouseout="this.style='color:#111111';"
                                                                        style="color: #111111;">
                                                                        Begini Skenario Krisis Ekonomi yang Mengancam Indonesia Akibat Pandemi Covid-19
                                                                    </H1>
                                                                </a>
                                                                <p class="title-penulis kategori">
                                                                    <a id="mobile-title" href="##"
                                                                        onmouseover="this.style='color:#4d4d4d;'"
                                                                        onmouseout="this.style='color:black';"
                                                                        style="color:black">Udin Suyono</a>
                                                                </p>

                                                                <div id="mobile-title" class="title-isi mt-3">
                                                                    <span>
                                                                        Menurut pengamat ekonomi, krisis keuangan telah terjadi, namun ketidakpastian kapan berakhirnya wabah semakin memperbesar peluang terjadinya krisis.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row berita-tengah-2 mb-4">
                                            <div class="col-12 mx-0">
                                                <div style="border: none" class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-4 col-md-6">
                                                            <img src="https://video-images.vice.com/test-uploads/articles/5e9017b3cf9290009c38f736/lede/1586501631284-Untitled-design-21.jpeg?crop=1xw:1xh;center,center&resize=442:*"
                                                                class="card-img-top title-gambar mt-2" alt="...">
                                                            {{-- <img src="..." class="img-fluid rounded-start" alt="..."> --}}
                                                        </div>
                                                        <div class="col-8 col-md-6">
                                                            <div class="card-body ms-3">
                                                                <a href="#">
                                                                    <H1 class="title-judul mb-3"
                                                                        onmouseover="this.style='color:#e05560;'"
                                                                        onmouseout="this.style='color:#111111';"
                                                                        style="color: #111111;">
                                                                        Begini Skenario Krisis Ekonomi yang Mengancam Indonesia Akibat Pandemi Covid-19
                                                                    </H1>
                                                                </a>
                                                                <p class="title-penulis kategori">
                                                                    <a id="mobile-title" href="##"
                                                                        onmouseover="this.style='color:#4d4d4d;'"
                                                                        onmouseout="this.style='color:black';"
                                                                        style="color:black">Udin Suyono</a>
                                                                </p>

                                                                <div id="mobile-title" class="title-isi mt-3">
                                                                    <span>
                                                                        Menurut pengamat ekonomi, krisis keuangan telah terjadi, namun ketidakpastian kapan berakhirnya wabah semakin memperbesar peluang terjadinya krisis.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row footer g-0" style="background-color:#111111">
            <div class="col-12 col-lg-4 col-md-4 footer1">
                <div class="row">
                    <div class="col" style="margin-left:20px;margin-right:20px !important">
                        <div class=" mt-3" style="text-align: left">
                            <div class="footer-1">
                                <h1 class="fw-bold text-white footer-1">Portal Berita</h1>
                            </div>
                            <p style="margin-top: 25px" class="title-footer-1">
                                Portal merupakan situs web berita yang uvuvevweonyotewwvwe otoeudfdbhkfvgbkb vyfijefiyw
                                erowrwenier hwerjkwehiurdeffe tkjwretuiewkjtbe rtkjtjert rtkjertiurj3 reriutwhj
                            </p>
                            <p class="title-footer-1 py-1 mb-4">
                                Kontak Kami:
                                <a style="color:#e05560 " href="#"
                                    onmouseover="this.style='color:#e05560; text-decoration: underline;'"
                                    onmouseout="this.style='color:#e05560';">
                                    portalberita@gmail.com</a>
                            </p>
                            <div class="col pt-3">
                                <div class="row media-sosial-bawah">
                                    <div style="margin-left: -7px" class="col-8 col-lg-6 mb-5">
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-6 media-sosial-bawah-2">
                                                        <div class="row justify-content-center">
                                                            <a class="border border-1 border-medsos" href="#"
                                                                onmouseover="this.style='background-color:#e05560;'"
                                                                onmouseout="this.style='background-color:#181818';"
                                                                style="border-color:#140405; background-color: #181818;">
                                                                <div style="padding-top: 5px; padding-bottom:6px"
                                                                    class="col-12 text-center ">
                                                                    <i
                                                                        class="bi bi-facebook text-white ukuran-medsos"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 media-sosial-bawah-2">
                                                        <div class="row justify-content-center">
                                                            <a class="border border-1 border-medsos" href="#"
                                                                onmouseover="this.style='background-color:#e05560;'"
                                                                onmouseout="this.style='background-color:#181818';"
                                                                style="border-color:#e05560; background-color: #181818;">
                                                                <div style="padding-top: 5px; padding-bottom:6px"
                                                                    class="col-12 text-center  ">
                                                                    <i
                                                                        class="bi bi-instagram text-white ukuran-medsos"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-6 media-sosial-bawah-2">
                                                        <div class="row justify-content-center">
                                                            <a class="border border-1 border-medsos"
                                                                class="" href="#"
                                                                onmouseover="this.style='background-color:#e05560;'"
                                                                onmouseout="this.style='background-color:#181818';"
                                                                style="border-color:#e05560; background-color: #181818;">
                                                                <div style="padding-top: 5px; padding-bottom:6px"
                                                                    class="col-12 text-center  ">
                                                                    <i
                                                                        class="bi bi-twitter text-white ukuran-medsos"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 media-sosial-bawah-2">
                                                        <div class="row justify-content-center">
                                                            <a class="border border-1 border-medsos" href="#"
                                                                onmouseover="this.style='background-color:#e05560;'"
                                                                onmouseout="this.style='background-color:#181818';"
                                                                style="border-color:#e05560; background-color: #181818;">
                                                                <div style="padding-top: 5px; padding-bottom:6px"
                                                                    class="col-12 text-center  ">
                                                                    <i
                                                                        class="bi bi-youtube text-white ukuran-medsos"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-4 footer2">
                <div class="row">
                    <div style="margin-left:20px;margin-right:20px" class="col">
                        <div class="row berita-tengah-2 pt-2">
                            <div class="mb-4" style="text-align: left">
                                <span class="footer-judul-2 text-white">BERITA POPULER</span>
                            </div>
                            <div class="col">
                                <div style="border: none;background-color:#111111" class="card">
                                    <div class="row g-0">
                                        <div class="col-4 col-md-4 col-lg-3">
                                            <img src="https://video-images.vice.com/articles/61f1333660250b009a8e6acf/lede/1643197299026-new-project-20.png?crop=1xw:1xh;center,center&resize=442:*"
                                                class="card-img-top title-gambar mt-2" alt="...">
                                        </div>
                                        <div class="col-8 col-md-8 col-lg-9">
                                            <div class="card-body pt-1">
                                                <a href="#">
                                                    <H1 class="footer-isi-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:#e2e2e2';">
                                                        Promotor Festival Emo 'When We Were Young' Marak Dituding Menipu
                                                        Publik </H1>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row berita-tengah-2">
                            <div class="col">
                                <div style="border: none;background-color:#111111" class="card">
                                    <div class="row g-0">
                                        <div class="col-4 col-md-4 col-lg-3">
                                            <img src="https://video-images.vice.com/articles/61f1333660250b009a8e6acf/lede/1643197299026-new-project-20.png?crop=1xw:1xh;center,center&resize=442:*"
                                                class="card-img-top title-gambar mt-2" alt="...">
                                        </div>
                                        <div class="col-8 col-md-8 col-lg-9">
                                            <div class="card-body pt-1">
                                                <a href="#">
                                                    <H1 class="footer-isi-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:#e2e2e2';">
                                                        Promotor Festival Emo 'When We Were Young' Marak Dituding Menipu
                                                        Publik </H1>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row berita-tengah-2">
                            <div class="col">
                                <div style="border: none;background-color:#111111" class="card">
                                    <div class="row g-0">
                                        <div class="col-4 col-md-4 col-lg-3">
                                            <img src="https://video-images.vice.com/articles/61f1333660250b009a8e6acf/lede/1643197299026-new-project-20.png?crop=1xw:1xh;center,center&resize=442:*"
                                                class="card-img-top title-gambar mt-2" alt="...">
                                        </div>
                                        <div class="col-8 col-md-8 col-lg-9">
                                            <div class="card-body pt-1">
                                                <a href="#">
                                                    <H1 class="footer-isi-2"
                                                        onmouseover="this.style='color:#e05560;'"
                                                        onmouseout="this.style='color:#e2e2e2';">
                                                        Promotor Festival Emo 'When We Were Young' Marak Dituding Menipu
                                                        Publik </H1>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="ol-12 col-lg-4 col-md-4 footer3">
                <div class="row">
                    <div style="margin-left:20px;margin-right:20px" class="col">
                        {{-- Berita Footer --}}
                        <div class="row berita-tengah-2 pt-2">
                            <div class="mb-4" style="text-align: left">
                                <span class="footer-judul-2 text-white">KATEGORI POPULER</span>
                            </div>
                            <div class="col">
                                <div style="letter-spacing: 0.9px ;"
                                    class="d-flex flex-row justify-content-between footer-isi-2">
                                    <a href="#" style="color: #e2e2e2 " onmouseover="this.style='color:#e05560;'"
                                        onmouseout="this.style='color:#e2e2e2';">
                                        <span>Politik</span>
                                        <span style="letter-spacing: -1.5px;    position: absolute;
                            right: 20px;">35</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Berita Footer --}}
                        <div style="margin-top:4.7px" class="row berita-tengah-2">
                            <div class="col">
                                <div style="letter-spacing: 0.9px ;"
                                    class="d-flex flex-row justify-content-between footer-isi-2">
                                    <a href="#" style="color: #e2e2e2 " onmouseover="this.style='color:#e05560;'"
                                        onmouseout="this.style='color:#e2e2e2';">
                                        <span>Lingkungan</span>
                                        <span style="letter-spacing: -1.5px;    position: absolute;
                            right: 20px;">15</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Berita Footer --}}
                        <div style="margin-top:4.7px" class="row berita-tengah-2">
                            <div class="col">
                                <div style="letter-spacing: 0.9px ;"
                                    class="d-flex flex-row justify-content-between footer-isi-2">
                                    <a href="#" style="color: #e2e2e2 " onmouseover="this.style='color:#e05560;'"
                                        onmouseout="this.style='color:#e2e2e2';">
                                        <span>Musik</span>
                                        <span style="letter-spacing: -1.5px;    position: absolute;
                            right: 20px;">22</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Berita Footer --}}
                        <div style="margin-top:4.7px" class="row berita-tengah-2">
                            <div class="col">
                                <div style="letter-spacing: 0.9px ;"
                                    class="d-flex flex-row justify-content-between footer-isi-2">
                                    <a href="#" style="color: #e2e2e2 " onmouseover="this.style='color:#e05560;'"
                                        onmouseout="this.style='color:#e2e2e2';">
                                        <span>Kuliner</span>
                                        <span style="letter-spacing: -0px;    position: absolute;
                            right: 20px;">12</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Berita Footer --}}
                        <div style="margin-top:4.7px" class="row berita-tengah-2">
                            <div class="col">
                                <div style="letter-spacing: 0.9px ;"
                                    class="d-flex flex-row justify-content-between footer-isi-2">
                                    <a href="#" style="color: #e2e2e2 " onmouseover="this.style='color:#e05560;'"
                                        onmouseout="this.style='color:#e2e2e2';">
                                        <span>Trevel</span>
                                        <span style="letter-spacing: -0px;    position: absolute;
                            right: 20px;">11</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Berita Footer --}}
                        <div style="margin-top:4.7px" class="row berita-tengah-2">
                            <div class="col">
                                <div style="letter-spacing: 0.9px ;"
                                    class="d-flex flex-row justify-content-between footer-isi-2">
                                    <a href="#" style="color: #e2e2e2 " onmouseover="this.style='color:#e05560;'"
                                        onmouseout="this.style='color:#e2e2e2';">
                                        <span>Budaya</span>
                                        <span style="letter-spacing: -0px;    position: absolute;
                                        right: 20px;">12</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Berita Footer --}}
                        <div style="margin-top:4.7px" class="row berita-tengah-2">
                            <div class="col">
                                <div style="letter-spacing: 0.9px ;"
                                    class="d-flex flex-row justify-content-between footer-isi-2">
                                    <a href="#" style="color: #e2e2e2 " onmouseover="this.style='color:#e05560;'"
                                        onmouseout="this.style='color:#e2e2e2';">
                                        <span>Ekonomi</span>
                                        <span style="letter-spacing: -0px;    position: absolute;
                            right: 20px;">27</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Berita Footer --}}

                    </div>
                </div>
            </div>
        </div>

        <div class="col pt-2 pb-2 date-bottom">
            <div class="date-bottom mx-4">
                <div class="d-flex flex-row justify-content-between">
                    <span>© Portal Berita</span>
                    {{-- <div class="d-flex flex-row">
                        <span class="mx-3">About</span>
                        <span>Contact</span>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

</html>
