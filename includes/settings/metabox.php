<?php
	function fullscreen_add_meta_boxes_page() {
    add_meta_box("video-meta-box-id", "Link Video", "fullscreen_callback", "page", "normal", "high");   
	}
	add_action( 'add_meta_boxes_page', 'fullscreen_add_meta_boxes_page' );

  function fullscreen_callback(){
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
        
    $custom = get_post_custom($post->ID);
    $package = $custom["package"][0]; 
    
  ?>  
    <div class="metabox">
      <div class="field group">
        <div class="fieldname">
          <label>Video Link:</label>
        </div>
        <div class="fieldvalue">
          <input name="package" value="<?php echo $package; ?>" />
        </div>    
      </div>
    </div>   
    <?php  
  } 
    
  add_action('save_post', 'fullscreen_save_extras'); 
  
  function fullscreen_save_extras(){  
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ //if you remove this the sky will fall on your head.
      return $post_id;
    }else{
      update_post_meta($post->ID, "package", $_POST["package"]); 
    } 
  }  

  add_filter("manage_edit-fullscreen_columns", "fullscreen_edit_columns");   

  function fullscreen_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => "Page Name",
      "package" => "Package",
    );  
    return $columns;
  } 

  add_action("manage_fullscreen_posts_custom_column",  "fullscreen_custom_columns"); 

  function fullscreen_custom_columns($column){
    global $post;
    $custom = get_post_custom();
    switch ($column)
    {
      case "package":
        echo $custom["package"][0];
        break;
    }
  } 
?>