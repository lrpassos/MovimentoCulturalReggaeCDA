          <div id="sidebar-comissao">
                   
              <div id="title-comissao"><span>COMISSÃO</span></div>
              <div class="comissao">
              <ul>
                  <?php $author='2'; ?>
                   <li>
                      <?php echo get_avatar($author,70); ?>
                      <h1><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author?>"> <?php $user_info = get_userdata($author); ?><?php echo $user_info->first_name ."". $user_info->last_name. "\n" ?></a></h1>
                      
 <!-- aqui abaixo coloca as redes socias caso queira -->
                    <div class="info-comissao">
                      
                      <ul> 
                      <li></li>
                      </ul>
                        </div>
                  </li>
                  
            </ul>
              
              </div>
              
          </div><!-- fim sidebar-comissão -->