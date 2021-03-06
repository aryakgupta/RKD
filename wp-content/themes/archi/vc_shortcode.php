<?php 
//Custom Heading
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Heading", 'archi'),
   "base"      => "heading",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type"      => "textarea",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text", 'archi'),
         "param_name"=> "text",
         "value"     => "",
         "description" => __("Add Text", 'archi')
      ),
      array(
        "type" => "dropdown",
        "heading" => __('Element Tag', 'archi'),
        "param_name" => "tag",
        "value" => array(
                     __('Select Tag', 'archi') => '',
                     __('h1', 'archi') => 'h1',
                     __('h2', 'archi') => 'h2',
                     __('h3', 'archi') => 'h3',  
                     __('h4', 'archi') => 'h4',
                     __('h5', 'archi') => 'h5',
                     __('h6', 'archi') => 'h6',  
                     __('p', 'archi')  => 'p',
                     __('div', 'archi') => 'div',
                    ),

        "description" => __("Section Element Tag", 'archi'),      
      ),
      array(
        "type" => "dropdown",
        "heading" => __('Text Align', 'archi'),
        "param_name" => "align",
        "value" => array( 
                     __('Select Align', 'archi') => '',  
                     __('left', 'archi') => 'left',
                     __('right', 'archi') => 'right',  
                     __('center', 'archi') => 'center',
                     __('justify', 'archi') => 'justify',                  
                    ),
        "description" => __("Section Overlay", 'archi'),      
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Font Size", 'archi'),
         "param_name"=> "size",
         "value"     => "",
         "description" => __("Font Size", 'archi')
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Color", 'archi'),
         "param_name"=> "color",
         "value"     => "",
         "description" => __("Color", 'archi')
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Class Extra", 'archi'),
         "param_name"=> "class",
         "value"     => "",
         "description" => __("Class extra for style", 'archi')
      ),
    )));

}

// Line Solid
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Line Solid", 'archi'),
   "base"      => "line_solid",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon",
         "param_name" => "icon",
         "value" => "",
         "description" => __("EX: circle.Find here: <a target='_blank' href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'archi')
      ),
    )));
}

// Buttons
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Button", 'archi'),
   "base" => "button",
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Text", 'archi'),
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add Your Button Text", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Link", 'archi'),
         "param_name" => "btnlink",
         "value" => '',
         "description" => __("Add Link Url, Empty do not show.", 'archi')
      ), 
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Class Extra", 'archi'),
         "param_name"=> "class",
         "value"     => "",
         "description" => __("Class extra for style", 'archi')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ),      
    )));
}

// Buttons 2
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Button 2", 'archi'),
   "base" => "button2",
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
         'type' => 'vc_link',
          "heading" => __("Link Button", 'archi'),
          "param_name" => "linkbox",         
          "description" => __("Add your link to button.", 'archi')
      ),          
      array(
          "type"      => "textfield",
          "holder"    => "div",
          "class"     => "",
          "heading"   => __("Class Extra", 'archi'),
          "param_name"=> "class",
          "value"     => "",
          "description" => __("Class extra for style", 'archi')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ),         
    )));
}

// Featured Boxes
if(function_exists('vc_map')){
   vc_map(array(
         "name"      => __("OT Featured Boxes", 'archi'),
         "base"      => "ot_featured_boxes",
         "class"     => "",
         "icon" => "icon-st",
         "category"  => 'Archi Elements',
         "params"    => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'value' => '',
               'heading' => 'Title',
               'param_name' => 'simple_textfield',
            ),
            array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => __("Select Columns.", 'archi'),
               "param_name" => "columns",
               "value" => array(                                      
                           __('Columns 4', 'archi') => 4,
                           __('Columns 3', 'archi') => 3,
                           __('Columns 2', 'archi') => 2,
                          ),
               "description" => __("Select number columns for show.", 'archi')
            ),  
            // params group
            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'titles',
                // Note params is mapped inside param-group:
                'params' => array(
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Enter your title(multiple field)',
                        'param_name' => 'title',
                        "value" => "",
                        "description" => __("Add Your Title Text", 'archi')
                     ),
                     array(
                        'type' => 'textarea',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Enter your desc(multiple field)',
                        'param_name' => 'desc',
                        "value" => "",
                        "description" => __("Add Desc Content Text", 'archi')
                     ),
                     array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Label Button", 'archi'),
                        "param_name" => "btntext",
                        "value" => "",
                        "description" => __("Text display in button.", 'archi')
                     ),
                     array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Link Button", 'archi'),
                        "param_name" => "btnlink",
                        "value" => "",
                        "description" => __("Link in button.", 'archi')
                     ),
                     array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Background image", 'archi'),
                        "param_name" => "bgimage",
                        "value" => "",
                        "description" => __("Upload background image", 'archi')
                     ),
                  )                
            ),
            array(
                "type"      => "textfield",
                "holder"    => "div",
                "class"     => "",
                "heading"   => __("Class Extra", 'archi'),
                "param_name"=> "class",
                "value"     => "",
                "description" => __("Class extra for style", 'archi')
            ), 
        )
    )
);
}

