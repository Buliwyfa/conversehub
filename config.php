<?php

use humhub\modules\dashboard\widgets\Sidebar;
use humhub\modules\user\authclient\BaseClient;
return [
    'id' => 'conversehub',
    'class' => 'humhub\modules\conversehub\Module',
    'namespace' => 'humhub\modules\conversehub',
    'events' => [
        //array('class' => Sidebar::className(), 'event' => Sidebar::EVENT_INIT, 'callback' => array('humhub\modules\conversehub\Module', 'onSidebarInit')),
        array('class'=>BaseClient::className(),'event'=>BaseClient::EVENT_UPDATE_USER,'callback'=>array('humhub\modules\conversehub\Module', 'onUpdateUser'))
    ],
];
?>
