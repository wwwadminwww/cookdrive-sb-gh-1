<li class="categori_wrap">
    <a href="<?php echo \yii\helpers\Url::to(['category/view', 'category' => $category['category'] ])?> ">
        <div>
            <img src="images/<?php echo $category['category'] ?>.png" alt="<?php echo $category['category'] ?>">
        </div>
        <span><?php echo $category['category'] ?></span>
    </a>
</li>
