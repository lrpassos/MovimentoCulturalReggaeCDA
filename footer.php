 <div id="footer">
              
              <div id="footer-content">
                  
               <!-- 

AQUI FICA IMAGEM OU LOGO CASO QUEIRA COLOCA NO FOOTER
<div id="title-footer"><span> <img src="<?php bloginfo('template_url'); ?>/images/reggae.png"  alt=""  title=""/></span></div>

-->
                  
                  <div id="footer-sobre">
                       
                       <?php  query_posts('page_id=6'); ?>
                       <?php if(have_posts()): while(have_posts()) : the_post(); ?>
                       <div id="title-sobre"><span><?php the_title(); ?></span></div>
                     
                       <p><?php the_excerpt(); ?> <a href="<?php  the_permalink ?>" >Leia Mais</a></p>      
                      
                        <?php endwhile; else: ?>
                        <?php endif; ?>
                        
                  </div> <!-- fim footer-sobre -->
                  
                <div id="footer-paginas">
                     <div id="title-pagina"><span>PÁGINAS</span></div>
                      
                    <ul>
                      <li><a href="<?php bloginfo('home'); ?>">Home</a> </li>
                        <li><a href="<?php bloginfo('eventos'); ?>">Eventos</a> </li>
                      <?php wp_list_pages('title_li='); ?>
                      
                      </ul>                      
                      <!--<ul>
                          <li><a href="">Home</a></li>
                          <li><a href="">Sobre nós</a></li>
                          <li><a href="">Arquivos</a></li>
                          <li><a href="">Contatos</a></li>
                      
                      </ul> -->                     
                      
                 </div> <!-- fim footer-paginas -->
                  
                 <div id="footer-recentes">                      
                     <div id="title-recentes"><span>POSTS RECENTES</span></div>
                        
                      <ul>
                           <?php  query_posts('showposts=5'); ?>
                           <?php if(have_posts()): while(have_posts()) : the_post(); ?>
                          <li><a href="<?php the_Permalink();  ?>"><?php the_title();?></a></li>
                         
                           <?php endwhile; else: ?>
                           <?php endif; ?>
                      </ul>
                      
                 </div> <!-- fim footer-recentes -->                  
                        
              </div><!-- fim footer-content -->
              
            <div id="footer-info">
                <div id="info-content">
                <span> Movimento Reggae!... Todos os direitos reservados. </span>
                <span class="info-right">Desenvolvimento:   <b> <a href="https://github.com/lrpassos">RogérioPassos</a></b></span>
                
                </div>                
            </div><!-- fim info-->            
          </div><!-- fim footer -->
        
<?php wp_footer(); ?>
    </body>
</html>