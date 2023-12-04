<?php include './partials/head.php'; ?>

<?php include './partials/profile.php'; ?>

<?php include './partials/mobile-nav.php'; ?>

<!-- mobile only-->
<div class="mobileContainer">

    <div class="mainProjLayout">
        <div class="filter-container-mobile">
            <div class="text-container">
                Filter by project
            </div>
            <button class="filter-btn" onclick="filterProjects('All')">
                All
            </button>
            <button class="filter-btn" onclick="filterProjects('UI/UX')">
                UI/UX
            </button>
            <button class="filter-btn" onclick="filterProjects('Web Development')">
                Web Development
            </button>
            <button class="filter-btn" onclick="filterProjects('Product Design')">
                Product Design
            </button>
            <button class="filter-btn" onclick="filterProjects('Collaborative')">
                Collaborative
            </button>
        </div>
        <h2 id="featuredTitleMobile" class="featured">All Projects</h2>
        <?php include './partials/artifacts-list-component.php'; ?>
    </div>

</div>

<!-- desktop only -->
<div class="desktop-container">

    <?php include './partials/left-aside.php'; ?>

    <div class="featured-desktop-container">
        <div class="featured-desktop-div">
            <div class="featured-desktop-content">
                <h2 id="featuredTitleDesktop" class="featured">All Projects</h2>
                <?php include './partials/artifacts-list-component.php'; ?>
            </div>
        </div>
    </div>

</div>

<?php include './partials/footer.php'; ?>