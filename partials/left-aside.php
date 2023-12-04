
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$projectPages = array(
    'foodquery.php' => array(
        'liveLink' => 'https://www.figma.com/proto/wX2BNaXikrZ3HS1LJaWEET/Food-Query?page-id=0%3A1&type=design&node-id=5-10&viewport=-94%2C-348%2C0.3&t=W4GNMTTfRTQSyf3V-1&scaling=scale-down&starting-point-node-id=5%3A2&show-proto-sidebar=1&mode=design',
        'nextLink' => 'devote.php', // Replace with the actual link for the next project
        'backLink' => 'index.php',
        'backButtonIcon' => './assets/icons/home.svg',
        'backButtonText' => 'Go Back Home',
        'nextButtonText' => 'Next Project',
        'nextButtonIcon' => './assets/icons/next-600.svg',// Replace with the actual icon path
    ),
    'devote.php' => array(
        'liveLink' => 'http://devote-tarot.isabellecuyno.com/',
        'nextLink' => 'coastalrolls.php', // Replace with the actual link for the next project
        'backLink' => 'foodquery.php',
        'backButtonIcon' => './assets/icons/back-600.svg',
        'backButtonText' => 'Prev Project',
        'nextButtonText' => 'Next Project',
        'nextButtonIcon' => './assets/icons/next-600.svg',
    ),
    'coastalrolls.php' => array(
        'liveLink' => '#',
        'nextLink' => 'letterboxd.php', // Replace with the actual link for the next project
        'backLink' => 'devote.php',
        'backButtonIcon' => './assets/icons/back-600.svg',
        'backButtonText' => 'Prev Project',
        'nextButtonText' => 'Next Project',
        'nextButtonIcon' => './assets/icons/next-600.svg',
    ),
    'letterboxd.php' => array(
        'liveLink' => 'https://glazemedia.princessrabano.ca/blog-post/',
        'nextLink' => 'index.php', // Replace with the actual link for the next project
        'backLink' => 'coastalrolls.php',
        'backButtonIcon' => './assets/icons/back-600.svg',
        'backButtonText' => 'Prev Project',
        'nextButtonText' => 'Go Back Home',
        'nextButtonIcon' => './assets/icons/home.svg',
    ),
);

$isAboutPage = $currentPage === 'about.php';
$isProjectPage = array_key_exists($currentPage, $projectPages);
$projectInfo = $isProjectPage ? $projectPages[$currentPage] : array(); // Default to an empty array if not a project page
$isWorkPage = ($currentPage === 'work.php'); // Check if the current page is work.php
?>

