<section class="transparency paddingContent">            
    <article>
        <header>
            <h2><?=get_field('transparencyTitle')?></h2>
            <?=get_field('transparencyDescription')?>
        </header>
        <div class="lists">
            <ul>
                <li>
                    <strong><?=get_field('transparencyListPosition')?></strong>
                    <span><?=get_field('transparencyListPositionName')?></span>
                </li>
            </ul>
            <ul>
                <li>
                    <strong><?=get_field('transparencyListTwoPosition')?></strong>
                    <span><?=get_field('transparencyListTwoPositionName')?></span>
                </li>
            </ul>
        </div>
        <footer>
            <p><?=get_field('transparencyText')?></p>
            <div class="buttons">
                <a href="<?=get_field('transparencyButtonsDownload')?>" target="_blank"><?=get_field('transparencyButtonsName')?></a>
            </div>
        </footer>
    </article>
    <figure>
        <img width="639" src="<?=get_template_directory_uri()?>/assets/images/webp/converted/ana-cristina-j-guimares.png.webp" alt="Ana Cristina J. Guimaraes">
    </figure>
</section>