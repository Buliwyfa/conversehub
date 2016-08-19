<?php
namespace humhub\modules\conversehub\widgets;

use humhub\models\Setting;
use Yii;

class ShowChatWidget extends \yii\base\Widget
{

    public function run()
    {
        // load files
        $email = Yii::$app->user->identity->email;
        $xmppUsername = str_replace('@', '!', $email);
        $xmppUsername .= '@'.Setting::get('xmppHost', 'conversehub');

        return $this->render('ShowChat', ['xmppUsername' => $xmppUsername,
            'xmppPreBindUrl'=> Setting::get('xmppPreBindUrl', 'conversehub'),
            'xmppHttpBindUrl'=> Setting::get('xmppHttpBindUrl', 'conversehub')
        ]);

    }

    /**
     * load needed resources files
     */
    public function loadResources()
    {


    }


}

?>
