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
        'nextButtonIcon' => './assets/icons/next-600.svg', // Replace with the actual icon path
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
        'liveLink' => 'https://icuyno.github.io/CoastalRolls/',
        'nextLink' => 'letterboxd.php', // Replace with the actual link for the next project
        'backLink' => 'devote.php',
        'backButtonIcon' => './assets/icons/back-600.svg',
        'backButtonText' => 'Prev Project',
        'nextButtonText' => 'Next Project',
        'nextButtonIcon' => './assets/icons/next-600.svg',
    ),
    'letterboxd.php' => array(
        'liveLink' => 'https://www.figma.com/file/Ut3aokpiuAfgvvW4ZXWkmq/Letterbox-Wrapped?type=design&node-id=0%3A1&mode=design&t=wXmEsPQV7FmJFKZt-1',
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
                    echo '<img src="./assets/icons/link.svg" alt="arrow icon to redirect to live version of the project">';
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23"
                                fill="none">
                                <path
                                    d="M18.5714 1.42871H1.42411C0.638393 1.42871 0 2.07603 0 2.87068V19.9867C0 20.7814 0.638393 21.4287 1.42411 21.4287H18.5714C19.3571 21.4287 20 20.7814 20 19.9867V2.87068C20 2.07603 19.3571 1.42871 18.5714 1.42871ZM6.04464 18.5716H3.08036V9.02693H6.04911V18.5716H6.04464ZM4.5625 7.72335C3.61161 7.72335 2.84375 6.95103 2.84375 6.0046C2.84375 5.05818 3.61161 4.28585 4.5625 4.28585C5.50893 4.28585 6.28125 5.05818 6.28125 6.0046C6.28125 6.9555 5.51339 7.72335 4.5625 7.72335ZM17.1562 18.5716H14.192V13.9287C14.192 12.8216 14.1696 11.3975 12.6518 11.3975C11.1071 11.3975 10.8705 12.6028 10.8705 13.8484V18.5716H7.90625V9.02693H10.75V10.3305H10.7902C11.1875 9.5805 12.1563 8.79032 13.5982 8.79032C16.5982 8.79032 17.1562 10.768 17.1562 13.3394V18.5716Z"
                                    fill="black" />
                            </svg>
                        </a>
                        <a target="_blank" rel="noopener" href="https://github.com/Icuyno">
                            <svg xmlns="http://www.w3.org/2000/svg" height="23" width="20"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path fill="#000000"
                                    d="M448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM265.8 407.7c0-1.8 0-6 .1-11.6c.1-11.4 .1-28.8 .1-43.7c0-15.6-5.2-25.5-11.3-30.7c37-4.1 76-9.2 76-73.1c0-18.2-6.5-27.3-17.1-39c1.7-4.3 7.4-22-1.7-45c-13.9-4.3-45.7 17.9-45.7 17.9c-13.2-3.7-27.5-5.6-41.6-5.6s-28.4 1.9-41.6 5.6c0 0-31.8-22.2-45.7-17.9c-9.1 22.9-3.5 40.6-1.7 45c-10.6 11.7-15.6 20.8-15.6 39c0 63.6 37.3 69 74.3 73.1c-4.8 4.3-9.1 11.7-10.6 22.3c-9.5 4.3-33.8 11.7-48.3-13.9c-9.1-15.8-25.5-17.1-25.5-17.1c-16.2-.2-1.1 10.2-1.1 10.2c10.8 5 18.4 24.2 18.4 24.2c9.7 29.7 56.1 19.7 56.1 19.7c0 9 .1 21.7 .1 30.6c0 4.8 .1 8.6 .1 10c0 4.3-3 9.5-11.5 8C106 393.6 59.8 330.8 59.8 257.4c0-91.8 70.2-161.5 162-161.5s166.2 69.7 166.2 161.5c.1 73.4-44.7 136.3-110.7 158.3c-8.4 1.5-11.5-3.7-11.5-8zm-90.5-54.8c-.2-1.5 1.1-2.8 3-3.2c1.9-.2 3.7 .6 3.9 1.9c.3 1.3-1 2.6-3 3c-1.9 .4-3.7-.4-3.9-1.7zm-9.1 3.2c-2.2 .2-3.7-.9-3.7-2.4c0-1.3 1.5-2.4 3.5-2.4c1.9-.2 3.7 .9 3.7 2.4c0 1.3-1.5 2.4-3.5 2.4zm-14.3-2.2c-1.9-.4-3.2-1.9-2.8-3.2s2.4-1.9 4.1-1.5c2 .6 3.3 2.1 2.8 3.4c-.4 1.3-2.4 1.9-4.1 1.3zm-12.5-7.3c-1.5-1.3-1.9-3.2-.9-4.1c.9-1.1 2.8-.9 4.3 .6c1.3 1.3 1.8 3.3 .9 4.1c-.9 1.1-2.8 .9-4.3-.6zm-8.5-10c-1.1-1.5-1.1-3.2 0-3.9c1.1-.9 2.8-.2 3.7 1.3c1.1 1.5 1.1 3.3 0 4.1c-.9 .6-2.6 0-3.7-1.5zm-6.3-8.8c-1.1-1.3-1.3-2.8-.4-3.5c.9-.9 2.4-.4 3.5 .6c1.1 1.3 1.3 2.8 .4 3.5c-.9 .9-2.4 .4-3.5-.6zm-6-6.4c-1.3-.6-1.9-1.7-1.5-2.6c.4-.6 1.5-.9 2.8-.4c1.3 .7 1.9 1.8 1.5 2.6c-.4 .9-1.7 1.1-2.8 .4z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>