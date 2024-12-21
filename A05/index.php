<?php
include('connect.php');

$query = "SELECT * FROM islandsofpersonality";
$result = executeQuery($query);


$personalities = [];
while ($row = mysqli_fetch_assoc($result)) {
  $personalities[] = $row;
}


$query = "SELECT image, content FROM islandcontents WHERE islandOfPersonalityID = 1";
$result = executeQuery($query);


$lovingContent = [];


while ($row = mysqli_fetch_assoc($result)) {
    $lovingContent[] = [
        'description' => $row['content'],
        'image' => $row['image']
    ];
}


$roles = ['A Daughter', 'A Tita', 'A Friend'];
$query = "SELECT image FROM islandcontents WHERE islandOfPersonalityID = 2"; 
$result = executeQuery($query);

$adventurousImages = [];

while ($row = mysqli_fetch_assoc($result)) {
    $adventurousImages[] = $row['image']; 
}


$adventurousTitle = $personalities[1]; 

$query = "SELECT image, content FROM islandcontents WHERE islandOfPersonalityID = 3"; 
$result = executeQuery($query);


$ambitiousContent = [];
while ($row = mysqli_fetch_assoc($result)) {
    $ambitiousContent[] = [
        'description' => $row['content'],
        'image' => $row['image']
    ];
}


$query = "SELECT image, content FROM islandcontents WHERE islandOfPersonalityID = 4"; 
$result = executeQuery($query);


$independentContent = [];
while ($row = mysqli_fetch_assoc($result)) {
    $independentContent[] = [
        'description' => $row['content'],
        'image' => $row['image']
    ];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inside Out Inspired Personal Website</title>
  <link rel="shortcut icon" href="img/a-tab.png" type="image/png" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: "Comic Sans MS", cursive, sans-serif;
      background-color: #f9f9f9;
      padding-top: 64px;
    }

    .w3-top {
      background-color: #f1f1f1;
    }


    header {
      margin-top: -64px;
      background: url('img/bg2.jpg') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #fff;
      text-align: center;
      position: relative;

    }

    header::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    header .content {
      position: relative;
      z-index: 2;
    }
    

    .content h1 {
      font-size: 4rem;
      font-weight: bold;
      margin: 0;
    }

    .content p {
      font-size: 1.5rem;
      margin: 10px 0 20px;

    }

    .content a {
      display: inline-block;
      margin: 10px;
      padding: 10px 20px;
      font-size: 1.2rem;
      color: #fff;
      text-decoration: none;
      border: 2px solid #ffd700;
      border-radius: 5px;
      transition: all 0.3s ease;
    }

    .content a:hover {
      background-color: #ffd700;
      color: #000;
    }


    .section-title {
      font-size: 36px;
      color: #2e86c1;
    }

    .projects-section img {
      border-radius: 15px;
    }

    .w3-container {
      padding: 30px;
    }

    .project-card {
      border: 2px solid #e74c3c;
    }

    .project-card:hover {
      transform: scale(1.05);
      transition: all 0.3s ease;
    }


    .team img {
      border-radius: 50%;
      margin-bottom: 10px;
    }

    footer {
      background-color: #2c3e50;
      color: white;
      padding: 20px;
    }  
  </style>
