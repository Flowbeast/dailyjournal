
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OPIUM</title>
    <link rel="icon" href="../Asset/OPIUM.jpg"/>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>

body {
  background-color: white;
  color: black;
  transition: background-color 0.5s, color 0.5s;
}

#navbar {
  background-color: #f8f9fa;
  transition: background-color 0.5s, color 0.5s;
  -webkit-transition: background-color 0.5s, color 0.5s;
  -moz-transition: background-color 0.5s, color 0.5s;
  -ms-transition: background-color 0.5s, color 0.5s;
  -o-transition: background-color 0.5s, color 0.5s;
}
#navbar .nav-link {
  color: black;
}


body.dark-mode #navbar {
  background-color: #343a40; 
}
body.dark-mode #navbar .nav-link {
  color: white;
}

#article{
  background-color: #cc0000;
  transition: background-color 0.5s;
}

#gallery{
  background-color: white;
  transition: background-color 0.5s;
}

#hero{
  background-color: white;
  transition: background-color 0.5s;
}

#schedule{
  background-color: white;
  transition: background-color 0.5s;
}

#about-me{
  background-color: black;
  transition: background-color 0.5s;
}

body.dark-mode {
  background-color: #121212;
  color: white;
}

body.dark-mode #gallery{
  background-color: #343a40;
}

body.dark-mode #hero{
  background-color: #343a40;
}

body.dark-mode #article{
  background-color: #121212;
}
h1{
  color: black;
}

#schedule .card-header {
    font-weight: bold;
    font-size: 1.2rem;
}

#schedule .card {
    border-radius: 10px;
    overflow: hidden;
}

</style>
</head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: black;">
      <div class="container">
              <a class="navbar-brand text-white" href="#">OPIUM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link text-white" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="#article">Article</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white" href="#schedule">schedule</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white" href="#aboutme">about me</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white" href="../PHP/login.php" target="_blank">Login</a>
                  </li>
                  <li class="nav-item">
                      <button id="darkModeBtn" class="btn btn-dark me-2">
                          <i class="bi bi-moon"></i> Dark
                      </button>
                  </li>
                  <li class="nav-item">
                      <button id="lightModeBtn" class="btn btn-light">
                          <i class="bi bi-brightness-high"></i> Light
                      </button>
                    </li>
              </ul>
          </div>
      </div>
  </nav>
    <!-- nav end -->
     <!-- hero begin -->
      <section id="hero" class="text-center p-5 text-sm-start">
        <div class="container">
            <div class="container">
                <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                    <img src="../Asset/IAMMUSIC.jpg" class="img-fluid" width="500" height="400">
                    <div>
                    <h1 class="fw-bold display-4"> ''You really don't find too many good people. You really don't. Keep them around.''</h1>
                    <h4 class="lead display-6">-PlayBoi Carti</h4>
                    </div>
                </div>
            </div>
        </div>    
      </section>
      <!-- hero end -->
      <!-- article begin -->
      <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <div class="col">
                  <div class="card h-100">
                    <img src="../Asset/EvilJordan.png" class="card-img-top" alt="EvilJordan">
                    <div class="card-body">
                      <h5 class="card-title">Evil Jordan</h5>
                      <p class="card-text">Known for its dark, haunting undertones, “EvilJordan” dives into Carti’s grittier side, combining distorted basslines with a sinister, hypnotic flow that showcases his raw energy.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">W</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="../Asset/2024.jpg" class="card-img-top" alt="2024">
                    <div class="card-body">
                      <h5 class="card-title">2024</h5>
                      <p class="card-text">A high-energy track with futuristic beats, “2024” captures Carti’s vision of the future, blending electronic influences with his signature vocal style, creating an intense and otherworldly vibe.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">W</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="../Asset/ALLRED.png" class="card-img-top" alt="ALL RED">
                    <div class="card-body">
                      <h5 class="card-title">ALL RED</h5>
                      <p class="card-text">A standout track, “AllRed” uses minimalistic beats with an eerie feel, where Carti’s vocals are front and center. The song’s repetitive hooks and red-themed imagery symbolize passion, intensity, and aggression.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">W</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                      <img src="../Asset/HOODBYAIR.jpg" class="card-img-top" alt="HOODBYAIR">
                      <div class="card-body">
                        <h5 class="card-title">HOODBYAIR</h5>
                        <p class="card-text">This song is an ode to street style and Carti’s influence on fashion culture. “Hoodbyair” features playful yet edgy production, underscoring Carti's persona and his ties to the fashion world.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-body-secondary">W</small>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="../Asset/TimeLess.jpeg" class="card-img-top" alt="TimeLess">
                    <div class="card-body">
                      <h5 class="card-title">TIMELESS</h5>
                      <p class="card-text">With a nostalgic and melancholic vibe, “Timeless” explores themes of immortality and Carti's legacy in hip-hop. The production leans into atmospheric sounds, providing a reflective contrast to his usual high-energy style.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">W</small>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </section>
      <!-- article end -->
      <!-- gallery begin -->
      <section id="gallery" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../Asset/2024.jpg" class="d-block w-100" alt="2024">
                  </div>
                  <div class="carousel-item">
                    <img src="../Asset/EvilJordan.png" class="d-block w-100" alt="EvilJordan">
                  </div>
                  <div class="carousel-item">
                    <img src="../Asset/ALLRED.png" class="d-block w-100" alt="ALLRED">
                  </div>
                  <div class="carousel-item">
                    <img src="../Asset/HOODBYAIR.jpg" class="d-block w-100" alt="HOODBYAIR">
                  </div>
                  <div class="carousel-item">
                    <img src="../Asset/TimeLess.jpeg" class="d-block w-100" alt="TimeLess">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
      </section>
      <!-- gallery end -->
      <!-- schedule begin -->
