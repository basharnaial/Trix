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

var games = {};


function pick13Cards(deck) {
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


    console.log(socket.id, ' connected');


    socket.on('join_game', (data) => {
        var game_id = data.game_id;
        if (games[game_id] == null) {
            games[game_id] = {};
            games[game_id].deck = Array.from(allCards);
            games[game_id].players = [];
            games[game_id].players.push(socket.id);
            games[game_id].table = [];
            var hand = pick13Cards(games[game_id].deck);
            socket.join(game_id);
            socket.game_id = game_id;
            socket.hand = hand;
            io.to(game_id).emit("player_joined", { player: socket.id });
            io.to(socket.id).emit("hand", { hand: hand });
        }
        else {
            if (games[game_id].players.length < 4) {
                games[game_id].players.push(socket.id);
                var hand = pick13Cards(games[game_id].deck);
                socket.join(game_id);
                socket.game_id = game_id;
                socket.hand = hand;
                io.to(game_id).emit("player_joined", { player: socket.id });
                io.to(socket.id).emit("hand", { hand: hand });
            }
        }
    });

    socket.on('use_card', (data) => {
        var game_id = socket.game_id;
        if (games[game_id].players.length == 4) {
            var pleyer_turn = games[game_id].players.indexOf(socket.id) + 1;
            if (pleyer_turn == games[game_id].table.length + 1) {
                games[game_id].table.push(data.card);
                socket.hand = socket.hand.filter(function (el) { return el.value != data.card.value || el.shape != data.card.shape });
                io.to(socket.id).emit("hand", { hand: socket.hand });
                io.to(game_id).emit("table", games[game_id].table);
                if (games[game_id].table.length == 4) {
                    games[game_id].table = [];
                }
            }
        }

    });

    socket.on('disconnect', () => {
        delete games[socket.game_id];
        io.in(socket.game_id).disconnectSockets();
        console.log(socket.id, ' disconnected');
    });
});

server.listen(3000, () => {
    console.log('Server listening on port 3000');
});
