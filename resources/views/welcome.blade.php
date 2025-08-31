<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Laravel Project</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    section {
      padding: 60px 0;
    }
    .form-section {
      background: #f8f9fa;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      padding: 30px;
    }
    .data-display {
      display: none;
      margin-top: 30px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      padding: 25px;
      animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(10px);}
      to {opacity: 1; transform: translateY(0);}
    }
      /* Fullscreen sections */
    section.fullscreen {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;
  }

  /* HOME SECTION */
  #home {
    background: linear-gradient(135deg, #00c6ff 0%, #0072ff 100%);
    color: white;
    text-align: center;
    padding: 50px;
  }
  #home h1 {
    font-size: 4rem;
    font-weight: 800;
    text-shadow: 4px 4px 15px rgba(0,0,0,0.4);
  }
  #home p {
    font-size: 1.3rem;
    margin: 20px 0;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.3);
  }
  #home .btn {
    margin: 10px;
    padding: 12px 28px;
    font-size: 1.1rem;
    border-radius: 50px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  #home .btn:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 10px 25px rgba(0,0,0,0.3);
  }
  #home .features {
    margin-top: 50px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
  }
  #home .feature-box {
    background: rgba(255,255,255,0.1);
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }
  #home .feature-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.5);
  }

  /* ABOUT SECTION */
  #about {
    background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
    color: white;
    padding: 60px 30px;
  }
  #about .about-container {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    justify-content: center;
    align-items: center;
  }
  #about .about-text {
    flex: 1 1 400px;
  }
  #about .about-text h2 {
    font-weight: 700;
    font-size: 2.5rem;
    margin-bottom: 20px;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
  }
  #about .about-text p {
    font-size: 1.2rem;
    line-height: 1.7;
    margin-bottom: 25px;
  }
  #about .about-text .btn {
    border-radius: 30px;
    padding: 10px 25px;
  }
  #about .about-image {
    flex: 1 1 400px;
    display: flex;
    justify-content: center;
  }
  #about .about-image img {
    max-width: 100%;
    border-radius: 20px;
    box-shadow: 0 25px 50px rgba(0,0,0,0.5);
    transition: transform 0.5s ease;
  }
  #about .about-image img:hover {
    transform: scale(1.05) rotate(-2deg);
  }
 
  /* For form data */

  form input, form textarea {
  background: #fff !important;
  color: #000 !important;
  border: 1px solid #ccc;
  padding: 10px;
  width: 100%;
  border-radius: 8px;
  box-shadow: inset 0 2px 5px rgba(0,0,0,0.1);
  text:left;
}

form input:focus, form textarea:focus {
  border-color: #007bff;
  outline: none;
  box-shadow: 0 0 8px rgba(0,123,255,0.3);
}


#contact {
  color:black;
  background: #f8f9fa;  /* Light background so inputs are visible */
  padding: 50px;
  border-radius: 12px;
  box-shadow: 0px 8px 20px rgba(0,0,0,0.15);
}
.nav-link{
    font: 1.5em sans-serif;
}

  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container">
    <!-- Button instead of logo -->
    <button id="showDataBtn" class="btn btn-primary shadow-sm">
      Show Form Data
    </button>

    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav" >
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Home Section -->
<section id="home" class="text-center">
<!-- Home Section -->
 
<section id="home" class="fullscreen">
  <div class="container">
    <h1>Welcome to My Project</h1>
    <p class="lead">A modern Laravel app with stunning UI, built with Bootstrap, Flexbox, and Grid.</p>
    <div>
      <a href="#about" class="btn btn-light shadow-sm">Learn More</a>
      <a href="#contact" class="btn btn-dark shadow-sm">Contact Us</a>
    </div>

    <!-- Feature Grid -->
    <div class="features mt-5">
      <div class="feature-box">
        <h4>🚀 Fast Performance</h4>
        <p>Optimized design and backend for seamless user experience.</p>
      </div>
      <div class="feature-box">
        <h4>🔒 Secure</h4>
        <p>Built with best practices for security and scalability.</p>
      </div>
      <div class="feature-box">
        <h4>⚡ Responsive</h4>
        <p>Mobile-first design that works on all screen sizes.</p>
      </div>
      <div class="feature-box">
        <h4>☁️ Cloud Ready</h4>
        <p>Deploy easily with DevOps pipelines and cloud integration.</p>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="fullscreen">
  <div class="container about-container">
    <!-- Text Part -->
    <div class="about-text">
      <h2>About Our Project</h2>
      <p>
        Our project blends Laravel’s power with modern frontend design.  
        We focus on clean code, scalability, and a user-first approach.  
        With cloud deployment and DevOps practices, we ensure high availability and performance.
      </p>
      <p>
        From simple websites to enterprise-level solutions, our aim is to deliver  
        cutting-edge technology with an aesthetic touch.
      </p>
      <a href="#contact" class="btn btn-warning shadow-lg">Get in Touch</a>
    </div>

    <!-- Image Part -->
    <div class="about-image">
    <img src="{{ asset('abs.png') }}" alt="About Project" class="img-fluid rounded shadow">
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Contact Us</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">

      <div class="col-md-8">
    <!-- Success message -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="{{ route('userdata.store') }}" method="POST" class="shadow-lg p-4 bg-white rounded">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
        </div>


        <!-- Data Display Section -->
        <div id="dataDisplay" class="data-display">
          <h4 class="fw-bold">Submitted Data</h4>
          <p><strong>Name:</strong> <span id="displayName"></span></p>
          <p><strong>Email:</strong> <span id="displayEmail"></span></p>
          <p><strong>Mobile:</strong> <span id="displayMobile"></span></p>
          <p><strong>Subject:</strong> <span id="displaySubject"></span></p>
          <p><strong>Message:</strong> <span id="displayMessage"></span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS + Custom JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const form = document.getElementById('contactForm');
  const dataDisplay = document.getElementById('dataDisplay');
  const showDataBtn = document.getElementById('showDataBtn');

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    document.getElementById('displayName').innerText = document.getElementById('name').value;
    document.getElementById('displayEmail').innerText = document.getElementById('email').value;
    document.getElementById('displayMobile').innerText = document.getElementById('mobile').value;
    document.getElementById('displaySubject').innerText = document.getElementById('subject').value;
    document.getElementById('displayMessage').innerText = document.getElementById('message').value;

    alert("Form submitted successfully!");
  });

  showDataBtn.addEventListener('click', function() {
    dataDisplay.style.display = dataDisplay.style.display === "block" ? "none" : "block";
    if(dataDisplay.style.display === "block") {
      dataDisplay.scrollIntoView({ behavior: "smooth" });
    }
  });
</script>

</body>
</html>