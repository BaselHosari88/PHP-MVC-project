<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <i class="bi bi-house-door-fill"></i>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/register">
                        <button class="btn btn-sm btn-outline-dark" type="button">Register</button>
                    </a>
                </li>
                <?php
                if(isset($_SESSION['user'])){
                echo "
                <li class='nav-item'>
                    <a class='nav-link active' href='/logout'>
                        <button class='btn btn-sm btn-outline-dark' type='button'>Logout</button>
                    </a>
                </li>
                ";
                }
                else{
                echo "
                <li class='nav-item'>
                    <a class='nav-link active' href='/login'>
                        <button class='btn btn-sm btn-outline-dark' type='button'>Login</button>
                    </a>
                </li>" ;

                }
                ?>
            </ul>
        </div>
    </div>
</nav>