<!-- NAVBAR -->
<nav class="sticky-top navbar absolute navbar-expand-xl bg-dark text-white zindex-fixed shadow-sm" style="min-width: 330px;">
    <div class="container-lg">
        <a class="text-white fw-medium me-xl-4 me-lg-3 navbar-brand" href="/">EI2 Spareparts</a>
        <button class="navbar-dark navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form action="/search" method="post" class="my-4 mb-xl-0 my-xl-0 d-flex" role="search">
                @csrf
                <input id="search" name="search" class="search_input form-control me-2" type="texy" maxlength="9" placeholder="Material number" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                @if (Auth::check())
                <li class="nav-item dropdown">
                    <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->email }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li>
                            <a class="border-secondary border-bottom border-top dropdown-item" href="/profile">
                                <svg class="me-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                                My profile
                            </a>
                        </li>
                        <li>
                            <a class="border-secondary border-bottom text-light dropdown-item" href="/logout">
                                <svg class="me-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#dc3545" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                                </svg>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item me-2 me-md-3">
                    <a class="text-white" href="/login">Login</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>