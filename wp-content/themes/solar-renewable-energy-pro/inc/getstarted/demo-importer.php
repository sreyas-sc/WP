<?php //to use wp udpate plugin
wp_enqueue_script( 'updates' ); ?>

<div class="theme-offer">
	<?php
      require_once trailingslashit( __DIR__ ) . 'class-ot-widget-importer.php';
      $OT_solar_energy_WIE_FILE = trailingslashit( THEME_DIR ) . 'inc/widget/ot-solar-renewable-energy-pro-widgets.wie';
      // var_dump($OT_solar_energy_WIE_FILE);
      if(isset($_POST['submit'])){
        $home_id=''; $blog_id=''; $page_id=''; $contact_id='';$blog_id=''; $cart_id='';$shop_id='';$carreer_id='';$home_id='';$pages_id='';$story_id='';$beverages_id='';$faq_id=''; $fruit_id=''; $vegetable_id=''; $packed_id=''; $health_id=''; $dairy_id='';

        // Create a front page and assigned the template
        
        $home_content = '';

        $home_title = 'Home';
    		$home_check = get_page_by_title($home_title);
   	   	$home = array(
      		   'post_type' => 'page',
      		   'post_title' => $home_title,
             'post_content'  => $home_content,
      		   'post_status' => 'publish',
      		   'post_author' => 1,
      		   'post_slug' => 'home'
   		   );
        $home_id = wp_insert_post($home);
         
         //Set the home page template
         add_post_meta( $home_id, '_wp_page_template', 'page-template/home-page.php' );

         //Set the static front page
         $home = get_page_by_title( 'Home' );
         update_option( 'page_on_front', $home->ID );
         update_option( 'show_on_front', 'page' );

        
          // Create a blog page and assigned the template
          $blog_title = 'Blog';
          $blog_check = get_page_by_title($blog_title);
          $blog = array(
             'post_type' => 'page',
             'post_title' => $blog_title,
             'post_status' => 'publish',
             'post_author' => 1,
             'post_slug' => 'blog'
          );
          $blog_id = wp_insert_post($blog);
         

         //Set the blog page template
         add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php' );

        
         // Create a Page 
          $page_title = 'Page ';
          $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. laborum.ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

          $page_check = get_page_by_title($page_title);
          $page = array(
          'post_type' => 'page',
          'post_title' => $page_title,
          'post_content'  => $content,
          'post_status' => 'publish',
          'post_author' => 1,
          'post_slug' => 'page'
          );
          $page_id = wp_insert_post($page);
         
          // Create a contact page and assigned the template
          $contact_title = 'Contact';
          $contact_check = get_page_by_title($contact_title);
          $contact = array(
          'post_type' => 'page',
          'post_title' => $contact_title,
          'post_status' => 'publish',
          'post_author' => 1,
          'post_slug' => 'contact'
          );
 		     $contact_id = wp_insert_post($contact);
         

         //Set the blog with right sidebar template
         add_post_meta( $contact_id, '_wp_page_template', 'page-template/contact.php' );

        // --------------- Drag and Drop -------------

        set_theme_mod( 'solar_renewable_energy_pro_section_ordering_settings_repeater', 'service,latest-news,featured,category,best,partner,deal,testimonial,contribute,newsletter');

         // ----------------- Topbar -----------------

         set_theme_mod( 'solar_renewable_energy_pro_topbar_section_phone_icon', 'fas fa-phone' );
         set_theme_mod( 'solar_renewable_energy_pro_topbar_section_phone_title', '24/7 In Touch' );
         set_theme_mod( 'solar_renewable_energy_pro_topbar_section_phone_no', '000012321545648' );
         set_theme_mod( 'solar_renewable_energy_pro_topbar_section_email_icon', 'fas fa-envelope' );
         set_theme_mod( 'solar_renewable_energy_pro_topbar_section_email_title', 'Email Address' );
         set_theme_mod( 'solar_renewable_energy_pro_topbar_section_email_id', 'organic@gmail.com' );

         // ----------------- Header -----------------

         set_theme_mod( 'solar_renewable_energy_pro_header_section_button', 'Get a Quote' );
         set_theme_mod( 'solar_renewable_energy_pro_header_section_button_url', '#' );

        /*customizer-part-slide.php*/
         //Number of slides to show section
        set_theme_mod( 'solar_renewable_energy_pro_slide_number', '3' );

        //Slider Images section
        for($i=1; $i<=3; $i++) {
          set_theme_mod( 'solar_renewable_energy_pro_slide_image'.$i, get_template_directory_uri().'/assets/images/slides/slide.jpg' );
          
          //Slide Text 
          set_theme_mod( 'solar_renewable_energy_pro_slide_text'.$i, 'As a world wide distributor of solar supplies we endeavor to provide fast and knowledgeable service, we can get you materials by sea or air.' );
          //Slide title section
          set_theme_mod( 'solar_renewable_energy_pro_slide_heading'.$i, 'Energize Society By Reliable Energy!' );
          
          set_theme_mod( 'solar_renewable_energy_pro_slide_btn'.$i, 'Read More' );
          set_theme_mod( 'solar_renewable_energy_pro_slide_btn_url'.$i, '#' );

        }
        //Slide Delay 
        set_theme_mod( 'solar_renewable_energy_pro_slide_delay', '10000' );
        
        //Service Box
        set_theme_mod( 'solar_renewable_energy_pro_service_count', 3 );
        
        $service_title = array('Efficiency & Power','Trust & Warranty','High Quality Work');

        $service_icon = array('fa-solid fa-bolt','fa-solid fa-leaf','fa-solid fa-award');

        for($i=1; $i<=3; $i++) {

          set_theme_mod( 'solar_renewable_energy_pro_service_icon'.$i, $service_icon[$i-1] );
         
          set_theme_mod( 'solar_renewable_energy_pro_service_heading'.$i, $service_title[$i-1] );
          
          set_theme_mod( 'solar_renewable_energy_pro_service_text'.$i, 'There are many types of passages many types of Lorem.' );
        }

      // ---------------- Featured Product ----------------

      set_theme_mod( 'solar_renewable_energy_pro_featured_product_main_heading', 'Featured Products' );
      set_theme_mod( 'solar_renewable_energy_pro_featured_product_title_img', get_template_directory_uri().'/assets/images/title_line.png' );
      set_theme_mod( 'solar_renewable_energy_pro_featured_product_btn','Add to Cart');
      set_theme_mod( 'solar_renewable_energy_pro_featured_product_btn_icon','fas fa-cart-plus');

        wp_insert_term(
          'featured', // the term 
          'product_cat', // the taxonomy
          array(
          'description'=> '',
          'slug' => 'featured',
          'term_id'=>12,
          'term_taxonomy_id'=>34,
          ));

          set_theme_mod( 'solar_renewable_energy_pro_featured_product_category', 'featured' );
          if ( class_exists( 'WooCommerce' ) ) {
            for($i=1;$i<=4;$i++) {

            $title = 'Product Title Here';
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';
            
            // Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $title ),
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_type'     => 'product',
            );

            // Insert the post into the database
            $post_id = wp_insert_post( $my_post );
            // Gets term object from Tree in the database. 
            $term = get_term_by('name', 'featured', 'product_cat');
            wp_set_object_terms($post_id, $term->term_id, 'product_cat');

            update_post_meta( $post_id, '_sale_price', "59" );
            update_post_meta( $post_id, '_regular_price', "49" );
            update_post_meta( $post_id, 'featured-custom-field1', "Vegetable" );
            update_post_meta( $post_id, 'featured-custom-field2', "15%-off" );

            $image_url = get_template_directory_uri().'/assets/images/featured_product.png';

            $image_name= 'featured_product.png';
            $upload_dir       = wp_upload_dir(); 
            // Set upload folder
            $image_data= file_get_contents($image_url); 
            // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
            // Generate unique name
            $filename= basename( $unique_file_name ); 
            // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
            $file = $upload_dir['path'] . '/' . $filename;
            } else {
            $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title'     => sanitize_file_name( $filename ),
            'post_content'   => '',
            'post_type'     => 'post',
            'post_status'    => 'inherit'
            );
            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );
            // And finally assign featured image to post
            set_post_thumbnail( $post_id, $attach_id );
          }
        }

      // ---------------- Best Product ----------------

      set_theme_mod( 'solar_renewable_energy_pro_best_product_main_heading', 'Best Sellers' );
      set_theme_mod( 'solar_renewable_energy_pro_best_product_title_img', get_template_directory_uri().'/assets/images/title_line.png' );
      set_theme_mod( 'solar_renewable_energy_pro_best_product_btn','Add to Cart');
      set_theme_mod( 'solar_renewable_energy_pro_best_product_btn_icon','fas fa-cart-plus');

        wp_insert_term(
          'best', // the term 
          'product_cat', // the taxonomy
          array(
          'description'=> '',
          'slug' => 'best',
          'term_id'=>12,
          'term_taxonomy_id'=>34,
          ));

          set_theme_mod( 'solar_renewable_energy_pro_best_product_category', 'best' );
          if ( class_exists( 'WooCommerce' ) ) {
            for($i=1;$i<=4;$i++) {

            $title = 'Product Title Here';
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';
            
            // Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $title ),
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_type'     => 'product',
            );

            // Insert the post into the database
            $post_id = wp_insert_post( $my_post );
            // Gets term object from Tree in the database. 
            $term = get_term_by('name', 'best', 'product_cat');
            wp_set_object_terms($post_id, $term->term_id, 'product_cat');

            update_post_meta( $post_id, '_sale_price', "512" );
            update_post_meta( $post_id, '_regular_price', "599" );
            update_post_meta( $post_id, 'best-custom-field1', "Vegetable" );
            update_post_meta( $post_id, 'best-custom-field2', "15%-off" );


            $image_url = get_template_directory_uri().'/assets/images/best_product.png';

            $image_name= 'best_product.png';
            $upload_dir       = wp_upload_dir(); 
            // Set upload folder
            $image_data= file_get_contents($image_url); 
            // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
            // Generate unique name
            $filename= basename( $unique_file_name ); 
            // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
            $file = $upload_dir['path'] . '/' . $filename;
            } else {
            $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title'     => sanitize_file_name( $filename ),
            'post_content'   => '',
            'post_type'     => 'post',
            'post_status'    => 'inherit'
            );
            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );
            // And finally assign featured image to post
            set_post_thumbnail( $post_id, $attach_id );
          }
        }

      // ---------------- Deal of the week ----------------

      set_theme_mod( 'solar_renewable_energy_pro_deal_product_main_heading', 'Deal Of The Week ' );
      set_theme_mod( 'solar_renewable_energy_pro_deal_bgcolor', '#f3f7fb' );
      set_theme_mod( 'solar_renewable_energy_pro_deal_product_title_img', get_template_directory_uri().'/assets/images/title_line.png' );
      set_theme_mod( 'solar_renewable_energy_pro_deal_product_btn','Add to Cart');
      set_theme_mod( 'solar_renewable_energy_pro_deal_product_btn_icon','fas fa-cart-plus');

        wp_insert_term(
          'deal', // the term 
          'product_cat', // the taxonomy
          array(
          'description'=> '',
          'slug' => 'deal',
          'term_id'=>12,
          'term_taxonomy_id'=>34,
          ));

          set_theme_mod( 'solar_renewable_energy_pro_deal_product_category', 'deal' );
          if ( class_exists( 'WooCommerce' ) ) {
            for($i=1;$i<=6;$i++) {

            $title = 'Product Title Here';
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';
            
            // Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $title ),
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_type'     => 'product',
            );

            // Insert the post into the database
            $post_id = wp_insert_post( $my_post );
            // Gets term object from Tree in the database. 
            $term = get_term_by('name', 'deal', 'product_cat');
            wp_set_object_terms($post_id, $term->term_id, 'product_cat');

            update_post_meta( $post_id, '_sale_price', "29" );
            update_post_meta( $post_id, '_regular_price', "49" );
            update_post_meta( $post_id, 'deal-custom-field', "Vegetable" );

            $image_url = get_template_directory_uri().'/assets/images/deal_product.png';

            $image_name= 'deal_product.png';
            $upload_dir       = wp_upload_dir(); 
            // Set upload folder
            $image_data= file_get_contents($image_url); 
            // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
            // Generate unique name
            $filename= basename( $unique_file_name ); 
            // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
            $file = $upload_dir['path'] . '/' . $filename;
            } else {
            $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title'     => sanitize_file_name( $filename ),
            'post_content'   => '',
            'post_type'     => 'post',
            'post_status'    => 'inherit'
            );
            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );
            // And finally assign featured image to post
            set_post_thumbnail( $post_id, $attach_id );
          }
        }

        // ------------ Contribute farm ----------------

        set_theme_mod( 'solar_renewable_energy_pro_contribute_bgcolor', '#f3f7fb');
        set_theme_mod( 'solar_renewable_energy_pro_contribute_main_heading', 'Contribute to Farm');
        set_theme_mod( 'solar_renewable_energy_pro_contribute_title_img', get_template_directory_uri().'/assets/images/title_line.png' );
        set_theme_mod( 'solar_renewable_energy_pro_contribute_right_img', get_template_directory_uri().'/assets/images/contribute_right.png' );
        
        set_theme_mod( 'solar_renewable_energy_pro_contribute_title', 'Contribute to Farm for Help Us to Provide More Products');
        set_theme_mod( 'solar_renewable_energy_pro_contribute_text1', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.');
        set_theme_mod( 'solar_renewable_energy_pro_contribute_text2', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est');

        set_theme_mod( 'solar_renewable_energy_pro_contribute_btn', 'Contribute to Farm ');
        set_theme_mod( 'solar_renewable_energy_pro_contribute_btn_span', 'Click on the Button to');
        set_theme_mod( 'solar_renewable_energy_pro_contribute_btn_icon', 'fas fa-long-arrow-alt-right');
        set_theme_mod( 'solar_renewable_energy_pro_contribute_btn_url', '#');        

        // -------------- Partner ----------------

        set_theme_mod( 'solar_renewable_energy_pro_partner_number', 6);
        for($i=1;$i<=6;$i++) {
          set_theme_mod( 'solar_renewable_energy_pro_partner_image'.$i, get_template_directory_uri().'/assets/images/partner/partner'.$i.'.png');
        }       

        // -------------- Category ----------------

        set_theme_mod( 'solar_renewable_energy_pro_category_bgimage', get_template_directory_uri().'/assets/images/category/category_bg.jpg');
        set_theme_mod( 'solar_renewable_energy_pro_category_title_img', get_template_directory_uri().'/assets/images/title_line.png');
        set_theme_mod( 'solar_renewable_energy_pro_category_main_heading', 'Categories ' );

        set_theme_mod( 'solar_renewable_energy_pro_category_increase', '6' );

        $category_title = array('Fruits','Vegetables','Beverages','Dairy','Packed Food','Heath & Fitness');

          for($i=1; $i<=6; $i++) {       

          set_theme_mod( 'solar_renewable_energy_pro_category_image'.$i, get_template_directory_uri().'/assets/images/category/category'.$i.'.png');
          set_theme_mod( 'solar_renewable_energy_pro_category_image_url'.$i, '#');
          set_theme_mod( 'solar_renewable_energy_pro_category_title'.$i, $category_title[$i-1] );
          set_theme_mod( 'solar_renewable_energy_pro_category_text'.$i, 'similique sunt in culpa qui officia deserunt est' );
        }       

        // ------------ Latest News ----------------

        set_theme_mod( 'solar_renewable_energy_pro_latest_news_bgcolor', '#f3f7fb' );
        set_theme_mod( 'solar_renewable_energy_pro_latest_news_main_heading', 'Recent Projects' );
        set_theme_mod( 'solar_renewable_energy_pro_latest_title_img', get_template_directory_uri().'/assets/images/title_line.png' );
        
        for($i=1; $i<=4; $i++) {
          set_theme_mod( 'solar_renewable_energy_pro_latest_news_comment_icon'.$i, 'fas fa-comments' );
          set_theme_mod( 'solar_renewable_energy_pro_latest_news_btn'.$i, 'Read More' );
          set_theme_mod( 'solar_renewable_energy_pro_latest_news_btn_icon'.$i, 'fas fa-angle-double-right' );

        }

        set_theme_mod( 'solar_renewable_energy_pro_latest_news_number', 4 );

        for($i=1;$i<=4;$i++) {
             
          $title = 'qui blanditiis praesentaiusm voluptatum deleniti atque';
          $content = 'Et harum quidem rerum facilis est expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi';

          // Create post object
          $my_post = array(
           'post_title'    => wp_strip_all_tags( $title ),
           'post_content'  => $content,
           'post_status'   => 'publish',
           'post_type'     => 'post',   
          );

           // Insert the post into the database
          $post_id = wp_insert_post( $my_post );

          $image_url = get_template_directory_uri().'/assets/images/blogs/Newsimg'.$i.'.png';

          $image_name= 'latest-news'.$i.'.png';
          $upload_dir       = wp_upload_dir(); 
          // Set upload folder
          $image_data       = file_get_contents($image_url); 
          // Get image data
          $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
          // Generate unique name
          $filename= basename( $unique_file_name ); 
          // Create image file name
          // Check folder permission and define file location
          if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
          } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
          }
          // Create the image  file on the server
          file_put_contents( $file, $image_data );
          // Check image file type
          $wp_filetype = wp_check_filetype( $filename, null );
          // Set attachment data
          $attachment = array(
           'post_mime_type' => $wp_filetype['type'],
           'post_title'     => sanitize_file_name( $filename ),
           'post_content'   => '',
           'post_type'     => 'post',
           'post_status'    => 'inherit'
          );

          // Create the attachment
          $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
          // Include image.php
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          // Define attachment metadata
          $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );
          // And finally assign featured image to post
          set_post_thumbnail( $post_id, $attach_id );
        }

       // -------------- Testimonial ---------------

        set_theme_mod( 'solar_renewable_energy_pro_testimonial_main_heading', 'Testimonial' );
        set_theme_mod( 'solar_renewable_energy_pro_testimonial_count', 3 );
        set_theme_mod( 'solar_renewable_energy_pro_testimonail_title_img', get_template_directory_uri().'/assets/images/title_line.png' );

        for($i=1;$i<=3;$i++) {

          set_theme_mod( 'solar_renewable_energy_pro_testimonial_img'.$i, get_template_directory_uri().'/assets/images/testimonial.png' ); 
          set_theme_mod( 'solar_renewable_energy_pro_testimonail_text'.$i, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.');
          set_theme_mod( 'solar_renewable_energy_pro_testimonial_title'.$i, 'Kavin Peterson');
        }

        // ------------- Newsletter ---------------

        set_theme_mod( 'solar_renewable_energy_pro_newsletter_main_heading', 'Get Daily Updates Direct on Your Email' );
        set_theme_mod( 'solar_renewable_energy_pro_newsletter_text', 'Subscribe us Get Updates.');

        // contact form shortcode
    $cf7title = "newsletter Section Form";
    $cf7content = '[email email-416 class:nl-email placeholder "Email Id"][submit class:nl-btn "Submit"]
    [_site_title] "[your-subject]"
    [_site_title] <abc@xyz.com>
    From: [your-name] <[your-email]>
    Subject: [your-subject]

    Message Body:
    [your-message]

    --
    This e-mail was sent from a contact form on [_site_title] ([_site_url])
    [_site_admin_email]
    Reply-To: [your-email]

    0
    0

    [_site_title] "[your-subject]"
    [_site_title] <abc@xyz.com>
    Message Body:
    [your-message]

    --
    This e-mail was sent from a contact form on [_site_title] ([_site_url])
    [your-email]
    Reply-To: [_site_admin_email]

    0
    0
    Thank you for your message. It has been sent.
    There was an error trying to send your message. Please try again later.
    One or more fields have an error. Please check and try again.
    There was an error trying to send your message. Please try again later.
    You must accept the terms and conditions before sending your message.
    The field is required.
    The field is too long.
    The field is too short.
    There was an unknown error uploading the file.
    You are not allowed to upload files of this type.
    The file is too big.
    There was an error uploading the file.';

    $cf7_post = array(
      'post_title'    => wp_strip_all_tags( $cf7title ),
      'post_content'  => $cf7content,
      'post_status'   => 'publish',
      'post_type'     => 'wpcf7_contact_form',
    );
    // Insert the post into the database
    $cf7post_id = wp_insert_post( $cf7_post );

    add_post_meta(
      $cf7post_id,
      "_form",
      '[email email-416 class:nl-email placeholder "Email Id"][submit class:nl-btn "Submit"]'
    );

    $cf7mail_data  = array(
      'subject' => '[_site_title] "[your-subject]"',
      'sender'  => '[_site_title] <abc@xyz.com>',
      'body'    => 'From: [your-name] <[your-email]>
      Subject: [your-subject]

      Message Body:
      [your-message]

      --
      This e-mail was sent from a contact form on [_site_title] ([_site_url])',
      'recipient'           => '[_site_admin_email]',
      'additional_headers'  => 'Reply-To: [your-email]',
      'attachments'         => '',
      'use_html'            => 0,
      'exclude_blank'       => 0
    );

    add_post_meta($cf7post_id, "_mail", $cf7mail_data);
    // Gets term object from Tree in the database.

    $cf7shortcode = '[contact-form-7 id="'.$cf7post_id.'" title="'.$cf7title.'"]';

    set_theme_mod( 'solar_renewable_energy_pro_newsletter_shortcode',$cf7shortcode );

    // print_r($cf7shortcode);
    // exit;

        /*customizer-part-social-icons.php*/
            //twitter link
            set_theme_mod( 'solar_renewable_energy_pro_headertwitter', 'https://twitter.com/' ); 
            //facebook link 
            set_theme_mod( 'solar_renewable_energy_pro_headerfacebook', 'https://www.facebook.com/' ); 
            //GooglePlus link
            set_theme_mod( 'solar_renewable_energy_pro_headeryoutube', 'https://www.youtube.com/' );
            //Pinterest link
            set_theme_mod( 'solar_renewable_energy_pro_headerpinterest', 'https://in.pinterest.com/' );

         //Contact Page
            set_theme_mod( 'solar_renewable_energy_pro_contactpage_form_title', 'Contact Us' ); 
            //Longitude
            set_theme_mod( 'solar_renewable_energy_pro_address_longitude', '-80.053361' ); 
            //Latitude
            set_theme_mod( 'solar_renewable_energy_pro_address_latitude', '26.704241' ); 
            //Email Title text
            set_theme_mod( 'solar_renewable_energy_pro_contactpage_email_title', 'Email ' ); 
            set_theme_mod( 'solar_renewable_energy_pro_contactpage_email_icon', 'far fa-envelope-open ' ); 
            //Email ID
            set_theme_mod( 'solar_renewable_energy_pro_contactpage_email_one', 'support@dummy.com' ); 
            set_theme_mod( 'solar_renewable_energy_pro_contactpage_email_two', 'support@dummy.com' ); 
            //Address Title text
            set_theme_mod( 'solar_renewable_energy_pro_address_title', 'Address' ); 
            set_theme_mod( 'solar_renewable_energy_pro_contactpage_address_icon', 'fas fa-map-marker-alt' ); 
            //Address
            set_theme_mod( 'solar_renewable_energy_pro_address', '123 6th eight avenue FL 32904 , 455 Martinson, Los Angeles' ); 
            //Phone Title text
            set_theme_mod( 'solar_renewable_energy_pro_contactpage_phone_title', 'Phone' ); 
            //Phone No.
            set_theme_mod( 'solar_renewable_energy_pro_contactpage_phone_icon', 'fas fa-phone' );
            set_theme_mod( 'solar_renewable_energy_pro_contactpage_phone_one', '+1 881 235 6284' );
            set_theme_mod( 'solar_renewable_energy_pro_contactpage_phone_two', '+1 881 235 6284' );

          set_theme_mod( 'solar_renewable_energy_pro_footer_footer_logo', get_template_directory_uri().'/assets/images/footer-logo.png' );
          //footer text
         
          //Copyright Text
            set_theme_mod( 'solar_renewable_energy_pro_footer_copy', 'Wordpress Theme 2020' );

            // ------- Create Main Menu --------
          $menuname =  'OT_MAIN_Primary Menu';
          $bpmenulocation = 'primary';
          $menu_exists = wp_get_nav_menu_object( $menuname );
      
          if( !$menu_exists){
              $menu_id = wp_create_nav_menu($menuname);
              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Home','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'home',
                  'menu-item-url' => home_url( '/' ),
                  'menu-item-status' => 'publish'));

              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('About Us','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'about',
                  'menu-item-url' => home_url( '/index.php/about/' ),
                  'menu-item-status' => 'publish'));

              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Services','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'services',
                  'menu-item-url' => home_url( '/index.php/services/' ),
                  'menu-item-status' => 'publish'));

              $parent_page_item = wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Pages','solar_renewable_energy_pro'),
              'menu-item-classes' => 'page',
              'menu-item-url' => home_url( '/index.php/page/' ),
              'menu-item-status' => 'publish'));

            wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' => __('Page Left Sidebar','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'page-left',
                  'menu-item-url' => home_url( '/index.php/page-left/' ),
                  'menu-item-status' => 'publish',
                  'menu-item-parent-id' => $parent_page_item
                ));

            wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' => __('Page Right Sidebar','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'page-right',
                  'menu-item-url' => home_url( '/index.php/page-right/' ),
                  'menu-item-status' => 'publish',
                  'menu-item-parent-id' => $parent_page_item
                ));

            wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Typography','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'typography',
                  'menu-item-url' => home_url( '/index.php/typography/' ),
                  'menu-item-status' => 'publish',
                  'menu-item-parent-id' => $parent_page_item
                ));

            $parent_item = wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' => __('Blog','solar_renewable_energy_pro'),
              'menu-item-classes' => 'blog',
              'menu-item-url' => home_url( '/index.php/blog/' ),
              'menu-item-status' => 'publish'
            ));
            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' => __('Blog Left Sidebar','solar_renewable_energy_pro'),
              'menu-item-classes' => 'blog-left-sidebar',
              'menu-item-url' => home_url( '/index.php/blog-left-sidebar/' ),
              'menu-item-status' => 'publish',
              'menu-item-parent-id' => $parent_item
            ));
      
            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' => __('Blog Right Sidebar','solar_renewable_energy_pro'),
              'menu-item-classes' => 'blog-right-sidebar',
              'menu-item-url' => home_url( '/index.php/blog-right-sidebar/' ),
              'menu-item-status' => 'publish',
              'menu-item-parent-id' => $parent_item
            ));

              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Contact Us','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'contact',
                  'menu-item-url' => home_url( '/index.php/contact/' ),
                  'menu-item-status' => 'publish')); 

                
              if( !has_nav_menu( $bpmenulocation ) ){
                  $locations = get_theme_mod('nav_menu_locations');
                  $locations[$bpmenulocation] = $menu_id;
                  set_theme_mod( 'nav_menu_locations', $locations );
              }
          }

          $blog_title = 'Blog';
          $blog_check = get_page_by_title($blog_title);
          $blog = array(
            'post_type' => 'page',
            'post_title' => $blog_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'latest-news'
          );
          $blog_id = wp_insert_post($blog);

          $cart_title = 'Cart';
          $cart_check = get_page_by_title($cart_title);
          $cart = array(
            'post_type' => 'page',
            'post_title' => $cart_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'cart'
          );
          $cart_id = wp_insert_post($cart);

          $shop_title = 'Shop';
          $shop_check = get_page_by_title($shop_title);
          $shop = array(
            'post_type' => 'page',
            'post_title' => $shop_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'shop'
          );
          $shop_id = wp_insert_post($shop);


          // ------- Create Footer link Menu --------
          $menuname =  'OT_link_Menu';
          $bpmenulocation = 'footer-link';
          $menu_exists = wp_get_nav_menu_object( $menuname );
      
          if( !$menu_exists){
              $menu_id = wp_create_nav_menu($menuname);
              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Blog','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'latest-news',
                  'menu-item-url' => home_url( '/index.php/latest-news/' ),
                  'menu-item-status' => 'publish'));

              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Cart','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'cart',
                  'menu-item-url' => home_url( '/index.php/cart/' ),
                  'menu-item-status' => 'publish'));
      
              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Shop','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'shop',
                  'menu-item-url' => home_url( '/index.php/shop/' ),
                  'menu-item-status' => 'publish'));

              if( !has_nav_menu( $bpmenulocation ) ){
                  $locations = get_theme_mod('nav_menu_locations');
                  $locations[$bpmenulocation] = $menu_id;
                  set_theme_mod( 'nav_menu_locations', $locations );
              }
          }


          $fruit_title = 'Fruit';
          $fruit_check = get_page_by_title($fruit_title);
          $fruit = array(
            'post_type' => 'page',
            'post_title' => $fruit_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'fruit'
          );
          $fruit_id = wp_insert_post($fruit);

          $vegetable_title = 'Vegetable';
          $vegetable_check = get_page_by_title($vegetable_title);
          $vegetable = array(
            'post_type' => 'page',
            'post_title' => $vegetable_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'vegetable'
          );
          $vegetable_id = wp_insert_post($vegetable);

          $beverages_title = 'Beverages';
          $beverages_check = get_page_by_title($beverages_title);
          $beverages = array(
            'post_type' => 'page',
            'post_title' => $beverages_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'program'
          );
          $beverages_id = wp_insert_post($beverages);

          $dairy_title = 'Dairy';
          $dairy_check = get_page_by_title($dairy_title);
          $dairy = array(
            'post_type' => 'page',
            'post_title' => $dairy_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'dairy'
          );
          $dairy_id = wp_insert_post($dairy);

          $packed_title = 'Packed food';
          $packed_check = get_page_by_title($packed_title);
          $packed = array(
            'post_type' => 'page',
            'post_title' => $packed_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'packed-food'
          );
          $packed_id = wp_insert_post($packed);

          $health_title = 'Health & Fitness';
          $health_check = get_page_by_title($health_title);
          $health = array(
            'post_type' => 'page',
            'post_title' => $health_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'health'
          );
          $health_id = wp_insert_post($health);


          // ------- Create Footer category Menu --------
          $menuname =  'OT_category_Menu';
          $bpmenulocation = 'footer-category';
          $menu_exists = wp_get_nav_menu_object( $menuname );
      
          if( !$menu_exists){
              $menu_id = wp_create_nav_menu($menuname);
              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Fruit','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'fruit',
                  'menu-item-url' => home_url( '/index.php/fruit/' ),
                  'menu-item-status' => 'publish'));

              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Vegetable','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'vegetable',
                  'menu-item-url' => home_url( '/index.php/vegetable/' ),
                  'menu-item-status' => 'publish'));
      
              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Beverages','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'beverages',
                  'menu-item-url' => home_url( '/index.php/beverages/' ),
                  'menu-item-status' => 'publish'));

              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Dairy','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'dairy',
                  'menu-item-url' => home_url( '/index.php/dairy/' ),
                  'menu-item-status' => 'publish'));

              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Packed Food','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'packed-food',
                  'menu-item-url' => home_url( '/index.php/packed-food/' ),
                  'menu-item-status' => 'publish'));

               wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Health & Fitness','solar_renewable_energy_pro'),
                  'menu-item-classes' => 'health',
                  'menu-item-url' => home_url( '/index.php/health/' ),
                  'menu-item-status' => 'publish'));

      
              if( !has_nav_menu( $bpmenulocation ) ){
                  $locations = get_theme_mod('nav_menu_locations');
                  $locations[$bpmenulocation] = $menu_id;
                  set_theme_mod( 'nav_menu_locations', $locations );
              }
          }
          

          $OT_Widget_Importer = new OT_Widget_Importer;
          $OT_Widget_Importer->import_widgets( $OT_solar_energy_WIE_FILE );

       }
    ?>
     
			
			



    <!-- License key code start -->
    <?php //if( get_the_suspension_status() == 'false' && get_the_validation_status() == 'false' ){ ?>
      <div class="license-key-wrap">
        <form id="theme-license-key-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=solar_renewable_energy_pro_guide" method="POST">
          <div class="license-key-input-wrap">
            <label><?php esc_html_e('Enter Your Theme License Key:','solar-renewable-energy-pro'); ?></label>
            <div class="license-key-input">
              <input type="text" name="solar_renewable_energy_pro_license_key" required placeholder="License Key" value="<?php echo esc_attr(get_the_theme_key()); ?>" />
            </div>
            <button class="button" name="key-activation" value="<?php echo esc_html('Activate','solar-renewable-energy-pro'); ?>" type="submit" name="button">Activate</button>
            <button class="button deactivate-domain" value="<?php echo esc_html('Deactivate','solar-renewable-energy-pro'); ?>" type="button">Deactivate</button>
            <?php if( get_the_suspension_status() == 'false' && get_the_validation_status() !== 'false' ){ ?>
              <button class="button next-step-activation" value="<?php echo esc_html('Next','solar-renewable-energy-pro'); ?>" type="button">Next</button>
            <?php } ?>
          </div>
        </form>
      </div>
    <?php //} ?>
    <?php if( get_the_suspension_status() == 'false' && get_the_validation_status() !== 'false' ){ ?>
      <div class="demo-import-wrap" style="display:none;">
        <p><?php echo esc_html('Please take backup if your website is already live with data.This importer will fill the Solar Renewable Energy Pro new customizer values.','solar-renewable-energy-pro'); ?></p>
        <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=solar_renewable_energy_pro_guide" method="POST" onsubmit="return validate(this);">
          <input type="submit" name="submit" value="<?php echo esc_html('Run Importer','solar-renewable-energy-pro'); ?>" class="button button-primary button-large">
        </form>
        <div class="success">
          <?php
            if (isset($_POST['submit'])) {
              echo esc_html('Demo Import Successful','solar-renewable-energy-pro');
            }
          ?>
        </div>
        <script type="text/javascript">
          function validate(valid) {
            if(confirm("Do you really want to do this?")){
              document.forms[1].submit();
            } else {
              return false;
            }
          }
        </script>
      </div>
    <?php } ?>
    <!-- License key code end -->

      <?php
         $admin_url = admin_url( 'admin-ajax.php' );
       ?>
      <script type="text/javascript">
             function validate() {
              document.forms[0].submit();
             }

               jQuery(document).ready(function($) {
                var pathUrl = new URL(window.location.href)
                var searchParams = pathUrl.searchParams.get("import-demo")
                if(searchParams) {
                  history.replaceState({}, '', 'themes.php?page=solar_renewable_energy_pro_guide')
                }
                $( "#mep-demo-importer-form" ).submit(function( event ) {
                  event.preventDefault();
                  if(confirm("Do you really want to do this?")){
                    $('.spinner').addClass('is-active');
                    var mep_plugin_array = [{
                      'name'             : 'contact-form-7',
                      'slug'             : 'contact-form-7',
                      'source'           : 'https://downloads.wordpress.org/plugin/contact-form-7.zip',
                      'required'         : true,
                      'force_activation' : false,
                      'text-domain'      : 'contact-form-7',
                      'file_name'        : 'wp-contact-form-7.php'
                    },
                    {
                    'name'             : 'woocommerce',
                    'slug'             : 'woocommerce',
                    'source'           : 'https://downloads.wordpress.org/plugin/woocommerce.zip',
                    'required'         : true,
                    'force_activation' : false,
                    'text-domain'      : 'woocommerce',
                    'file_name'        : 'woocommerce.php'
                  }];
                  var url = '<?php echo $admin_url; ?>';
                    // console.log(url)
                    mep_plugin_array.map(function (plugin_url_data, index) {

                              var data_to_post = {
                                action:             'ive-check-plugin-exists',
                                plugin_text_domain: plugin_url_data.slug,
                                main_plugin_file:   plugin_url_data.file_name
                              };
                              var data_to_post_install = {
                                action:             'ive_install_and_activate_plugin',
                                plugin_details: {
                                  plugin_text_domain: plugin_url_data.slug,
                                  plugin_main_file: plugin_url_data.file_name,
                                  plugin_url: plugin_url_data.source
                                },
                                main_plugin_file:   plugin_url_data.file_name
                              };

                              jQuery.ajax({
                                url:    url,
                                type:   'post',
                                data:   data_to_post,
                                async:  false
                              }).done( function( response ) {
                                if ( response.data.install_status == true ) {
                                  jQuery.ajax({
                                    url:    url,
                                    type:   'post',
                                    data:   data_to_post_install,
                                    async:  false
                                  }).done( function( response ) {
                                    console.log(plugin_url_data.slug ,'installed');
                                    if((mep_plugin_array.length - 1) == index) {
                                      console.log('inside length');
                                      $('.spinner').removeClass('is-active');
                                      location.href = location.href + '&import-demo=true';
                                    }
                                  })
                                }
                                else{
                                    wp.updates.installPlugin({
                                      slug:     plugin_url_data.slug,
                                      success:  function(data) {
                                        console.log(plugin_url_data);
                                        jQuery.ajax({
                                          url:    url,
                                          type:   'post',
                                          data:   data_to_post_install,
                                          async:  false
                                        }).done( function( response ) {
                                          console.log(plugin_url_data.slug ,'installed');
                                          if((mep_plugin_array.length - 1) == index) {
                                            $('.spinner').removeClass('is-active');
                                            location.href = location.href + '&import-demo=true';
                                          }
                                      })
                                      },
                                      error: function(data) {
                                        console.log(data);
                                      },
                                    });
                                }
                              });
                        })
                  } else {
                    return false;
                  }
                });
              });
              //
      </script>
      </div>