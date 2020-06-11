<?php

/* @var $this \yii\web\View */
/* @var $content string */
\humhub\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= strip_tags($this->pageTitle); ?></title>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="keywords" content="green meteor, humhub, modules, themes">
        <meta name="copyright"content="Green Meteor">
        <?php $this->head() ?>
        <?= $this->render('head'); ?>
        <!--JS-->
        <?php $this->registerJsFile($this->theme->getBaseUrl() . '/js/cookie.js'); ?>
        <?php $this->registerJsFile($this->theme->getBaseUrl() . '/js/styleswitch.js'); ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <!-- start: first top navigation bar -->
        <div id="topbar-first" class="topbar">
            <div class="container">
                <div class="topbar-brand hidden-xs">
                    <?= \humhub\widgets\SiteLogo::widget(); ?>
                </div>

                <div class="topbar-actions pull-left" style="min-width: 50%; padding-top: 6px;"  id="search-menu-nav">
                    <?= \humhub\widgets\TopMenuRightStack::widget(); ?>
                </div>

                <div class="topbar-actions pull-right">
                    <?= \humhub\modules\user\widgets\AccountTopMenu::widget(); ?>
                </div>

                <div class="notifications pull-right">
                    <?= \humhub\widgets\NotificationArea::widget(); ?>
                </div>
                <div class="topbar-actions styleswitch pull-right">
                    <a href="" id="switch"><i class="turnoff fa fa-moon-o"></i><i class="turnon fa fa-sun-o"></i></a>
                </div>
            </div>
        </div>
        <!-- end: first top navigation bar -->

        <!-- start: second top navigation bar -->
        <div id="topbar-second" class="topbar">
            <div class="container">
                <ul class="nav" id="top-menu-nav">
                    <!-- load space chooser widget -->
                    <?= \humhub\modules\space\widgets\Chooser::widget(); ?>

                    <!-- load navigation from widget -->
                    <?= \humhub\widgets\TopMenu::widget(); ?>
                </ul>
            </div>
        </div>
        <!-- end: second top navigation bar -->

        <?= $content; ?>

        <!--JS-->
        <?php $this->registerJsFile($this->theme->getBaseUrl() . '/js/theme.js'); ?>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
