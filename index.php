<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect</title>

    <link rel="stylesheet" href="./assets/stylesheet/css/style.css" />
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
            'link' => 'https://www.w3schools.com/w3images/house2.jpg',
        ],
        [
            'tag' => 'Brick House',
            'link' => 'https://www.w3schools.com/w3images/house5.jpg',
        ],
        [
            'tag' => 'Renovated',
            'link' => 'https://www.w3schools.com/w3images/house4.jpg',
        ],
        [
            'tag' => 'Barn House',
            'link' => 'https://www.w3schools.com/w3images/house3.jpg',
        ]
    ]

    ?>
    <!-- Header Section -->
    <div class="arc-header arc-position-fixed">
        <div class="arc-container-fluid">
            <div class="arc-row">
                <div class="arc-branding"> <a href="#"><b>BR</b> Architects</a></div>
                <div class="arc-menu">
                    <ul class="arc-row">
                        <li><a href="#arc-projects">Projects</a></li>
                        <li><a href="#arc-about">About</a></li>
                        <li><a href="#arc-contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="arc-hero">
        <div class="arc-hero-image arc-position-relative">
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
    <div class="arc-projects" id="arc-projects">
        <div class="arc-container">
            <div class="arc-section-header arc-pt-8">
                <h2 class="section-heading arc-fs-xl">Projects</h2>
            </div>

            <div class="arc-projects-lists arc-pt-8">
                <div class="arc-row">
                    <?php foreach ($projects as $project) {
                        echo '<div class="arc-col arc-col-sm-6 arc-col-md-3">';
                        echo '<div class="arc-project arc-position-relative arc-mt-4">';
                        echo '<div class="arc-project-tag arc-position-absolute">' . $project["tag"] . '</div>';
                        echo '<div class="arc-image-section">';
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
    <div class="arc-about" id="arc-about">
        <div class="arc-container">
            <div class="arc-section-header arc-pt-8">
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

            <div class="arc-designers-list arc-pt-8">
                <div class="arc-row">
                    <div class="arc-designer-card arc-col arc-col-sm-6 arc-col-md-3 arc-mb-4">
                        <img src="https://www.w3schools.com/w3images/team2.jpg">
                        <div class="arc-card-content">
                            <h3 class="arc-fs-xl arc-pt-2">John Doe</h3>
                            <span class="arc-pt-3">CEO & Founder</span>
                            <p class="arc-pt-3">
                                Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                            </p>
                            <button class="arc-btn-primary arc-btn-fluid arc-mt-3">Contact</button>
                        </div>
                    </div>
                    <div class="arc-designer-card arc-col arc-col-sm-6 arc-col-md-3">
                        <img src="https://www.w3schools.com/w3images/team1.jpg">
                        <div class="arc-card-content">
                            <h3 class="arc-fs-xl arc-pt-2">Jane Doe</h3>
                            <span class="arc-pt-3">Designer</span>
                            <p class="arc-pt-3">
                                Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                            </p>
                            <button class="arc-btn-primary arc-btn-fluid arc-mt-3 arc-mb-4">Contact</button>
                        </div>
                    </div>
                    <div class="arc-designer-card arc-col arc-col-sm-6 arc-col-md-3">
                        <img src="https://www.w3schools.com/w3images/team3.jpg">
                        <div class="arc-card-content">
                            <h3 class="arc-fs-xl arc-pt-2">Mike Ross</h3>
                            <span class="arc-pt-3">Architect</span>
                            <p class="arc-pt-3">
                                Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                            </p>
                            <button class="arc-btn-primary arc-btn-fluid arc-mt-3 arc-mb-4">Contact</button>
                        </div>
                    </div>
                    <div class="arc-designer-card arc-col arc-col-sm-6 arc-col-md-3">
                        <img src="https://www.w3schools.com/w3images/team4.jpg">
                        <div class="arc-card-content">
                            <h3 class="arc-fs-xl arc-pt-2">Dan Star</h3>
                            <span class="arc-pt-3">Architect</span>
                            <p class="arc-pt-3">
                                Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                            </p>
                            <button class="arc-btn-primary arc-btn-fluid arc-mt-3 arc-mb-4">Contact</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="arc-contact" id="arc-contact">
        <div class="arc-container">
            <div class="arc-section-header arc-pt-8 arc-pb-0">
                <h2 class="section-heading arc-fs-xl">Contact</h2>

                <div class="section-description arc-pt-4">
                    <p>
                        Lets get in touch and talk about your next project.
                    </p>
                </div>
            </div>

            <div class="arc-form arc-pt-4">
                <form class="arc-contact-form">
                    <input class="arc-mt-2 arc-p-2" type="text" placeholder="Name">
                    <input class="arc-mt-2 arc-p-2" type="text" placeholder="Email">
                    <input class="arc-mt-2 arc-p-2" type="text" placeholder="Subject">
                    <textarea class="arc-mt-2 arc-p-2" cols="2" rows="2" placeholder="Comment"></textarea>
                    <button class="arc-btn-primary arc-btn-bg-black arc-mt-2">Send Message</button>
                </form>
            </div>
        </div>
        <div class="contact-image arc-mt-8">
            <img src="https://www.w3schools.com/w3images/map.jpg">
        </div>
    </div>

    <!-- Footer Section -->
    <div class="arc-footer arc-p-7">
        <p>
            Powered by <a href="">W3.css</a>
        </p>
    </div>
</body>

</html>