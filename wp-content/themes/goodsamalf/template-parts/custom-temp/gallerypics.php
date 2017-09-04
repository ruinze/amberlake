<?php 
 $res = get_posts(array('post_type' => 'gallery_pics',
                      'numberposts' => -1,
                          'orderby' => 'id',
                          'order' => 'ASC'					
 ));


$cnt = array();
$cnt2 = 0;

/*echo '<pre>' . print_r($res) . '</pre>';*/

foreach ($res as $rr){
  $cnt[$cnt2] = $rr->ID;
  $cnt2++;     
}

$count = count($cnt);

?>	


<?php 

$cntSmall = array();
$cntLarge = array();
$count2 = 0;
$count3 = 0;

     
      
     for($x=0,$xs=0,$xl=0;$x<=$count;$x++){      
       
       $post_id = $cnt[$x];

       //sort out all images

       $terms = get_the_terms( $post_id , 'galtax' ); 
      
       $term_id = $terms[0]->term_id;

       if($term_id==47){
          $cntSmall[$xs] = $post_id;
          $xs++;
       }
       elseif ($term_id==48) {
         $cntLarge[$xl] = $post_id;
         $xl++;
       }
     }

     // echo $xs ." ". $xl . " " .$count;

     $xxs = 0;
     $xxl = 0;

?>
     

<div class="col-md-12 gallerypics">
    <?php

//this will display all the images
   
     for($xx=0;$xx<$count;$xx++){
           if($xxl!=$xl) {                     //first if
                if($xxs<$xs && $count2<3){
              //display small images

               $post_id = $cntSmall[$xxs];

               if (has_post_thumbnail( $post_id ) ){
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
               } 

    ?>
              <div class="col-md-4 image1s">
                 <div class="overlays">  
                  <?php 
                      
                        /*echo "<img class='thisisit' src='". $image[0]."'>"; */
                      
                        $post_pc = get_post($post_id); 
                        $content = apply_filters('the_content', $post_pc->post_content); 
                        echo $content;
                       

                  ?>
                 
                      <i class="text fa fa-search-plus" aria-hidden="true"></i>
                  </div>
              </div>
<?php 
              // $cntSmall[$xxs];
              $count2++;
              $xxs++;              
            } //end of 2nd if

            elseif($count2==3){
              //display 1 large image
                if($count3==0){
                      $post_ids = $cntLarge[$xxl];

                      if (has_post_thumbnail( $post_id ) ){
                          $images = wp_get_attachment_image_src( get_post_thumbnail_id( $post_ids ), 'single-post-thumbnail' );
                      }

?>
                      <div class="col-md-8 image2s">
                          <div class="overlays">
                          <?php 

                            /*echo "<img class='thisisit' src='". $images[0]."'>" */

                                   $post_pc = get_post($post_ids); 
                                   $content = apply_filters('the_content', $post_pc->post_content); 
                                   echo $content;

                          ?>
                           
                                <i class="text fa fa-search-plus" aria-hidden="true"></i>
                           </div>
                      </div>

<?php

                      $xxl++;

                      $post_id = $cntSmall[$xxs];

                      if (has_post_thumbnail( $post_id ) ){
                          $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                       }
?>
                      <div class="col-md-4 image2s">
                          <div class="overlays">
                          <?php 
                  
                            /*echo "<img class='thisisit' src='". $image[0]."'>"; */
                         
                            $post_pc = get_post($post_id); 
                            $content = apply_filters('the_content', $post_pc->post_content); 
                            echo $content;


                          ?>
                          
                              <i class="text fa fa-search-plus" aria-hidden="true"></i>
                          </div>
                      </div>
<?php 

                      // $cntLarge[$xxl];
                      // $cntSmall[$xxs];              
                      $xxs++;               
                      $count2 = 0;
                      $count3++;
               
                } //end if count3 = 0
                
                elseif($count3==1 && $xxs<$xs){
                      $post_ids = $cntSmall[$xxs];

                      if (has_post_thumbnail( $post_id ) ){
                          $images = wp_get_attachment_image_src( get_post_thumbnail_id( $post_ids ), 'single-post-thumbnail' );
                      }

?>
                      <div class="col-md-4 image2s">
                          <div class="overlays">
                          <?php 

                              /* echo "<img class='thisisit' src='". $images[0]."'>"; */

                               $post_pc = get_post($post_id); 
                               $content = apply_filters('the_content', $post_pc->post_content); 
                               echo $content; 

                          ?> 
                         
                               <i class="text fa fa-search-plus" aria-hidden="true"></i>
                          </div> 
                      </div>

<?php

                      $xxs++;

                      $post_id = $cntLarge[$xxl];

                      if (has_post_thumbnail( $post_id ) ){
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                      }
?>
                      <div class="col-md-8 image2s">
                          <div class="overlays">
                          <?php 

                              /* echo "<img class='thisisit' src='". $image[0]."'>"; */

                               $post_pc = get_post($post_id); 
                               $content = apply_filters('the_content', $post_pc->post_content); 
                               echo $content;

                          ?>
                         
                               <i class="text fa fa-search-plus" aria-hidden="true"></i>
                          </div> 
                      </div>
<?php 

                      // $cntLarge[$xxl];
                      // $cntSmall[$xxs];              
                      $xxl++;               
                      $count2 = 0;
                      $count3 = 0;
               
                } //end if

                else{

                      $post_id = $cntLarge[$xxl];

                      if (has_post_thumbnail( $post_id ) ){
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                      }
?>      

                     <div class="col-md-6 image2s">
                          <div class="overlays">
                          <?php 

                              /* echo "<img class='thisisit' src='". $image[0]."'>"; */

                               $post_pc = get_post($post_id); 
                               $content = apply_filters('the_content', $post_pc->post_content); 
                               echo $content;

                          ?> 
                             <i class="text fa fa-search-plus" aria-hidden="true"></i>
                          </div>
                     </div> 
<?php 
                     $xxl++; 
                } //end else
            }  
           
            elseif($xxs==$xs){
                     for($z=$xxl;$z<$xl;$z++){
                           //display all large images if no more small images
                           $post_id = $cntLarge[$z];

                           if (has_post_thumbnail( $post_id ) ){
                              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                           }
?>
                            <div class="col-md-6 image3s">
                                <div class="overlays">
                                <?php 

                                  /*  echo "<img class='thisisit' src='". $image[0]."'>"; */

                                    $post_pc = get_post($post_id); 
                                    $content = apply_filters('the_content', $post_pc->post_content); 
                                    echo $content;
                                   
                                ?> 
                                   <i class="text fa fa-search-plus" aria-hidden="true"></i>
                                </div> 
                            </div>
<?php  
                           //$cntLarge[$z];
                          $xxl++;          
                     }    
           }
          //end of first if

           elseif($xxs<=$xs && $xxl==$xl){
                for($zz=$xxs;$zz<=$xs;$zz++){
                //display small images

                $post_id = $cntSmall[$zz];

                if (has_post_thumbnail( $post_id ) ){
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                }
?>
                <div class="col-md-4 image4s">
                    <div class="overlays">
                    <?php 

                       /*  echo "<img class='thisisit' src='". $image[0]."'>"; */

                         $post_pc = get_post($post_id); 
                         $content = apply_filters('the_content', $post_pc->post_content); 
                         echo $content;

                    ?> 
                       <i class="text fa fa-search-plus" aria-hidden="true"></i>
                    </div> 
                </div>
<?php  
              //$cntSmall[$zz];
            }

         }





        }
     } 
        
      
      


?>  
</div>	