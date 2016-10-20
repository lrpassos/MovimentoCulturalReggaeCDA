<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <title><?php wp_title('-',true,'right'); bloginfo() ?></title>
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />

<?php wp_head(); ?>
</head>
    <body>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=1045084712215695";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        
        
    <div id="header">
        <div id="header-superior">
           <!-- <div id="header-superior-content">
             <div id="header-paginas">
                      <ul>
                         
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Arquivos</a></li>
                          <li><a href="#">Sobre-nos</a></li>
                          <li><a href="#">Contatos</a></li>
                      
                    </ul>
                 </div><!--fim header-paginas
                
            <div id="header-Social">
                       
                   <a href= ""><img src="<?php bloginfo('template_url'); ?>/images/50Cruz.jpg" rel="" title="" /></a>
                   <a href= ""><img src="<?php bloginfo('template_url'); ?>/images/50Bahia.png" rel="" title="" /></a>
                   <a href= ""><img src="<?php bloginfo('template_url'); ?>/images/50brasil.png" rel="" title="" /></a>
                   <a href= ""><img src="<?php bloginfo('template_url'); ?>/images/50Jamaica.png" rel="" title="" /></a>
                   
                </div><!--fim header-paginas-
                
                </div><!--fim headeer-superior-content-->
            
             <div id="nav">
         
            <div id="nav-content">
                <ul>
                    
                <?php wp_list_categories('title_li=&hide_empty=0&orderby&exclude=4&depth=2');  ?>
                
                </ul>            
        
        </div><!--fim nav-content-->            
        
        </div><!--fim nav-->
            
            
                </div><!--fim headeer-superior--> 
        
        <div id="header-content">
            <div id="logo">
            <a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo_movi.png" rel="" title=""/></a>
            </div> <!-- fim logo-->
            
           <!--  <div id="search">
            <form action="" method="post" >
                 <input type="text" name="">
                 <input type="subimit" value="" class="btn-search" name="">
                 
                 </form>
            </div> <!-- fim search
            
            <div id="login">
            <ul>
                <li class="logar"><a href="">Login</a></li>
                <li class="registre"><a href="">registri-se</a></li>
                </ul>
            </div> <!-- fim login-->
            
           
        
        </div><!--/ fim header content-->
        
       
        
        
        </div><!--fim headeer-->