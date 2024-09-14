import { Server } from 'socket.io';

// Initialize Socket.io server on port 3000
const io = new Server(3000);

// Print that the socket server is running
console.log('Socket server is running on port 3000');

//on = listen
io.on('connection', (socket) => {
    console.log('A user connected');

    //on = listen
    socket.on('chat:message', (message) => {
        // emit = speak
        io.emit('chat:message', message);
    });

    socket.on('disconnect', () => {
        console.log('User disconnected');
    });
});
