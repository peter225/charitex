<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Charitex - Home</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#application">Application</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="/Registration">Sign up</a></li>
        <!-- <li><a href="#contact">S</a></li> -->
      </ul>
    </nav>
  </header>

  <main>
    <section id="hero">
      <h1>Welcome to Charitex</h1>
      <p>We are here to support those in need.</p>
      <a href="#application" class="cta-button">Apply Now</a>
    </section>

    <section id="about">
      <h2>About Us</h2>
      <p>Charitex is a non-profit organization dedicated to assisting impoverished individuals who require urgent financial support to fulfill essential needs such as education, healthcare, and other vital necessities.</p>
      <p>We believe in making a meaningful difference in the lives of those facing hardships by providing a platform for them to seek help and support from our community.</p>
    </section>

    <section id="services">
      <h2>Our Services</h2>
      <p>Our services include:</p>
      <ul>
        <li>Financial support for education</li>
        <li>Assistance with medical bills</li>
        <li>Emergency funds for essential needs</li>
      </ul>
    </section>

    <section id="application">
      <h2>Apply for Assistance</h2>
      <form id="applicationForm" class="application-form">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="reason">Reason for Assistance:</label>
          <textarea id="reason" name="reason" rows="4" required></textarea>
        </div>
        <button type="submit" class="cta-button">Submit Application</button>
      </form>
    </section>

    <section id="contact">
      <h2>Contact Us</h2>
      <p>If you have any questions or need further information, please contact us:</p>
      <p>Email: info@charitex.org</p>
      <p>Phone: 123-456-7890</p>
    </section>
  </main>

  <script src="scripts.js"></script>
</body>
</html>
