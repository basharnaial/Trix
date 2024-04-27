<!DOCTYPE html>
<html>

<head>
    <title>Card Game</title>
</head>

<body>

    <div id="myHand" style="display: flex;">
    </div>

    <br><br><br><br><br>

    <div id="table" style="display: flex;">
    </div>

    <script>
        myCards = [];
        const shapes = {
            'Hearts': '♥',
            'Diamonds': '♦',
            'Clubs': '♣',
            'Spades': '♠'
        };

        function showCards() {
            const myHand = document.getElementById('myHand');
            if (myCards.length == 0) {
                console.log("Empty hand");
                return;
            }
            for (let i = 0; i < myCards.length; i++) {
                let cardString = '';
                cardString += ' _______\n';
                cardString += `|       |\n`;
                cardString += `| ${myCards[i].value.padEnd(2)}    |\n`;
                cardString += `|       |\n`;
                cardString += `|   ${shapes[myCards[i].shape]}   |\n`;
                cardString += `|       |\n`;
                cardString += `|    ${myCards[i].value.padStart(2)} |\n`;
                cardString += `|_______|\n`;

                const cardElement = document.createElement('pre');
                cardElement.textContent = cardString;

                const button = document.createElement('button');
                button.textContent = 'Use';
                button.addEventListener('click', function() {
                    socket.emit('use_card', {
                        card: myCards[i]
                    });
                    button.parentNode.remove();
                });

                const div = document.createElement('div');
                div.style.display = 'flex';
                div.style.flexDirection = 'column';
                div.style.alignItems = 'center';
                div.appendChild(cardElement);
                div.appendChild(button);

                myHand.appendChild(div);
            }

        }

        function showCard(card) {
            const table = document.getElementById('table');

            let cardString = '';
            cardString += ' _______\n';
            cardString += `|       |\n`;
            cardString += `| ${card.value.padEnd(2)}    |\n`;
            cardString += `|       |\n`;
            cardString += `|   ${shapes[card.shape]}   |\n`;
            cardString += `|       |\n`;
            cardString += `|    ${card.value.padStart(2)} |\n`;
            cardString += `|_______|\n`;

            const cardElement = document.createElement('pre');
            cardElement.textContent = cardString;

            const div = document.createElement('div');
            div.appendChild(cardElement);

            table.appendChild(div);
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.2.0/socket.io.js"></script>

    <script>
        const socket = io('http://localhost:3000');

        socket.on('connect', () => {
            console.log('Connected to the server');
        });

        socket.on('get_hand', function(data) {
            console.log('Hand received.');
            myCards = data.hand;
            showCards();
        });

        socket.on('card_thrown', function(data) {
            console.log('Card thrown.');
            showCard(data.card);
        });

        socket.on('disconnect', () => {
            const myHand = document.getElementById('myHand');
            const table = document.getElementById('table');
            table.remove();
            myHand.innerHTML = 'You have been disconnected automatically because someone left the game.';
            console.log('Disconnected from the server');
        });
    </script>

</body>

</html>
