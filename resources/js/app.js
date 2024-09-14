import './bootstrap';
Echo.channel('chat_channel')
    .listen('MessageSent', (e) => {
        console.log(e.message);
        // Update your chat UI here
    });
