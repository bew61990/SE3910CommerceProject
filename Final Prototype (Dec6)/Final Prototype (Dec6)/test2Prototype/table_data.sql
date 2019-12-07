INSERT INTO users (username,pass,email,fav_player,fav_team)
VALUES ("admin",SHA2("admin",256),"admin@sportschatapp.com",2,1);


INSERT INTO users (username,pass,email,fav_player,fav_team)
VALUES ("user1",SHA2("test",256),"test@site.com",1,2);


INSERT INTO users (username,pass,email,fav_player,fav_team)
VALUES ("user2",SHA2("user",256),"user@site.com",3,3);


INSERT INTO teams (team_name)
VALUES ("Ravens");


INSERT INTO teams (team_name)
VALUES ("Chiefs");


INSERT INTO teams (team_name)
VALUES ("Seahawks");


INSERT INTO players (player_name,team_id)
VALUES ("Patrick Mahomes",2);


INSERT INTO players (player_name,team_id)
VALUES ("Ravens Player1",1);


INSERT INTO players (player_name,team_id)
VALUES ("Seahawks Player1",3);


INSERT INTO chatrooms (chatroom_name)
VALUES ("Global");


INSERT INTO chatrooms (chatroom_name)
VALUES ("Go Seahawks");


INSERT INTO chatrooms (chatroom_name)
VALUES ("Win Win Ravens");


INSERT INTO messages (user_id,message_content,date)
VALUES (2,"Hopefully we win","2019-16-10 10:39:31");


INSERT INTO messages (user_id,message_content,date)
VALUES (3,"Hopefully we win","2019-16-10 10:39:31");




INSERT INTO messages (user_id,message_content,date)
VALUES (3,"Hopefully They dont score","2019-16-10 10:39:31");


INSERT INTO messages (user_id,message_content,date)
VALUES (1,"hello","2019-16-10 10:39:31");


INSERT INTO chatroom_messages (chatroom_id,message_id)
VALUES (2,1);


INSERT INTO chatroom_messages (chatroom_id,message_id)
VALUES (3,2);


INSERT INTO chatroom_messages (chatroom_id,message_id)
VALUES (2,3);


INSERT INTO chatroom_messages (chatroom_id,message_id)
VALUES (1,4);