// Featured Boxes 2
if(function_exists('vc_map')){
   vc_map(array(
         "name"      => __("OT Featured Boxes 2", 'archi'),
         "base"      => "ot_featured_boxes2",
         "class"     => "",
         "icon" => "icon-st",
         "category"  => 'Archi Elements',
         "params"    => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'value' => '',
               'heading' => 'Title',
               'param_name' => 'simple_textfield',
            ),
            array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => __("Select Columns.", 'archi'),
               "param_name" => "columns",
               "value" => array(                                      
                           __('Columns 4', 'archi') => 4,
                           __('Columns 3', 'archi') => 3,
                           __('Columns 2', 'archi') => 2,
                          ),
               "description" => __("Select number columns for show.", 'archi')
            ),  
            // params group
            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'titles',
                // Note params is mapped inside param-group:
                'params' => array(
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Enter your title(multiple field)',
                        'param_name' => 'title',
                        "value" => "",
                        "description" => __("Add Your Title Text", 'archi')
                     ),
                     array(
                        'type' => 'textarea',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Enter your desc(multiple field)',
                        'param_name' => 'desc',
                        "value" => "",
                        "description" => __("Add Desc Content Text", 'archi')
                     ),
                     array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Label Button", 'archi'),
                        "param_name" => "btntext",
                        "value" => "",
                        "description" => __("Text display in button.", 'archi')
                     ),
                     array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Link Button", 'archi'),
                        "param_name" => "btnlink",
                        "value" => "",
                        "description" => __("Link in button.", 'archi')
                     ),
                     array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Background image", 'archi'),
                        "param_name" => "bgimage",
                        "value" => "",
                        "description" => __("Upload background image", 'archi')
                     ),
                  )                
            ),
            array(
                "type"      => "textfield",
                "holder"    => "div",
                "class"     => "",
                "heading"   => __("Class Extra", 'archi'),
                "param_name"=> "class",
                "value"     => "",
                "description" => __("Class extra for style", 'archi')
            ), 
        )
    )
);
}

// Home HTML5 Video
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home HTML5 Video", 'archi'),
   "base"      => "home_video",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(  
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add your text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your text slider (multiple field)", 'archi')
            )              
         )                
      ),        
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Background Video",
         "param_name" => "bgvideo",
         "value" => "",
         "description" => __("Background Video", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Link",
         "param_name" => "video1",
         "value" => "",
         "description" => __("Video Link mp4", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Link",
         "param_name" => "video2",
         "value" => "",
         "description" => __("Video Link webm", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Text SubTitle", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Button",
         "param_name" => "btnlink",
         "value" => "",
         "description" => __("Add Link Url, Empty do not show.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text Button",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Text Button", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Background Overlay",
         "param_name" => "video_overlay",
         "value" => array(                     
                     __('Overlay', 'archi') => 'overlay',
                     __('Dotted', 'archi') => 'dotted',                       
                     __('None', 'archi') => 'none',                   
                    ),
         "description" => __("Select video background overlay.", 'archi')
      ),  
    )));
}

// Home Parallax
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Parallax", 'archi'),
   "base"      => "home_parallax",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(  
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add your text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your text slider (multiple field)", 'archi')
            )              
         )                
      ),             
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Text", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Button",
         "param_name" => "btnlink",
         "value" => "",
         "description" => __("Add Link Url, Empty do not show.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text Button",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add You Button Text", 'archi')
      ),                       
    )));
}

// Home Parallax 2 - use for Home Minimal
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Parallax 2", 'archi'),
   "base"      => "home_parallax2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(  
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Logo",
         "param_name" => "logo",
         "value" => "",
         "description" => __("Upload your logo.", 'archi')
      ), 
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add your text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your text slider (multiple field)", 'archi')
            )              
         )                
      ),                   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Button",
         "param_name" => "btnlink",
         "value" => "",
         "description" => __("Add Link Url, Empty do not show.", 'archi')
      ),                             
    )));
}

// Home Text Static
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Text Static", 'archi'),
   "base"      => "home_text",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("SubTitle text", 'archi')
      ),                      
    )));
}

// Home Parallax image Landing
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Image Landing", 'archi'),
   "base"      => "home_landing",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(  
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "logo",
         "param_name" => "logo",
         "value" => "",
         "description" => __("Upload your logo.", 'archi')
      ),  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),       
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
        'type' => 'vc_link',
         "heading" => __("Link Button", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add your link to button.", 'archi')
      ),   
    )));
}

// Home Video Landing
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Video Landing", 'archi'),
   "base"      => "video_landing",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(  
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "logo",
         "param_name" => "logo",
         "value" => "",
         "description" => __("Upload your logo.", 'archi')
      ),        
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),       
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Background Video",
         "param_name" => "bgvideo",
         "value" => "",
         "description" => __("Background Video", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "MP4 Video Link",
         "param_name" => "mp4",
         "value" => "",
         "description" => __("Video Link mp4", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "WEBM Video Link",
         "param_name" => "webm",
         "value" => "",
         "description" => __("Video Link webm", 'archi')
      ), 
      array(
        'type' => 'vc_link',
         "heading" => __("Link Button", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add your link to button.", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Background Overlay",
         "param_name" => "video_overlay",
         "value" => array(                     
                     __('Overlay', 'archi') => 'overlay',
                     __('Dotted', 'archi') => 'dotted',                       
                     __('None', 'archi') => 'none',                   
                    ),
         "description" => __("Select video background overlay.", 'archi')
      ),  
    )));
}

