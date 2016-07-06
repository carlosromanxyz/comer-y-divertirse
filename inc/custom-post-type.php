<?php
/*-----------------------------------------------------------------------------------*/
// Custome Recipe Post Type
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'woo_fnc_create_recipe' );

function woo_fnc_create_recipe() {
	  
	  $labels = array(
			'name' => __('Recetas', 'comerydivertirse'),
			'singular_name' => __('Receta', 'comerydivertirse'),
			'add_new' => __('Añadir nueva', 'comerydivertirse'),
			'add_new_item' => __('Receta', 'comerydivertirse'),
			'edit_item' => __('Editar receta', 'comerydivertirse'),
			'new_item' => __('Nueva receta', 'comerydivertirse'),
			'view_item' => __('Ver receta', 'comerydivertirse'),
			'search_items' => __('Buscar recetas', 'comerydivertirse'),
			'not_found' =>  __('No se encontraron recetas', 'comerydivertirse'),
			'not_found_in_trash' => __('No hay recetas en la papelera', 'comerydivertirse'),
			'parent_item_colon' => ''
	  );

	  $supports = array(
				 'title',
				 'editor',
				 'thumbnail',
				 'categories',
				 'comments',
				 'excerpt',
				 'author'
				 );
	  
	  register_post_type( 'recipe',
			array(
				'labels' => $labels,
				'public' => true,
				'menu_position' => 6,
				'menu_icon' => 'dashicons-nametag',
				'show_in_rest'       => true,
				'rest_base'          => 'recipe-api',
				'rest_controller_class' => 'WP_REST_Posts_Controller',
				'hierarchical' => false,
				'supports' => $supports,
				'taxonomies' => array('recipe-type'),
				'rewrite' => array( 'slug' => __('receta', 'comerydivertirse') )
			)
	  );
	
}
	
	
// Custom Texonomy Recipe Types for Recipe
add_action( 'init', 'woo_fnc_build_taxonomies', 0 );  

