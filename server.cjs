const express = require('express');
const http = require('http');
const socketIO = require('socket.io');

const app = express();
const server = http.createServer(app);
const io = socketIO(server, {
    cors: {
        origin: '*',
    }
});

const allCards = [
    { value: 'A', shape: 'Hearts' },
    { value: '2', shape: 'Hearts' },
    { value: '3', shape: 'Hearts' },
    { value: '4', shape: 'Hearts' },
    { value: '5', shape: 'Hearts' },
    { value: '6', shape: 'Hearts' },
    { value: '7', shape: 'Hearts' },
    { value: '8', shape: 'Hearts' },
    { value: '9', shape: 'Hearts' },
    { value: '10', shape: 'Hearts' },
    { value: 'J', shape: 'Hearts' },
    { value: 'Q', shape: 'Hearts' },
    { value: 'K', shape: 'Hearts' },
    { value: 'A', shape: 'Diamonds' },
    { value: '2', shape: 'Diamonds' },
    { value: '3', shape: 'Diamonds' },
    { value: '4', shape: 'Diamonds' },
    { value: '5', shape: 'Diamonds' },
    { value: '6', shape: 'Diamonds' },
    { value: '7', shape: 'Diamonds' },
    { value: '8', shape: 'Diamonds' },
    { value: '9', shape: 'Diamonds' },
    { value: '10', shape: 'Diamonds' },
    { value: 'J', shape: 'Diamonds' },
    { value: 'Q', shape: 'Diamonds' },
    { value: 'K', shape: 'Diamonds' },
    { value: 'A', shape: 'Clubs' },
    { value: '2', shape: 'Clubs' },
    { value: '3', shape: 'Clubs' },
    { value: '4', shape: 'Clubs' },
    { value: '5', shape: 'Clubs' },
    { value: '6', shape: 'Clubs' },
    { value: '7', shape: 'Clubs' },
    { value: '8', shape: 'Clubs' },
    { value: '9', shape: 'Clubs' },
    { value: '10', shape: 'Clubs' },
    { value: 'J', shape: 'Clubs' },
    { value: 'Q', shape: 'Clubs' },
    { value: 'K', shape: 'Clubs' },
    { value: 'A', shape: 'Spades' },
    { value: '2', shape: 'Spades' },
    { value: '3', shape: 'Spades' },
    { value: '4', shape: 'Spades' },
    { value: '5', shape: 'Spades' },
    { value: '6', shape: 'Spades' },
    { value: '7', shape: 'Spades' },
    { value: '8', shape: 'Spades' },
    { value: '9', shape: 'Spades' },
    { value: '10', shape: 'Spades' },
    { value: 'J', shape: 'Spades' },
    { value: 'Q', shape: 'Spades' },
    { value: 'K', shape: 'Spades' },
];

var deck = Array.from(allCards);

function pick13Cards() {
    var pickedCards = [];
    if (deck.length == 0) {
        return pickedCards;
    }
    for (let i = 0; i < 13; i++) {
        var randomIndex = Math.floor(Math.random() * deck.length);
        var pickedCard = deck[randomIndex];
        pickedCards.push(pickedCard);
        deck.splice(randomIndex, 1);
    }
    console.log("Picked");
    return pickedCards;
}

io.on('connection', (socket) => {

    var hand = pick13Cards();
    if (hand.length == 0) {
        socket.disconnect(true);
    }
    else console.log('A user connected');

    io.to(socket.id).emit("get_hand", { hand: hand });

    socket.on('use_card', (data) => {
       // io.broadcast.emit("card_thrown", data);
        io.emit("card_thrown", data);
    });

    socket.on('disconnect', () => {
        io.sockets.sockets.forEach((socket) => {
            socket.disconnect(true);
        });
        console.log('All users disconnected');
        deck = Array.from(allCards);
    });
});

server.listen(3000, () => {
    console.log('Server listening on port 3000');
});
