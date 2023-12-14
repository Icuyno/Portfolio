<?php include './partials/head.php'; ?>

<?php include './partials/mobile-nav.php'; ?>

<!-- mobile layout -->
<div class="mobileContainer">
    <div class="mainProjLayout">
        <main class="LayoutMobile">
            <div class="Proj_container">

                <?php
                $detailsArray = array(
                    array("Timeline", "2 weeks"),
                    array("Year", "2023"),
                    array("Deliverables", "High-fidelity wireframes and live website"),
                    array("Tools", "VS code, Github, HTML, CSS, JS, Photoshop"),
                    array("My Role", "UI Designer and Front-End developer")
                );
                ?>
                <div class="proj_title">
                    Coastal Rolls
                </div>

                <div class="live-link-container">
                    <a class="live-link" target="_blank" rel="noopener" href="https://icuyno.github.io/CoastalRolls/">
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
                    <div>
                        <div class="img_container">
                            <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450"
                                src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FrsOP3QM5leXMBYYZPqWmfg%2FCoastal-Rolls%3Ftype%3Ddesign%26node-id%3D0%253A1%26mode%3Ddesign%26t%3D8LSZY8OjPFPnert9-1"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="caption_container">
                            <h3>Objective</h3>
                            <p>
                                Translate high-fidelity wireframes into a responsive website for a fictitous restaurant,
                                incorporating dynamic navigation and interactivity using HTML, CSS, and JavaScript.
                            </p>
                        </div>
                        <div class="caption_container">
                            <h3>Key Features</h3>
                            <p>
                                Responsive Design Implementation
                            </p>
                            <ul>
                                <li>
                                    Use of Media Queries for breakpoints, ensuring a seamless experience on various
                                    devices.
                                </li>
                                <li>
                                    Integrated jQuery library for enhanced interactivity and dynamic content
                                    handling.
                                </li>
                            </ul>
                            <p>
                                Dynamic Navigation
                            </p>
                            <ul>
                                <li>
                                    Implemented a dynamic navigation menu for improved user experience.
                                </li>
                                <li>
                                    JavaScript event handling and manipulation of the Document Object Model (DOM) to
                                    toggle
                                    menu visibility, enhancing accessibility.
                                </li>
                            </ul>
                            <p>
                                Lightbox Integration
                            </p>
                            <ul>
                                <li>
                                    Utilized JavaScript to create a modal gallery, allowing users to interact with
                                    images.
                                </li>
                            </ul>
                        </div>

                        <div class="caption_container">
                            <h3>Lightbox Feature</h3>
                            <div class="img_container">
                                <Video controls autoplay muted loop
                                    style="aspect-ratio: 4800 / 2700;image-rendering: auto;width: 100%;background-size: cover;position: absolute;inset: 0px;height: 100%;object-fit: cover;">
                                    <source src="./assets/videos/coastalrolls-gallery.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="caption_container">
                                <h3>
                                    Key Takeaways
                                </h3>
                                <ul>
                                    <li>
                                        The project provided valuable insights in my journey towards
                                        becoming a UX designer.
                                    </li>
                                    <li>
                                        Gaining familiarity with front-end web development
                                        fundamentals enabled a deeper understanding of design challenges from a
                                        developer's
                                        perspective.
                                    </li>
                                    <li>
                                        This project helped me develop better communication and articulation skills,
                                        especially if I had to convey ideas to a development team
                                    </li>
                                    <li>
                                        The ability to communicate seamlessly with developers
                                        contributes to a streamlined design and development process.
                                    </li>
                                    <li>
                                        Ultimately, this project enhances my capabilities to deliver
                                        the best results for end-users through becoming a better collaborator by
                                        understanding fundamentals of development and design.
                                    </li>
                                </ul>
                            </div>
                        </div>

                    <div class="ProjectNav_btns">
                        <a class="Styled_link" href="devote.php">
                            <span>
                                <img src="./assets/icons/back-400.svg" alt="previous icon link">
                                Prev Project
                            </span>
                        </a>
                        <a class="Styled_link" href="letterboxd.php">
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
        array("Timeline", "2 weeks"),
        array("Year", "2023"),
        array("Deliverables", "High-fidelity wireframes and live website"),
        array("Tools", "VS code, Github, HTML, CSS, JS, Photoshop"),
        array("My Role", "UI Designer and Front-End developer")
    );
    ?>
    <main class="LayoutDesktop">
        <div class="Proj_container">
            <div class="proj_title">
                Coastal Rolls
            </div>

            <div class="live-link-container">
                <a class="live-link" target="_blank" rel="noopener" href="https://icuyno.github.io/CoastalRolls/">
                    View Live
                    <img src="<?php echo $linkIcon; ?>" alt="link icon">
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
                <div>
                    <div class="img_container">
                        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450"
                            src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FrsOP3QM5leXMBYYZPqWmfg%2FCoastal-Rolls%3Ftype%3Ddesign%26node-id%3D0%253A1%26mode%3Ddesign%26t%3D8LSZY8OjPFPnert9-1"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="caption_container">
                        <h3>Objective</h3>
                        <p>
                            Translate high-fidelity wireframes into a responsive website for a fictitous restaurant,
                            incorporating dynamic navigation and interactivity using HTML, CSS, and JavaScript.
                        </p>
                    </div>
                    <div class="caption_container">
                        <h3>Key Features</h3>
                        <p>
                            Responsive Design Implementation
                        </p>
                        <ul>
                            <li>
                                Use of Media Queries for breakpoints, ensuring a seamless experience on various devices.
                            </li>
                            <li>
                                Integrated jQuery library for enhanced interactivity and dynamic content
                                handling.
                            </li>
                        </ul>
                        <p>
                            Dynamic Navigation
                        </p>
                        <ul>
                            <li>
                                Implemented a dynamic navigation menu for improved user experience.
                            </li>
                            <li>
                                JavaScript event handling and manipulation of the Document Object Model (DOM) to toggle
                                menu visibility, enhancing accessibility.
                            </li>
                        </ul>
                        <p>
                            Lightbox Integration
                        </p>
                        <ul>
                            <li>
                                Utilized JavaScript to create a modal gallery, allowing users to interact with images.
                            </li>
                        </ul>
                    </div>

                    <div class="caption_container">
                        <h3>Lightbox Feature</h3>
                        <div class="img_container">
                            <Video controls autoplay muted loop
                                style="aspect-ratio: 4800 / 2700;image-rendering: auto;width: 100%;background-size: cover;position: absolute;inset: 0px;height: 100%;object-fit: cover;">
                                <source src="./assets/videos/coastalrolls-gallery.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="caption_container">
                            <h3>
                                Key Takeaways
                            </h3>
                            <ul>
                                <li>
                                    The project provided valuable insights in my journey towards
                                    becoming a UX designer.
                                </li>
                                <li>
                                    Gaining familiarity with front-end web development
                                    fundamentals enabled a deeper understanding of design challenges from a developer's
                                    perspective.
                                </li>
                                <li>
                                    This project helped me develop better communication and articulation skills,
                                    especially if I had to convey ideas to a development team
                                </li>
                                <li>
                                    The ability to communicate seamlessly with developers
                                    contributes to a streamlined design and development process.
                                </li>
                                <li>
                                    Ultimately, this project enhances my capabilities to deliver
                                    the best results for end-users through becoming a better collaborator by
                                    understanding fundamentals of development and design.
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="ProjectNav_btns">
                        <a class="Styled_link" href="foodquery.php">
                            <span>
                                <img src="./assets/icons/back-400.svg" alt="previous icon link">
                                Prev Project
                            </span>
                        </a>
                        <a class="Styled_link" href="index.php">
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


</main>
</div>

<?php include './partials/footer.php'; ?>