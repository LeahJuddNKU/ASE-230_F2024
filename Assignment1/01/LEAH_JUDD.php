<?php
// Personal Information
$name = "Leah Judd";
$jobTitle = "Junior Cybersecurity Student";
$email = "leahemail@example.com";
$phone = "(123) 456-7890";
$linkedin = "linkedin.com/in/leahexample";
$github = "github.com/leahexample";
$website = "leahwebsite.com";
$summary = "Junior Cybersecurity student at NKU with hands-on experience managing servers using Ubuntu and open-source control panels.";

// Work Experience
$workExperiences = [
    [
        'title' => 'Role Position 1',
        'company' => 'Role Place 1',
        'period' => '2023 - Present',
        'description' => 'Role Position 1 information.',
        'achievements' => 'Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.',
        'technologies' => ['Angular', 'Python', 'jQuery', 'Webpack', 'HTML/SASS', 'PostgresSQL']
    ]
];

// Skills and Tools
$skills = [
    ['name' => 'Angular', 'proficiency' => 98],
    ['name' => 'React', 'proficiency' => 94],
    ['name' => 'JavaScript', 'proficiency' => 96],
    ['name' => 'Node.js', 'proficiency' => 92],
    ['name' => 'HTML/CSS/SASS/LESS', 'proficiency' => 96]
];
$otherSkills = ['DevOps', 'Code Review', 'Git', 'Unit Testing', 'Wireframing', 'Sketch', 'Balsamiq', 'WordPress', 'Shopify'];

// Education
$education = [
    ['degree' => 'Cybersecurity', 'institution' => 'Northern Kentucky University', 'year' => '2022 - Current']
];

// Awards
$awards = [
    ['name' => 'Award Name Lorem', 'description' => 'Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem.'],
    ['name' => 'Award Name Ipsum', 'description' => 'Award desc goes here, ultricies nec, pellentesque.']
];

// Languages
$languages = [
    ['name' => 'English', 'level' => 'Native']
];

// Interests
$interests = ['Climbing', 'Snowboarding', 'Cooking'];

