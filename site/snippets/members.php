<section class="members"> 
    <h2> 
        <?php echo $data->title() ?>
    </h2>
    <?php echo kirbytext( $data->text() ); ?>


    <?php foreach( $data->children()->visible() as $member): ?>
        <img src="<?php echo $member->image( $member->user_image())->url()  ?>" 
            width="50" height="60"
            title="<?php echo $member->title()->html() ?>"
            alt="<?php echo $member->title()->html() ?>">
        <strong> 
            <?php echo $member->title()->html() ?> <br>
i       </strong>
        <?php echo $member->text()->html() ?> <br>
        <ul>
            <li><?php echo $member->mail()->html() ?> </li>
            <li><?php echo $member->twitter()->html() ?> </li>
            <li><?php echo $member->dribbble()->html() ?> </li>
            <li><?php echo $member->github()->html() ?> </li>
            <li><?php echo $member->xing()->html() ?> </li>
        </ul>

    <?php endforeach ?>
</section>
