<section class="squareContent">
    <button class="btnOds">
        <header>
            <span class="number">1</span>
            <span class="text"><?=get_field('btnOdsTitle')?></span>
        </header>
        <figure>
            <?php
                $btnOdsImage = get_sub_field('$btnOdsImage');
            ?>
            <img src="<?=$btnOdsImage?>" alt="<?=$btnOdsImageAlt?>">
        </figure>
    </button>
</section>