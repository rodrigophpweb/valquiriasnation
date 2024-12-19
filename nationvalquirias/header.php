<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valquírias</title>
    <?php wp_head()?>
</head>
<body <?php body_class()?>>
    <?php wp_body_open()?>
    <header>
        <img src="assets/images/webp/converted/hero-banner-home.webp" alt="">
        <div class="container">
            <img src="assets/images/svg/linescolorfull.svg" alt="Linhas Coloridas">     
           <nav>
                <figure class="brand">                    
                    <a href="<?=site_url()?>" title="Nação Valquirias">
                        <img src="assets/images/svg/logotipo-negativo-nacao-valquirias.svg" alt="Logotipo Nação Valquirias">
                    </a>
                </figure>
                <button class="btnMobile">≡</button> 
                <ul class="menu">
                    <li><a href="nossa-nacao.html">Nossa Nação</a></li>
                    <li><a href="comites.html">Comitês</a></li>
                    <li><a href="programas-sociais-ods.html">Programa Sociais ODS</a></li>
                    <li><a href="castelo.html">Castelo</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="doe.html">DOE</a></li>
                </ul>
           </nav>
        </div>
    </header>