<nav class="navbar navbar-expand-md sticky-top navbar-light" id="navbar">
  <div class="navTop">
    <div class="container">
      <div class="navTop-row">
        <div class="navTop-row-left">
          <div class="navTop-row-leftA">
            <img src="./dist/images/fa-email.png" class="img-fluid">
            contact@emecesolutionslimited.co.uk
          </div>
          <div class="navTop-row-leftB">
            <img src="./dist/images/nav-line.png" class="img-fluid">
          </div>
          <div class="navTop-row-leftA">
            <img src="./dist/images/fa-phone.png" class="img-fluid">
            01506368958
          </div>
        </div>
        <div class="navTop-row-right">
          <a href=""><img src="./dist/images/fa-facebook.png" class="img-fluid"></a>
          <a href=""><img src="./dist/images/fa-x.png" class="img-fluid"></a>
          <a href=""><img src="./dist/images/fa-instagram.png" class="img-fluid"></a>
          <a href=""><img src="./dist/images/fa-youtube.png" class="img-fluid"></a>
          <a href=""><img src="./dist/images/fa-whatsapp.png" class="img-fluid"></a>
          <a href=""><img src="./dist/images/fa-link.png" class="img-fluid"></a>
        </div>
      </div>
    </div>
  </div>
<div class="container mobileNav">
 <a class="navbar-brand" href="./"><img src="./dist/images/logo.png" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="./">HOME</a>
      </li>
      <!-- <li class="nav-item dropdown dropdownLL">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        PROGRAMS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="strategic-management">STRATEGIC MANAGEMENT</a>
          <a class="dropdown-item" href="#">CORPORATE GOVERNANCE</a>
          <a class="dropdown-item" href="#">OPERATIONS MANAGEMENT</a>
          <a class="dropdown-item" href="#">HOSPITALITY & RETAIL MANAGEMENT</a>
          <a class="dropdown-item" href="#">QUALITY MANAGEMENT</a>
          <a class="dropdown-item" href="#">MANAGEMENT SKILLS</a>
          <a class="dropdown-item" href="#">PROJECT & PROGRAMME MANAGEMENT</a>
          <a class="dropdown-item" href="#">SECRETARIES & ADMINISTRATIVE MANAGEMENT</a>
          <a class="dropdown-item" href="#">PROCUREMENT & CONTRACT MANAGEMENT</a>
          <a class="dropdown-item" href="#">LEADERSHIP & CHANGE MANAGEMENT</a>
        </div>
      </li> -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        ABOUT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="our-company">Our Company</a>
          <a class="dropdown-item" href="our-faculty">Our Faculty</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="our-company">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq">FAQS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="courses">COURSES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">CONTACT</a>
      </li>
      <li class="nav-item">
        <div class="search-container">
          <input type="text" id="search-input" class="search-input" placeholder="Search...">
          <button id="search-icon" class="search-icon">
            <img src="./dist/images/fa-search.png" class="img-fluid">
          </button>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>

<script>
  document.getElementById('search-icon').addEventListener('click', function() {
    const searchInput = document.getElementById('search-input');
    searchInput.classList.toggle('active');
    if (searchInput.classList.contains('active')) {
        searchInput.focus();
    }
});
</script>