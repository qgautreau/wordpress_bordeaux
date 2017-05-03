<?php get_header(); ?>
<div class="mh-wrapper clearfix">
    <div id="main-content" class="mh-loop mh-content" role="main">

        <article class="principal">
            <img id="principimage" src="http://lorempixel.com/632/300/sports" alt="image principal">
        </article>

        <h2>Actualités</h2>

        <section>
            <article class="miniposts">
                <img src="http://lorempixel.com/200/126/sports" alt="">
                <div class="minidiv">
                    <h3>Ouverture</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </div>
            </article>

            <article class="miniposts">
                <img src="http://lorempixel.com/200/126/sports" alt="">
                <div class="minidiv">
                    <h3>La culture en chiffres</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </div>
            </article>

            <article class="miniposts">
                <img src="http://lorempixel.com/200/126/sports" alt="">
                <div class="minidiv">
                    <h3>Elections</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </div>
            </article>
        </section>
    </div>

    <?php
    mh_magazine_lite_pagination();
    ?>

    <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