// Home Moving Background - Added 23/9/2016
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Home Moving Background", 'archi'),
   "base" => "movingbg",
   "class" => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params" => array(         
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add your text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your text slider (multiple field)", 'archi')
            )              
         )                
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Text", 'archi')
      ),   
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => __("Background Image Moving", 'archi'),
         "param_name" => "bgmoving",
         "value" => "",
         "description" => __("Upload Background Image Moving, Recomended Size: 3830 x 800 (max-width: 5000 and max-height: 800)", 'archi')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Time delay",
         "param_name" => "time",
         "value" => "",
         "description" => __("Add your time delay, eg: 10 or 50", 'archi')
      ),   
      array(
        'type' => 'vc_link',
         "heading" => __("Button Link", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add link to button.", 'archi')
      ),   
    )));
}

// Home Youtube Video - Added 23/9/2016
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Home Youtube Video", 'archi'),
   "base" => "home_youtubevideo",
   "class" => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Enter Your ID YouTube Video", 'archi'),
         "param_name" => "video_link",
         "value" => "",
         "description" => __("Your ID YouTube Video, Example: <code>5ynGpsRtNHw</code> https://www.youtube.com/embed/<code>5ynGpsRtNHw</code> or https://www.youtube.com/watch?v=<code>5ynGpsRtNHw</code>, Please only Your ID Video and not all link video.", 'archi')
      ),    
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add your text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your text slider (multiple field)", 'archi')
            )              
         )                
      ),            
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Text", 'archi')
      ),   
      array(
        'type' => 'vc_link',
         "heading" => __("Button Link", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add link to button.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Background Overlay",
         "param_name" => "video_overlay",
         "value" => array(                     
                     __('Overlay', 'archi') => 'overlay',
                     __('Dotted', 'archi') => 'dotted',                       
                     __('None', 'archi') => 'none',                   
                    ),
         "description" => __("Select video background overlay.", 'archi')
      ),  
    )));
}

// Home Let It Snow
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Snowy", 'archi'),
   "base"      => "home_letitsnow",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array( 
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => __("Logo", 'archi'),
         "param_name" => "logo",
         "value" => "",
         "description" => __("Upload logo", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),               
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
         "type" => "vc_link",
         "heading" => "Button Link",
         "param_name" => "linkbox",
         "description" => __("Add link to button, empty do not show.", 'archi')
      ),
                           
    )));
}

// Home Profession
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Profession", 'archi'),
   "base"      => "home_profession",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(         
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),               
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
         "type" => "vc_link",
         "heading" => "Button Link",
         "param_name" => "linkbox",
         "description" => __("Add link to button, empty do not show.", 'archi')
      ),
                           
    )));
}

// Info Apps Landing
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Info Apps", 'archi'),
   "base"      => "info_apps",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array( 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Add icon class", 'archi'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Ex: icon-<code>wallet</code>, <a href='http://vegatheme.com/html/archi-icons-etlinefont/' target='_blank'>view more icon class</a>", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon Position",
         "param_name" => "style",
         "value" => array(                     
                     __('Icon right', 'archi') => 'right',
                     __('Icon left', 'archi') => 'left',                       
                     __('Icon center', 'archi') => 'center',                   
                    ),
         "description" => __("Select Icon Position", 'archi')
      ), 
    )));
}

// Info Apps 2 
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Info Apps 2", 'archi'),
   "base"      => "info_apps2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array( 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Add icon class", 'archi'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Ex: icon-<code>wallet</code>, <a href='http://vegatheme.com/html/archi-icons-etlinefont/' target='_blank'>view more icon class</a>", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Delay time for icon", 'archi'),
         "param_name" => "animation_delay",
         "value" => "",
         "description" => __("Use for animation effect.", 'archi')
      ),
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ), 
    )));
}

// Quick View (use)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Quick Office", 'archi'),
   "base"      => "quickview",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Photo", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Columns Image", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 5', 'archi') => 5,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 7', 'archi') => 7,
                  ),
         "description" => __("Select number columns for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Image position", 'archi'),
         "param_name" => "img_position",
         "value" => array(                        
                     esc_html__( 'Image on Left Row', 'archi' ) => 'imgleft',
                     esc_html__( 'Image on Right Row', 'archi' ) => 'imgright', 
                  ),
         "description" => __("Select Image position within row.", 'archi')
      ), 
    )));
}

// Quick View - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Quick Office 2", 'archi'),
   "base"      => "quickview2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Photo", 'archi')
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Columns Image", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 5', 'archi') => 5,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 7', 'archi') => 7,
                  ),
         "description" => __("Select number columns for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Image position", 'archi'),
         "param_name" => "img_position",
         "value" => array(                        
                     esc_html__( 'Image on Left Row', 'archi' ) => 'imgleft',
                     esc_html__( 'Image on Right Row', 'archi' ) => 'imgright', 
                  ),
         "description" => __("Select Image position within row.", 'archi')
      ), 
    )));
}

// Video Tour - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Video Tour", 'archi'),
   "base" => "video_tour",
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(    
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Photo", 'archi')
      ),         
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Video Url", 'archi'),
         "param_name" => "video_url",
         "value" => "",
         "description" => __("Add youtube video link url, Ex: https://www.youtube.com/watch?v=efVWyPNd3xw", 'archi')
      ),      
    )));
}

