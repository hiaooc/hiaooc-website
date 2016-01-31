<section class="members"> 
    <h2 class="members__headline"> 
        <?php echo $data->title() ?>
    </h2>
    <div class="members__intro"> 
        <?php echo kirbytext( $data->text() ); ?>
    </div>

    <div class="members__inner"> 
        <?php foreach( $data->children()->visible() as $member): ?>
        <div class="member"> 
            <img src="<?php echo $member->images()->first()->crop(70,70)->url()  ?>" 
                    title="<?php echo $member->title()->html() ?>"
                    alt="<?php echo $member->title()->html() ?>">
            <div class="member__inner">
                <h3> 
                    <?php echo $member->title()->html() ?> <br>
                </h3>
                <?php echo kirbytext($member->text()->html()) ?> <br>
                <ul class="member__tags">   
                    <?php foreach($member->tags()->split('/') as $tag): ?>   
                    <li><?php echo $tag ?></li>   
                    <?php endforeach ?> 
                </ul>

            </div>
        </div>
        <?php endforeach ?>
    </div>

</section>
