CREATE DATABASE SportsChatApp;
CREATE TABLE users (
user_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
username VARCHAR(20) NOT NULL,
pass VARCHAR(128) NOT NULL,
email VARCHAR(60) NOT NULL,
fav_player INTEGER UNSIGNED,
fav_team INTEGER UNSIGNED,
PRIMARY KEY (user_id)
);


CREATE TABLE teams (
team_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
team_name VARCHAR(20) NOT NULL,
PRIMARY KEY (team_id)
);



CREATE TABLE players (
player_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
player_name VARCHAR(50) NOT NULL,
team_id INTEGER UNSIGNED NOT NULL,
PRIMARY KEY(player_id)
);


CREATE TABLE user_chatroom (
user_id  INTEGER UNSIGNED,
chatroom_id  INTEGER UNSIGNED
);


CREATE TABLE chatrooms (
chatroom_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
chatroom_name VARCHAR(20) NOT NULL,
PRIMARY KEY(chatroom_id)
);




CREATE TABLE chatroom_messages (
chatroom_id INTEGER UNSIGNED,
message_id INTEGER UNSIGNED
);




CREATE TABLE messages (
message_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
user_id INTEGER NOT NULL,
message_content VARCHAR(140) NOT NULL,
date VARCHAR(25) NOT NULL,
PRIMARY KEY(message_id)
);