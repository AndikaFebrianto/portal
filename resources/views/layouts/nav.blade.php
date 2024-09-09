<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>



    <link rel="shortcut icon" href="" type="image/x-icon" />

    <link rel="stylesheet" href="/dist/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="/dist/assets/compiled/css/app.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>

<body>
    <script src="/dist/assets/static/js/initTheme.js"></script>
    <div id="app" class="text-white">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="/"><img src="/dist/assets/img/lucas-sh-partners-logo-white-01.png"
                                    style="width: 190px" alt="Logo" /></a></a>
                        </div>
                        <div class="sidebar-toggler x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item ">
                            <a href="{{'home'}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            @canany(['create-user', 'edit-user', 'delete-user'])

                                <a href="{{ route('users.index') }}" class='sidebar-link'>
                                    <i class="bi bi-people"></i>
                                    <span>Manage Users</span>
                                </a>
                            @endcanany

                        </li>
                        <li class="sidebar-item ">
                            @canany(['create-role', 'edit-role', 'delete-role'])

                                <a href="{{ route('roles.index') }}" class='sidebar-link'>
                                    <i class="bi bi-person-fill-gear"></i>
                                    <span>Manage Roles</span>
                                </a>
                            @endcanany

                        </li>
                        <li class="sidebar-item ">
                            @canany(['create-product', 'edit-product', 'delete-product'])
                                <a href="http://192.168.101.251:8080/login" target="_blank" class='sidebar-link'>
                                    <i class="bi bi-clouds-fill"></i>
                                    <span>OwnCloud</span>
                                </a>
                            @endcanany
                        </li>
                        <li class="sidebar-item ">
                            @canany(['create-product', 'edit-product', 'delete-product'])
                                <a href="http://192.168.101.251/#/login" target="_blank" class='sidebar-link'>
                                    <i class="bi bi-hdd"></i>
                                    <span>NAS Server</span>
                                </a>
                            @endcanany
                        </li>
                        <li class="sidebar-item ">

                            <a class="sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="bi bi-escape"></i>
                                <span>{{ __('Logout') }}</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>

        @yield('content')

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2024 &copy; Woody</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                        by <a href="https://saugi.me">AFO</a></p>
                </div>
            </div>
        </footer>

    </div>
    <script src="/dist/assets/static/js/components/dark.js"></script>
    <script src="/dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const theme = localStorage.getItem('theme');

            if (theme === 'dark') {
                document.body.classList.add('dark-theme');
                const toggleDarkMode = document.getElementById('toggle-dark');
                if (toggleDarkMode) {
                    toggleDarkMode.checked = true;
                }
            } else {
                document.body.classList.add('dark-theme');
                const toggleDarkMode = document.getElementById('toggle-dark');
                if (toggleDarkMode) {
                    toggleDarkMode.checked = true;
                }
                localStorage.setItem('theme', 'dark');
            }

            const toggleDarkMode = document.getElementById('toggle-dark');
            if (toggleDarkMode) {
                toggleDarkMode.addEventListener('change', (event) => {
                    if (event.target.checked) {
                        document.body.classList.add('dark-theme');
                        localStorage.setItem('theme', 'dark');
                    } else {
                        document.body.classList.remove('dark-theme');
                        localStorage.setItem('theme', 'light');
                    }
                });
            }
        });

    </script>
</body>



</html>