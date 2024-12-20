<section class="awards paddingContent">
    <?=get_the_title('<h2>','</h2>')?>
    <div class="years">
        <h3><?=get_sub_field('yearAwards')?></h3>
        <span class="awardsName"><?php the_content()?></span>
    </div>
</section>