<?php include './partials/head.php'; ?>

<?php include './partials/mobile-nav.php'; ?>

<!-- mobile layout -->
<div class="mobileContainer">
    <div class="mainProjLayout">
        <main class="LayoutMobile">
            <div class="Proj_container">

                <?php
                $detailsArray = array(
                    array("Timeline", "1 week"),
                    array("Year", "2023"),
                    array("Deliverables", "Live website and documentation"),
                    array("Tools", "VS code, Github, HTML, CSS, JS, HostPapa"),
                    array("My Role", "Front-End Developer"),
                    array("Collaboration with", '<a target="_blank" rel="noopener" style="color: #000"; href="http://pranavithapa.com/artifact3.php">Pranavi Thapa</a> - Creative Developer')
                );
                ?>
                <div class="proj_title">
                    Devote Collective
                </div>

                <div class="live-link-container">
                    <a class="live-link" target="_blank" rel="noopener" href="http://devote-tarot.isabellecuyno.com/">
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
                    <div>
                        <div class="img_container">
                            <img src="./assets/thumbnails/devote_thumb.jpg" alt="devote tarot reading site mockup">
                        </div>
                        <div class="caption_container">
                            <h3>Objective</h3>
                            <p>
                                Create a Tarot Card Shuffler application to provide users with random tarot card
                                readings.
                            </p>
                        </div>
                        <div class="caption_container">
                            <h3>Key Features</h3>
                            <p>
                                Card Object Constructor
                            </p>
                            <ul>
                                <li>
                                    Utilized an object constructor to create a blueprint for tarot cards, making it
                                    scalable for future improvements
                                </li>
                            </ul>
                            <p>
                                Deck Array
                            </p>
                            <ul>
                                <li>
                                    Built an array containing instances of the tarot card objects, forming the deck for
                                    the shuffler.
                                </li>
                            </ul>
                            <p>
                                Random Card Selection
                            </p>
                            <ul>
                                <li>
                                    Implemented a JavaScript function to randomly select a card from the deck, ensuring
                                    a dynamic and diverse user experience.
                                </li>
                                <li>
                                    Is <code>Math.random()</code> a mere numerical calculation, or is it the language of
                                    <i>divine messaging?</i>
                                </li>
                            </ul>
                        </div>

                        <div class="caption_container">
                            <h3>JavaScript Mechanics</h3>
                            <p>
                            <pre>
function card(name, description, image) {
this.name = name;
this.description = description;
this.image = image;
}

var deck = [
new card ('Fool', 'A willingness...', 'fool'),
... additional cards ...
];

function getRandom(num) {
var randomNumber = Math.floor(Math.random() * num);
return randomNumber;
}

document.getElementById("draw").onclick = function(event) {
event.preventDefault();
var index = getRandom(8);
var currentCard = deck[index];

var imageSize = 'width="100" height="150"';

document.getElementById("wall_display").innerHTML = '&lt;img '+ imageSize + ' src="assets/img/' + currentCard.image + '.jpg"&gt;&lt;h3&gt;' + currentCard.name + '&lt;/h3&gt;&lt;p&gt;' + currentCard.description + '&lt;/p&gt;';
}
</pre>
                            </p>
                            <p>
                                Random Number Generator
                            </p>
                            <ul>
                                <li>
                                    <code>Math.random()</code> is a method in JavaScript that returns a floating-point,
                                    pseudo-random
                                    number in the range from 0 (inclusive) to 1 (exclusive).
                                </li>
                            </ul>
                            <p>
                                Scaling for Array Index:
                            </p>
                            <ul>
                                <li>
                                    Multiplying <code>Math.random()</code> by the total number of cards
                                    (<code>num</code>) gives you a random
                                    decimal between 0 (inclusive) and <code>num</code> (exclusive).
                                </li>
                                <li>
                                    <code>Math.floor()</code> rounds this decimal down to the nearest whole number,
                                    ensuring it's
                                    within the valid array index range.
                                </li>
                            </ul>
                            <p>Why Use <code>Math.random()</code>?:</p>
                            <ul>
                                <li>
                                    Provides a simple way to introduce randomness into your program.
                                </li>
                            </ul>
                            <p>Code Explanation:</p>
                            <ul>
                                <li>
                                    Function <code>getRandom(num)</code> takes the number of cards in the deck as an
                                    argument
                                    (<code>num</code>).
                                </li>
                                <li>
                                    <code>var randomNumber = Math.floor(Math.random() * num);</code> generates a random
                                    index based
                                    on the number of cards.
                                </li>
                                <li>
                                    <code>return randomNumber;</code> returns this random index
                                </li>
                            </ul>
                        </div>

                        <div class="caption_container">
                            <h3>
                                Next Steps
                            </h3>
                            <p>
                                Enhancements:
                            </p>
                            <ul>
                                <li>
                                    Consider adding features like card reversals, detailed interpretations, or the
                                    ability
                                    to draw multiple cards.
                                </li>
                            </ul>
                            <p>
                                Customizable Deck Size:
                            </p>
                            <ul>
                                <li>
                                    Currently, the function assumes a deck of eight cards. To make it more versatile,
                                    you could
                                    pass the deck array length as an argument to getRandom(), allowing the shuffler to
                                    adapt to
                                    different deck sizes.
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
                        <a class="Styled_link" href="coastalrolls.php">
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
        array("Timeline", "1 week"),
        array("Year", "2023"),
        array("Deliverables", "Live website and documentation"),
        array("Tools", "VS code, Github, HTML, CSS, JS, HostPapa"),
        array("My Role", "Front-End Developer"),
        array("Collaboration with", '<a target="_blank" rel="noopener" style="color: #000"; href="http://pranavithapa.com/artifact3.php">Pranavi Thapa</a> - Creative Developer')
    );
    ?>
    <main class="LayoutDesktop">
        <div class="Proj_container">
            <div class="proj_title">
                Devote Collective
            </div>

            <div class="live-link-container">
                <a class="live-link" target="_blank" rel="noopener"
                    href="#">
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
                        <img src="./assets/thumbnails/devote_thumb.jpg" alt="devote tarot reading site mockup">
                    </div>
                    <div class="caption_container">
                        <h3>Objective</h3>
                        <p>
                            Create a Tarot Card Shuffler application to provide users with random tarot card
                            readings.
                        </p>
                    </div>
                    <div class="caption_container">
                        <h3>Key Features</h3>
                        <p>
                            Card Object Constructor
                        </p>
                        <ul>
                            <li>
                                Utilized an object constructor to create a blueprint for tarot cards, making it
                                scalable for future improvements
                            </li>
                        </ul>
                        <p>
                            Deck Array
                        </p>
                        <ul>
                            <li>
                                Built an array containing instances of the tarot card objects, forming the deck for
                                the shuffler.
                            </li>
                        </ul>
                        <p>
                            Random Card Selection
                        </p>
                        <ul>
                            <li>
                                Implemented a JavaScript function to randomly select a card from the deck, ensuring
                                a dynamic and diverse user experience.
                            </li>
                            <li>
                                Is <code>Math.random()</code> a mere numerical calculation, or is it the language of
                                <i>divine messaging?</i>
                            </li>
                        </ul>
                    </div>

                    <div class="caption_container">
                        <h3>JavaScript Mechanics</h3>
                        <p>
                        <pre>