// Typing Text
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Text Typing", 'archi'),
   "base" => "text_typing",
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(            
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text static", 'archi'),
         "param_name" => "text_static",
         "value" => "",
         "description" => __("Add text", 'archi')
      ),  
      // params group
      array(
          'type' => 'param_group',
          'value' => '',
          'heading' => 'Add your typing(multiple fields)',
          'param_name' => 'titles',
          // Note params is mapped inside param-group:
          'params' => array(
              array(
                  'type' => 'textfield',
                  "holder" => "div",
                  "class" => "",
                  'heading' => 'Enter your typing',
                  'param_name' => 'title',
                  "value" => "",
                  "description" => __("Add Your Typing Text", 'archi')
              )
          )                
      )   
    )));
}

// Buttons Download - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Download Button", 'archi'),
   "base" => "download_btn",
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
         'type' => 'iconpicker',
         'heading' => __( 'Icon', 'archi' ),
         'param_name' => 'icon_fontawesome',
         'value' => 'fa fa-info-circle',
         'settings' => array(
            'emptyIcon' => false, // default true, display an "EMPTY" icon?
            'iconsPerPage' => 4000, // default 100, how many icons per/page to display
         ),         
         'description' => __( 'Select icon from library.', 'archi' ),
      ),    
      array(
        'type' => 'vc_link',
         "heading" => __("Link Banner Box", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add link to banner.", 'archi')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ), 
    )));
}

// Why Choose Us - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Why Choose Us", 'archi'),
   "base" => "reasons",
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),      
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Type Icon",
         "param_name" => "reasons_type",
         "value" => array(
                     __('Use number type', 'archi') => 'number_type',
                     __('Use font icon', 'archi') => 'icon_type',                     
                    ),
         "description" => __("Select type icon", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number", 'archi'),
         "param_name" => "number",
         "value" => "",
         "description" => __("Add number", 'archi'),
         'dependency' => array(
            'element' => 'reasons_type',
            'value' => 'number_type',
         ),
      ),
      array(
         'type' => 'iconpicker',
         'heading' => __( 'Icon', 'archi' ),
         'param_name' => 'icon_fontawesome',
         'value' => 'fa fa-info-circle',
         'settings' => array(
            'emptyIcon' => false, // default true, display an "EMPTY" icon?
            'iconsPerPage' => 4000, // default 100, how many icons per/page to display
         ),         
         'description' => __( 'Select icon from library.', 'archi' ),
         'dependency' => array(
            'element' => 'reasons_type',
            'value' => 'icon_type',
         ),
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon box style",
         "param_name" => "box_style",
         "value" => array(
                     __('Icon box cicle', 'archi') => 'box_cicle',
                     __('Icon box square', 'archi') => 'box_square',                     
                    ),
         "description" => __("Select icon box style", 'archi')
      ), 
      array(
        'type' => 'vc_link',
         "heading" => __("Link Banner Box", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add link to banner.", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Delay Animate", 'archi'),
         "param_name" => "delay",
         "value" => "",
         "description" => __("Add number delay animate, Ex: .5 or 1", 'archi')
      ),
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ), 
    )));
}

//Video Player
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Video Post", 'archi'),
   "base"      => "videoplayer",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Video",
         "param_name" => "video",
         "value" => "",
         "description" => __("Ex: http://player.vimeo.com/video/88883554 or http://www.youtube.com/embed/eP2VWNtU5rw", 'archi')
      ),       
    )));
}

// Our Facts (use)
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Our Facts", 'archi'),
   "base" => "ourfacts",
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Fun Fact Icon",
         "param_name" => "icon",
         "value" => "",
         "description" => __("Use icon class name, Ex: mobile, Find <a target='_blank' href='http://vegatheme.com/html/archi-icons-etlinefont/'>Here</a>", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title Fact", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title display in Our Facts box.", 'archi')
      ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number Fact", 'archi'),
         "param_name" => "number",
         "value" => "",
         "description" => __("Number display in Our Facts box.", 'archi')
      ),
      
    )));
}

// Portfolio Gallery - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Gallery", 'archi'),
   "base"      => "folio_gallery",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number portfolio per page", 'archi' ),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Enter Number Portfolio.", 'archi' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 5', 'archi') => 5,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),
    )));
}

// Portfolio Gallery 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Gallery 2", 'archi'),
   "base"      => "folio_gallery2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number portfolio per page", 'archi' ),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Enter Number Portfolio.", 'archi' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,                
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),
    )));
}

// OT Image Gallery Style 1
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Image Gallery 1", 'archi'),
   "base"      => "ot_image_glallery",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(   
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Images Gallery",
         "param_name" => "gallery",
         "value" => "",
         "description" => __("Add all your logo client and change image title name in <code>title</code> of image.", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,                
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),          
    )));
}

// OT Image Gallery Style 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Image Gallery 2", 'archi'),
   "base"      => "ot_image_glallery2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(   
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Images Gallery",
         "param_name" => "gallery",
         "value" => "",
         "description" => __("Add all your logo client and change image title name in <code>title</code> of image.", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6, 
                     __('Columns 5', 'archi') => 5,         
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),          
    )));
}

