<?php include './partials/head.php'; ?>

<?php include './partials/mobile-nav.php'; ?>

<!-- mobile layout -->
<div class="mobileContainer">
    <div class="mainProjLayout">
        <main class="LayoutMobile">
            <div class="Proj_container">

                <?php
                $detailsArray = array(
                    array("Timeline", "3 weeks"),
                    array("Year", "2023"),
                    array("Deliverables", "Figma Wireframes, Prototypes, Pitch Deck"),
                    array("Tools", "Figma, Miro, Adobe Illustrator, After Effects"),
                    array("My Role", "UX Design, Prototyping, User Research, Visual Design")
                );
                ?>
                <div class="proj_title">
                    Food Query
                </div>

                <div class="live-link-container">
                    <a class="live-link" target="_blank" rel="noopener"
                        href="https://www.figma.com/file/wX2BNaXikrZ3HS1LJaWEET/Food-Query?type=design&node-id=0%3A1&mode=design&t=FaxkoMO1K3nwuuCJ-1">
                        View Live
                        <img src="./assets/icons/link.svg" alt=" arrow link icon">
                    </a>
                </div>

                <div class="ProjDetails_container">
                    <?php
                    foreach ($detailsArray as $detail) {
                        ?>
                        <div class="RowDetails">
                            <div>
                                <?php echo $detail[0]; ?>
                            </div>
                            <div>
                                <div>
                                    <?php echo $detail[1]; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="Proj_img_container">
                    <div class="img_container">
                        <iframe width="768" height="432"
                            src="https://miro.com/app/embed/uXjVNNVfhyM=/?pres=1&frameId=3458764570424229818&embedId=173945311303"
                            frameborder="0" scrolling="no" allow="fullscreen; clipboard-read; clipboard-write"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="caption_container">
                        <h3>Food Query App</h3>
                        <p>
                            An app where users can socialize in the context of food discovery.
                        </p>
                    </div>
                    <div class="caption_container">
                        <h3>Problem</h3>
                        <p>
                            Address the problem of fake reviews on food discovery apps by understanding motivations
                            behind
                            users creating fake reviews. By understanding these motivations, the goal is to develop
                            effective strategies that prevent fraudulent activities on review platforms.
                        </p>
                    </div>
                    <div class="caption_container">
                        <h3>Why do users create fake reviews?</h3>
                        <p>
                            Users create fake reviews for various reasons, understanding the motivation behind this
                            can help
                            in developing strategies to prevent fraudulent activities on review platforms.
                        </p>
                    </div>
                    <div class="caption_container">
                        <h3>Common reasons why:</h3>
                        <ul>
                            <li>Promotion or demotion of a business.</li>
                            <li>
                                Users are often incentivized to leave positive reviews by businesses offering
                                discounts or
                                other rewards.
                            </li>
                            <li>
                                Other motivations may include the manipulation of ratings, SEO and visibility
                                strategies,
                                and more.
                            </li>
                        </ul>
                    </div>
                    <div class="caption_container">
                        <h3>Why is this important users?</h3>
                        <ul>
                            <li>
                                Users prioritize their safety and security, especially when trying new
                                restaurants.
                            </li>
                            <li>
                                It is crucial for maintaining trust and credibility among users.
                            </li>
                            <li>
                                Users seek high-quality and authentic experiences when exploring new dining
                                options.
                            </li>
                            <li>
                                Just like news, users want a fair and unbiased representation of businesses on
                                review
                                platforms.
                            </li>
                            <li>
                                Users expect review platforms to be reliable sources of information.
                            </li>
                        </ul>
                    </div>
                    <div class="caption_container">
                        <h3>What about business owners?</h3>
                        <ul>
                            <li>
                                Online reviews significantly impact a business's reputation. Fake reviews can
                                harm a
                                business's image by providing inaccurate information about the quality of
                                products or
                                services.
                            </li>
                            <li>
                                Small businesses face intense competition, and online reviews play a crucial
                                role in
                                standing out.
                            </li>
                            <li>
                                Genuine reviews provide valuable feedback for businesses to understand customer
                                preferences and areas for improvement.
                            </li>
                            <li>
                                Customer acquisition. They influence potential
                                customers' decisions and can drive new business.
                            </li>
                        </ul>
                    </div>
                    <div class="caption_container">
                        <h3>Solution</h3>
                        <p>Encourage Reviews</p>
                        <br>
                        <div class="img_container">
                            <Video controls autoplay muted loop
                                style="aspect-ratio: 4800 / 2700;image-rendering: auto;width: 100%;background-size: cover;position: absolute;inset: 0px;height: 100%;object-fit: cover;">
                                <source src="./assets/videos/ProfileandReview_foodquery.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <br>
                        <ul>
                            <li>
                                Enable users to share their favourite food experiences, recommend restaurants, and
                                engage in
                                discussions about various cuisines.
                            </li>
                            <li>
                                Prompt users to provide detailed reviews and preferences, allowing the app to offer
                                tailored
                                suggestions that enhance their food discovery experience.
                            </li>
                            <li>
                                Enable users to upload photos, videos, or even voice snippets to enrich their
                                reviews and
                                make them more expressive.
                            </li>
                            <li>
                                Prioritize elements that enhance the social experience, ensure easy navigation, and
                                make the
                                food discovery process enjoyable.
                            </li>
                            <li>
                                Prioritize features that enhance socialization, such as user profiles and focus on
                                strategies to encourage user retention and continuous interaction.
                            </li>
                        </ul>
                        <br>
                        <p>Authentication Features</p>
                        <br>
                        <div class="img_container">
                            <Video controls autoplay muted loop
                                style="aspect-ratio: 4800 / 2700;image-rendering: auto;width: 100%;background-size: cover;position: absolute;inset: 0px;height: 100%;object-fit: cover;">
                                <source src="./assets/videos/Onboarding_foodquery.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <br>
                        <ul>
                            <li>
                                Utilize email or phone number verification, and potentially explore social media
                                linking, to
                                validate the authenticity of users.
                            </li>
                            <li>
                                Provide users with an easy and accessible way to report reviews that they believe to
                                be
                                fake, encouraging community participation in maintaining platform integrity.
                            </li>
                            <li>
                                Provide information to users about the security measures implemented and encourage
                                them to
                                be vigilant against fake reviews.
                            </li>
                        </ul>
                    </div>

                    <div class="caption_container">
                        <h3>Ideation of User Profile</h3>
                        <br>
                        <div class="img_container blur-load" style="background-image: url(./assets/thumbnails/foodquery_ideation-small.jpg);">
                            <img src="./assets/thumbnails/foodquery_ideation.jpg"
                                alt="white board drawing of user profile mockup" loading="lazy">
                        </div>
                        <br>
                        <p>
                            My inspiration for this ideation was the <a href="https://letterboxd.com/" target="_blank"
                                rel="noopener noreferrer" style="color: #000;">Letterboxd</a> app.
                            Anticipate a user profile with insights and customization.
                        </p>
                    </div>

                    <div class="caption_container">
                        <h3>Figma Wireframe</h3>
                        <br>
                        <div class="img_container">
                            <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450"
                                src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FwX2BNaXikrZ3HS1LJaWEET%2FFood-Query%3Ftype%3Ddesign%26node-id%3D64%253A905%26mode%3Ddesign%26t%3DKXdqH9wpgbcdJfeD-1"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    <div class="caption_container">
                        <h3>
                            Next Steps
                        </h3>
                        <p>
                            Live User Testing:
                        </p>
                        <ul>
                            <li>
                                Conduct live user testing with diverse participants to gather real-world insights.
                            </li>
                        </ul>
                        <p>
                            Iterative Improvements:
                        </p>
                        <ul>
                            <li>
                                Continuously refine the user flow based on findings from live testing.
                            </li>
                        </ul>
                        <p>
                            UI for Reporting:
                        </p>
                        <ul>
                            <li>
                                Implement a user-friendly UI for reporting profiles to enhance platform safety and
                                accountability.
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="ProjectNav_btns">
                    <a class="Styled_link" href="index.php">
                        <span>
                            <img src="./assets/icons/home.svg" alt="previous icon link">
                            Go back Home
                        </span>
                    </a>
                    <a class="Styled_link" href="devote.php">
                        <span>
                            Next Project
                            <img src="./assets/icons/next-400.svg" alt="next icon link">
                        </span>
                    </a>
                </div>
            </div>

        </main>
    </div>
</div>

<!-- desktop layout -->

<div class="desktop-container">

    <?php include './partials/left-aside.php'; ?>

    <?php
    $detailsArray = array(
        array("Timeline", "3 weeks"),
        array("Year", "2023"),
        array("Deliverables", "Figma Wireframes, Prototypes, Pitch Deck"),
        array("Tools", "Figma, Miro, Adobe Illustrator, After Effects"),
        array("My Role", "UX Design, Prototyping, User Research, Visual Design")
    );
    ?>
    <main class="LayoutDesktop">
        <div class="Proj_container">
            <div class="proj_title">
                Food Query
            </div>

            <div class="live-link-container">
                <a class="live-link" target="_blank" rel="noopener"
                    href="https://www.figma.com/proto/wX2BNaXikrZ3HS1LJaWEET/Food-Query?page-id=0%3A1&type=design&node-id=5-10&viewport=-94%2C-348%2C0.3&t=W4GNMTTfRTQSyf3V-1&scaling=scale-down&starting-point-node-id=5%3A2&show-proto-sidebar=1&mode=design">
                    View Live
                    <img src="<?php echo $linkIcon; ?>" alt="arrow icon that will redirect to new page to view live link to project">
                </a>
            </div>

            <div class="ProjDetails_container">
                <?php
                foreach ($detailsArray as $detail) {
                    ?>
                    <div class="RowDetails">
                        <div>
                            <?php echo $detail[0]; ?>
                        </div>
                        <div>
                            <div>
                                <?php echo $detail[1]; ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <div class="Proj_img_container">
                <div class="img_container">
                    <iframe width="768" height="432"
                        src="https://miro.com/app/embed/uXjVNNVfhyM=/?pres=1&frameId=3458764570424229818&embedId=173945311303"
                        frameborder="0" scrolling="no" allow="fullscreen; clipboard-read; clipboard-write"
                        allowfullscreen></iframe>
                </div>
                <div class="caption_container">
                    <h3>Food Query App</h3>
                    <p>
                        An app where users can socialize in the context of food discovery.
                    </p>
                </div>
                <div class="caption_container">
                    <h3>Problem</h3>
                    <p>
                        Address the problem of fake reviews on food discovery apps by understanding motivations behind
                        users creating fake reviews. By understanding these motivations, the goal is to develop
                        effective strategies that prevent fraudulent activities on review platforms.
                    </p>
                </div>
                <div class="caption_container">
                    <h3>Why do users create fake reviews?</h3>
                    <p>
                        Users create fake reviews for various reasons, understanding the motivation behind this can help
                        in developing strategies to prevent fraudulent activities on review platforms.
                    </p>
                </div>
                <div class="caption_container">
                    <h3>Common reasons why:</h3>
                    <ul>
                        <li>Promotion or demotion of a business.</li>
                        <li>
                            Users are often incentivized to leave positive reviews by businesses offering discounts or
                            other rewards.
                        </li>
                        <li>
                            Other motivations may include the manipulation of ratings, SEO and visibility strategies,
                            and more.
                        </li>
                    </ul>
                </div>
                <div class="caption_container_grid">
                    <div class="caption_container_list">
                        <h3>Why is this important users?</h3>
                        <ul>
                            <li>
                                Users prioritize their safety and security, especially when trying new restaurants.
                            </li>
                            <li>
                                It is crucial for maintaining trust and credibility among users.
                            </li>
                            <li>
                                Users seek high-quality and authentic experiences when exploring new dining options.
                            </li>
                            <li>
                                Just like news, users want a fair and unbiased representation of businesses on review
                                platforms.
                            </li>
                            <li>
                                Users expect review platforms to be reliable sources of information.
                            </li>
                        </ul>
                    </div>
                    <div class="caption_container_list">
                        <h3>What about business owners?</h3>
                        <ul>
                            <li>
                                Online reviews significantly impact a business's reputation. Fake reviews can harm a
                                business's image by providing inaccurate information about the quality of products or
                                services.
                            </li>
                            <li>
                                Small businesses face intense competition, and online reviews play a crucial role in
                                standing out.
                            </li>
                            <li>
                                Genuine reviews provide valuable feedback for businesses to understand customer
                                preferences and areas for improvement.
                            </li>
                            <li>
                                Customer acquisition. They influence potential
                                customers' decisions and can drive new business.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="caption_container">
                    <h3>Solution</h3>
                    <p>Encourage Reviews</p>
                    <br>
                    <div class="img_container">
                        <Video controls autoplay muted loop
                            style="aspect-ratio: 4800 / 2700;image-rendering: auto;width: 100%;background-size: cover;position: absolute;inset: 0px;height: 100%;object-fit: cover;">
                            <source src="./assets/videos/ProfileandReview_foodquery.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <br>
                    <ul>
                        <li>
                            Enable users to share their favourite food experiences, recommend restaurants, and engage in
                            discussions about various cuisines.
                        </li>
                        <li>
                            Prompt users to provide detailed reviews and preferences, allowing the app to offer tailored
                            suggestions that enhance their food discovery experience.
                        </li>
                        <li>
                            Enable users to upload photos, videos, or even voice snippets to enrich their reviews and
                            make them more expressive.
                        </li>
                        <li>
                            Prioritize elements that enhance the social experience, ensure easy navigation, and make the
                            food discovery process enjoyable.
                        </li>
                        <li>
                            Prioritize features that enhance socialization, such as user profiles and focus on
                            strategies to encourage user retention and continuous interaction.
                        </li>
                    </ul>
                </div>
                <div class="caption_container">
                    <p>Authentication Features</p>
                    <br>
                    <div class="img_container">
                        <Video controls autoplay muted loop
                            style="aspect-ratio: 4800 / 2700;image-rendering: auto;width: 100%;background-size: cover;position: absolute;inset: 0px;height: 100%;object-fit: cover;">
                            <source src="./assets/videos/Onboarding_foodquery.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <br>
                    <ul>
                        <li>
                            Utilize email or phone number verification, and potentially explore social media linking, to
                            validate the authenticity of users.
                        </li>
                        <li>
                            Provide users with an easy and accessible way to report reviews that they believe to be
                            fake, encouraging community participation in maintaining platform integrity.
                        </li>
                        <li>
                            Provide information to users about the security measures implemented and encourage them to
                            be vigilant against fake reviews.
                        </li>
                    </ul>
                </div>

                <div class="caption_container">
                    <h3>Ideation of User Profile</h3>
                    <br>
                    <div class="img_container blur-load" style="background-image: url(./assets/thumbnails/foodquery_ideation-small.jpg);">
                        <img src="./assets/thumbnails/foodquery_ideation.jpg"
                            alt="white board drawing of user profile mockup" loading="lazy">
                    </div>
                    <br>
                    <p>
                        My inspiration for this ideation was the <a href="https://letterboxd.com/" target="_blank"
                            rel="noopener noreferrer" style="color: #000;">Letterboxd</a> app.
                        Anticipate a user profile with insights and customization.
                    </p>
                </div>

                <div class="caption_container">
                    <h3>Figma Wireframe</h3>
                    <br>
                    <div class="img_container">
                        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450"
                            src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FwX2BNaXikrZ3HS1LJaWEET%2FFood-Query%3Ftype%3Ddesign%26node-id%3D64%253A905%26mode%3Ddesign%26t%3DKXdqH9wpgbcdJfeD-1"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="caption_container">
                    <h3>
                        Next Steps
                    </h3>
                    <p>
                        Live User Testing:
                    </p>
                    <ul>
                        <li>
                            Conduct live user testing with diverse participants to gather real-world insights.
                        </li>
                    </ul>
                    <p>
                        Iterative Improvements:
                    </p>
                    <ul>
                        <li>
                            Continuously refine the user flow based on findings from live testing.
                        </li>
                    </ul>
                    <p>
                        UI for Reporting:
                    </p>
                    <ul>
                        <li>
                            Implement a user-friendly UI for reporting profiles to enhance platform safety and
                            accountability.
                        </li>
                    </ul>
                </div>

            </div>




    </main>
</div>

<?php include './partials/footer.php'; ?>