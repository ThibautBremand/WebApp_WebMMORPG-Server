PHP Server for OS Game
========================
Back-end for the MMORPG written in PHP Symfony2. For the client, please see http://github.com/ThibautBremand/os

The server that retrieves communications from users. It contains all the communication intelligence, so it eases the development of other clients in other technologies. The new clients will just have to read the messages from the server.
The server also contains the Admin Panel and few HTML page to administrate accounts. That way, the client will only display the game, so it will be faster to develop other clients.

**Installation :** <br/>
- Clone the repo at the same depth as the client.

**How to launch :** <br/>
- Make sure *php* is defined as an environment variable in your system. If no, you can still write the full path to php (php.exe for windows) instead of *php* in the commands below.
- Install composer if it's not installed on your system.
- Open a terminal, and go to the server directory.
- Type *composer install* to install all the project dependencies using composer.
- Type *php app/console assetic:dump* to dump the assetic assets
- Type *php app/console os:server* in order to instanciate the server (used to manage the communication intelligence).
- Open another terminal, and go to the server directory.
- Type *php app/console server:run* in order to launch the Symfony2 app (used to manage the model : users, maps, users positions, etc).
- Go to 127.0.0.1:8000, create an account and a character, and start to play.
- You can create another account by opening a new browser tab, log into the game with the new character while the first one is still connected, and see the two characters on the map !