// OT Album Gallery Style 1
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Album Gallery 1", 'archi'),
   "base"      => "ot_album_glallery",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(   
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Gallery", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Gallery.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number gallery per page", 'archi' ),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Enter Number Gallery.", 'archi' )
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6, 
                     __('Columns 5', 'archi') => 5,         
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),          
    )));
}

// OT Album Gallery Style 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Album Gallery 2", 'archi'),
   "base"      => "ot_album_glallery2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(   
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Gallery", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Gallery.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number gallery per page", 'archi' ),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Enter Number Gallery.", 'archi' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,                
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),          
    )));
}

//Portfolio Filter
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Filter", 'archi'),
   "base"      => "foliof",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Items per page"),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Set max limit number of items to show per page or enter -1 to display all", 'archi' )
      ),       
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Display Style", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('None', 'archi') => 'none',                     
                     __('Pagination', 'archi') => 'pagination',
                    ),
         "description" => __("Select display style for grid.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Grid elements per row", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 5', 'archi') => 5,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number of single grid elements per row.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Gap", 'archi'),
         "param_name" => "gap",
         "value" => array(   
                      __('0px', 'archi') => 0,
                      __('1px', 'archi') => 1,
                      __('2px', 'archi') => 2,
                      __('3px', 'archi') => 3,
                      __('4px', 'archi') => 4,
                      __('5px', 'archi') => 5,
                      __('10px', 'archi') => 10,
                      __('15px', 'archi') => 15,
                      __('20px', 'archi') => 20,
                      __('25px', 'archi') => 25,
                      __('30px', 'archi') => 30,
                      __('35px', 'archi') => 35,
                    ),
         "description" => __("Select gap between grid elements.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Extra class name", 'archi'),
         "param_name"=> "extraclass",
         "value"     => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi')
      ),
    )));
}

//Portfolio Filter 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Filter 2", 'archi'),
   "base"      => "foliof2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Items per page"),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Set max limit number of items to show per page or enter -1 to display all", 'archi' )
      ),       
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Display Style", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('None', 'archi') => 'none',                     
                     __('Pagination', 'archi') => 'pagination',
                    ),
         "description" => __("Select display style for grid.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),  
    )));
}

//Portfolio Filter 3
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Filter 3", 'archi'),
   "base"      => "foliof3",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Items per page"),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Set max limit number of items to show per page or enter -1 to display all", 'archi' )
      ),       
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Display Style", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('None', 'archi') => 'none',                     
                     __('Pagination', 'archi') => 'pagination',
                    ),
         "description" => __("Select display style for grid.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
    )));
}

//Portfolio Inverted Style
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Inverted Style", 'archi'),
   "base"      => "foliofinverted",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Items per page"),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Set max limit number of items to show per page or enter -1 to display all", 'archi' )
      ),       
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Display Style", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('None', 'archi') => 'none',                     
                     __('Pagination', 'archi') => 'pagination',
                    ),
         "description" => __("Select display style for grid.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
    )));
}

//Portfolio Style 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Style 2", 'archi'),
   "base"      => "foliostyle2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Items per page"),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Set max limit number of items to show per page or enter -1 to display all", 'archi' )
      ),       
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Display Style", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('None', 'archi') => 'none',                     
                     __('Pagination', 'archi') => 'pagination',
                    ),
         "description" => __("Select display style for grid.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),    
    )));
}

// Portfolio Carousel Style
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Carousel Style", 'archi'),
   "base"      => "portfolio_carousel",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(            
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Number Show Portfolio", 'archi'),
         "param_name"=> "show",
         "value"     => 8,
         "description" => __("Number Show Portfolio, Default: 8.", 'archi')
      ),
      array(
         "type"      => "select_categories",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate",
         "value"     => "",
         "description" => __("Enter your category.", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Slider auto play", 'archi'),
         "param_name" => "slideplay",
         "value" => array(           
                     __('Select', 'archi') => '',                       
                     __('Yes', 'archi') => 'true',
                     __('No', 'archi') => 'false',
                    ),
         "description" => __("Select slider auto play.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number Visible.", 'archi'),
         "param_name" => "visible",
         "value" => array(                        
                     __('4 Columns', 'archi') => 4,
                     __('3 Columns', 'archi') => 3,
                     __('2 Columns', 'archi') => 2,
                    ),
         "description" => __("Select number visible for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),    
    )));
}

// Portfolio Category
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Category", 'archi'),
   "base"      => "cate_portfolio",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(            
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Number Show Portfolio", 'archi'),
         "param_name"=> "show",
         "value"     => 8,
         "description" => __("Number Show Portfolio, Default: 8.", 'archi')
      ),
      array(
         "type"      => "select_categories",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate",
         "value"     => "",
         "description" => __("Enter your category.", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
					           __('Columns 5', 'archi') => 5,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi'),
         "dependency"  => array( 'element' => 'show_filter', 'value' => array( 'yes' ) ),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),   
    )));
}

   if ( ! function_exists( 'is_plugin_active' ) ) {
      require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
   }
   if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {     
      if ( function_exists( 'vc_add_shortcode_param' ) ) {
         vc_add_shortcode_param( 'select_categories', 'select_param', get_template_directory_uri() . '/framework/admin/js/select-field.js' );
      } elseif ( function_exists( 'add_shortcode_param' ) ) {
         add_shortcode_param( 'select_categories', 'select_param', get_template_directory_uri() . '/framework/admin/js/select-field.js' );
      }
   }   
   
   function select_param( $settings, $value ) {
      // Generate dependencies if there are any
      $dependency = vc_generate_dependencies_attributes( $settings );
      $categories = get_terms( 'categories' );
      $cat = array();
      foreach( $categories as $category ) {
         if( $category ) {
            $cat[] = sprintf('<option value="%s">%s</option>',
               esc_attr( $category->slug ),
               $category->name
            );
         }

      }

      return sprintf(
         '<input type="hidden" name="%s" value="%s" class="wpb-input-categories wpb_vc_param_value wpb-textinput %s %s_field" %s>
         <select class="select-categories-post">
         %s
         </select>',
         esc_attr( $settings['param_name'] ),
         esc_attr( $value ),
         esc_attr( $settings['param_name'] ),
         esc_attr( $settings['type'] ),
         $dependency,
         implode( '', $cat )
      );
   }


