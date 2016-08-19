<?php

namespace humhub\modules\conversehub\controllers;

use Yii;
use humhub\models\Setting;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.birthday.controllers
 * @author Sebastian Stumpf
 */
class ConfigController extends \humhub\modules\admin\components\Controller
{

    /**
     * Configuration Action for Super Admins
     */
    public function actionIndex()
    {
        $form = new \humhub\modules\conversehub\models\ConversehubConfigureForm();
        $form->xmppHost = Setting::Get('xmppHost', 'conversehub');
        $form->xmppPort = Setting::Get('xmppPort', 'conversehub');
        $form->xmppUseSSL = Setting::Get('xmppUseSSL', 'conversehub');
        $form->xmppApiSecret = Setting::Get('xmppApiSecret', 'conversehub');
        $form->xmppPlugin = Setting::Get('xmppPlugin', 'conversehub');
        $form->xmppHttpBindUrl = Setting::Get('xmppHttpBindUrl', 'conversehub');
        $form->xmppPreBindUrl = Setting::Get('xmppPreBindUrl', 'conversehub');
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $form->xmppHost = Setting::Set('xmppHost', $form->xmppHost, 'conversehub');
            $form->xmppPort = Setting::Set('xmppPort', $form->xmppPort, 'conversehub');
            $form->xmppUseSSL = Setting::Set('xmppUseSSL', $form->xmppUseSSL, 'conversehub');
            $form->xmppApiSecret = Setting::Set('xmppApiSecret', $form->xmppApiSecret, 'conversehub');
            $form->xmppPlugin = Setting::Set('xmppPlugin', $form->xmppPlugin, 'conversehub');
            $form->xmppHttpBindUrl = Setting::Set('xmppHttpBindUrl', $form->xmppHttpBindUrl, 'conversehub');
            $form->xmppPreBindUrl = Setting::Set('xmppPreBindUrl', $form->xmppPreBindUrl, 'conversehub');
            return $this->redirect(['/conversehub/config']);
        }

        return $this->render('index', array('model' => $form));
    }

    public function actionXmpp_pre_bind(){
        return '';
    }

}

?>
