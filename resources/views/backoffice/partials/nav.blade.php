<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Hi {{Auth::user()->name}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/back/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/background">Background</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/classe">Classes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/event">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/footer">Footer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/logo">Logo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/mail">Mail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/map">Map</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/nav">Navbar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/newsletter">Newsletter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/schedule">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/testimonial">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/titre">Titres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/trainer">Trainers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back/user">Users</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">My Courses</a></li>
                <li><a class="dropdown-item" href="#">My Profile</a></li>
              </ul>
            </div>
          </li>
        </ul>

         <div>
          
          <form action="{{ route('logout') }}" method="post">
              @csrf

              <button class="btn btn-white shadow" type="submit">
                  <a href="#">

                      <i class='bx bx-log-out' id="log_out"></i>


                  </a>

              </button>
          </form>
         </div>
      </div>
    </div>
  </nav>