//Clients Logo 
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Clients Logo", 'archi'),
   "base"      => "logos",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Logo Client",
         "param_name" => "gallery",
         "value" => "",
         "description" => __("Add all your logo client and add link url in <code>caption</code> of logo image.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Visible Logo",
         "param_name" => "visible",
         "value" => array(
                     __('Select Visible', 'archi') => '',
                     __('4 items', 'archi') => '4',
                     __('5 items', 'archi') => '5',
                     __('6 items', 'archi') => '6', 
                    ),
         "description" => __("Number visible", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Custom link target",
         "param_name" => "custom_links_target",
         "value" => array(
                     __('Same window', 'archi') => '_self',
                     __('New window', 'archi') => '_blank', 
                    ),
         "description" => __("Number visible", 'archi')
      ), 
    )));
}

//Our Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Our Team", 'archi'),
   "base" => "team",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Archi Elements',
   "params" => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo Member",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Avarta of member, Recomended Size: 420 x 420", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Name", 'archi'),
         "param_name" => "name",
         "value" => "",
         "description" => __("Member's Name", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Job", 'archi'),
         "param_name" => "job",
         "value" => "",
         "description" => __("Member's job.", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Description",
         "param_name" => "content",
         "value" => "",
         "description" => __("Description", 'archi')
      ), 
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 1", 'archi'),
         "param_name"=> "icon1",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 1",
         "param_name"=> "url1",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 2", 'archi'),
         "param_name"=> "icon2",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 2",
         "param_name"=> "url2",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 3", 'archi'),
         "param_name"=> "icon3",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 3",
         "param_name"=> "url3",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 4", 'archi'),
         "param_name"=> "icon4",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 4",
         "param_name"=> "url4",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
    )));
}

// Testimonial Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Testimonial Silder", 'archi'),
   "base" => "testslide",
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Visible Testimonial",
         "param_name" => "visible",
         "value" => array(
                     __('Select Visible', 'archi') => '',
                     __('1 Col', 'archi') => '1',
                     __('2 Cols', 'archi') => '2',
                     __('3 Cols', 'archi') => '3', 
                     __('4 Cols', 'archi') => '4',                  
                    ),
         "description" => __("Description", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Testimonial",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ),    
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Auto Play",
         "param_name" => "autoplay",
         "value" => array(
                    __('No', 'archi') => 'no',
                    __('Yes', 'archi') => 'yes',                                      
                    ),
         "description" => __("Autoplay Slider.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Slide Speed",
         "param_name" => "slidespeed",
         "value" => 200,
         "description" => __("Add Number min 200 to 1000", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Pagination Speed",
         "param_name" => "paginationspeed",
         "value" => 800,
         "description" => __("Add Number min 800 to 2000", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Rewind Speed",
         "param_name" => "rewindspeed",
         "value" => 1000,
         "description" => __("Add Number min 1000 to 3000", 'archi')
      ),     
    )
    ));
}

// Testimonial Grid
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Testimonial Grid", 'archi'),
   "base" => "testgrid",
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number show testimonial per page.",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ),    
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "testimonial_columns",
         "value" => array(   
                     __('4 Columns', 'archi') => 4,
                     __('3 Columns', 'archi') => 3,
                     __('2 Columns', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),    
    )
    ));
}

// Services Grid
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Services Grid", 'archi'),
   "base" => "services",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(   
      array(
         "type"      => "select_category_services",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate_services",
         "value"     => "",
         "description" => __("Enter your category.", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number show services per page.",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ),    
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show Image?", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('Style 1: image above content', 'archi') => 'imageabove',
                     __('Style 2: image below content', 'archi') => 'imagebelow',
                     __('Style 3: image not show', 'archi') => 'noimage',
                    ),
         "description" => __("Select show image position of Services", 'archi')
      ), 
	  array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns", 'archi'),
         "param_name" => "services_columns",
         "value" => array(   
                     __('4 Columns', 'archi') => 4,
                     __('3 Columns', 'archi') => 3,
                     __('2 Columns', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show service button?", 'archi'),
         "param_name" => "show_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('no', 'archi') => 'no',
                    ),
         "description" => __("Option show/hide button on service post.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Style", 'archi'),
         "param_name" => "button_style",
         "value" => array(   
                     __('Full width', 'archi') => 'full',
                     __('No full width', 'archi') => 'nofull',
                    ),
         "description" => __("Select button style.", 'archi'),
         "dependency"  => array( 'element' => 'show_btn', 'value' => 'yes' ), 
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button text",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add button text, default: read more.", 'archi'),
         "dependency"  => array( 'element' => 'show_btn', 'value' => 'yes' ), 
      ),            
    )
    ));
}

