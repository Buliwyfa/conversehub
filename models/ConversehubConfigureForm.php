<?php

namespace humhub\modules\conversehub\models;

use Yii;

/**
 * BirthdayConfigureForm defines the configurable fields.
 *
 * @package humhub.modules.birthday.forms
 * @author Sebastian Stumpf
 */
class ConversehubConfigureForm extends \yii\base\Model
{

    public $xmppHost;
    public $xmppPort;
    public $xmppUseSSL;
    public $xmppPlugin;
    public $xmppApiSecret;
    public $xmppHttpBindUrl;
    public $xmppPreBindUrl;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            array('xmppHost', 'required'),
            array('xmppHttpBindUrl','required'),
            array('xmppPreBindUrl','required'),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'xmppHost' => Yii::t('BirthdayModule.base', 'The XMPP Host.'),
        );
    }

}
