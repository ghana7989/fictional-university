<?php
function university_post_types(){
    // campus post type
    register_post_type( "campus", array(
        "show_in_rest"=>true,
        "supports"=>array("title","editor","excerpt"),
        "rewrite"=>array("slug"=>"campuses"),
        "has_archive"=>true,
        "public"=>true,
        "labels"=>array(
            "name"=>"Campuses",
            "add_new_item"=>"Add New Campus",
            "edit_item"=>"Edit Campus",
            "all_items"=>"All Campuses",
            "singular_name"=>"Campus"
        ),
        "menu_icon"=>"dashicons-location-alt"
    ) );
    // events post type
    register_post_type( "events", array(
        "capability_type"=>"events",
        "map_meta_cap"=>true,
        "show_in_rest"=>true,
        "supports"=>array("title","editor","excerpt"),
        "rewrite"=>array("slug"=>"events"),
        "has_archive"=>true,
        "public"=>true,
        "labels"=>array(
            "name"=>"Events",
            "add_new_item"=>"Add New Event",
            "edit_item"=>"Edit Event",
            "all_items"=>"All Events",
            "singular_name"=>"Event"
        ),
        "menu_icon"=>"dashicons-calendar"
    ) );
    // program post type
    register_post_type("program",array(
        "show_in_rest"=>true,
        "supports"=>array("title"),
        "rewrite"=>array("slug"=>"programs"),
        "has_archive"=>true,
        "public"=>true,
        "labels"=>array(
            "name"=>"Programs",
            "add_new_item"=>"Add new Program",
            "edit_item"=>"Edit Program",
            "all_items"=>"All Programs",
            "singular_name"=>"Program"
        ),
        "menu_icon"=>"dashicons-admin-media"
    ));

    register_post_type( "professor", array(
        "show_in_rest"=>true,
        "supports"=>array("title","editor","thumbnail"),
        // "rewrite"=>array("slug"=>"professors"),
        // "has_archive"=>true,
        "public"=>true,
        "labels"=>array(
            "name"=>"Professors",
            "add_new_item"=>"Add new Professor",
            "edit_item"=>"Edit Professor",
            "all_items"=>"All Professors",
            "singular_name"=>"Professor"
        ),
        "menu_icon"=>"dashicons-welcome-learn-more"
    ) );

    // Note Post type
    register_post_type( "note", array(
        "capability_type"=>"note",
        "map_meta_cap"=>true,
        "show_in_rest"=>true,
        "supports"=>array("title","editor"),
        // "rewrite"=>array("slug"=>"professors"),
        // "has_archive"=>true,
        "public"=>false,
        "show_ui"=>true,
        "labels"=>array(
            "name"=>"Notes",
            "add_new_item"=>"Add new Note",
            "edit_item"=>"Edit Note",
            "all_items"=>"All Notes",
            "singular_name"=>"Note"
        ),
        "menu_icon"=>"dashicons-welcome--write-blog"
    ) );
    // Like Post type
    register_post_type( "like", array(
        "supports"=>array("title"),
        "public"=>false,
        "show_ui"=>true,
        "labels"=>array(
            "name"=>"Likes",
            "add_new_item"=>"Add new Like",
            "edit_item"=>"Edit Like",
            "all_items"=>"All Likes",
            "singular_name"=>"Like"
        ),
        "menu_icon"=>"dashicons-heart"
    ) );
}



add_action("init", "university_post_types");

?>