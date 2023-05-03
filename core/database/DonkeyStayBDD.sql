INSERT INTO user VALUES
(1, 'Admin', 'Zero', 1, 'Login', 'Pass'),
(2, 'User', 'Zero', 0, 'Login', 'Pass');

INSERT INTO hotel VALUES
(1, 3, "Hotel Zero", "175 Rue des Pyrénnées", "Paris", "FRANCE"),
(2, 1, "Alpha Hotel", "2506 Inferno street", "Los Angeles", "CALIFORNIA");

INSERT INTO room VALUES
(1, 1, 1, 95.00, "Lorem blabla", "img/roomPics/HotelZero/room01/"),
(2, 1, 2, 195.00, "Lorem blabla", "img/roomPics/HotelZero/room02/"),
(3, 2, 1, 130.00, "Lorem blabla", "img/roomPics/AlphaHotel/room01/"),
(4, 2, 2, 270.00, "Lorem blabla", "img/roomPics/AlphaHotel/room02/");

INSERT INTO reservation VALUES
(1, 2, 1, "2022-07-02", "2022-07-30"),
(2, 2, 4, "2023-07-01", "2023-07-29");