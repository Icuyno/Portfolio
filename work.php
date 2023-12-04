<?php include './partials/head.php'; ?>

<?php include './partials/profile.php'; ?>

<?php include './partials/mobile-nav.php'; ?>

<!-- mobile only-->
<div class="mobileContainer">

    <div class="mainProjLayout">
        <h2 class="featured">All Projects</h2>
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