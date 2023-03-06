<?php get_header(); ?>
<section data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="s-hero">
    <div class="container">
        <div class="text">
            <h1>Weef Interativa<br> Somos uma produtora digital independente</h1>
            <p>Aprenda a desenvolver interfaces modernas e de alta qualidade com quem está na área atuando com projetos altamente renomados.</p>
            <a href="#" class="btn-primary">Fazer parte da lista de espera</a>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner-home.jpg">
        </div>
    </div>
</section>
<section data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="s-card-featured">
    <div class="container">
        <div class="main-area">
            <div class="title center">
                <p>Aqui você encontra eventos de programação</p>
            </div>
            <div class="all-cards">
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="card">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/ico-icon-circle.svg" alt="Icon">
                    </div>
                    <div class="info">
                        <h3>Front-End</h3>
                        <p>Você aprenderá a elaborar e desenvolver projetos de aplicações para web, além de codificar interface visual de sites dinâmicos e fazer a publicação de aplicações web.</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1500" class="card white">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/ico-icon-circle.svg" alt="Icon">
                    </div>
                    <div class="info">
                        <h3>Back-End</h3>
                        <p>Você aprenderá a desenvolver websites com lógica de programação, implantar banco de dados, aplicações de front-end e codificações de back-end. </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1500" class="card">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/ico-icon-circle.svg" alt="Icon">
                    </div>
                    <div class="info">
                        <h3>Mobile</h3>
                        <p>Você aprenderá sobre processos de desenvolvimento de aplicativos, de incorporação das interfaces e experiência do usuário em plataformas nos dispositivos móveis. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-area">
            <div class="top">
                <div class="title">
                    <h1>Eventos</h1>
                    <p>Fique por dentro dos nossos próximos eventos!!! </p>
                </div>
                <a href="https://koletivo.com.br/gestao-eventos/category/sem-categoria/" class="btn-primary" target="_blank">Ver Eventos</a>
            </div>
          <div class="row">
              <?php if (have_posts()) { while (have_posts()) { the_post(); ?>  
                    <div class="all-images">
						<h3><?php the_title(); ?><br><span style="font-size: 10px;color: #fff;">publicado em: <?php echo get_the_date(); ?></span></h3>
                        <div class="image" class="col-md-6 col-lg-4 mb-5">
                        <figure ><?php the_post_thumbnail('thumbnail', array('class'=> 'img-fluid')); ?></figure> 
                        </div>
                    </div>
            <?php } }?>
           </div>
		
        </div>
    </div>
</section>
<section class="s-newsletter">
    <div class="container">
        <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="faca-parte">
            <h1>Ensino descomplicado e direto ao ponto!</h1>
            <p>Aprenda a desenvolver interfaces modernas e de alta qualidade com quem está na área atuando com projetos altamente renomados.</p>
            <a href="#" class="btn-primary">Fazer parte da lista de espera</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>