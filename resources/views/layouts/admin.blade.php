<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background: linear-gradient(to bottom, #c0c0c0);
        }

        .nav-link.active {
            border-bottom: 3px solid #000;
        }

        .nav-link {
            background-color: transparent;
        }
    </style>

    <title>{{ $title }}</title>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light mt-4">
                <div class="container-fluid">
                <img src="../assets/image/home03.png" class="img-fluid" width="100" alt="logo">
                    <h1 class="display-5 fw-">Nigella Resort</h1>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/users" class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}">User</a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/rooms" class="nav-link {{ Request::is('dashboard/rooms*') ? 'active' : '' }}">Kamar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/room-facilities" class="nav-link {{ Request::is('dashboard/room-facilities*') ? 'active' : '' }}">Fasilitas Kamar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/hotel-facilities" class="nav-link {{ Request::is('dashboard/hotel-facilities*') ? 'active' : '' }}">Fasilitas Hotel</a>
                            </li>
                            <li class="nav-item text-nowrap ms-3">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="nav-link border-0" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="mt-4">
            <div class="container-fluid">

                {{-- Container --}}
                @yield('container')

            </div>
        </main>

        {{-- <footer class="footer mt-auto py-3">
                <div class="container">
                    <div class="text-center">
                        &copy; 2022 Nigella Resort
                    </div>
                </div>
            </footer> --}}
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

</body>

</html>