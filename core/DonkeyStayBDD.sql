TRUNCATE user;
TRUNCATE hotel;
TRUNCATE room;
TRUNCATE reservation;

INSERT TO user VALUES
(1, 'Admin', 'Zero', 1, 'Login', 'Pass'),
(2, 'User', 'Zero', 0, 'Login', 'Pass')

INSERT TO hotel VALUES
(1, 3, "Hotel Zero", "175 Rue des Pyrénnées", "Paris", "FRANCE"),
(2, 1, "Alpha Hotel", "2506", "Los Angeles", "CALIFORNIA")

INSERT TO room VALUES
(1, 1, 95.00, "Lorem blabla", "img/roomPics/HotelZero/room01.jpg"),
(2, 1, 195.00, "Lorem blabla", "img/roomPics/HotelZero/room02.jpg"),
(3, 2, 130.00, "Lorem blabla", "img/roomPics/AlphaHotel/room01.jpg"),
(4, 2, 270.00, "Lorem blabla", "img/roomPics/AlphaHotel/room02.jpg")

INSERT TO reservation VALUES
(1, 2, 1, "02-07-2022", "30-07-2022"),
(2, 2, 4, "01-07-2023", "29-07-2023")