<?php
/*
 Template Name: Contact
*/
?>
<?php
get_header();
?>
<header>            
    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
</header>
<div class="container contact text-center">
    <h1><?php the_title(); ?></h1>
    <hr>
<!--
    <form id="contact" method="post" class="form" role="form">
        <div class="row">
            <div class="col-xs-6 col-md-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Nom" type="text" required autofocus />
            </div>
            <div class="col-xs-6 col-md-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
            </div>
            <div class="col-xs-12 col-md-12 form-group">
                <input class="form-control" id="email" name="object" placeholder="Objet" type="text" required>
            </div>
        </div>
        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
        <div class="row text-center">
            <div class="col-xs-12 col-md-12 form-group">
                <button class="btn" type="submit">Envoyer</button>
            </div>
        </div>
    </form>
    -->

    <?php echo do_shortcode('[contact-form-7 id="6" title="Contact"]'); ?>

</div>


<div class="container">
    <div class="row">
        <div class="col-xs-12 newsletter">
            <h2 class="text-uppercase pull-left">Newsletter</h2>
            <div class="clearfix"></div>
            <div class="col-xs-8">
                <h3>Pour retrouver tous nos conseils déco, tendances, nouveaux produits...</h3>
            </div>

            <div class="col-xs-4">
                <form class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Mon Email">
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