// Services Grid 2
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Services Grid 2", 'archi'),
   "base" => "services2",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array( 
      array(
         "type"      => "select_category_services",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate_services",
         "value"     => "",
         "description" => __("Enter your category.", 'archi')
      ),      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number show services per page.",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "services_columns",
         "value" => array(   
                     __('4 Columns', 'archi') => 4,
                     __('3 Columns', 'archi') => 3,
                     __('2 Columns', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show service button?", 'archi'),
         "param_name" => "show_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('no', 'archi') => 'no',
                    ),
         "description" => __("Option show/hide button on service post.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button text",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add button text, default: read more.", 'archi'),
         "dependency"  => array( 'element' => 'show_btn', 'value' => 'yes' ), 
      ), 
    )
    ));
}

// Services Grid 3
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Services Grid 3", 'archi'),
   "base" => "services3",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(  
      array(
         "type"      => "select_category_services",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate_services",
         "value"     => "",
         "description" => __("Enter your category.", 'archi')
      ),     
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number show services per page.",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "services_columns",
         "value" => array(   
                     __('4 Columns', 'archi') => 4,
                     __('3 Columns', 'archi') => 3,
                     __('2 Columns', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show service button?", 'archi'),
         "param_name" => "show_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('no', 'archi') => 'no',
                    ),
         "description" => __("Option show/hide button on service post.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button text",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add button text, default: read more.", 'archi'),
         "dependency"  => array( 'element' => 'show_btn', 'value' => 'yes' ), 
      ), 
    )
    ));
}

// Services List
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Services List", 'archi'),
   "base" => "serviceslist",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array( 
      array(
         "type"      => "select_category_services",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate_services",
         "value"     => "",
         "description" => __("Enter your category.", 'archi')
      ),     
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number show services per page.",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ),        
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show service button?", 'archi'),
         "param_name" => "show_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('no', 'archi') => 'no',
                    ),
         "description" => __("Option show/hide button on service post.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button text",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add button text, default: read more.", 'archi'),
         "dependency"  => array( 'element' => 'show_btn', 'value' => 'yes' ), 
      ),  
    )
    ));
}

if ( ! function_exists( 'is_plugin_active' ) ) {
  require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {     
  if ( function_exists( 'vc_add_shortcode_param' ) ) {
     vc_add_shortcode_param( 'select_category_services', 'select_param_services', get_template_directory_uri() . '/framework/admin/js/select-field-services.js' );
  } elseif ( function_exists( 'add_shortcode_param' ) ) {
     add_shortcode_param( 'select_category_services', 'select_param_services', get_template_directory_uri() . '/framework/admin/js/select-field-services.js' );
  }
}   

function select_param_services( $settings, $value ) {
  // Generate dependencies if there are any
  $dependency = vc_generate_dependencies_attributes( $settings );
  $category_services = get_terms( 'category_service' );
  $cat_process = array();
  foreach( $category_services as $category ) {
     if( $category ) {
        $cat_process[] = sprintf('<option value="%s">%s</option>',
           esc_attr( $category->slug ),
           $category->name
        );
     }

  }

  return sprintf(
     '<input type="hidden" name="%s" value="%s" class="wpb-input-category_services wpb_vc_param_value wpb-textinput %s %s_field" %s>
     <select class="select-category_services-post">
     %s
     </select>',
     esc_attr( $settings['param_name'] ),
     esc_attr( $value ),
     esc_attr( $settings['param_name'] ),
     esc_attr( $settings['type'] ),
     $dependency,
     implode( '', $cat_process )
  );
}

// Process
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Process", 'archi'),
   "base" => "process",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(    
      array(
         "type"      => "select_category_process",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate_process",
         "value"     => "",
         "description" => __("Enter your category.", 'archi')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Process",
         "param_name" => "number",
         "value" => "",
         "description" => __("Number", 'archi')
      ),              
    )
    ));
}

if ( ! function_exists( 'is_plugin_active' ) ) {
  require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {     
  if ( function_exists( 'vc_add_shortcode_param' ) ) {
     vc_add_shortcode_param( 'select_category_process', 'select_param_process', get_template_directory_uri() . '/framework/admin/js/select-field-process.js' );
  } elseif ( function_exists( 'add_shortcode_param' ) ) {
     add_shortcode_param( 'select_category_process', 'select_param_process', get_template_directory_uri() . '/framework/admin/js/select-field-process.js' );
  }
}   

function select_param_process( $settings, $value ) {
  // Generate dependencies if there are any
  $dependency = vc_generate_dependencies_attributes( $settings );
  $category_process = get_terms( 'category_process' );
  $cat_process = array();
  foreach( $category_process as $category ) {
     if( $category ) {
        $cat_process[] = sprintf('<option value="%s">%s</option>',
           esc_attr( $category->slug ),
           $category->name
        );
     }

  }

  return sprintf(
     '<input type="hidden" name="%s" value="%s" class="wpb-input-category_process wpb_vc_param_value wpb-textinput %s %s_field" %s>
     <select class="select-category_process-post">
     %s
     </select>',
     esc_attr( $settings['param_name'] ),
     esc_attr( $value ),
     esc_attr( $settings['param_name'] ),
     esc_attr( $settings['type'] ),
     $dependency,
     implode( '', $cat_process )
  );
}


// Latest Blog
if(function_exists('vc_map')){   
   vc_map( array(
   "name" => __("OT Latest Blog Silder", 'archi'),
   "base" => "latestblog",
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Show",
         "param_name" => "number",
         "value" => "",
         "description" => __("Number", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Excerpt",
         "param_name" => "excerpt",
         "value" => "",
         "description" => __("Number", 'archi')
      ),   
      array(
            'type' => 'checkbox',
            'heading' => esc_html__( 'Show read more button?', 'archi' ),
            'param_name' => 'read_more',
            'description' => esc_html__( 'If checked blog post will be set to show button read more.', 'archi' ),
            'value' => array( esc_html__( 'Yes', 'archi' ) => 'yes' ),
      ),   
    )
    ));
}

