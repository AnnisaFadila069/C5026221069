<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Produk Wardah</title>
    <link rel="stylesheet" href="style.css">

    <!-- submit -->
    <script>
        function validateForm() {
            var x = document.getElementById("nama");
            var y = document.getElementById("email");
            var z = document.getElementById("alamat");
            var w = document.getElementById("message");
            if (x.value == "") {
                alert("Please write your name.");
                x.focus();
                return false;
            }
            if (y.value == "") {
                alert("Please write your email.");
                y.focus();
                return false;
            }
            if (z.value == "") {
                alert("Please provide an address.");
                z.focus();
                return false;
            }
            if (w.value == "") {
                alert("Please provide a message.");
                w.focus();
                return false;
            }
        }
    </script>
</head>

<body>
    <!--  Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-2 p-2" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="pngwing.com.png" width="100" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#inspiring-beauty">Home <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="#tagline">Philosophy</a>
                    <a class="nav-item nav-link active" href="#produk">Product</a>
                    <a class="nav-item nav-link active" href="#review">Review</a>
                    <a class="nav-item nav-link active" href="#kontak">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar Akhir -->

    <!-- Inspiring Beauty -->
    <section class="page-section pt-1 n3" id="inspiring-beauty">
        <div class="row align-items-center g-0 mt-5" style="background-color:#67c7c6;">
            <div class="col-md ">
                <div class="px-3 px-lg-5 py-5 mx-lg-5">
                    <h3 style="color: #e3f2fdd7;" class="text-uppercase mb-3 mb-md-4">Inspiring Beauty</h3>
                    <h2 class=" mb-3 mb-md-4">Rahasia Kulit Wajah Cerah dan Anti Kusam</h2>
                    <a>Gunakan Varian Produk <span class="font-weight-bold" style="color: #e3f2fdd7;">Wardah White
                            Secret</span></a><br><br>
                    <a class="btn btn-primary1" href="#produk">Find Out More</a>
                </div>
            </div>
            <div class="col-md ">
                <img src="img_inspiring_com.jpg" class="img-fill" />
            </div>
        </div>
    </section>

    <!-- Filosofi wardah -->
    <section class="page-section" id="tagline">
        <div class="container text-center my-5 position-relative pt-2">
            <br>
            <h3 class="my-3" style="color: #5c6b769b;">THE WARDAH PHILOSOPHY</h3>
            <H1 class="mb-5" style="color: #70cacb;">HALAL GREEN BEAUTY </H1>
            <div class="row justify-content-center pt-2">
                <div class="col-10 col-lg-9 mb-lg-5">
                    <div class="row justify-content-center g-4 g-lg-0 mb-4">
                        <div class="col-4 col-lg">
                            <img src="icon_halal.jpg" class="lazy img-fluid" />
                            <div class="row justify-content-center pt-2">
                                <div class="col-12 ">
                                    <label style="color:#5c6b769b;">Halal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg">
                            <img src="icon_natural.jpg" class="lazy img-fluid" />
                            <div class="row justify-content-center pt-2">
                                <div class="col-12 ">
                                    <label style="color:#5c6b769b;">Natural</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg">
                            <img src="icon_alcohol.jpg" class="lazy img-fluid" />
                            <div class="row justify-content-center pt-2">
                                <div class="col-12 ">
                                    <label style="color:#5c6b769b;">Alcohol Free</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg">
                            <img src="icon_local.jpg" class="lazy img-fluid" />
                            <div class="row justify-content-center pt-2">
                                <div class="col-12">
                                    <label style="color:#5c6b769b;">Local & Global<br />Expert</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg">
                            <img src="icon_cruelty.jpg" class="lazy img-fluid" />
                            <div class="row justify-content-center pt-2">
                                <div class="col-12">
                                    <label style="color: #5c6b769b;">Cruelty Free</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk -->
    <section class="page-section bg-light" id="produk">
        <div class="container pt-5">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">BEAUTY WARDAH</h2>
                <h3 class="section-subheading text-muted">Varian Produk Wardah White Secret</h3>
            </div><br><br>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card">
                                    <img class="card-img-top img-fluid"
                                        src="Wardah-White-Secret-Pure-Brightening-Cleanser.jpg" alt="Card image"
                                        style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">Wardah White Secret Pure Brightening Cleanser</h4>
                                        <p class="card-text">Cleanser</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back m-4 p-3 text-justify">
                                <p>Wardah White Secret Pure Brightening Cleanser mampu membersihkan sisa kotoran yang
                                    menempel pada
                                    kulit serta mengurangi masalah minyak berlebih pada serta dapat memberikan
                                    perlindungan antioksidan
                                    dan mencerahkan kulit wajah. Salah satu kandungan yaitu grape seed yang bekerja
                                    untuk melindungi kulit
                                    muha dari radikal bebas. Dengan penggunaan rutin dan maksimal maka wajah cerah dan
                                    lembab akan anda
                                    dapatkan dari produk ini.</p>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="Wardah-White-Secret-Facial-Wash.jpg"
                                        alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">Wardah White Secret Facial Wash</h4>
                                        <p class="card-text">Facial Wash</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back m-4 p-3 text-justify">
                                <p>Pemakaian rutin dan setiap harinya tidak akan membuat kulit kering. Kandungan <a
                                        style="font-weight: bold;">natural AHA & BHA, advanced-white specific system
                                    </a> dan <a style="font-weight: bold;">asam lactic </a> akan menjaga kulit tetap
                                    lembab dan ternutrisi. Anda
                                    dapat mengaplikasikan produk ini setelah menggunakan Wardah White Secret Pure
                                    Brightening Cleanser
                                    pada pagi dan malam hari.</p>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card">
                                    <img class="card-img-top img-fluid"
                                        src="Wardah-White-Secret-Pure-Treatment-Essence.jpg" alt="Card image"
                                        style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">Wardah White Secret Pure Treatment Essence</h4>
                                        <p class="card-text">Essence</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back m-4 p-3 text-justify">
                                <p>Mampu menghidrasi kulit dan menjaga agar tetap lembab karena diproduksi dengan
                                    teknologi <a style="font-weight: bold;">Skin Awakening System </a> dan <a
                                        style="font-weight: bold;">Sodium
                                        Hyaluronate</a>. Bertekstur cair dan bening, essence ini mudah meresap kedalam
                                    lapisan kulit dan
                                    bekerja secara optimal pada kulit wajah dan menjaga kekenyalan kulit.</p>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card">
                                    <img class="card-img-top img-fluid"
                                        src="Wardah-White-Secret-Intense-Brightening-Essence-Serum.jpg"
                                        alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">Wardah White Secret Brightening Essence Serum</h4>
                                        <p class="card-text">Serum</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back m-4 p-3 text-justify">
                                <p>Wardah White Secret Intense Brightening Essence Serum merupakan produk serum yang
                                    bekerja menutrisi
                                    kulit dan berbahan aktif untuk mencerahkan. Kandungan <a
                                        style="font-weight: bold;">Silver Vine
                                        extract</a> dalam <a style="font-weight: bold;">Advanced White System</a> yang
                                    bekerja sama dalam
                                    pencerahan kulit dan mencegah munculnya noda dan flek hitam. Produk ini juga mampu
                                    menjaga lapisan
                                    luar dan lapisan dalam kulit agar tetap terawat dengan baik.</p>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="Wardah-White-Secret-Day-Cream.jpg"
                                        alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">Wardah White Secret Day Cream</h4>
                                        <p class="card-text">Day Cream</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back m-4 p-3 text-justify">
                                <p> Wardah White Secret Day Cream akan memberikan perlindungan terhadap bahaya sinar UVA
                                    dan UVB kulit
                                    jika anda beraktivitas karena terdapat kandungan SPF PA+++. <br>
                                    Cream ini bekerja untuk mencerahkan kulit wajah dengan formula <a
                                        style="font-weight: bold;">Advanced-White System</a> dan Teknologi <a
                                        style="font-weight: bold;">Derma-Peptide</a> yang membuat krim cepat meresap ke
                                    dalam lapisan kulit.
                                </p>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="Wardah-White-Secret-Night-Cream.jpg"
                                        alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">Wardah White Secret Night Cream</h4>
                                        <p class="card-text">Night Cream</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back m-4 p-3 text-justify">
                                <p>Wardah night cream bekerja meregenerasi kulit dan memudarkan flek dan noda hitam
                                    selama anda
                                    tertidur. <a style="font-weight: bold;">Advanced-White Specific System</a> yang
                                    bekerja mempercepat
                                    proses pencerahan kulit dengan cara memperlambat proses pembentukan melanin.</p>
                            </div>
                        </div>
                    </div><br>
                </div>
            </div>
        </div>
    </section>

    <!-- Review -->
    <section class="page-section" id="review">
        <div class="text-center"><br><br>
            <h1> Customer's <span>Review<br><br></span></h1>
        </div>
        <div class="box-container">
            <!-- Review 1 -->
            <div class="box p-2">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p style="font-size: 1rem;">Produknya bener-bener bikin kulit kita terasa lembut dan glowing...
                    teksturnya yang
                    lembut dan halus membuat kulit terasa lembab kaya pake pelembab ku..</p>
                <div class="user">
                    <img src="cs1.jpg" alt="">
                    <div>
                        <h4>Filonia Pandiaga</h4>
                        <span>Wardah-White-Secret-Pure-Brightening-Cleanser</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>
        </div>
        <!-- Review 2 -->
        <div class="box p-2">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p style="font-size: 1rem;">Selalu pake sabun wajah ini karena cocok banget dari dulu enggak pernah
                ngecewajn
                gentle banget dili kulit dan enggak bikin iritasi aki juga coba produk white secret lainnya dan bagus
                juga
                enggak bikin iritasi sukaaaa banget lah pokok nya.</p>
            <div class="user">
                <img src="cs2.jpg" alt="">
                <div>
                    <h4>Maria Andrena</h4>
                    <span>Wardah-White-Secret-Facial-Wash</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
        </div>
        <!-- Review 3 -->
        <div class="box p-2">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p style="font-size: 1rem;">Yang aku rasain gampang meresap dengan baik, lebih ke booster untuk next
                skincare yang
                akan kita pakai step skincare Routine kita selanjutnya, jadi aku pakai ga cuma ini aja tapi pakai serum
                juga,
                lumayan ngebooster dengan baik, karna udah sebulan ini flek hitam bekas jerewi aku mulai memudar, so far
                good
                sih thankyou Wardah!</p>
            <div class="user">
                <img src="cs3.jpg" alt="">
                <div>
                    <h4>WH Gusnari</h4>
                    <span>Wardah-White-Secret-Pure-Treatment-Essence</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
        </div>
        <!-- Review 4 -->
        <div class="box p-2">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p style="font-size: 1rem;">Tekstur ringan cepat meresap nyaman dikulit,cara kerja nya juga bagus di kulit
                wajah
                saya,tapi tidak instant hasilnya,tetap menjadikan kulit wajah lebih terlihat bersih cerah alami.</p>
            <div class="user">
                <img src="cs4.jpg" alt="">
                <div>
                    <h4>Yuni Kartini</h4>
                    <span>Wardah-White-Secret-Intense-Brightening-Essence-Serum</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
        </div>
        <!-- Review 5 -->
        <div class="box p-2">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p style="font-size: 1rem;">Aku pake day cream ini cocok banget, bikin kulit wajah terTone up tapi ngga
                mencolok
                dan lama² warnanya jadi merata sama wajah, cepat meresap ke kulit ngga lengket, bermanfaat banget bikin
                kulit
                wajah ngga gosong karna kepanasan, ngebantu bikin jerawat kering juga, pokoknya sama product wardah
                cocok
                bangettt.</p>
            <div class="user">
                <img src="cs5.jpeg" alt="">
                <div>
                    <h4>Dewi Aishah</h4>
                    <span>Wardah-White-Secret-Day-Cream</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
        </div>
        <!-- Review 6 -->
        <div class="box p-2">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p style="font-size: 1rem;">Pengalaman aku setelah memakai wardah white secret night cream itu awalnya
                biasa aja,
                tapi selamg 2 minggu sudah nampak perubahan dikulit wajahku yaitu menyamarkan bekas jerawat serta
                membuat kulit
                wajahku lebih cerah. Alhamdulillah!</p>
            <div class="user">
                <img src="cs6.jpg" alt="">
                <div>
                    <h4>Sasrini</h4>
                    <span>Wardah-White-Secret-Night-Cream</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
        </div>

    </section>

    <!-- kontak -->
    <section class="contact" id="kontak">
        <h1 class="heading pt-5 text-center"><span>Contact</span> Us</h1>
        <div class="row pt-3">
            <div class="col-1 mb"></div>
            <div class="col-md mb-5">
                <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126645.59974012915!2d112.75141119999999!3d-7.277772800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbbfb9f14217%3A0x1c550c34b96eeb95!2sKosmetik%20Wardah%20Surabaya!5e0!3m2!1sid!2sid!4v1697960851330!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md pr-5">
                <form id="myForm" action="https://wa.me/08997069354" onsubmit="return validateForm()"
                    method="post">
                    <div class="form-group">
                        <label for="nama">Name</label>
                        <input type="text" class="form-control" id="nama" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Address</label>
                        <input type="text" class="form-control" id="alamat" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" placeholder="Write down the product you want and the quantity!"
                            style="height: 10rem"></textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-1 "></div>
        </div>
    </section>

    <!-- File pertemuan -->
    <section class="page-section" id="tagline">
        <div class="container text-center my-5 position-relative pt-2">
            <br>
            <h3 class="my-3" style="color: #5c6b769b;">31/08/2023 - 22/10/2023</h3>
            <H1 class="mb-5" style="color: #70cacb;">File Pertemuan Pemrograman Web</H1>

            <div class="row justify-content-center pt-2">
                <div class="col-3"><a class="btn btn-primary1" href="http://127.0.0.1:8000/Wardah-LandingPage/hello" target="_blank">Hello</a>
                    <div class="row justify-content-center pt-2">
                        <div class="col-12">
                            <p style="font-size: small;">Pengenalan dasar HTML (31/08/2023)</p>
                        </div>
                    </div>
                </div>
                <div class="col-3"><a class="btn btn-primary1" href="http://127.0.0.1:8000/Wardah-LandingPage/style" target="_blank">Style</a>
                    <div class="row justify-content-center pt-2">
                        <div class="col-12">
                            <p style="font-size: small;">Pengenalan CSS (07/09/2023)</p>
                        </div>
                    </div>
                </div>
                <div class="col-3"><a class="btn btn-primary1" href="http://127.0.0.1:8000/Wardah-LandingPage/link" target="_blank">Link</a>
                    <div class="row justify-content-center pt-2">
                        <div class="col-12">
                            <p style="font-size: small;">Pengenalan akses ke suatu link (07/09/2023)</p>
                        </div>
                    </div>
                </div>
                <div class="col-3"><a class="btn btn-primary1" href="http://127.0.0.1:8000/Wardah-LandingPage/responsive" target="_blank">Responsive</a>
                    <div class="row justify-content-center pt-2">
                        <div class="col-12">
                            <p style="font-size: small;">Penggunakan Bootstrap 4 (14/09/2023)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center pt-2">
                <div class="col-3"><a class="btn btn-primary1" href="http://127.0.0.1:8000/Wardah-LandingPage/js1" target="_blank">js1</a>
                    <div class="row justify-content-center pt-2">
                        <div class="col-12">
                            <p style="font-size: small;">Pengenalan javascript (21/09/2023)</p>
                        </div>
                    </div>
                </div>
                <div class="col-3"><a class="btn btn-primary1" href="http://127.0.0.1:8000/Wardah-LandingPage/js2" target="_blank">js2</a>
                    <div class="row justify-content-center pt-2">
                        <div class="col-12">
                            <p style="font-size: small;">Pengenalan javascript ke-2 (05/10/2023)</p>
                        </div>
                    </div>
                </div>
                <div class="col-3"><a class="btn btn-primary1" href="http://127.0.0.1:8000/Wardah-LandingPage/contohnrp" target="_blank">ContohNRP</a>
                    <div class="row justify-content-center pt-2">
                        <div class="col-12">
                            <p style="font-size: small;">Challenge Javascript (05/10/2023)</p>
                        </div>
                    </div>
                </div>
                <div class="col-3"><a class="btn btn-primary1" href="http://127.0.0.1:8000/Wardah-LandingPage/responsive2" target="_blank">Responsive2</a>
                    <div class="row justify-content-center pt-2">
                        <div class="col-12">
                            <p style="font-size: small;">Penggunakan row&coloumn HTML (11/10/2023)</p>
                        </div>
                    </div>
                </div>
            </div>

        <div class="container text-center my-5 position-relative pt-2"></div>
        </div>
    </section>




    <!-- footer -->
    <footer>
        <div class="social">
            <a href="https://www.instagram.com/real__afr/"><i data-feather="instagram"></i></a>
            <a href="www.linkedin.com/in/annisa-fadila-rahmawati"><i data-feather="linkedin"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100068255565056"><i data-feather="facebook"></i></a>
        </div>

        <div class="creadit">
            <p>Created by <a style="font-weight: bold;"> Annisa Fadila Rahmawati</a>. | &copy; 2023.</p>
        </div>
    </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