function card(name, description, image) {
this.name = name;
this.description = description;
this.image = image;
}

var deck = [
new card ('Fool', 'A willingness...', 'fool'),
... additional cards ...
];

function getRandom(num) {
var randomNumber = Math.floor(Math.random() * num);
return randomNumber;
}

document.getElementById("draw").onclick = function(event) {
event.preventDefault();
var index = getRandom(8);
var currentCard = deck[index];

var imageSize = 'width="100" height="150"';

document.getElementById("wall_display").innerHTML = '&lt;img '+ imageSize + ' src="assets/img/' + currentCard.image + '.jpg"&gt;&lt;h3&gt;' + currentCard.name + '&lt;/h3&gt;&lt;p&gt;' + currentCard.description + '&lt;/p&gt;';
}
</pre>
                        </p>
                        <p>
                            Random Number Generator
                        </p>
                        <ul>
                            <li>
                                <code>Math.random()</code> is a method in JavaScript that returns a floating-point,
                                pseudo-random
                                number in the range from 0 (inclusive) to 1 (exclusive).
                            </li>
                        </ul>
                        <p>
                            Scaling for Array Index:
                        </p>
                        <ul>
                            <li>
                                Multiplying <code>Math.random()</code> by the total number of cards
                                (<code>num</code>) gives you a random
                                decimal between 0 (inclusive) and <code>num</code> (exclusive).
                            </li>
                            <li>
                                <code>Math.floor()</code> rounds this decimal down to the nearest whole number,
                                ensuring it's
                                within the valid array index range.
                            </li>
                        </ul>
                        <p>Why Use <code>Math.random()</code>?:</p>
                        <ul>
                            <li>
                                Provides a simple way to introduce randomness into your program.
                            </li>
                        </ul>
                        <p>Code Explanation:</p>
                        <ul>
                            <li>
                                Function <code>getRandom(num)</code> takes the number of cards in the deck as an
                                argument
                                (<code>num</code>).
                            </li>
                            <li>
                                <code>var randomNumber = Math.floor(Math.random() * num);</code> generates a random
                                index based
                                on the number of cards.
                            </li>
                            <li>
                                <code>return randomNumber;</code> returns this random index
                            </li>
                        </ul>
                    </div>

                    <div class="caption_container">
                        <h3>
                            Next Steps
                        </h3>
                        <p>
                            Enhancements:
                        </p>
                        <ul>
                            <li>
                                Consider adding features like card reversals, detailed interpretations, or the
                                ability
                                to draw multiple cards.
                            </li>
                        </ul>
                        <p>
                            Customizable Deck Size:
                        </p>
                        <ul>
                            <li>
                                Currently, the function assumes a deck of eight cards. To make it more versatile,
                                you could
                                pass the deck array length as an argument to getRandom(), allowing the shuffler to
                                adapt to
                                different deck sizes.
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