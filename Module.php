<?php
namespace humhub\modules\conversehub;

use humhub\modules\conversehub\widgets\ShowChatWidget;
use humhub\models\Setting;
use yii\helpers\Url;
use Yii;

class Module extends \humhub\components\Module{
	    /**
     * On build of the dashboard sidebar widget, add the mostactiveusers widget if module is enabled.
     *
     * @param type $event            
     */
    public static function onSidebarInit($event)
    {

        $event->sender->addWidget(ShowChatWidget::className(), array(), array('sortOrder' => 201));
    }

    public static function onUpdateUser($event){
        var_dump($event);
        die();
    }

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to(['/conversehub/config']);
    }

    /**
     * @inheritdoc
     */
    public function enable()
    {
        parent::enable();
    }
}