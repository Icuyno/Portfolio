<?php include './partials/head.php'; ?>

<?php include './partials/mobile-nav.php'; ?>

<!-- mobile layout -->
<div class="mobileContainer">
    <div class="mainProjLayout">
        <main class="LayoutMobile">
            <div class="Proj_container">
                <?php
                // Define variables for ProjDetails_container
                $detailsArray = array(
                    array("Timeline", "1 week"),
                    array("Year", "2023"),
                    array("Deliverables", "Figma Wireframes and Prototypes"),
                    array("Tools", "Figma and After Effects"),
                    array("My Role", "UX Design, Prototyping, Visual Design")
                );
                ?>

                <div class="proj_title">
                    Letterboxd Year-End Recap
                </div>

                <div class="live-link-container">
                    <a class="live-link" target="_blank" rel="noopener"
                        href="https://www.figma.com/proto/Ut3aokpiuAfgvvW4ZXWkmq/Letterboxd-Year-End-Recap?page-id=0%3A1&type=design&node-id=14-23350&viewport=410%2C434%2C0.03&t=V3LtCcLeduVvsNzj-1&scaling=scale-down&starting-point-node-id=14%3A23350&mode=design">
                        View Live
                        <img src="./assets/icons/link.svg" alt="arrow link icon">
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
                        <Video controls autoplay muted loop
                            style="aspect-ratio: 4800 / 2700;image-rendering: auto;width: 100%;background-size: cover;position: absolute;inset: 0px;height: 100%;object-fit: cover;">
                            <source src="./assets/videos/letterboxd.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="caption_container">
                        <h3>Overview</h3>
                        <p>
                            The Letterboxd Year-End Recap, a potential feature addition to the app, offers users a
                            personalized summary of their annual film-watching experiences. Highlighting top genres,
                            directors, and achievements. It provides a quick and engaging reflection on their cinematic
                            journey.
                        </p>
                    </div>
                    <div class="caption_container">
                        <h3>Problem</h3>
                        <ul>
                            <li>
                                Users on Letterboxd lack a comprehensive and visually engaging overview of their annual
                                film-watching activities.
                            </li>
                            <li>
                                Existing features don't provide a consolidated, personalized recap of key statistics and
                                achievements.
                            </li>
                        </ul>
                    </div>
                    <div class="caption_container">
                        <h3>Solution</h3>
                        <ul>
                            <li>
                                Introduce the "Letterboxd Year-End Recap" feature to offer users an engaging and
                                informative summary of their film-watching year
                            </li>
                            <li>
                                Showcase top genres, directors, achievements, and other personalized highlights in a
                                user-friendly format.
                            </li>
                        </ul>
                    </div>
                    <div class="caption_container">
                        <h3>Obstacles</h3>
                        <ul>
                            <li>
                                Encountered challenges with limited access to real-time data, prompting a manual review
                                and
                                collection of
                                available data, including counts of movies watched from specific directors or actors.
                            </li>
                            <li>
                                Design considerations: Balancing visual appeal with data accuracy posed challenges in
                                presenting information effectively.
                            </li>
                        </ul>
                    </div>
                    <div class="caption_container">
                        <h3>Data Collection</h3>
                        <ul>
                            <li>
                                For this app feature to work, user-specific data must be gathered, encompassing
                                film-watching history, ratings, genres, directors, potential achievements (as this
                                feature
                                is currently unavailable on Letterboxd), and other relevant metrics.
                            </li>
                        </ul>
                    </div>

                    <div class="caption_container">
                        <h3>Ideation of the Letterboxd Year-End Recap</h3>
                        <p>
                            Thinking of possible layout and types of statistics to include...
                        </p>
                        <br>
                        <div class="img_container blur-load" style="background-image: url(./assets/thumbnails/letterboxd-ideation-small.jpg);">
                            <img src="./assets/thumbnails/letterboxd-ideation.jpg" alt="pencil drawing of layout" loading="lazy">
                        </div>
                        <br>
                        <h3>Share Pop-up Feature</h3>
                        <p>
                            Users can easily share their Letterboxd Year-End Recap on social media
                        </p>
                        <br>
                        <div class="img_container blur-load" style="background-image: url(./assets/thumbnails/share-small.jpg);">
                            <img src="./assets/thumbnails/share.jpg" alt="share recap pop-up option" loading="lazy">
                        </div>
                    </div>

                    <div class="caption_container">
                        <h3>Figma Wireframe</h3>
                        <br>
                        <div class="img_container">
                            <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450"
                                src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FUt3aokpiuAfgvvW4ZXWkmq%2FLetterboxd-Year-End-Recap%3Ftype%3Ddesign%26node-id%3D14%253A23350%26mode%3Ddesign%26t%3DlNrqbmkLvwxm1G19-1"
                                allowfullscreen></iframe>
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
                                Conduct user testing with real users to gather feedback on the design, functionality,
                                and
                                overall user experience.
                            </li>
                        </ul>
                        <p>
                            Create a Dedicated Spreadsheet:
                        </p>
                        <ul>
                            <li>
                                Develop a structured spreadsheet to systematically collect and organize user-specific
                                data,
                                such as film-watching history, ratings, genres, and directors.
                            </li>
                        </ul>
                        <p>
                            Enhance Feasibility:
                        </p>
                        <ul>
                            <li>
                                By taking ownership of data collection, aim to provide more detailed and accurate
                                results,
                                contributing to the overall feasibility and reliability of the Letterboxd Year-End Recap
                                feature.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="ProjectNav_btns">
                    <a class="Styled_link" href="coastalrolls.php">
                        <span>
                            <img src="./assets/icons/back-400.svg" alt="next icon link">
                            Prev Project
                        </span>
                    </a>
                    <a class="Styled_link" href="index.php">
                        <span>
                            Go back Home
                            <img src="./assets/icons/home.svg" alt="previous icon link">
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
    // Define variables for ProjDetails_container
    $detailsArray = array(
        array("Timeline", "1 week"),
        array("Year", "2023"),
        array("Deliverables", "Figma Wireframes and Prototypes"),
        array("Tools", "Figma and After Effects"),
        array("My Role", "UX Design, Prototyping, Visual Design")
    );
    ?>

    <main class="LayoutDesktop">

        <div class="Proj_container">

            <div class="proj_title">
                Letterboxd Year-End Recap
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
                    <Video controls autoplay muted loop
                        style="aspect-ratio: 4800 / 2700;image-rendering: auto;width: 100%;background-size: cover;position: absolute;inset: 0px;height: 100%;object-fit: cover;">
                        <source src="./assets/videos/letterboxd.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="caption_container">
                    <h3>Overview</h3>
                    <p>
                        The Letterboxd Year-End Recap, a potential feature addition to the app, offers users a
                        personalized summary of their annual film-watching experiences. Highlighting top genres,
                        directors, and achievements. It provides a quick and engaging reflection on their cinematic
                        journey.
                    </p>
                </div>
                <div class="caption_container">
                    <h3>Problem</h3>
                    <ul>
                        <li>
                            Users on Letterboxd lack a comprehensive and visually engaging overview of their annual
                            film-watching activities.
                        </li>
                        <li>
                            Existing features don't provide a consolidated, personalized recap of key statistics and
                            achievements.
                        </li>
                    </ul>
                </div>
                <div class="caption_container">
                    <h3>Solution</h3>
                    <ul>
                        <li>
                            Introduce the "Letterboxd Year-End Recap" feature to offer users an engaging and
                            informative summary of their film-watching year.
                        </li>
                        <li>
                            Showcase top genres, directors, achievements, and other personalized highlights in a
                            user-friendly format.
                        </li>
                    </ul>
                </div>
                <div class="caption_container">
                    <h3>Obstacles</h3>
                    <ul>
                        <li>
                            Encountered challenges with limited access to real-time data, prompting a manual review
                            and
                            collection of
                            available data, including counts of movies watched from specific directors or actors.
                        </li>
                        <li>
                            Design considerations: Balancing visual appeal with data accuracy posed challenges in
                            presenting information effectively.
                        </li>
                    </ul>
                </div>
                <div class="caption_container">
                    <h3>Data Collection</h3>
                    <ul>
                        <li>
                            For this app feature to work, user-specific data must be gathered, encompassing
                            film-watching history, ratings, genres, directors, potential achievements (as this
                            feature
                            is currently unavailable on Letterboxd), and other relevant metrics.
                        </li>
                    </ul>
                </div>

                <div class="caption_container">
                    <h3>Ideation of the Letterboxd Year-End Recap</h3>
                    <p>
                        Thinking of possible layout and types of statistics to include...
                    </p>
                    <br>
                    <div class="img_container blur-load" style="background-image: url(./assets/thumbnails/letterboxd-ideation-small.jpg);">
                        <img src="./assets/thumbnails/letterboxd-ideation.jpg" alt="pencil drawing of layout" loading="lazy">
                    </div>
                    <br>
                    <h3>Share Pop-up Feature</h3>
                    <p>
                        Users can easily share their Letterboxd Year-End Recap on social media
                    </p>
                    <br>
                    <div class="img_container blur-load" style="background-image: url(./assets/thumbnails/share-small.jpg);">
                        <img src="./assets/thumbnails/share.jpg" alt="share recap pop-up option" loading="lazy">
                    </div>
                </div>

                <div class="caption_container">
                    <h3>Figma Wireframe</h3>
                    <br>
                    <div class="img_container">
                        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450"
                            src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FUt3aokpiuAfgvvW4ZXWkmq%2FLetterboxd-Year-End-Recap%3Ftype%3Ddesign%26node-id%3D14%253A23350%26mode%3Ddesign%26t%3DlNrqbmkLvwxm1G19-1"
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
                            Conduct user testing with real users to gather feedback on the design, functionality,
                            and
                            overall user experience.
                        </li>
                    </ul>
                    <p>
                        Create a Dedicated Spreadsheet:
                    </p>
                    <ul>
                        <li>
                            Develop a structured spreadsheet to systematically collect and organize user-specific
                            data,
                            such as film-watching history, ratings, genres, and directors.
                        </li>
                    </ul>
                    <p>
                        Enhance Feasibility:
                    </p>
                    <ul>
                        <li>
                            By taking ownership of data collection, aim to provide more detailed and accurate
                            results,
                            contributing to the overall feasibility and reliability of the Letterboxd Year-End Recap
                            feature.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include './partials/footer.php'; ?>