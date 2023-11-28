


<?php include './partials/head.php'; ?>

<?php include './partials/mobile-nav.php'; ?>

<!-- mobile layout -->
<div class="mobileContainer">
    <div class="mainProjLayout">
        <main class="LayoutMobile">
        <?php 

        $mobileImage1 = "https://placehold.co/600x400";
        $mobileImage2 = "https://placehold.co/600x400";
        $objective = "Craft a compelling and coherent narrative aligned with the brand's values and engage the target audience";

        $imagesArray = array(
            array(
                'src' => $mobileImage1,
                'alt' => 'screenshots of blog posts',
                'title' => 'Objective',
                'description' => $objective
            ),
            array(
                'src' => $mobileImage2,
                'alt' => 'instagram feed screenshots',
                'title' => 'Editorial Photoshoots',
                'description' => 'In this editorial photoshoot, we aimed to produce in-house content, showcase our creativity, and attract our target audience. We did two photoshoots on separate occasions, hence the contrasting colour palettes. Overall, our team treated this photoshoot as our creative playground. It was experimental, but we captured a different mood and colour palette for each photoshoot. The basis for each colour palette and lighting was the model\'s personality.'
            ),
        );

        //Title and link
        $projectTitle = "Letterboxd Dashboard";
        $liveLink = "https://your-live-link.com";
        $linkIcon = "./assets/icons/link.svg";

        // Define variables for ProjDetails_container
        $detailsArray = array(
            array("Timeline", "Jan 15, 2023 - April 9, 2023"),
            array("Deliverables", "Social Media Blog Posts"),
            array("UI/UX", "Rose Rabano and Pranavi Thapa"),
            array("Graphic Design", "Riti Prasad and Janelle Cao"),
            array("Content Manager", "Izzy Cuyno")
        );

        $contribution = "Creative development of our social media presence. Content creation (social media posts and blogs). Aimed to showcase creativity and build an online community";

        // Key takeaways or concluding statements
        $keyTakeawaysTitle = "Key Takeaways";
        $keyTakeawaysContent = "Contributing to the creative development of Glaze Media’s online presence was a fun and collaborative experience that pushed me out of my comfort zone. It was a valuable learning journey for our team, considering it was our first time working together and managing and building a brand from scratch. This experience helped me gain insight into building a brand’s identity and effectively managing content.";

        $futurePlansContent = "I look forward to taking what I have learned and continuing to grow as a creative professional in this field.";

        // next link
        $nextLink = "devote.php";
        $nextButtonText = "Next Project";
        $nextButtonIcon = "./assets/icons/next-600.svg";

        include './partials/projects-component.php'; 

        

        ?>
        </main>
    </div>
</div>

<!-- desktop layout -->

<div class="desktop-container">
    
<?php include './partials/left-aside.php'; ?>

<main class="LayoutDesktop">
<?php 

$desktopimage1 = "https://placehold.co/600x400";
$desktopimage2 = "https://placehold.co/600x400";
$objective = "Craft a compelling and coherent narrative aligned with the brand's values and engage the target audience";

$imagesArray = array(
    array(
        'src' => $desktopimage1,
        'alt' => 'screenshots of blog posts',
        'title' => 'Objective',
        'description' => $objective
    ),
    array(
        'src' => $desktopimage2,
        'alt' => 'instagram feed screenshots',
        'title' => 'Editorial Photoshoots',
        'description' => 'In this editorial photoshoot, we aimed to produce in-house content, showcase our creativity, and attract our target audience. We did two photoshoots on separate occasions, hence the contrasting colour palettes. Overall, our team treated this photoshoot as our creative playground. It was experimental, but we captured a different mood and colour palette for each photoshoot. The basis for each colour palette and lighting was the model\'s personality.'
    ),
);

//Title and link
$projectTitle = "Letterboxd Dashboard";
$liveLink = "https://your-live-link.com";
$linkIcon = "./assets/icons/link.svg";

// Define variables for ProjDetails_container
$detailsArray = array(
    array("Timeline", "Jan 15, 2023 - April 9, 2023"),
    array("Deliverables", "Social Media Blog Posts"),
    array("UI/UX", "Rose Rabano and Pranavi Thapa"),
    array("Contributors", "Riti Prasad and Janelle Cao"),
    array("Content Manager", "Izzy Cuyno")
);

// images and caption
$contribution = "Creative development of our social media presence. Content creation (social media posts and blogs). Aimed to showcase creativity and build an online community";



// Key takeaways or concluding statements
$keyTakeawaysTitle = "Key Takeaways";
$keyTakeawaysContent = "Contributing to the creative development of Glaze Media’s online presence was a fun and collaborative experience that pushed me out of my comfort zone. It was a valuable learning journey for our team, considering it was our first time working together and managing and building a brand from scratch. This experience helped me gain insight into building a brand’s identity and effectively managing content.";

$futurePlansContent = "I look forward to taking what I have learned and continuing to grow as a creative professional in this field.";

include './partials/projects-component.php'; 

?>
</main>
</div>

<?php include './partials/footer.php'; ?>