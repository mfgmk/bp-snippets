function remove_xprofile_links() {
    remove_filter( 'bp_get_the_profile_field_value', 'xprofile_filter_link_profile_data', 9, 2 );
}
add_action( 'bp_init', 'remove_xprofile_links' );

define ( 'BP_AVATAR_FULL_WIDTH', 260 );
define ( 'BP_AVATAR_FULL_HEIGHT', 260 );

if(!get_option("medium_crop"))
	add_option("medium_crop", "1");
else
	update_option("medium_crop", "1");