<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/2010/04/how-to-create-meta-box-wordpress-post.html
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'RECIPE_META_';

global $meta_boxes;

$meta_boxes = array();


// Metabox for additional recipe information
$meta_boxes[] = array(
    'id'        => 'recipe_additional',
    'title'     => __('Información de la receta', 'comerydivertirse'),
    'post_types'     => array( 'recipe' ),
    'priority' => 'low',
    'fields'    => array(
        array(
            'name'      => __('Rendimiento', 'comerydivertirse'),
            'id'        => $prefix . 'yield',
            'desc'      => __('¿Para cuantas personas rinde?', 'comerydivertirse'),
            'clone'     => false,
            'type'      => 'number',
            'std'       => ''
        ),
        array(
            'name'      => __('Porciones', 'comerydivertirse'),
            'id'        => $prefix . 'servings',
            'desc'      => __('¿Cuantas porciones?', 'comerydivertirse'),
            'clone'     => false,
            'type'      => 'number',
            'std'       => ''
        ),
        array(
            'name'      => __('Tiempo de preparación', 'comerydivertirse'),
            'id'        => $prefix . 'prep_time',
            'desc'      => __('¿Cuantos minutos de preparación?   ', 'comerydivertirse'),
            'clone'     => false,
            'type'      => 'number',
            'std'       => ''
        ),
        array(
            'name'      => __('Tiempo de cocción', 'comerydivertirse'),
            'id'        => $prefix . 'cook_time',
            'desc'      => __('¿Cuantos minutos de cocción?', 'comerydivertirse'),
            'clone'     => false,
            'type'      => 'number',
            'std'       => ''
        ),
        array(
            'name'      => __('Listo en', 'comerydivertirse'),
            'id'        => $prefix . 'ready_in',
            'desc'      => __('¿Cuantos minutos?', 'comerydivertirse'),
            'clone'     => false,
            'type'      => 'number',
            'std'       => ''
        ),
        array(
            'name'      => __('Ingredientes', 'comerydivertirse'),
            'id'        => $prefix . 'ingredients',
            'desc'      => __('Agregue los ingredientes de su receta', 'comerydivertirse'),
            'clone'     => true,
            'type'      => 'text',
            'std'       => ''
        )
    )
);

// Metabox for step information
$meta_boxes[] = array(

    'id' => 'method',
    'title' => __('Instrucciones', 'comerydivertirse'),
    'post_types' => array( 'recipe' ),
    'context' => 'normal',
    'priority' => 'high',
    'priority' => 'low',
    'fields' => array(
        array(
            'name'      => __('Instrucciones', 'comerydivertirse'),
            'id'        => $prefix . 'method_steps',
            'desc'      => __('Indique las instrucciones de su receta', 'comerydivertirse'),
            'clone'     => true,
            'type'      => 'textarea',
            'std'       => ''
        )
    )
);

// Metabox for YouTube
$meta_boxes[] = array(

    'id' => 'youtube',
    'title' => __('Información del video', 'comerydivertirse'),
    'post_types' => array( 'video' ),
    'context' => 'normal',
    'priority' => 'high',
    'priority' => 'low',
    'fields' => array(
        array(
            'name'      => __('Video', 'comerydivertirse'),
            'id'        => $prefix . 'video_id',
            'desc'      => __('Indique sólo la ID del video de YouTube', 'comerydivertirse'),
            'clone'     => false,
            'type'      => 'text',
            'std'       => ''
        )
    )
);


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function RECIPE_META_register_meta_boxes()
{
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if ( class_exists( 'RW_Meta_Box' ) )
    {
        foreach ( $meta_boxes as $meta_box )
        {
            new RW_Meta_Box( $meta_box );
        }
    }
}
// Hook to 'admin_init' to make sure the meta box class is loaded
//  before (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'RECIPE_META_register_meta_boxes' );