// Pricing Table
if(function_exists('vc_map')){
	vc_map( array(
   "name" => __("OT Pricing Table", 'archi'),
   "base" => "pricingtable",
   "class" => "",
   "category" => 'Archi Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title Pricing", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title display in Pricing Table.", 'archi')
      ),
	   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Price Pricing", 'archi'),
         "param_name" => "price",
         "value" => "",
         "description" => __("Price display in Pricing Table.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Per Time", 'archi'),
         "param_name" => "time",
         "value" => "",
         "description" => __("Price per time in Pricing Table.", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Detail Pricing", 'archi'),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content Pricing Table.", 'archi')
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Label Button", 'archi'),
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add Your Button Text.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link Button", 'archi'),
         "param_name" => "btnlink",
         "value" => "",
         "description" => __("Add Link Url, Empty do not show.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Table Width (%)", 'archi'),
         "param_name" => "width",
         "value" => "",
         "description" => __("Style width Pricing Table. Ex: 4 columns - 25%, 5 columns: 20%, 3 columns: 33.33%.", 'archi')
      ),
	  array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Featured Pricing?", 'archi'),
         "param_name" => "featured",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Featured Pricing.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Style Table", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('Style 1: Light', 'archi') => 'light',
                     __('Style 2: Dark', 'archi') => 'dark',
                    ),
         "description" => __("Select Style Pricing Tables", 'archi')
      ),
    )));
}

// Project Slider - image carousel
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Image Carousel", 'archi'),
   "base"      => "image_carousel",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Gallery",
         "param_name" => "gallery",
         "value" => "",         
      ),      
    )));
}

// Simple Slider - images carousel
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Simple Slider", 'archi'),
   "base"      => "simple_slider",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Gallery",
         "param_name" => "gallery",
         "value" => "",         
      ),      
    )));
}

// Profile Experiences
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Profile Experiences", 'archi'),
   "base"      => "profile_experiences",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(  
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add your title (multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Date',
               'param_name' => 'date',
               "value" => "",
               "description" => __("Add your date (multiple field)", 'archi')
            ),  
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Title',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your title (multiple field)", 'archi')
            ),  
            array(
               'type' => 'textarea',
               "holder" => "div",
               "class" => "",
               'heading' => 'SubTitle',
               'param_name' => 'stitle',
               "value" => "",
               "description" => __("Add your subtitle (multiple field)", 'archi')
            ),             
         )                
      ),             
                           
    )));
}

//Google Map
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Google Map", 'archi'),
   "base" => "ggmap",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Archi Elements',
   "params" => array(        
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height Map", 'archi'),
         "param_name" => "height",
         "value" => 320,
         "description" => __("Please enter number height Map, 300, 350, 380, ..etc. Default: 420.", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Latitude", 'archi'),
         "param_name" => "lat",
         "value" => -6.373091,
         "description" => __("Please enter <a href='http://www.latlong.net/'>Latitude</a> google map", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Longitude", 'archi'),
         "param_name" => "long",
         "value" => 106.835175,
         "description" => __("Please enter <a href='http://www.latlong.net/'>Longitude</a> google map", 'archi')

      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Zoom Map", 'archi'),
         "param_name" => "zoom",
         "value" => 15,
         "description" => __("Please enter Zoom Map, Default: 15", 'archi')
      ),    
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon Map marker",
         "param_name" => "icon",
         "value" => "",
         "description" => __("Icon Map marker, 85 x 85", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select gmap style.", 'archi'),
         "param_name" => "style",
         "value" => array(                        
                     __('Style 1: Dark', 'archi') => 'dark',
                     __('Style 2: Light', 'archi') => 'light',
                     __('Customize Gmap Style', 'archi') => 'customize_gmap',
                    ),
         "description" => __("Select your style for gmap.", 'archi')
      ), 
      array(
          "type" => "textarea_raw_html",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__('JavaScript Code', 'archi'),
          "param_name" => "gmap_custom_style",
          "value" => "",
          "description" => __('Enter your JavaScript code, find your custom style gmap here:<a href="https://snazzymaps.com/explore" target="_blank">view more</a>', 'archi'),   
          "dependency"  => array( 'element' => 'style', 'value' => 'customize_gmap' ),   
        )       
    )));
}
?>