<section class="mainbody_wrp">
    <div class="container">
      <div class="row">        
        <div class="col-md-8">          
          <article class="articlepost">  <h2>Article body</h2>  </article>
        </div>


        <div class="col-md-4">
          <div class="sidebar_wrp">
            <?php if ( is_active_sidebar( 'sidbr_widgts' ) ) : ?>
              <div class="sidbrwidget_wrp">
                <?php dynamic_sidebar( 'sidbr_widgts' ); ?>
              </div>
            <?php else : ?> 
              <div class="sidbrwidget_wrp">
                <h2>ABOUT AUTHOR</h2>
                <img src="<?php echo get_template_directory_uri(); ?>./img/author-img.jpg" alt="">
                <h3>AUTHOR NAME</h3>
                <h4>AUTHOR POSITION</h4>
                <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface 
                  without relying on meaningful content.</p>               
                <img src="<?php echo get_template_directory_uri(); ?>./img/Screenshot_2.png" alt=""> 
              </div> 
            <?php endif; ?>
          </div>
          <div class="sidebar_wrp">
            <?php if ( is_active_sidebar( 'sidbr_widgts2' ) ) : ?>
              <div class="sidbrwidget_wrp">
                <?php dynamic_sidebar( 'sidbr_widgts2' ); ?>
              </div>
            <?php else : ?> 
              <div class="sidbrwidget_wrp">
                <h2>POPULAR POSTS</h2>
                <img style="border-radius: unset;" src="<?php echo get_template_directory_uri(); ?>./img/Screenshot_1.png" alt="">
              </div> 
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>