function woo_fnc_build_taxonomies() {
		
	// Recipe Type Custom Taxonomy
	$recipe_type_labels = array(
			    'name' => __('Tipos de recetas', 'comerydivertirse'),
			    'singular_name' => __('Tipo de receta', 'comerydivertirse'),
			    'search_items' => __('Buscar tipos de recetas', 'comerydivertirse'),
			    'all_items' => __('Todos los tipos de recetas', 'comerydivertirse'),
			    'parent_item' => __('Tipo de receta principal', 'comerydivertirse'),
			    'parent_item_colon' =>__('Tipo de receta principal:', 'comerydivertirse'),
			    'edit_item' => __('Editar tipo de receta', 'comerydivertirse'), 
			    'update_item' => __('Actualizar tipo de receta', 'comerydivertirse'),
			    'add_new_item' => __('Añadir nuevo tipo de receta', 'comerydivertirse'),
			    'new_item_name' => __('Nombre del tipo de receta', 'comerydivertirse'),
			    'menu_name' => __('Tipos de recetas', 'comerydivertirse')
			  ); 

	
	register_taxonomy(
	    'recipe_type',
	    'recipe',
	    array(
			'hierarchical' => true,
			'labels' => $recipe_type_labels,
			'query_var' => true,
			'rewrite' => array( 'slug' => __('recipe-type', 'comerydivertirse') )
	    )
  	);
	
	// Cuisine Custom Taxonomy
	$cuisines_labels = array(
		'name' => __('Cocinas', 'comerydivertirse'),
		'singular_name' => __('Cocina', 'comerydivertirse'),
		'search_items' => __('Buscar cocinas', 'comerydivertirse'),
		'all_items' => __('Todas las cocinas', 'comerydivertirse'),
		'parent_item' => __('Cocina principal', 'comerydivertirse'),
		'parent_item_colon' =>__('Cocina principal:', 'comerydivertirse'),
		'edit_item' => __('Editar cocina', 'comerydivertirse'), 
		'update_item' => __('Actualizar cocina', 'comerydivertirse'),
		'add_new_item' => __('Añadir nueva cocina', 'comerydivertirse'),
		'new_item_name' => __('Nombre de la cocina', 'comerydivertirse'),
		'menu_name' => __('Cocinas', 'comerydivertirse')
	); 
			  
	register_taxonomy(
	    'cuisine',
	    'recipe',
	    array(
			'hierarchical' => true,
			'labels' => $cuisines_labels,
			'query_var' => true,
			'rewrite' => array( 'slug' => __('cuisine', 'comerydivertirse') )
	    )
  	);
	
	// Courses Custom Taxonomy
	$courses_labels = array(
		'name' => __('Platos', 'comerydivertirse'),
		'singular_name' => __('Plato', 'comerydivertirse'),
		'search_items' => __('Buscar platos', 'comerydivertirse'),
		'all_items' => __('Todos los platos', 'comerydivertirse'),
		'parent_item' => __('Plato principal', 'comerydivertirse'),
		'parent_item_colon' =>__('Plato principal:', 'comerydivertirse'),
		'edit_item' => __('Editar plato', 'comerydivertirse'), 
		'update_item' => __('Actualizar plato', 'comerydivertirse'),
		'add_new_item' => __('Añadir nuevo plato', 'comerydivertirse'),
		'new_item_name' => __('Nombre del plato', 'comerydivertirse'),
		'menu_name' => __('Platos', 'comerydivertirse')
	); 
			  
	register_taxonomy(
	    'course',
	    'recipe',
	    array(
			'hierarchical' => true,
			'labels' => $courses_labels,
			'query_var' => true,
			'rewrite' => array( 'slug' => __('course', 'comerydivertirse') )
	    )
  	);
	
	// Ingredients Custom Taxonomy
	$ingredients_labels = array(
		'name' => __('Ingredientes', 'comerydivertirse'),
		'singular_name' => __('Ingrediente', 'comerydivertirse'),
		'search_items' => __('Buscar ingredientes', 'comerydivertirse'),
		'all_items' => __('Todos los ingredientes', 'comerydivertirse'),
		'parent_item' => __('Ingrediente principal', 'comerydivertirse'),
		'parent_item_colon' =>__('Ingrediente principal:', 'comerydivertirse'),
		'edit_item' => __('Editar ingrediente', 'comerydivertirse'), 
		'update_item' => __('Actualizar ingrediente', 'comerydivertirse'),
		'add_new_item' => __('Añadir nuevo ingrediente', 'comerydivertirse'),
		'new_item_name' => __('Nomnbre del ingrediente', 'comerydivertirse'),
		'menu_name' => __('Ingredientes', 'comerydivertirse')
	); 
			  
	register_taxonomy(
	    'ingredient',
	    'recipe',
	    array(
			'hierarchical' => true,
			'labels' => $ingredients_labels,
			'query_var' => true,
			'rewrite' => array( 'slug' => __('ingredient', 'comerydivertirse') )
		)
  	);
	
	// Skill Level
	$skill_levels_labels = array(
		'name' => __('Niveles de dificultad', 'comerydivertirse'),
		'singular_name' => __('Nivel de dificultad', 'comerydivertirse'),
		'search_items' => __('Buscar niveles de dificultad', 'comerydivertirse'),
		'all_items' => __('Todos los niveles de dificultad', 'comerydivertirse'),
		'parent_item' => __('Nivel de dificultad principal', 'comerydivertirse'),
		'parent_item_colon' =>__('Nivel de dificultad principal:', 'comerydivertirse'),
		'edit_item' => __('Editar nivel de dificultad', 'comerydivertirse'), 
		'update_item' => __('Actualizar nivel de dificultad', 'comerydivertirse'),
		'add_new_item' => __('Añadir nivel de dificultad', 'comerydivertirse'),
		'new_item_name' => __('Nombre del nivel de dificultad', 'comerydivertirse'),
		'menu_name' => __('Niveles de dificultad', 'comerydivertirse')
	); 
			  
	register_taxonomy(
	    'skill_level',
	    'recipe',
		array(
			'hierarchical' => true,
			'labels' => $skill_levels_labels,
			'query_var' => true,
			'rewrite' => array( 'slug' => __('skill-level', 'comerydivertirse') )
		)
  	);
	
	// calories
	$skill_levels_labels = array(
		'name' => __('Calorías', 'comerydivertirse'),
		'singular_name' => __('Calorías', 'comerydivertirse'),
		'search_items' => __('Buscar caloría', 'comerydivertirse'),
		'all_items' => __('Todas las calorías', 'comerydivertirse'),
		'parent_item' => __('Calorías principales', 'comerydivertirse'),
		'parent_item_colon' =>__('Caloría principal:', 'comerydivertirse'),
		'edit_item' => __('Editar calorías', 'comerydivertirse'), 
		'update_item' => __('Actualizar calorías', 'comerydivertirse'),
		'add_new_item' => __('Añadir nueva caloría', 'comerydivertirse'),
		'new_item_name' => __('Nombre de la caloría', 'comerydivertirse'),
		'menu_name' => __('Calorías', 'comerydivertirse')
	); 
			  
	register_taxonomy(
	    'calories',
	    'recipe',
	    array(
			'hierarchical' => true,
			'labels' => $skill_levels_labels,
			'query_var' => true,
			'rewrite' => array( 'slug' => __('Calories', 'comerydivertirse') )
		)
  	);
		
}