// Projects
$projects = [
    ['title' => 'Project 1', 'description' => 'Brief description of Project 1.', 'link' => '#', 'image' => 'assets/images/projects/1/proj1.jpg'],
    ['title' => 'Project 2', 'description' => 'Brief description of Project 2.', 'link' => '#', 'image' => 'assets/images/projects/2/proj2.jpg'],
    ['title' => 'Project 3', 'description' => 'Brief description of Project 3.', 'link' => '#', 'image' => 'assets/images/projects/3/proj3.jpg']
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $name; ?>'s Resume</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $name; ?>'s resume">
    <meta name="author" content="<?php echo $name; ?>">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">
</head>
<body>
    <article class="resume-wrapper text-center position-relative">
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
            <header class="resume-header pt-4 pt-md-0">
                <div class="row">
                    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                        <img class="picture" src="assets/images/profile.jpg" alt="">
                    </div>
                    <div class="col">
                        <div class="row p-4 justify-content-center justify-content-md-between">
                            <div class="primary-info col-auto">
                                <h1 class="name mt-0 mb-1 text-white text-uppercase"><?php echo strtoupper($name); ?></h1>
                                <div class="title mb-3"><?php echo $jobTitle; ?></div>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $email; ?></a></li>
                                    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $phone; ?></a></li>
                                </ul>
                            </div>
                            <div class="secondary-info col-auto mt-2">
                                <ul class="resume-social list-unstyled">
                                    <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo $linkedin; ?></a></li>
                                    <li class="mb-3"><a class="text-link" href="#"><span the fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo $github; ?></a></li>
                                    <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo $website; ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="resume-body p-5">
                <!-- Summary -->
                <section class="resume-section summary-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
                    <div class="resume-section-content">
                        <p class="mb-0"><?php echo $summary; ?></p>
                    </div>
                </section>

                <!-- Work Experience -->
                <section class="resume-section experience-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
                    <div class="resume-section-content">
                        <div class="resume-timeline position-relative">
                            <?php foreach ($workExperiences as $experience) { ?>
                            <article class="resume-timeline-item position-relative pb-5">
                                <div class="resume-timeline-item-header mb-2">
                                    <div class="d-flex flex-column flex-md-row">
                                        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $experience['title']; ?></h3>
                                        <div class="resume-company-name ms-auto"><?php echo $experience['company']; ?></div>
                                    </div>
                                    <div class="resume-position-time"><?php echo $experience['period']; ?></div>
                                </div>
                                <div class="resume-timeline-item-desc">
                                    <p><?php echo $experience['description']; ?></p>
                                    <?php if (isset($experience['achievements'])) { ?>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
                                        <p><?php echo $experience['achievements']; ?></p>
                                    <?php } ?>
                                    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                    <ul class="list-inline">
                                        <?php foreach ($experience['technologies'] as $tech) { ?>
                                            <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo $tech; ?></span></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </article>
                            <?php } ?>
                        </div>
                    </div>
                </section>

                <!-- Skills Section -->
                <section class="resume-section skills-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills & Tools</h2>
                    <div class="resume-section-content">
                        <?php foreach ($skills as $skill) { ?>
                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold"><?php echo $skill['name']; ?></h4>
                                <div class="progress resume-progress">
                                    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo $skill['proficiency']; ?>%" aria-valuenow="<?php echo $skill['proficiency']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        <?php } ?>
                        <h4 class="resume-skills-cat font-weight-bold">Others</h4>
                        <ul class="list-inline">
                            <?php foreach ($otherSkills as $otherSkill) { ?>
                                <li class="list-inline-item"><span class="badge badge-light"><?php echo $otherSkill; ?></span></li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>

                <!-- Education Section -->
                <section class="resume-section education-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
                    <div class="resume-section-content">
                        <ul class="list-unstyled">
                            <?php foreach ($education as $edu) { ?>
                            <li class="mb-2">
                                <div class="resume-degree font-weight-bold"><?php echo $edu['degree']; ?></div>
                                <div class="resume-degree-org"><?php echo $edu['institution']; ?></div>
                                <div class="resume-degree-time"><?php echo $edu['year']; ?></div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>

                <!-- Awards Section -->
                <section class="resume-section reference-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
                    <div class="resume-section-content">
                        <ul class="list-unstyled resume-awards-list">
                            <?php foreach ($awards as $award) { ?>
                            <li class="mb-2 ps-4 position-relative">
                                <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
                                <div class="resume-award-name"><?php echo $award['name']; ?></div>
                                <div class="resume-award-desc"><?php echo $award['description']; ?></div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>

                <!-- Languages Section -->
                <section class="resume-section language-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
                    <div class="resume-section-content">
                        <ul class="list-unstyled resume-lang-list">
                            <?php foreach ($languages as $language) { ?>
                            <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo $language['name']; ?></span> <small class="text-muted font-weight-normal">(<?php echo $language['level']; ?>)</small></li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>

                <!-- Interests Section -->
                <section class="resume-section interests-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
                    <div class="resume-section-content">
                        <ul class="list-unstyled">
                            <?php foreach ($interests as $interest) { ?>
                            <li class="mb-1"><?php echo $interest; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>

                <!-- Projects Section -->
                <section class="resume-section projects-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
                    <div class="row">
                        <?php foreach ($projects as $project) { ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $project['title']; ?></h5>
                                    <p class="card-text"><?php echo $project['description']; ?></p>
                                    <a href="<?php echo $project['link']; ?>" class="btn btn-outline-primary">Go to link</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </section>
            </div>
        </div>
    </article>

    <footer class="footer text-center pt-2 pb-5">
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php echo $name; ?></small>
    </footer>
</body>
</html>
