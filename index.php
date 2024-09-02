<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect</title>

    <link rel="stylesheet" href="./assets/stylesheet/css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
</head>

<body>
    <?php
    $projects = [
        [
            'tag' => 'Summer House',
            'link' => 'https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        ],
        [
            'tag' => 'Brick House',
            'link' => 'https://www.w3schools.com/w3images/house2.jpg',
        ],
        [
            'tag' => 'Renovated',
            'link' => 'https://www.w3schools.com/w3images/house3.jpg',
        ],
        [
            'tag' => 'Barn House',
            'link' => 'https://www.w3schools.com/w3images/house4.jpg',
        ],
        [
            'tag' => 'Summer House',
            'link' => 'https://images.pexels.com/photos/280222/pexels-photo-280222.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        ],
        [
            'tag' => 'Brick House',
            'link' => 'https://www.w3schools.com/w3images/house5.jpg',
        ],
        [
            'tag' => 'Renovated',
            'link' => 'https://images.pexels.com/photos/2102587/pexels-photo-2102587.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        ],
        [
            'tag' => 'Barn House',
            'link' => 'https://plakatkunst.com/cdn/shop/files/50x50-traeramme-sort-smal.jpg?v=1697931537&width=2048',
        ]
    ]

    ?>
    <!-- Header Section -->
    <div class="arc-header arc-position-fixed">
        <div class="arc-container-flui arc-flex arc-justify-content-between arc-align-items-center">
            <div class="arc-branding"> <a href="#arc-hero"><b>BR</b> Architects</a></div>
            <div class="arc-menu">
                <ul class="arc-flex">
                    <li>
                        <a href="#arc-projects">Projects
                        </a>
                        <ul class="arc-sub-menu">
                            <li class="arc-submenu">Project 1</li>
                            <li class="arc-submenu">Project 2
                                <ul class="arc-sub-menu">
                                    <li class="arc-submenu">Project 1</li>
                                    <li class="arc-submenu">Project 2</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#arc-about">About</a></li>
                    <li><a href="#arc-contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="arc-hero arc-position-relative" id="arc-hero">
        <div class="arc-hero-image arc-overlay">
            <img src="https://www.w3schools.com/w3images/architect.jpg" class="hero-img">
        </div>

        <div class="arc-hero-text arc-position-absolute">
            <h1>
                <span class="hero-text-large">BR</span>
                <span class="hero-text-small">Architects</span>
            </h1>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="arc-projects arc-section-spacing" id="arc-projects">
        <div class="arc-container">
            <div class="arc-section-header">
                <h2 class="section-heading arc-fs-xl">Projects</h2>
            </div>

            <div class="arc-projects-lists arc-pt-8">
                <div class="arc-row">
                    <?php foreach ($projects as $project) {
                        echo '<div class="arc-col arc-col-sm-6 arc-col-md-3">';
                        echo '<div class="arc-project arc-position-relative arc-mt-4">';
                        echo '<div class="arc-project-tag arc-position-absolute">' . $project["tag"] . '</div>';
                        echo '<div class="arc-image-section arc-overlay">';
                        echo '<img src="' . $project["link"] . '" class="arc-img-cover">';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="arc-about arc-section-spacing" id="arc-about">
        <div class="arc-container">
            <div class="arc-section-header">
                <h2 class="section-heading arc-fs-xl">About</h2>

                <div class="section-description arc-pt-4">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                </div>
            </div>

            <div class="arc-designers-list">
                <div class="arc-row">
                    <div class=" arc-col arc-col-sm-6 arc-col-md-3">
                        <div class="arc-designer-card arc-mt-6 arc-bg-white">
                            <div class="arc-image-section">
                                <img src="https://www.w3schools.com/w3images/team2.jpg" class='arc-img-cover'>
                            </div>
                            <div class="arc-card-content">
                                <h3 class="arc-fs-xl arc-pt-2">John Doe</h3>
                                <span class="arc-pt-3">CEO & Founder</span>
                                <p class="arc-pt-3">
                                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                                </p>
                                <button class="arc-btn-primary arc-btn-fluid arc-mt-3">Contact</button>
                            </div>
                        </div>
                    </div>
                    <div class="arc-col arc-col-sm-6 arc-col-md-3">
                        <div class="arc-designer-card arc-mt-6 arc-bg-white">
                            <div class="arc-image-section">
                                <img src="https://www.w3schools.com/w3images/team1.jpg" class='arc-img-cover'>
                            </div>
                            <div class="arc-card-content">
                                <h3 class="arc-fs-xl arc-pt-2">Jane Doe</h3>
                                <span class="arc-pt-3">Designer</span>
                                <p class="arc-pt-3">
                                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                                </p>
                                <button class="arc-btn-primary arc-btn-fluid arc-mt-3">Contact</button>
                            </div>
                        </div>
                    </div>
                    <div class="arc-col arc-col-sm-6 arc-col-md-3">
                        <div class="arc-designer-card arc-mt-6 arc-bg-white">
                            <div class="arc-image-section">
                                <img src="https://www.w3schools.com/w3images/team3.jpg" class='arc-img-cover'>
                            </div>
                            <div class="arc-card-content">
                                <h3 class="arc-fs-xl arc-pt-2">Mike Ross</h3>
                                <span class="arc-pt-3">Architect</span>
                                <p class="arc-pt-3">
                                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                                </p>
                                <button class="arc-btn-primary arc-btn-fluid arc-mt-3">Contact</button>
                            </div>
                        </div>
                    </div>
                    <div class="arc-col arc-col-sm-6 arc-col-md-3">
                        <div class="arc-designer-card arc-mt-6 arc-bg-white">
                            <div class="arc-image-section">
                                <img src="https://www.w3schools.com/w3images/team4.jpg" class='arc-img-cover'>
                            </div>
                            <div class="arc-card-content">
                                <h3 class="arc-fs-xl arc-pt-2">Dan Star</h3>
                                <span class="arc-pt-3">Architect</span>
                                <p class="arc-pt-3">
                                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                                </p>
                                <button class="arc-btn-primary arc-btn-fluid arc-mt-3">Contact</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Section -->
    <div class="arc-slider arc-section-spacing" id="arc-about">
        <div class="arc-container">
            <div class="arc-section-header">
                <h2 class="section-heading arc-fs-xl">About</h2>

                <div class="section-description arc-pt-4">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                </div>
            </div>

            <div class="arc-designers-list">
                <div class="arc-row">
                    <section class="splide" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class=" arc-col">
                                        <div class="arc-designer-card arc-mt-6 arc-bg-white">
                                            <div class="arc-image-section">
                                                <img src="https://www.w3schools.com/w3images/team2.jpg" class='arc-img-cover'>
                                            </div>
                                            <div class="arc-card-content">
                                                <h3 class="arc-fs-xl arc-pt-2">John Doe</h3>
                                                <span class="arc-pt-3">CEO & Founder</span>
                                                <p class="arc-pt-3">
                                                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                                                </p>
                                                <button class="arc-btn-primary arc-btn-fluid arc-mt-3">Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="arc-col">
                                        <div class="arc-designer-card arc-mt-6 arc-bg-white">
                                            <div class="arc-image-section">
                                                <img src="https://www.w3schools.com/w3images/team1.jpg" class='arc-img-cover'>
                                            </div>
                                            <div class="arc-card-content">
                                                <h3 class="arc-fs-xl arc-pt-2">Jane Doe</h3>
                                                <span class="arc-pt-3">Designer</span>
                                                <p class="arc-pt-3">
                                                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                                                </p>
                                                <button class="arc-btn-primary arc-btn-fluid arc-mt-3">Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="arc-col">
                                        <div class="arc-designer-card arc-mt-6 arc-bg-white">
                                            <div class="arc-image-section">
                                                <img src="https://www.w3schools.com/w3images/team3.jpg" class='arc-img-cover'>
                                            </div>
                                            <div class="arc-card-content">
                                                <h3 class="arc-fs-xl arc-pt-2">Mike Ross</h3>
                                                <span class="arc-pt-3">Architect</span>
                                                <p class="arc-pt-3">
                                                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                                                </p>
                                                <button class="arc-btn-primary arc-btn-fluid arc-mt-3">Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="arc-col">
                                        <div class=" arc-designer-card arc-mt-6 arc-bg-white">
                                            <div class="arc-image-section">
                                                <img src="https://www.w3schools.com/w3images/team4.jpg" class='arc-img-cover'>
                                            </div>
                                            <div class="arc-card-content">
                                                <h3 class="arc-fs-xl arc-pt-2">Dan Star</h3>
                                                <span class="arc-pt-3">Architect</span>
                                                <p class="arc-pt-3">
                                                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                                                </p>
                                                <button class="arc-btn-primary arc-btn-fluid arc-mt-3">Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="arc-contact arc-section-spacing arc-pb-0" id="arc-contact">
        <div class="arc-container">
            <div class="arc-section-header">
                <h2 class="section-heading arc-flex arc-fs-xl">
                    Contact <div class="arc-tool-tip arc-ml-1">
                        <ion-icon name="information-circle-outline"></ion-icon><span>Contact Me Tool Tip!!!</span>
                    </div>
                </h2>

                <div class="section-description arc-pt-4">
                    <p>
                        Lets get in touch and talk about your next project.
                    </p>
                </div>
            </div>

            <div class="arc-form arc-pt-4">
                <form class="arc-contact-form">
                    <input class="arc-mt-4 arc-p-2" type="text" placeholder="Name">
                    <input class="arc-mt-4 arc-p-2" type="text" placeholder="Email">
                    <input class="arc-mt-4 arc-p-2" type="text" placeholder="Subject">
                    <textarea class="arc-mt-4 arc-p-2" cols="2" rows="2" placeholder="Comment"></textarea>
                    <button class="arc-btn-primary arc-btn-bg-black arc-mt-4">Send Message</button>
                </form>
            </div>
        </div>
        <div class="contact-image arc-mt-8">
            <img src="https://www.w3schools.com/w3images/map.jpg" class="arc-img-cover">
        </div>
    </div>

    <!-- Footer Section -->
    <div class="arc-footer arc-p-7 arc-text-center">
        <p>
            Powered by <a href="">W3.css</a>
        </p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/splide.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>