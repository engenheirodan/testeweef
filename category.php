<?php get_header();
if( have_posts() ){
?>
<div class="container" style="margin-top: 150px;">
    <h3>Categorias</h3>  
    	<div class="search-form">
          <?php get_search_form(); ?>
        </div>
    <div style="text-align:right;cursor: pointer;" onclick="javascript:window.history.go(-1);"><i class="fa fa-reply-all" aria-hidden="true"></i> Voltar </div>

    <hr>
    <table class="table" id="tabHabilidades">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imagem</th>
                <th scope="col">Título</th>
                <th scope="col">Conteúdo</th>
            </tr>
        </thead>
        <tbody>

            <?php         
                        while ( have_posts() ) {                
                            the_post();                                       
                        ?>
            <tr>
                
                <td>
                    <a href="<?php echo get_permalink();?>">
                        <div style="width:128px; height: 128px; overflow: hidden;">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid', 'style'=>'width:100%'));?>
                        </div>
                    </a>
                </td>
                <td><a href="<?php echo get_permalink();?>">
                        <?php the_title();?>
                    </a>
                </td>
                <td>
                    <a href="<?php echo get_permalink();?>">
                        <?php the_content();?>
                    </a>
                </td>
            </tr>
            <?php           
                            
                        }// end while
                        ?>

        </tbody>
        <caption>
            <?php
        echo paginate_links(array(
            'prev_text' => __('<i class="fa fa-reply-all" aria-hidden="true"></i>'),
            'next_text' => __('<i class="fa fa-share" aria-hidden="true"></i>'),
            'before_page_number' => ' [ ',       
            'after_page_number'  => ' ] ',
        ));
?>
        </caption>
    </table>
</div>
<?php
}//
else{ ?>
<div class="container" style="margin-top: 150px;">    
    <div style="text-align:right;cursor: pointer;" onclick="javascript:window.history.go(-1);">
    <i class="fa fa-reply-all" aria-hidden="true"></i> Voltar
    </div>
</div>
<hr />
<div class="text-center mt-4 alert alert-danger" role="alert">
    <p>Nenhum post encontrado!</p>
</div>
<?php           
}//end if

get_footer();