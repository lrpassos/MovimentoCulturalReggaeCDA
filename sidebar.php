            <div id="siderbar">
               
           <div id="sidebar-vistos">
                     <div id="title-vistos"> <span>POST MAIS VISTOS</span></div>  
               <?php if(function_exists('get_most_viewed')): ?>
               <ul>
                   <li>
                   <?php get_most_viewed('post',4); ?>               
                   </li>
                   
               </ul>
               <?php endif; ?>
                             
               
          </div><!-- fim sidebar-vistos -->
                
<?php include_once("sidebar-author.php");?>
                
           <div id="sidebar-publicidade">
                    <div id="title-publi"><span> PUBLICIDADE</span></div>
               <ul>
                   <li class="publi-maior">Publi Maior</li>
                   <li class="publi-left">Publi left</li>
                   <li class="publi-right">publi right</li>
               
               </ul>
               
          </div><!-- fim sidebar-publicidade -->
                
          <div id="sidebar-coment">
              
                    <div id="title-coment"> <span>MAIS COMENTADOS</span></div>    
               <ul>
        <?php $result = $wpdb -> get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 5");
                   foreach($result as $post){
                       setup_postdata($post);
                       $postid = $post->ID;
                       $title =$post->post_title;
                       $commentcount = $post->comment_count;
                       if($commentcount != 0) { ?>
                           
                   
                   <li>
                   <span class="coment-number"><?php $i = $i; $i++; echo $i ;?></span>
                    <a href="<?php the_permalink(); ?>"><?php echo $title; ?>(<?php echo $commentcount; ?>)</a>               
                   </li>
                   <?php }?>
                   <?php }?>
                                  
               
               </ul>   
              
          </div><!-- fim sidebar-coment -->
                
         <div id="sidebar-facebook">
                  <div id="title-facebook"><span>FACEBOOK</span></div> 
             
             <div id="face-box">
             <div class="fb-page" data-href="https://www.facebook.com/MovimentoCulturalReggaeNosBairros/" data-tabs="timeline" data-width="280" data-height="200" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MovimentoCulturalReggaeNosBairros/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MovimentoCulturalReggaeNosBairros/">Movimento Cultural Reggae nos Bairros</a></blockquote></div>
             </div>
             
          </div><!-- fim sidebar-facebook -->
                
          </div><!-- fim siderbar -->