<div class="left-aside-container">
    <div class="logo-container">
        <a href="index.php">
            <img src="./assets/icons/logo.svg" alt="logo and home link">
        </a>
    </div>

    <div class="content-aside-container">
        <div class="content-aside-div">
            <div class="nav-btns-container">
                <a href="work.php">
                    <div class="home-btn">
                        <img src="./assets/icons/work-400.svg" alt="home icon link">
                    </div>
                    <div class="text-block">
                        Work
                    </div>
                </a>
                <a href="about.php?page=about">
                    <div class="home-btn">
                        <img src="./assets/icons/info.svg" alt="home icon link">
                    </div>
                    <div class="text-block">
                        About
                    </div>
                </a>
            </div>
            <div class="intro-container">
                <?php
                if ($isProjectPage) {
                    // Link for live site
                    echo '<div class="Website_link">';
                    echo '<a class="Styled_link" target="_blank" rel="noopener" href="' . $projectInfo['liveLink'] . '">';
                    echo 'View Live';
                    echo '<img src="./assets/icons/link.svg" alt="">';
                    echo '</a>';
                    echo '</div>';

                    // Add ProjectNav_btns here
                    echo '<div class="Next-project-btns">';

                    echo '<a class="Back-project-link" href="' . $projectInfo['backLink'] . '">';
                    echo '<span>';
                    echo '<img src="' . $projectInfo['backButtonIcon'] . '" alt="back icon link">';
                    echo $projectInfo['backButtonText'];
                    echo '</span>';
                    echo '</a>';

                    echo '<a class="Next-project-link" href="' . $projectInfo['nextLink'] . '">';
                    echo '<span>';
                    echo $projectInfo['nextButtonText'];
                    echo '<img src="' . $projectInfo['nextButtonIcon'] . '" alt="next icon link">';
                    echo '</span>';
                    echo '</a>';

                    echo '</div>';
                } elseif ($isAboutPage) {
                    // Display image for the About page
                    echo '<div class="intro-div">';
                    echo '<img class="profile-image" src="./assets/profilepic/pizzylated.jpg" alt="picture of the creator of this site">';
                    echo '</div>';
                } else {
                    echo '<div class="intro-div">';
                    echo '<h2>Izzy Cuyno</h2>';
                    echo '<h1>Howdy, I’m a web designer with a pioneering spirit and I intend to create memorable interfaces and experiences that delight the senses.</h1>';
                    echo '</div>';
                }
                ?>
            </div>
            <?php
            if ($isWorkPage) {
                    echo '<div class="filter-container">';
                    echo '<div class="text-container">';
                    echo 'Filter by project';
                    echo '</div>';
                    echo '<button class="filter-btn" onclick="filterProjects(\'All\')">';
                    echo 'All';
                    echo '</button>';
                    echo '<button class="filter-btn" onclick="filterProjects(\'UI/UX\')">';
                    echo 'UI/UX';
                    echo '</button>';
                    echo '<button class="filter-btn" onclick="filterProjects(\'Web Development\')">';
                    echo 'Web Development';
                    echo '</button>';
                    echo '<button class="filter-btn" onclick="filterProjects(\'Product Design\')">';
                    echo 'Product Design';
                    echo '</button>';
                    echo '<button class="filter-btn" onclick="filterProjects(\'Collaborative\')">';
                    echo 'Collaborative';
                    echo '</button>';
                    echo '</div>';
                }
            ?>
            <footer class="linksFootermobile">
                <div class="MFooterGridRow">
                    <div class="MFooterName">Email</div>
                    <div class="MFooterLink">
                        <a href="mailto:izzycuyno@gmail.com">izzycuyno@gmail.com</a>
                    </div>
                </div>
                <div class="MFooterGridRow">
                    <div class="MFooterName">Network(s)</div>
                    <div class="MFooterLink">
                        <a target="_blank" rel="noopener" href="https://www.linkedin.com/in/izzy-cuyno-design/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23" fill="none">
                            <path d="M18.5714 1.42871H1.42411C0.638393 1.42871 0 2.07603 0 2.87068V19.9867C0 20.7814 0.638393 21.4287 1.42411 21.4287H18.5714C19.3571 21.4287 20 20.7814 20 19.9867V2.87068C20 2.07603 19.3571 1.42871 18.5714 1.42871ZM6.04464 18.5716H3.08036V9.02693H6.04911V18.5716H6.04464ZM4.5625 7.72335C3.61161 7.72335 2.84375 6.95103 2.84375 6.0046C2.84375 5.05818 3.61161 4.28585 4.5625 4.28585C5.50893 4.28585 6.28125 5.05818 6.28125 6.0046C6.28125 6.9555 5.51339 7.72335 4.5625 7.72335ZM17.1562 18.5716H14.192V13.9287C14.192 12.8216 14.1696 11.3975 12.6518 11.3975C11.1071 11.3975 10.8705 12.6028 10.8705 13.8484V18.5716H7.90625V9.02693H10.75V10.3305H10.7902C11.1875 9.5805 12.1563 8.79032 13.5982 8.79032C16.5982 8.79032 17.1562 10.768 17.1562 13.3394V18.5716Z" fill="black"/>
                        </svg>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

