<div class="Proj_container">
    <div class="proj_title">
        <?php echo $projectTitle; ?>
    </div>

    <div class="live-link-container">
        <a class="live-link" target="_blank" rel="noopener" href="<?php echo $liveLink; ?>">
            View Live
            <img src="<?php echo $linkIcon; ?>" alt="">
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
                    <div><?php echo $detail[1]; ?></div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

<div class="Proj_img_container">
    <?php
    foreach ($imagesArray as $image) {
    ?>
        <div>
            <div class="img_container">
                <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php
                // Check if the current image should include an iframe
                if (isset($image['includeIframe']) && $image['includeIframe']) {
                    ?>
                    <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" src="<?php echo $image['iframeSrc']; ?>" allowfullscreen></iframe>
                    <?php
                }
                ?>
            </div>
            <div class="caption_container">
                <h3><?php echo $image['title']; ?></h3>
                <p><?php echo $image['description']; ?></p>
            </div>
        </div>
    <?php
    }
    ?>
</div>


<div class="Credits_container">
    <blockquote>
        <?php echo $keyTakeawaysTitle; ?>
    </blockquote>
    <p>
        <?php echo $keyTakeawaysContent; ?>
    </p>
    <p>
        <?php echo $futurePlansContent; ?>
    </p>
    <div class="ProjectNav_btns">
        <a class="Styled_link" href="<?php echo $nextLink; ?>">
            <span>
                <?php echo $nextButtonText; ?>
                <img src="<?php echo $nextButtonIcon; ?>" alt="next icon link">
            </span>
        </a>
    </div>
</div>


