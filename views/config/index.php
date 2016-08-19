<?php

use yii\helpers\Html;
use yii\helpers\Url;
use humhub\compat\CActiveForm;
?>
<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('BirthdayModule.base', 'Converse Module Configuration'); ?></div>
    <div class="panel-body">

        <br/>

        <?php $form = CActiveForm::begin(); ?>
        <?php echo $form->errorSummary($model); ?>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'xmppHost'); ?>
            <?php echo $form->textField($model, 'xmppHost', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'xmppHost'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'xmppPort'); ?>
            <?php echo $form->textField($model, 'xmppPort', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'xmppPort'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'xmppUseSSSL'); ?>
            <?php echo $form->textField($model, 'xmppUseSSL', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'xmppUseSSL'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'xmppPlugin'); ?>
            <?php echo $form->textField($model, 'xmppPlugin', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'xmppPlugin'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'xmppApiSecret'); ?>
            <?php echo $form->textField($model, 'xmppApiSecret', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'xmppApiSecret'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'xmppHttpBindUrl'); ?>
            <?php echo $form->textField($model, 'xmppHttpBindUrl', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'xmppHttpBindUrl'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'xmppPreBindUrl'); ?>
            <?php echo $form->textField($model, 'xmppPreBindUrl', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'xmppPreBindUrl'); ?>
        </div>

        <hr>
        <?php echo Html::submitButton(Yii::t('BirthdayModule.base', 'Save'), array('class' => 'btn btn-primary')); ?>
        <a class="btn btn-default" href="<?php echo Url::to(['/admin/module']); ?>"><?php echo Yii::t('BirthdayModule.base', 'Back to modules'); ?></a>

        <?php CActiveForm::end(); ?>
    </div>
</div>