<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

?>
<?php $this->beginContent("@backend/views/layouts/base.php"); ?>
<main role="main" class="flex-shrink-0 d-flex">
    <aside style="flex: 1; width: 20%">
        <?= $this->render("_sidebar") ?>
    </aside>
    <div class="content-wrapper" style="width: 80%">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<?php $this->endContent(); ?>