// Register Custom Post Type
function video_post_type() {

	$labels = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'comerydivertirse' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'comerydivertirse' ),
		'menu_name'             => __( 'Video', 'comerydivertirse' ),
		'name_admin_bar'        => __( 'Video', 'comerydivertirse' ),
		'archives'              => __( 'Archivos de videos', 'comerydivertirse' ),
		'parent_item_colon'     => __( 'Video principal:', 'comerydivertirse' ),
		'all_items'             => __( 'Todos los videos', 'comerydivertirse' ),
		'add_new_item'          => __( 'Añadir nuevo video', 'comerydivertirse' ),
		'add_new'               => __( 'Añadir nuevo', 'comerydivertirse' ),
		'new_item'              => __( 'Nuevo video', 'comerydivertirse' ),
		'edit_item'             => __( 'Editar video', 'comerydivertirse' ),
		'update_item'           => __( 'Actualizar video', 'comerydivertirse' ),
		'view_item'             => __( 'Ver video', 'comerydivertirse' ),
		'search_items'          => __( 'Buscar video', 'comerydivertirse' ),
		'not_found'             => __( 'No encontrado', 'comerydivertirse' ),
		'not_found_in_trash'    => __( 'Nada en la papelera', 'comerydivertirse' ),
		'featured_image'        => __( 'Imagen destacada', 'comerydivertirse' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'comerydivertirse' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'comerydivertirse' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'comerydivertirse' ),
		'insert_into_item'      => __( 'Insertar en el video', 'comerydivertirse' ),
		'uploaded_to_this_item' => __( 'Subido a este video', 'comerydivertirse' ),
		'items_list'            => __( 'Lista de videos', 'comerydivertirse' ),
		'items_list_navigation' => __( 'Navegación por lista de videos', 'comerydivertirse' ),
		'filter_items_list'     => __( 'Filtrar lista de videos', 'comerydivertirse' ),
	);
	$args = array(
		'label'                 => __( 'Video', 'comerydivertirse' ),
		'description'           => __( 'Videos para Comer & Divertirse', 'comerydivertirse' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-video-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'       => true,
        'rest_base'          => 'videos-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
	);
	register_post_type( 'video', $args );

}
add_action( 'init', 'video_post_type', 0 );