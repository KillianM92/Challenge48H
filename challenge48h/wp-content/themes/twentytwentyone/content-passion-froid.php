<?php
/**
 * The template for displaying photos passion froid
 * @package WordPress
 * @subpackage TwentyTwentyOne
 */

            // Vérfier l'activation de ACF
            if (! function_exists('get_field')) return;
?>

    <h1><?php the_field('nom__libelle_image'); ?></h1>
    <img src="<?php the_field('image'); ?>" />

    <ul>
        <li><strong>Type d'image : </strong><?php the_field('type_image'); ?></li>
        <li><strong>Photo avec produit : </strong><?php the_field('photo_avec_produit'); ?></li>
        <li><strong>Photo avec humain : </strong><?php the_field('photo_avec_humain'); ?></li>
        <li><strong>Format photo : </strong><?php the_field('format_photo'); ?></li>
        <li><strong>Crédits photos : </strong><?php the_field('credits_photos'); ?></li>
        <li><strong>Droits d'utilisation limités : </strong><?php the_field('droits_utilisation_limite'); ?></li>
        <li><strong>Copyright : </strong><?php the_field('copyright'); ?></li>
        <li><strong>Date de fin d'utilisation : </strong><?php the_field('date_de_fin_utilisation'); ?></li>
    </ul>

    <p><strong>Tags: </strong><?php the_field('tags'); ?></p>

    <p><?php the_content(); ?></p>