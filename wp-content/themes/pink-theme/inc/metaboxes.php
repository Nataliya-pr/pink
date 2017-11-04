<?php
 
// add metabox for np_slides

add_action( 'add_meta_boxes_np_slides', 'add_custom_metabox' );
function add_custom_metabox( $post ) {
    add_meta_box( 
        'np-slides-meta-box',
        __( 'NP-Slides', 'np-slides' ),
        'render_np_slides_metabox',
        'np_slides',
        'side',
        'default'
    );
}

function render_np_slides_metabox($post) {
    $link = get_post_meta($post->ID, '_np_slides_link', true);
    ?>
        <p>
            <label for="_np_slides_link"><?=__('Custom link:', 'np-slides')?></label><br>
             <input type="text" name="_np_slides_link" id="_np_slides_link" value=<?=$link;?> >
        </p>
   <?php
}


add_action('save_post', 'save_np_slides_metabox');

function save_np_slides_metabox( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    // echo '<pre>';
    // var_dump($_POST);
    // echo '<pre>';
    // wp_die(); // 

    $link    = isset($_POST['_np_slides_link']) ? sanitize_text_field( $_POST['_np_slides_link'] ) : '';

    // Upposition the meta field.
    update_post_meta( $post_id, '_np_slides_link', $link );

}
