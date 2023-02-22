<header class="header pt-4 pb-3">
  <!-- SIDEBAR -->
  <h1 class="main-head" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
      aria-controls="offcanvasExample" style="cursor: pointer">
      <svg class="mb-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <g id="2 - Regular / menu">
              <path id="menu-Regular"
                  d="M2.25 5C2.25 4.586 2.586 4.25 3 4.25H16C16.414 4.25 16.75 4.586 16.75 5C16.75 5.414 16.414 5.75 16 5.75H3C2.586 5.75 2.25 5.414 2.25 5ZM21 11.25H3C2.586 11.25 2.25 11.586 2.25 12C2.25 12.414 2.586 12.75 3 12.75H21C21.414 12.75 21.75 12.414 21.75 12C21.75 11.586 21.414 11.25 21 11.25ZM12 18.25H3C2.586 18.25 2.25 18.586 2.25 19C2.25 19.414 2.586 19.75 3 19.75H12C12.414 19.75 12.75 19.414 12.75 19C12.75 18.586 12.414 18.25 12 18.25Z"
                  fill="#151515" />
          </g>
      </svg>
      Services
  </h1>
  <aside>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
          aria-labelledby="offcanvasExampleLabel" style="background: #f0bd70">
          <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                  Offcanvas
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
              <div>
                  Some text as placeholder. In real life you can have the
                  elements you have chosen. Like, text, images, lists, etc.
              </div>
              <div class="dropdown mt-3">
                  <button class="btn btn-secondary dropdown-toggle" type="button"
                      data-bs-toggle="dropdown">
                      Dropdown button
                  </button>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li>
                          <a class="dropdown-item" href="#">Another action</a>
                      </li>
                      <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </aside>
  <div class="d-flex justify-content-center align-content-center gap-3">
      <div class="d-flex align-content-center flex-column">
          <h6 class="profile-head">{{session()->get('business_name')}}</h6>
          <p class="profile-description">Til-10pm| 28 Oct</p>
      </div>
      <div class="d-flex justify-content-center align-content-center gap-2">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                  d="M21.5301 20.469L16.8361 15.775C18.0301 14.344 18.7501 12.505 18.7501 10.5C18.7501 5.951 15.0491 2.25 10.5001 2.25C5.95112 2.25 2.25012 5.951 2.25012 10.5C2.25012 15.049 5.95112 18.75 10.5001 18.75C12.5051 18.75 14.3441 18.0301 15.7751 16.8361L20.4691 21.53C20.6151 21.676 20.8071 21.75 20.9991 21.75C21.1911 21.75 21.3831 21.677 21.5291 21.53C21.8231 21.237 21.8231 20.762 21.5301 20.469ZM3.75012 10.5C3.75012 6.778 6.77812 3.75 10.5001 3.75C14.2221 3.75 17.2501 6.778 17.2501 10.5C17.2501 14.222 14.2221 17.25 10.5001 17.25C6.77812 17.25 3.75012 14.222 3.75012 10.5Z"
                  fill="#1F1F1F" />
          </svg>
          <a href="{{route('logout')}}">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                  d="M12.7502 21C12.7502 21.414 12.4142 21.75 12.0002 21.75H8.00024C5.38124 21.75 3.25024 19.619 3.25024 17V7C3.25024 4.381 5.38124 2.25 8.00024 2.25H12.0002C12.4142 2.25 12.7502 2.586 12.7502 3C12.7502 3.414 12.4142 3.75 12.0002 3.75H8.00024C6.20824 3.75 4.75024 5.208 4.75024 7V17C4.75024 18.792 6.20824 20.25 8.00024 20.25H12.0002C12.4142 20.25 12.7502 20.586 12.7502 21ZM20.5302 11.47L16.5302 7.46997C16.2372 7.17697 15.7622 7.17697 15.4692 7.46997C15.1762 7.76297 15.1762 8.23801 15.4692 8.53101L18.1892 11.251H10.0002C9.58624 11.251 9.25024 11.587 9.25024 12.001C9.25024 12.415 9.58624 12.751 10.0002 12.751H18.1892L15.4692 15.4709C15.1762 15.7639 15.1762 16.239 15.4692 16.532C15.6152 16.678 15.8072 16.752 15.9992 16.752C16.1912 16.752 16.3832 16.679 16.5292 16.532L20.5292 12.532C20.8232 12.237 20.8232 11.763 20.5302 11.47Z"
                  fill="#1F1F1F" />
              </svg>
          </a>
      </div>
  </div>

  <!--# SIDEBAR *-->
</header>

