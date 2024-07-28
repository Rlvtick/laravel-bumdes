<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - BUM DESA ADHINATA MANDIRI KEDUNGUDI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/berita5.css') }}">
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="logo">
                    <img src="img/bumdeslogo.png" alt="Logo">
                    <div class="logo-text">
                        <span>BUM DESA ADHINATA</span>
                        <span>MANDIRI KEDUNGUDI</span>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a href="{{url('/home')}}">Home</a></li>
                        <li class="dropdown"><a href="#">Profil <img src="img/arrow.png" class="arrow" alt="arrow"></a>
                            <div class="dropdown-content">
                                <a href="{{url('/visi misi')}}">Visi dan Misi</a>
                            </div>
                        </li>
                        <li class="dropdown"><a href="#">Unit Usaha <img src="img/arrow.png" class="arrow" alt="arrow"></a>
                            <div class="dropdown-content">
                                <a href="{{url('sky park hill')}}">Sky Park Hill</a>
                                <a href="{{url('pos pendakian')}}">Pos Pendakian</a>
                                <a href="{{url('hippam')}}">HIPPAM</a>
                                <a href="{{url('bank sampah')}}">Bank Sampah</a>
                            </div>
                        </li>
                        <li><a href="{{url('struktur organisasi')}}">Struktur Organisasi</a></li>
                        <li><a href="{{url('berita')}}">Berita</a></li>
                        <li><a href="{{url('kontak')}}">Kontak</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="green-line"></div>
    </header>

    <section class="banner">
        <img src="img/main-image.png" alt="Banner Image">
        <div class="overlay"></div>
        <div class="banner-text">
            <h1>BERITA BUMDES</h1>
            <h2>Berita</h2>
        </div>
    </section>

    <div class="green-divider"></div> <!-- Green line added below the banner -->

    <section class="berita-content">
        <div class="text-section">
            <h1>Kegiatan Penanaman Bibit Serentak di Desa Kedungudi dalam Peringatan Hari Bumi Sedunia</h1>
            <h2>Senin, 22 April 2024</h2>
        </div>
        <img src="img/berita5.jpeg" alt="Berita Image">
        <div class="berita-summary">
            <p>BUMDes Adhinata Mandiri Kedungudi - Pada Senin, 22 April 2024, Desa Kedungudi akan mengadakan kegiatan penanaman bibit serentak untuk memperingati Hari Bumi Sedunia. Acara ini diorganisir oleh Dinas Lingkungan Hidup (DLH) dan melibatkan berbagai pihak, termasuk perangkat desa, RT, RW, Karang Taruna, Babinsa, dan Babinkantibmas.</p>
            <p>Jenis bibit yang akan ditanam antara lain alpukat, jambu kristal, durian, rambutan, petai, lengkeng, dan sukun. Penanaman ini akan dilakukan di daerah persawahan di belakang Sky Park Hill (SPH).</p>
            <p>Kegiatan ini bertujuan untuk meningkatkan kesadaran lingkungan dan memperkuat kolaborasi antara Dinas Lingkungan Hidup, pemerintah desa, BUMDes, RT, RW, dan Karang Taruna dalam rangka memperingati Hari Bumi Sedunia.</p>
        </div>
    </section>
    
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <div class="footer-logo">
                    <img src="img/bumdeslogo.png" alt="Logo">
                    <div class="footer-social">
                        <p>Follow Us</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/profile.php?id=61561843724704&mibextid=ZbWKwL"><img src="img/facebook-asset.png" alt="Facebook"></a>
                            <a href="https://www.instagram.com/bumdesadhinatamandirikedungudi"><img src="img/instagram-asset.png" alt="Instagram"></a>
                            <a href="https://www.youtube.com/@BUMDESADHINATAMANDIRIKEDUNGUDI"><img src="img/youtube-asset.png" alt="YouTube"></a>
                        </div>
                    </div>
                </div>
                <div class="footer-logo-text">
                    <span>BUM DESA ADHINATA</span>
                    <span>MANDIRI KEDUNGUDI</span>
                </div>
            </div>
            <div class="footer-contact">
                <p><img src="img/location-asset.png" alt="Location" class="contact-icon"> <strong>ALAMAT :</strong><br><span class="contact-details">Jl. Selokelir No. 26 RT 01/RW 01, Desa Kedungudi, Kec. Trawas, 61375</span></p>
                <p><img src="img/phone-asset.png" alt="Phone" class="contact-icon"> <strong>NO. TELPON :</strong><br><span class="contact-details">+62 822 2831 6181</span></p>
                <p><img src="img/email-asset.png" alt="Email" class="contact-icon"> <strong>EMAIL :</strong><br><span class="contact-details">bumdesadhinatamandirikedungudi@gmail.com</span></p>
            </div>
        </div>
    </footer>
</body>
</html>