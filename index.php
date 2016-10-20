<?php get_header(); ?>

        
        <div id="container">
        
        <div id="content">
        
         
          <div id="destaque">
              
                     <div class="destaque-post">
                         
                         
                <?php  query_posts('category_name=destaque&offset=0&showposts=1'); ?>         
                <?php  if (have_posts()) : while(have_posts()) : the_post(); ?>         
                         
                         <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                         <div class="destaque-info">
                        <!-- <ul>
                             <li class="dest-autor">Autor</li>
                             <li class="dest-views">views</li> 
                             <li class="dest-coment">coment</li>
                             
                             </ul> -->
                         
                         </div> <!--fim destaque-info-->
                         <h1><a href="<?php the_Permalink(); ?>"><?php  the_title(); ?></a></h1>
                         <p><?php the_excerpt_rereloaded(); ?></p>
                         
                <?php  endwhile; else: ?>
                         <?php endif; ?>
                         
                         <div class="list-dest">
                         
                             <ul>
                       <?php  query_posts('category_name=destaque&offset=2&showposts=1'); ?>         
                       <?php  if (have_posts()) : while(have_posts()) : the_post(); ?> 
                                 <li>
                             <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                             <h2><a href="#"><?php  the_title(); ?></h2>    
                                 </li>
                                 
                        <?php  endwhile; else: ?>
                        <?php endif; ?>  
                                     
                       <?php  query_posts('category_name=destaque&offset=3&showposts=1'); ?>         
                       <?php  if (have_posts()) : while(have_posts()) : the_post(); ?> 
                                 <li>
                             <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                             <h2><a href="<?php the_Permalink(); ?>"><?php  the_title(); ?></h2>    
                                 </li>
                                 
                        <?php  endwhile; else: ?>
                        <?php endif; ?>  
                                     
                                     
                                     
     
                             </ul>
                         
                         </div>
              
              
                     </div><!-- fim destaque-post --> 
             
              <div class="destaque-post  right">
                <?php  query_posts('category_name=destaque&offset=1&showposts=1'); ?>         
                <?php  if (have_posts()) : while(have_posts()) : the_post(); ?>         
                         
                         <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                         <div class="destaque-info">
                        <!-- <ul>
                             <li class="dest-autor">Autor</li>
                             <li class="dest-views">views</li> 
                             <li class="dest-coment">coment</li>
                             
                             </ul> -->
                         
                         </div> <!--fim destaque-info-->
                         <h1><a href="<?php the_Permalink(); ?>"><?php  the_title(); ?></a></h1>
                         
                <?php  endwhile; else: ?>
                         <?php endif; ?>
                         
                         <div class="list-dest">
                         
                             <ul>
                       <?php  query_posts('category_name=destaque&offset=4&showposts=1'); ?>         
                       <?php  if (have_posts()) : while(have_posts()) : the_post(); ?> 
                                 <li>
                             <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                             <h2><a href="<?php the_Permalink(); ?>"><?php  the_title(); ?></h2>    
                                 </li>
                                 
                        <?php  endwhile; else: ?>
                        <?php endif; ?> 
                                     
                       <?php  query_posts('category_name=destaque&offset=5&showposts=1'); ?>         
                       <?php  if (have_posts()) : while(have_posts()) : the_post(); ?> 
                                 <li>
                             <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                             <h2><a href="<?php the_Permalink(); ?>"><?php  the_title(); ?></h2>    
                                 </li>
                                 
                        <?php  endwhile; else: ?>
                        <?php endif; ?> 
                             
                             </ul>
                         
                         </div>
              
              
                     </div><!-- fim destaque-post -->   
          </div><!-- fim destaque -->
            
          <div id="eventos">
                     <div id="title-evento"> <span>EVENTOS</span></div> 
              
                       <?php  query_posts('category_name=eventos&offset=0&showposts=2'); ?>         
                       <?php  if (have_posts()) : while(have_posts()) : the_post(); ?> 
              
                       <div class="post-evento">
                           
                       <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                       <h1><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h1>
                           

                           
                           <div class="evento-info">
                          <!-- <ul>
                             <li class="evento-autor">Autor</li>
                             <li class="evento-views">views</li> 
                             <li class="evento-coment">coment</li>
                           </ul> -->
                           
                           </div>
                           <p><?php the_excerpt_rereloaded(30,'Veja mais'); ?></p>
              
                          </div>
                        <?php  endwhile; else: ?>
                        <?php endif; ?>
              
          </div><!-- fim eventos -->
        
          <div id="galeria">
                     <div id="title-galeria"> <span>GALERIA</span></div> 
                      
                       <?php  query_posts('category_name=galeria&offset=0&showposts=3'); ?>         
                       <?php  if (have_posts()) : while(have_posts()) : the_post(); ?> 
                      
              <div class="post-galeria">
                           <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                           <h1><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h1>
                           
                           <div class="galeria-info">
                          <!-- <ul>
                             <li class="galeria-autor">Autor</li>
                             <li class="galeria-coment">coment</li>
                           </ul> -->
                           
                           </div>
                           <p><?php the_excerpt_rereloaded(30,'Veja mais'); ?></p>
              </div>
              
                        <?php  endwhile; else: ?>
                        <?php endif; ?>

          </div><!-- fim Galeria -->  
            
            <div id="bloco-mundo-fundo">
            
                        
          <div id="mundo">
                    <div id="title-mundo"><span>MUNDO REGGAE</span></div> 
              
               <?php  query_posts('category_name=mundo&offset=0&showposts=1'); ?>         
               <?php  if (have_posts()) : while(have_posts()) : the_post(); ?> 
             
              <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
             
              <div class="mundo-info">
              
            <!--      <ul>
              <li class="mundo-autor">Autor</li>
              <li class="mundo-views">views</li>
              <li class="mundo-coment">coment</li>
                  </ul>  -->
             
              </div>
              <h1><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h1>
              
               <?php  endwhile; else: ?>
               <?php endif; ?>

              
              <div id="mundo-list">
              <ul>
                  <?php  query_posts('category_name=mundo&offset=1&showposts=2'); ?>         
                  <?php  if (have_posts()) : while(have_posts()) : the_post(); ?>
                  <li>
                  <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  <h2><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h2>
                  </li>
                 <?php  endwhile; else: ?>
                 <?php endif; ?>
                  
                  </ul>
              
              </div>
              
              
              
          </div><!-- fim reggae -->
            
          <div id="fundo">
                    
              
             <div id="title-fundo"><span>PAPEL DE PAREDE</span></div>
              
               <?php  query_posts('category_name=papelparede&offset=0&showposts=1'); ?>         
               <?php  if (have_posts()) : while(have_posts()) : the_post(); ?>
             
              <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
             
              <div class="fundo-info">
              
               <!--   <ul>
              <li class="fundo-autor">Autor</li>
              <li class="fundo-views">views</li>
              <li class="fundo-coment">coment</li>
                  </ul> -->
             
              </div>
              <h1><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h1>
              
               <?php  endwhile; else: ?>
               <?php endif; ?>
              
              <div id="fundo-list">
              <ul>
                  <?php  query_posts('category_name=papelparede&offset=1&showposts=2'); ?>         
                  <?php  if (have_posts()) : while(have_posts()) : the_post(); ?>
                  <li>
                  <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  <h2><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h2>
                  
                  </li>
                  <?php  endwhile; else: ?>
                  <?php endif; ?>
                  
                  </ul>
              
              </div>
          </div><!-- fim contato -->           
            
            </div> <!-- fim bloco mundo fundo -->

            
            
        
        </div><!-- fim content -->
            
<?php get_sidebar(); ?>
            
    
        </div><!-- fim container -->
        
            
 <?php get_footer(); ?>   