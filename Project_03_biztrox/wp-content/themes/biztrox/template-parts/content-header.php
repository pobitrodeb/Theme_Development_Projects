<!-- navigation -->
<header>
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item">
                            <a href="mailto:info@companyname.com">info@companyname.com</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="callto:1234565523">Call Us Now:
                                <span class="ml-2"> 123 456 5523</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" id="searchOpen">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Home
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="index.html">Home Page 1</a>
                                <a class="dropdown-item" href="homepage-2.html">Home Page 2</a>
                                <a class="dropdown-item" href="homepage-3.html">Home Page 3</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                About Us
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="about.html">About page</a>
                                <a class="dropdown-item" href="about-2.html">About page-2</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Service
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="service.html">Service page</a>
                                <a class="dropdown-item" href="service-2.html">Service page-2</a>
                                <a class="dropdown-item" href="service-single.html">Service Single</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="team.html">Team Page</a>
                                <a class="dropdown-item" href="pricing.html">Pricing Page</a>
                                <a class="dropdown-item" href="project.html">project Page</a>
                                <a class="dropdown-item" href="faqs.html">FAQs Page</a>
                                <a class="dropdown-item" href="project-single.html">Project Single</a>
                                <a class="dropdown-item" href="team-single.html">Team Single</a>
                                <a class="dropdown-item" href="404.html">404 Page</a>
                                <a class="dropdown-item" href="signup.html">Sign Up Page</a>
                                <a class="dropdown-item" href="login.html">Login Page</a>
                                <a class="dropdown-item" href="comming-soon.html">Comming Soon Page</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Blog
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="blog.html">Blog Page</a>
                                <a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a>
                                <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Elements
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/components/buttons.html">Buttons</a>
                                <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/components/icons.html">Icons</a>
                                <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/components/typography.html">Typography</a>
                                <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/components/accordions.html">Accordions</a>
                                <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/components/blog-contents.html">Blog Contents</a>
                                <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/components/service-contents.html">Service Contents</a>
                                <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/components/team-contents.html">Team Contents</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Search Form -->
<div class="search-form">
    <a href="#" class="close" id="searchClose">
        <i class="ti-close"></i>
    </a>
    <div class="container">
        <form action="#" class="row">
            <div class="col-lg-10 mx-auto">
                <h3>Search Here</h3>
                <div class="input-wrapper">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Enter Keywords..." required>
                    <button>
                        <i class="ti-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /navigation -->