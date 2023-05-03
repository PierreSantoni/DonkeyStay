source core/database/DonkeyStayTables.sql;
source core/database/DonkeyStayBDD.sql;

SELECT * FROM user;
SELECT * FROM hotel;
SELECT * FROM room;
SELECT * FROM reservation;
/*
SELECT * FROM reservation AS R
    LEFT JOIN user AS U
        ON U.userID = R.userID;
    LEFT JOIN room
        ON room.roomID = R.roomID
    LEFT JOIN hotel
        ON hotel.hotelID = room.hotelID;
*/

/*
SELECT 
  user.userFirst,
  user.userLast,
  reservation.debut,
  reservation.fin,
  room.roomID,
  hotel.hotelName
FROM 
  reservation 
  JOIN user ON reservation.userID = user.userID 
  JOIN room ON reservation.roomID = room.roomID 
  JOIN hotel ON room.hotelID = hotel.hotelID;
*/