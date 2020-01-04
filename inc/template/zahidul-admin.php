
<?php settings_errors();?>
<style>
</style>
<?php 
$profile=esc_attr(get_option('profile_handeler'));
$fastName=esc_attr(get_option('fast_name'));
$lasttName=esc_attr(get_option('last_name'));
$fullName=$fastName.' '.$lasttName;
$user=esc_attr(get_option('user_handeler'));
?> 
<div class="container">
    <div class="row ">
<div><img src="<?php print $profile;?>" class="rounded-circle " width="150" height="150"  ></div>
<div class="h"><?php print $fullName; ?></div>
<div class="card"><?php print $user; ?></div>
</div>
</div>
<form method="post" action="options.php">
<?php settings_fields( 'zahidul-settings-group' ); ?>
<?php do_settings_sections( 'zahidul_theme' );?>
<?php submit_button( ); ?>
 </form> 
 
 <script> //jquery
 $(document).Ready(function ($) {
     var mediaUploader;
  $('#upload_button').click function(){
    
 preventDefault();
    
    // If the media frame already exists, reopen it.
    if ( mediaUploader ) {
        mediaUploader.open();
      return;
    }
    mediaUploader=wp.media.frames.file_frame=wp.media({
        title:'choose a profile picture',
        button:{text:'choose Picture'},
        multiple:false
    });
    mediaUploader on('select',function () {attachment=mediaUploader.state().get('selection').first()toJSON();
        $('#profile-picture').val(attachment.url),});
    
    mediaUploader.open();
    
      
  });
  
     
 });
 </script> 
