<div class="dashboard-rest-admin">
    
    <div class="rest-tabs">  
    <div>
        <span class="dashboard-tabs">Update Profile</span>
        <span class="dashboard-tabs">Add Menu</span>
    </div>
    <div>
        <span class="dashboard-tabs">Add Images</span>
        <span class="dashboard-tabs">Add Coupons</span>
    </div>
 </div>   
    
    <div class="user_logo">
    
    <?php 
       global $user;
       $profile_data = profile2_load_by_user($user->uid);
       $field_image = $profile_data['restaurant_admin']->field_image;
       $image =  image_style_url("restlogo", $field_image['und'][0]['uri']);
    ?>
    <img src="<?php print $image; ?>" />
    </div>
    
</div>

