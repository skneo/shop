<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
    <div class='container-fluid'>
        <a class='navbar-brand' href='/'>Shop</a>
        <!-- <img src='images/logo.png' alt='BrandName' width='30' height='30'> -->
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                <li class='nav-item'>
                    <a id='home' class='nav-link active ' aria-current='page' href='/'>Home</a>
                </li>
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    echo "<li class='nav-item'>
                        <a class='nav-link active ' href='afterLogin.php'>AfterLogin</a>
                        </li>";
                }
                ?>
                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle active ' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        Category
                    </a>
                    <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <li><a class='dropdown-item ' href='submenu1.php'>SubMenu1</a></li>
                        <li><a class='dropdown-item ' href='submenu2.php'>SubMenu2</a></li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a id='about' class='nav-link active ' aria-current='page' href='/add_product'>Add Product</a>
                </li>
                <li class='nav-item'>
                    <a id='about' class='nav-link active ' aria-current='page' href='/all_products'>All Products</a>
                </li>
                <li class='nav-item'>
                    <a id='about' class='nav-link active ' aria-current='page' href='/products/trashed'>Trashed Products</a>
                </li>
                <li class='nav-item'>
                    <a id='about' class='nav-link active ' aria-current='page' href='/about'>About Us</a>
                </li>
                <li class='nav-item'>
                    <a id='contact' class='nav-link active ' aria-current='page' href='/contact'>Contact Us</a>
                </li>
            </ul>
            <?php
            if (!isset($_SESSION['loggedin'])) {
                echo "<a href='login.php' class='btn btn-primary'>Admin Login</a>";
            } else {
                echo "<div class='btn-group mx-3'>
                        <button id='userMenu' type='button' class='btn btn-danger dropdown-toggle ' data-bs-toggle='dropdown' aria-expanded='false' value=''>
                        UserName
                        </button>
                        <ul class='dropdown-menu mr-5'>
                        <li><a class='dropdown-item ' href='logout.php'>Logout</a></li>
                        <li><a class='dropdown-item ' href='changePassword.php'>Change Password</a></li>
                        </ul>
                        </div>";
            }
            ?>
        </div>
    </div>
</nav>
<style>
    /* body {
        background-color: rgb(218, 225, 233);
    } */

    @media only screen and (min-width: 960px) {
        .navbar .navbar-nav .nav-item .nav-link {
            padding: 0 0.5em;
        }

        .navbar .navbar-nav .nav-item:not(:last-child) .nav-link {
            border-right: 1px solid #ffffff;
        }
    }
</style>