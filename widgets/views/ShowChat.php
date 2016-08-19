<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.conversejs.org/css/converse.min.css">
<script src="https://cdn.conversejs.org/dist/converse.min.js"></script>

<script>
    $.noConflict();
    require(['converse'], function (converse) {
        converse.initialize({
            bosh_service_url: '<?php echo $xmppHttpBindUrl?>',
            keepalive: true,
            jid: '<?php echo $xmppUsername?>',
            authentication: 'prebind',
            prebind_url: '<?php echo $xmppPreBindUrl?>',
            allow_logout: false,
            allow_contact_requests: false,
            allow_contact_removal: false,
            allow_otr: false,
            allow_registration: false,
            auto_away: 120,
            forward_messages: true,
            hide_offline_users: true,
            message_archiving: 'always',
            message_carbons: true,
            hide_muc_server: 'conference.siga.uem.mz',
            play_sounds: true,
            roster_groups: true,
            show_controlbox_by_default:true,
            debug: false,

        });


        $('#logout').click(function () {
            converse.user.logout();
        });

        converse.listen.on('messageSend', function (event, messageText) {
            console.log('Mensagem Enviada');
            ga('send', 'event', 'Chat', 'Mensagem Enviada', 'Valor do Chat',1);
        });
        converse.listen.on('disconnected', function (event) {
            console.log('Disconectado')
            ga('send', 'event', 'Chat', 'Usuario Desconectado', 'Valor do Chat',1);
        });
        converse.listen.on('message', function (event, messageXML) {
            from = messageXML.getAttribute('from').split('@')[0];
            $(messageXML).find('body').each(function() {
                if ($(this).text() != '') {
                    ga('send', 'event', 'Chat', 'Mensagem Recebida', 'Valor do Chat',1);
                }
            })
        });
        converse.listen.on('cachedRoster', function (event, items) {
        });
        converse.listen.on('chatBoxOpened', function (event, chatbox) {
            ga('send', 'event', 'Chat', 'Chat Aberto', 'Valor do Chat',1);
        });
        converse.listen.on('chatRoomOpened', function (event, chatbox) {
            ga('send', 'event', 'Chat', 'Room Aberto', 'Valor do Chat',1);
        });
        converse.listen.on('chatBoxToggled', function (event, chatbox) {

        });
        converse.listen.on('connected', function (event) {

        });
        converse.listen.on('roster', function (event, items) {

        });
        converse.listen.on('chatBoxClosed', function (event, chatbox) {
            ga('send', 'event', 'Chat Fechado', 'Mensagem Enviada', 'Valor do Chat',1);
        });




    });
</script>