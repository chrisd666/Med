<?php include 'header.php' ?>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="resources.php" class="nav-link">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a href="colleges.php" class="nav-link">Colleges</a>
                    </li>
                    <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle" href="#"
                            role="button" id="dropdownMenuLink" data-toggle="dropdown">
                            Log in
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <form class="px-4 py-3">
                                <div class="form-group">
                                    <label for="email">
                                        Email address
                                    </label>
                                    <input type="email" class="form-control"
                                        placeholder="john@mail.com">
                                </div>
                                <div class="form-group">
                                    <label for="password">
                                        Password
                                    </label>
                                    <input type="email" class="form-control" id="password"
                                        placeholder="Password">
                                </div>
                                <div class="form-check pl-4">
                                    <input type="checkbox" class="form-check-input"
                                        id="dropdownCheck">
                                    <label class="form-check-label pl-0" for="dropdownCheck">
                                        Remember Me
                                    </label>
                                </div>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                New around here? Sign up
                            </a>
                            <a class="dropdown-item" href="#">
                                Forgot password?
                            </a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <section class="registration">
        <section id="login" class="mb-4">
            <div class="container">
                <div class="error bg-danger">
                    
                </div>
                <div class="card border-primary bg-dark">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form id="login" action="signin.php" method="POST">
                            <input id="email" class="form-control" type="text"
                                name="email" placeholder="Email...">
                            <input id="pwd1" class="form-control" type="password"
                                name="pwd_1" placeholder="Enter Password...">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </section>

<?php include 'footer.php' ?>