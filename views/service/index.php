<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = "Сервіси";
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="serv_wrap">
                <ul>
                <?php foreach ($service as $key => $value):?>
                    <li>
                        <a href="<?=Url::to(['category/index', 'service_id'=>$value['id']])?>">
                            <div class="serv_img">
                                <img src="/images/<?php echo $value['id'] ?>.png" alt="<?php echo $value['name']?>">
                            </div>
                            <p><?php echo $value['name'] ?></p>
                        </a>
                    </li>
                <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>