
/************************ IMPORT SOCKET LIBRARY **********************/
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

/************************ CARDS ARRAY **********************/
// DEFINE ARRAY FOR THE GAME CARDS
// WE HAVE 4 TYPES HEARTS,DIAMONDS,CLUBS AND SPADES
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

/************************ CARDS OF EACH GAME **********************/
var games = {};


/************************ PICK 13 CARDS **********************/
// When a player joins, they should pick 13 cards from the deck.
function pick13Cards(deck) {
    var pickedCards = [];
    // If there are no cards left in the deck, return the empty list of picked cards.
    if (deck.length == 0) {
        return pickedCards;
    }
    // Loop to pick 13 random cards.
    for (let i = 0; i < 13; i++) {
        // Select a random index and add that card to the pickedCards array.
        var randomIndex = Math.floor(Math.random() * deck.length);
        var pickedCard = deck[randomIndex];
        pickedCards.push(pickedCard);
        // Remove the picked card from the deck.
        deck.splice(randomIndex, 1);
    }
    // Log the action of picking cards.
    console.log("Picked");
    return pickedCards;
}


/************************ SOCKET CONNECTION  **********************/
// This event listener handles a new socket connection.
io.on('connection', (socket) => {

    // Log the connection with the socket ID.
    console.log(socket.id, ' connected');

    // Event listener for joining a game.
    socket.on('join_game', (data) => {
        var game_id = data.game_id;
        // Initialize a new game if it does not already exist.
        if (games[game_id] == null) {
            games[game_id] = {};
            // Copy the complete set of cards for the game deck from allCards.
            games[game_id].deck = Array.from(allCards);
            // Initialize the list of players and the game table.
            games[game_id].players = [];
            games[game_id].players.push(socket.id);
            games[game_id].table = [];
            // Distribute 13 cards to the player.
            var hand = pick13Cards(games[game_id].deck);
            socket.join(game_id);
            socket.game_id = game_id;
            socket.hand = hand;
            // Notify all players in the game of the new player joining.
            io.to(game_id).emit("player_joined", { player: socket.id });
            // Send the initial hand of cards to the new player.
            io.to(socket.id).emit("hand", { hand: hand });
        }
        else {
            // If the game exists and has fewer than 4 players, add the new player.
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
    /************************   USE CARD EVENT LISTENER **********************/
    // WHEN PLAYER MAKE EMMIT ON use_card RECIVE THE CARD
    // This event listener handles a 'use_card' action from a client socket.
    socket.on('use_card', (data) => {
        // Retrieve the game ID associated with this socket.
        var game_id = socket.game_id;

        // Check if the current game has exactly 4 players.
        if (games[game_id].players.length == 4) {
            // Determine the turn of the player using the socket ID.
            var player_turn = games[game_id].players.indexOf(socket.id) + 1;

            // Check if it's this player's turn based on the cards on the table.
            if (player_turn == games[game_id].table.length + 1) {
                // Place the played card onto the table.
                games[game_id].table.push(data.card);
                // Remove the played card from the player's hand.
                socket.hand = socket.hand.filter(function (el) { return el.value != data.card.value || el.shape != data.card.shape });
                // Update the player's hand on their client.
                io.to(socket.id).emit("hand", { hand: socket.hand });
                // Update the table view for all players in the game.
                io.to(game_id).emit("table", games[game_id].table);
                // Reset the table if four cards have been played.
                if (games[game_id].table.length == 4) {
                    games[game_id].table = [];
                }
            }
        }
    });

    /************************   DISCONNECT EVENT LISTENER **********************/
    socket.on('disconnect', () => {
        delete games[socket.game_id];
        io.in(socket.game_id).disconnectSockets();
        console.log(socket.id, ' disconnected');
    });
});

server.listen(3000, () => {
    console.log('Server listening on port 3000');
});