</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: rgb(255, 255, 255);">
  <div class="container">
    <a class="navbar-brand fs-4 fw-semibold" href="#home" style="color: #000;"><b>Core</b> Memory</a>
    <button 
      class="navbar-toggler shadow-none" 
      type="button" 
      data-bs-toggle="offcanvas" 
      data-bs-target="#offcanvasNavbar" 
      aria-controls="offcanvasNavbar" 
      aria-label="Toggle navigation"
      style="border-color: #000;">
      <span class="navbar-toggler-icon" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 30 30%27 fill=%27black%27%3E%3Cpath stroke=%27black%27 stroke-width=%272%27 d=%27M4 7h22M4 15h22M4 23h22%27/%3E%3C/svg%3E');"></span>
    </button>
    <div 
      class="sidebar offcanvas offcanvas-end" 
      style="background-color: rgb(255, 255, 255);" 
      tabindex="-1" 
      id="offcanvasNavbar" 
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <button 
          type="button" 
          class="btn-close" 
          style="color: #000;" 
          data-bs-dismiss="offcanvas" 
          aria-label="Close">
        </button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav pe-3 justify-content-end text-sm-center flex-grow-1">
          <li class="nav-item mx-2">
            <a class="nav-link" href="#about" style="color: #000;">About Me</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#emotions" style="color: #000;">Emotions</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#personality" style="color: #000;">Personalities</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>



    <header id="home" id="home">
      <div class="content">
        <h1>Hi, I&#39;m Almira Magno</h1>
        <p>Explore my island of personality.</p>
        <a href="#about">Get started</a>
      </div>
    </header>


    <div class="w3-container" id="about" style="background-color: #1a1a2e; color: white; padding: 50px;">
      <div class="w3-row">
        <div class="w3-col l6 m12 w3-center" style="margin-top: 50px; margin-bottom: 30px;">
          <img src="img/proj-img.jpeg" alt="About Me Graphic" style="width: 90%; max-width: 850px; border-radius: 15px;">
        </div>
        <div class="w3-col l6 m12 ">
          <h3 style="font-size: 36px; color: #ffd700;">ABOUT ME</h3>
          <p style="font-size: 18px; color: #dcdde1; text-align: justify;">
            A person driven by curiosity and resilience, embarking on a journey of self-discovery. Joy shines as love for
            life, finding happiness in everyday moments and connections with others. Fear brings an adventurous spirit,
            encouraging the exploration of new experiences and challenges. Anxiety fuels ambition, pushing to reach new
            goals and grow with each step. Shyness fosters independence, nurturing personal growth and the value of
            standing strong on their own. Together, these emotions shape the path, making every triumph and setback a
            vital part of their journey in life.
          </p>
        </div>
      </div>
    </div>

    <div class="w3-container w3-padding-32" id="emotions" style="background-color: #1a1a2e; color: white;">
      <h3 class="section-title" style="text-align: center;">Team of Emotions</h3>
      <div class="w3-row-padding team" style="text-align: center;">
        <div class="w3-col l3 m6 w3-margin-bottom">
          <img src="img/joy.png" alt="Joy"
            style="width:150px; height:150px; border-radius:50%; object-fit: cover; margin: auto;">
          <h3>Joy</h3>
          <p>Always enthusiastic and filled with energy, Joy leads the way with optimism and positivity.</p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
          <img src="img/fear.jpg" alt="Fear"
            style="width:150px; height:150px; border-radius:50%; object-fit: cover; margin: auto;">
          <h3>Fear</h3>
          <p>Fear accompanies adventure, stepping into the unknown challenges our comfort zones, awakening both excitement
            and uncertainty.</p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
          <img src="img/anx.jpg" alt="Anxiety"
            style="width:150px; height:150px; border-radius:50%; object-fit: cover; margin: auto;">
          <h3>Anxiety</h3>
          <p>Anxiety can drive ambitious people by pushing them to anticipate challenges, work harder, and strive for
            perfection, but it must be managed to avoid burnout or overwhelm.</p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
          <img src="img/shy.jpg" alt="Shy"
            style="width:150px; height:150px; border-radius:50%; object-fit: cover; margin: auto;">
          <h3>Shy</h3>
          <p>Shy often become independent as they learn to rely on themselves, finding strength and confidence in their
            ability to handle situations without heavily depending on others.</p>
        </div>
      </div>
    </div>

    <div class="w3-row-padding w3-padding-64 w3-container" id="personality">
      <h1 class="w3-center" style="font-size: 2.5em;">
        <?php echo $personalities[0]['name']; ?>
      </h1>
        <?php foreach ($lovingContent as $index => $content): ?>
        <div style="text-align: center; margin-top: <?php echo $index > 0 ? '50px' : '0'; ?>;">
          <h1 style="font-size: 2.5em;">
            <?php echo $roles[$index]; ?>
          </h1>
          <h5 style="font-size: 1.2em; max-width: 800px; margin: 0 auto;">
            <?php echo $content['description']; ?>
          </h5>
          <img src="<?php echo $content['image']; ?>" style="width:80%; height:auto; margin-top: 20px;">
        </div>
        <?php endforeach; ?>
      </div>
    </div>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container-fluid py-5" id="adventurous" style="background-color: #1a1a2e; color: white;">
    <div class="row align-items-center gy-4">
      <!-- Text Content -->
      <div class="col-lg-6 col-md-6 col-sm-12 text-start">
        <h1 class="text-center fs-2">
          <?php echo $personalities[1]['name']; ?>
        </h1>
        <?php if (!empty($personalities[1]['longDescription'])): ?>
          <p class="fs-5 mt-3 w3-justify" style="color: #dcdde1;">
            <?php echo $personalities[1]['longDescription']; ?>
          </p>
        <?php endif; ?>
      </div>

      <!-- Image Slider -->
      <div class="col-lg-6 col-md-6 col-sm-12 text-center">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <?php 
            foreach ($adventurousImages as $index => $image): ?>
              <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <img src="<?php echo $image; ?>" class="d-block w-100 rounded" alt="Image">
              </div>
            <?php endforeach; ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <p class="fs-4 fw-bold mt-3" style="color: white;">Core Memory Goal</p>
      </div>
    </div>
  </div>


  <div class="w3-container w3-padding-32">
    <h1 class="w3-center" style="font-size: 2.5em;">
        <?php echo $personalities[2]['name'];  ?>
      </h1>
      <?php if (!empty($personalities[2]['shortDescription'])): ?>
        <p style="font-size: 18px; color:hsla(240, 1.80%, 11.20%, 0.93); text-align: justify; margin-top: 20px;">
          <?php echo $personalities[2]['shortDescription']; ?>
        </p>
      <?php endif; ?>

    <div 
      class="grid-container" 
      style="
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
        gap: 20px; 
        margin-top: 30px;
      "
    >
      <?php
      $ambitionTitles = ["Career", "Achieving Goals", "Moments of Recognition"];
      ?>

      <?php foreach ($ambitiousContent as $index => $content): ?>
        <div 
          class="grid-item" 
          style="
            background: #f9f9f9; 
            padding: 20px; 
            text-align: center; 
            border: 1px solid #ddd; 
            border-radius: 10px; 
          "
        >
          <h2 style="font-size: 1.8em; margin-bottom: 10px;">
            <?php echo $ambitionTitles[$index] ?? "Ambition"; ?>
          </h2>
          <img 
            src="<?php echo $content['image']; ?>" 
            alt="Ambition Image <?php echo $index + 1; ?>" 
            style="width: 100%; height: auto; border-radius: 5px; margin-bottom: 20px;"
          >
          <p style="font-size: 1em; color: #333;">
            <?php echo $content['description']; ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="w3-container w3-padding-64" id="independent-personality" style="background-color: #1a1a2e; color: white;">
  <h1 class="w3-center" style="font-size: 2.5em;">
      <?php echo $personalities[3]['name'];  ?>
    </h1>
    <?php if (!empty($personalities[3]['longDescription'])): ?>
      <p style="font-size: 18px; color: #dcdde1; text-align: justify; margin-top: 20px;">
        <?php echo $personalities[3]['longDescription']; ?>
      </p>
    <?php endif; ?>

    <?php 
    $independentTitles = ["Strength", "Self-Growth", "Decision Making"];
    ?>


    <div 
      style="
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
        gap: 20px; 
        padding: 30px; 
      "
    >
      
      <?php foreach ($independentContent as $index => $content): ?>
        <div 
          style="
            background: transparent; 
            padding: 20px; 
            text-align: center; 
            border: 1px solid #555; 
            border-radius: 10px; 
          "
        >
          <h2 style="font-size: 1.8em; margin-bottom: 10px; color: #fff;">
            <?php echo $independentTitles[$index] ?? "Independence"; ?>
          </h2>
          <img 
            src="<?php echo $content['image']; ?>" 
            alt="<?php echo $independentTitles[$index] ?? "Independence"; ?> Image" 
            style="width: 100%; height: auto; border-radius: 5px; margin-bottom: 20px;"
          >
          <p style="font-size: 1em; color: #ddd;">
            <?php echo $content['description']; ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
    <footer class="w3-center w3-black w3-padding-16">
      <p>Created with love and inspiration</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>