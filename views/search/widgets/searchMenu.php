<?php

use humhub\libs\Html;
use yii\helpers\Url;
?>

<div class="nav pull-left nav-search">
    <?= Html::beginForm(Url::to(['//search/search/index']), 'GET'); ?>
    <div class="form-group form-group-search">
        <?= Html::textInput('SearchForm[keyword]', '', ['placeholder' => Yii::t('base', 'Search'), 'title' => Yii::t('SearchModule.views_search_index', 'Search for user, spaces and content'), 'class' => 'form-control form-search', 'id' => 'search-input-field']); ?>
        <?= Html::submitButton(Yii::t('base', 'Search'), ['class' => 'btn btn-default btn-sm form-button-search hidden']); ?>
    </div>
    <?= Html::endForm(); ?>
</div>
