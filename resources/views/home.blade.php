@extends('layouts.app')

@section('content')
    <!-- Navbar -->
    <section id="home">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: rgb(40, 99, 224)">
      <div class="container">
        <a class="navbar-brand" href="#">Rafi Adji Baskoro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
            <a type="button" class="btn btn-danger" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </section>
    <!-- End Navbar -->
<!-- jumbotron -->
<section class="jumbotron text-center mb-5">
      <img src="img/rafi.jpeg" alt="Rafi Adji" width="180" height="150" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Rafi Adji Baskoro</h1>
      <p class="lead">Freelance | Web & Desainer</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,160L34.3,154.7C68.6,149,137,139,206,154.7C274.3,171,343,213,411,197.3C480,181,549,107,617,96C685.7,85,754,139,823,154.7C891.4,171,960,149,1029,165.3C1097.1,181,1166,235,1234,224C1302.9,213,1371,139,1406,101.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end jumbotron -->
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2>About Me</h2>
          </div>
          <div class="row justify-content-evenly fs-5 text-center">
            <div class="col-md-4">
              <p>Perkenalan nama saya adalah Rafi Adji Baskoro, saya lulusan SMK TAMANSISWA 2 Jakarta dengan Jurusan Rekayasa Perangkat Lunak. <br>
            Saya memiliki pengalaman dalam WEB,DATABASE,Program miniatur lampu lalu lintas, dan Game sederhana melalui magang di APKomindo.
            </p>
            </div>
            <div class="col-md-4">
              <p>Dalam bidang saya, saya mendapatkan Sertifikat Computer Programming dari ujian praktek sekolah. Saya pernah bekerja di PT.evenindo sebagai Cooking stand PRJ untuk menambah uang jajan saya.</p>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,160L34.3,154.7C68.6,149,137,139,206,154.7C274.3,171,343,213,411,197.3C480,181,549,107,617,96C685.7,85,754,139,823,154.7C891.4,171,960,149,1029,165.3C1097.1,181,1166,235,1234,224C1302.9,213,1371,139,1406,101.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->
    <!-- projects -->
    <section id="galeri">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Galeri Me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card">
              <img src="projek/4.jpeg" class="card-img-top" alt="..." height="280px" />
              <div class="card-body">
                <p class="card-text">Belajar Mengetes Jaringan Wifi Terhubung ke Komputer.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card">
              <img src="projek/5.jpeg" class="card-img-top" alt="..." height="280px" />
              <div class="card-body">
                <p class="card-text">Alat-alat Pembuatan Miniatur Lampu Lalu Lintas.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card">
              <img src="projek/6.jpeg" class="card-img-top" alt="..." height="280px" />
              <div class="card-body">
                <p class="card-text">Selesainya Even PRJ Saya Bekerja.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card">
              <img src="projek/7.jpeg" class="card-img-top" alt="..." height="280px" />
              <div class="card-body">
                <p class="card-text">Saya dengan Foto Seragam kerja saya.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,160L34.3,154.7C68.6,149,137,139,206,154.7C274.3,171,343,213,411,197.3C480,181,549,107,617,96C685.7,85,754,139,823,154.7C891.4,171,960,149,1029,165.3C1097.1,181,1166,235,1234,224C1302.9,213,1371,139,1406,101.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end projects -->
    <!-- contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="/home/storetambah" method="post">
                {{csrf_field()}}
                <div class="mb-3">
                <label for="no" class="form-label">No : </label>
                <input type="number" name="no" class="form-control" id="no" aria-describedby="no" required="required" />
</div>
              <div class="mb-3">
                <label for="name" class="form-label">Nama : </label>
                <input type="text" name="nama" class="form-control" id="name" aria-describedby="name" required="required" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email : </label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required="required" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan : </label>
                <textarea class="form-control" name="pesan" id="pesan" rows="3" required="required"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
        <div class="row justify-content-center ">
          <div class="col-md-8 mb-3">
          <table class="table table-hover">
          <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Pesan</th>
    </tr>
  </thead>
  <tbody>
    @foreach($home as $p)
    <tr>
    <td> {{$p->no}} </td>
<td> {{$p->nama}} </td>
<td> {{$p->email}} </td>
<td> {{$p->pesan}} </td>
<td>
<a href="/home/hapus/{{ $p->no }}" type="button" class="btn btn-danger">Hapus</a>
</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,288L34.3,277.3C68.6,267,137,245,206,218.7C274.3,192,343,160,411,160C480,160,549,192,617,218.7C685.7,245,754,267,823,234.7C891.4,203,960,117,1029,106.7C1097.1,96,1166,160,1234,192C1302.9,224,1371,224,1406,224L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end contact -->
    <!-- footer -->
    <footer class="bg-primary text-center pb-5">
      <p>Created with <i class="bi bi-balloon-heart-fill text-denger"></i> by <a href="https://www.instagram.com/raf_0864/" class="text-white fw-bold">Rafi Adji</a></p>
    </footer>
    <!-- end footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
@endsection