<section id="schedule" class="container my-5">
  <h2 class="text-center mb-4">Schedule</h2>
  <div class="row">
      <div class="col-md-3 col-12 mb-3">
          <div class="card text-center">
              <div class="card-header bg-danger text-white">SENIN</div>
              <div class="card-body">
                  <p>Etika Profesi<br>16:20-18:00 | H.4.4</p>
                  <p>Sistem Operasi<br>18:30-21:00 | H.4.8</p>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-12 mb-3">
          <div class="card text-center">
              <div class="card-header bg-danger text-white">SELASA</div>
              <div class="card-body">
                  <p>Pendidikan Kewarganegaraan<br>12:30-13:10 | Kulino</p>
                  <p>Probabilitas dan Statistik<br>15:30-18:00 | H.4.9</p>
                  <p>Kecerdasan Buatan<br>18:30-21:00 | H.4.11</p>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-12 mb-3">
          <div class="card text-center">
              <div class="card-header bg-danger text-white">RABU</div>
              <div class="card-body">
                  <p>Manajemen Proyek Teknologi Informasi<br>15:30-18:00 | H.4.6</p>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-12 mb-3">
          <div class="card text-center">
              <div class="card-header bg-danger text-white">KAMIS</div>
              <div class="card-body">
                  <p>Bahasa Indonesia<br>12:30-14:10 | Kulino</p>
                  <p>Pendidikan Agama Islam<br>16:20-18:00 | Kulino</p>
                  <p>Penambangan Data<br>18:30-21:00 | H.4.10</p>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6 col-12 mb-3">
          <div class="card text-center">
              <div class="card-header bg-danger text-white">JUMAT</div>
              <div class="card-body">
                  <p>Pemrograman Web Lanjut<br>10:20-12:00 | D.J.2K</p>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-12 mb-3">
          <div class="card text-center">
              <div class="card-header bg-danger text-white">SABTU</div>
              <div class="card-body">
                  <p>FREE</p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- schedule end -->
<!-- about me begin -->
<section id="about-me" class="container my-5">
<div>
  <h2 class="text-center mb-4">About Me</h2>
  <div class="row align-items-center">
      <div class="col-md-4 col-12 text-center mb-3">
          <img src="" class="rounded-circle img-fluid" alt="Profile Picture" style="width: 367px; height: 340px;">
      </div>
      <div class="col-md-8 col-12">
          <p>A11.2023.15109</p>
          <p><strong>Krisna Nindya Kambara</strong></p>
          <p><strong>Computer Science</strong></p>
          <p><strong><a href="https://www.udinus.ac.id" target="_blank">Universitas Dian Nuswantoro</a></strong></p>
      </div>
  </div>
</div>
</section>
      <!-- about me end -->
      <!-- login begin -->

      <!-- login end -->
      <!-- footer begin -->
      <footer class="text-center p-5" style="background-color: black;">
        <div>
        <a><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a><i class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
        <a><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
        </div>
        <div>
            Krisna Nidya Kambara @ 2023
        </div>
      </footer>
      <!-- footer end -->
<script>
const darkModeBtn = document.getElementById('darkModeBtn');
const lightModeBtn = document.getElementById('lightModeBtn');
const navbar = document.getElementById('navbar');


function applyTheme(isDark) {
    if (isDark) {
        document.body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
    } else {
        document.body.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
    }
}


const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'dark') {
    applyTheme(true);
}

darkModeBtn.addEventListener('click', () => applyTheme(true));
lightModeBtn.addEventListener('click', () => applyTheme(false));

document.querySelector('.navbar .schedule-link').addEventListener('click', function (event) {
    event.preventDefault();
    document.querySelector('#schedule').scrollIntoView({ behavior: 'smooth' });
});

document.getElementById("profile-pic").addEventListener("click", function () {
        const profileInfo = document.getElementById("profile-info");
        profileInfo.style.display = profileInfo.style.display === "none" ? "block" : "none";
    });
</script>
</body>
</html>