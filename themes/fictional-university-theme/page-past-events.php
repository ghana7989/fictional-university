<?php
get_header();
pageBanner(array(
  "title"=>"Past Events",
  "subtitle"=>"Recap of our past Events."
))
?>

  <div class="container container--narrow page-section">
<?php 

        $today = date("Ymd");

$pastEvents = new WP_Query(array(
    // this paged gets us information from the
    // url so that we can send it to pagenation
    // this makes pagination work on custom queries
    "paged"=>get_query_var("paged",1),
    "post_type"=> "events",
    "meta_key"=>"event_date",
    "orderby"=>"meta_value_num",
    "order"=>"ASC",
    "meta_query"=>array(
        array(
            "key"=>"event_date",
            "compare"=>"<",
            "value"=>$today,
            "type"=>"numeric"
        )
    )
));

while($pastEvents->have_posts())
{
  $pastEvents->the_post();
      get_template_part( "template-parts/content-event");


 }
  echo paginate_links(array(
      "total"=> $pastEvents->max_num_pages,
  ));
?>
</div>



  <?php

  get_footer(); ?>