<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Konten - Portal Berita</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('partial.style')
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  @include('partial.header')

  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">
    <img src="{{ url('assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt="...">


    <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Judul Berita</h2>
            <p data-aos="fade-up" data-aos-delay="200">Nama Penulis dan 09 Juli 2023</p>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptas aliquid dolore blanditiis hic quae doloremque quasi, ea, quod molestias in repudiandae perspiciatis sapiente dicta, adipisci velit culpa eos quibusdam.
        </p>
        </div>
    </section>

  </main>

  @include('partial.footer')
  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  @include('partial.script')

</body>

</html>