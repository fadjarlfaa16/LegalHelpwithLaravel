<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LegalHelp</title>
    <link rel="stylesheet" href="../user/consult.css" />
    <link rel="stylesheet" href="../user/homestyle.css" />
    <link rel="stylesheet" href="../user/legalpedia.css" />
    <link rel="stylesheet" href="../user/forum.css" />
    <link rel="stylesheet" href="../user/navbar.css" />
    <link rel="stylesheet" href="../user/sliding-menu.css" />
    <link rel="stylesheet" href="../user/footer.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body style="background-color: #e3e0cd">
    <nav class="navbar fixed-top bg-teal-600">
        <div class="d-flex" id="judulNav">
                <div class="d-flex align-items-center" >
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="border: none; margin-left: 1rem; color: #387478;">
                    <span class="navbar-toggler-icon navbar-dark"></span>
                  </button>
                  <h2 style="font-size: 1.5rem;">LegalHelp.</h2>
                </div>
                <div class="listNav align-items-center">
                  <ul class="navbar-nav ms-auto list-group-horizontal navbar-dark">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('users.home') ? 'active' : '' }}" href="{{ route('users.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('users.consult') ? 'active' : '' }}" href="{{ route('users.consult') }}">Consult</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('users.forum') ? 'active' : '' }}" href="{{ route('users.forum') }}">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('users.legalpedia') ? 'active' : '' }}" href="{{ route('users.legalpedia') }}">LegalPedia</a>
                    </li>
                </ul>
                </div>
          
                <!-- Offcanvas Menu / Hamburger Menu -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" data-bs-backdrop="static">
                  <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="d-flex align-items-start align-items-center ms-5">
                    <div class="offcanvas-profile-img me-3" style="background-image: url('../../img/FSG.jpeg');"></div>
                    <div class="offcanvas-profile me-3">
                      @if (Auth::check())
                      <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                      @endif
                      
                      <div class="status mb-1">
                        <span>Rakyat Sipil</span>
                      </div>
                      <div class="balance">
                        <span>Your balance: 4.90$</span>
                      </div>
                      @if (Auth::check())
                      <div class="logout">
                        <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <button>Logout</button>
                        </form>
                      </div>
                      @endif
                     
                    </div>
                  </div>
                  <div class="offcanvas-body">
                    <ul class="navbar-nav align-items-center">
                      <li class="nav-item">
                        <a class="nav-link" href="notification">
                          Notifications
                          <span class="badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread notifications</span>
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        {{-- <a class="nav-link sidebar-link" data-bs-toggle="modal" data-bs-target="#chatModal" style="cursor: pointer;">
                          Messages
                          <span class="badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span> --}}
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            </nav>
            <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width: 900px;">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="chatModalLabel">Messages</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row g-0 h-100">
                        <div class="col-4 chat-list">
                          <div class="chat-message d-flex gap-3 active">
                            <div class="chat-avatar"></div>
                            <div class="flex-grow-1">
                              <div class="message-name">Free Chatbot</div>
                              <div class="message-preview">Jika benar, anda terkena pasal...</div>
                            </div>
                          </div>
                          <div class="chat-message d-flex gap-3">
                            <div class="chat-avatar"></div>
                            <div class="flex-grow-1">
                              <div class="message-name">Zaqie Paris Hutapea</div>
                              <div class="message-preview">Hahaha wayolo kena penjara...</div>
                            </div>
                          </div>          
                          <div class="chat-message d-flex gap-3">
                            <div class="chat-avatar"></div>
                            <div class="flex-grow-1">
                              <div class="message-name">Rayn si FastLearner</div>
                              <div class="message-preview">Googling sendiri gw males ny...</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-8 chat-content">
                          <div class="messages-container">
                            <div class="d-flex justify-content-end">
                              <div class="message-bubble">
                                Aku baru nyuri uang mamah apakah aku salah?
                              </div>
                            </div>      
                            <div class="d-flex">
                              <div class="response-bubble">
                                Jika benar, anda terkena pasal Pasal 362 KUHP yang mana Pasal ini mengatur tentang pencurian secara umum. Barang siapa mengambil barang sesuatu, yang seluruhnya atau sebagian adalah kepunyaan orang lain, dengan maksud untuk dimiliki secara melawan hukum, diancam karena pencurian dengan pidana penjara paling lama 5 tahun atau pidana denda paling banyak enam puluh rupiah.
                              </div>
                            </div>
                          </div>
                          <div class="input-container">
                            <div class="d-flex gap-3 align-items-center">
                              <input type="text" class="form-control" placeholder="Type anything" id="message-input">
                              <div class="chat-avatar"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            {{ $slot }}

              <footer class="container-fluid">
                <div>
                  <p>&copy; 2024 Anak Kebanyakan Alpa. All rights reserved.</p>
                </div>
              </footer>
              <script src="https://cdn.tailwindcss.com"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
      ></script>
</body>
</html>