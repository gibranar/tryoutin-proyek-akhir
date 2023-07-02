<!DOCTYPE html>
<html>

<head>
  <title>Tentang Kami</title>
  <link rel="stylesheet" href="assets/style/navbar.css" />
  <link rel="stylesheet" href="assets/style/style-contact-us.css" />
  <link rel="shortcut icon" href="assets/icon/TryoutIn-icon.png" />
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css" />
  <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet" />
</head>

<body>
  <nav>
    <div class="navbarLeft" onclick="window.location.href='index.html'">
      <div class="icon">
        <img src="assets/icon/TryoutIn-icon.png" id="logo tryoutin" alt="Icon TryoutIn" style="width: 70px; height: 70px" />
      </div>
      <div class="tryoutin">
        <h1><span>TRY</span> <span>OUTIN</span></h1>
        <p>Persiapan Sebelum Ujian</p>
      </div>
    </div>
    <div class="navbarRight">
      <a href="index.html" id="home">Beranda</a>
      <a href="about-us.html" id="about">Tentang Kami</a>
      <a href="contact-us.php" id="contact">Kontak Kami</a>
      <button id="login" onclick="window.location.href='login.php'">
        Masuk / Daftar
      </button>
    </div>
  </nav>

  <div class="contact_us_green">
    <div class="responsive-container-block big-container">
      <div class="responsive-container-block container">
        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-7 wk-ipadp-10 line" id="i69b-2">

          <form class="form-box" action="contact_db.php" method="post">
            <div class="container-block form-wrapper">
              <div class="head-text-box">
                <p class="text-blk contactus-head">Contact us</p>
              </div>
              <div class="responsive-container-block">
                <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt-6">
                  <p class="text-blk input-title">FIRST NAME</p>
                  <input class="input" type="text" id="ijowk-6" name="FirstName" placeholder="Nama pertama anda" required />
                </div>
                <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                  <p class="text-blk input-title">LAST NAME</p>
                  <input class="input" type="text" id="indfi-4" name="LastName" placeholder="Nama terakhir anda" required />
                </div>
                <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                  <p class="text-blk input-title">EMAIL</p>
                  <input class="input" id="ipmgh-6" type="email" name="Email" placeholder="Email anda" required />
                </div>
                <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                  <p class="text-blk input-title">PHONE NUMBER</p>
                  <input class="input" type="tel" id="imgis-5" name="PhoneNumber" placeholder="081-234-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" required />
                </div>
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-6">
                  <p class="text-blk input-title">
                    PESAN YANG INGIN ANDA KIRIM
                  </p>
                  <textarea class="textinput" id="i5vyy-6" name="Pesan" placeholder="Masukkan pesan anda..." required></textarea>
                </div>
              </div>
              <div class="btn-wrapper">
                <button class="submit-btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-5 wk-ipadp-10" id="ifgi">
          <div class="container-box">
            <div class="text-content">
              <p class="text-blk contactus-head">Kontak Kami</p>
              <p class="text-blk contactus-subhead">
                Apabila ada hal yang mengganjal, Kami siap membantu. Silakan
                hubungi kami jika Anda memiliki pertanyaan atau butuh
                bantuan..
              </p>
            </div>
            <div class="workik-contact-bigbox">
              <div class="workik-contact-box">
                <div class="phone text-box">
                  <img onclick="window.location.href='tel:085-335-497-801'" class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET21.jpg" style="cursor: pointer;"/>
                  <p class="contact-text">+6285335497801</p>
                </div>
                <div class="address text-box">
                  <img onclick="window.location.href='mailto: gibranabyan.2022@student.uny.ac.id'" class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET22.jpg" style="cursor: pointer;"/>
                  <p class="contact-text">cs@tryoutin.id</p>
                </div>
                <div class="mail text-box">
                  <img onclick="window.location.href='https://goo.gl/maps/CQhLsuYG1YT13GB38'" class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET23.jpg" style="cursor: pointer;"/>
                  <p class="contact-text">Sleman Regency, Yogyakarta</p>
                </div>
              </div>
              <div class="social-media-links">
                <a href="mailto: gibranabyan.2022@student.uny.ac.id" target="_blank">
                  <img class="social-svg" id="is9ym" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg" />
                </a>
                <a href="https://twitter.com/jokowi" target="_blank">
                  <img class="social-svg" id="i706n" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg" />
                </a>
                <a href="https://www.instagram.com/gibranabyanr" target="_blank">
                  <img class="social-svg" id="ib9ve" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg" />
                </a>
                <a href="https://www.facebook.com/zaf.if.98" target="_blank">
                  <img class="social-svg" id="ie9fx" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>