create database MoviesDB;


drop table Films;


CREATE TABLE Films (
id int(11) NOT NULL AUTO_INCREMENT,
title varchar(50) NOT NULL,
genre varchar(50) NOT NULL,
link varchar(500) NOT NULL,
description varchar(500) NOT NULL,
mark int(11) NOT NULL,
director varchar(40) NOT NULL,
date varchar(10) NOT NULL,
img_src varchar(500) DEFAULT NULL,
actors varchar(70) NOT NULL,
actors2 varchar(70) NOT NULL,
trailer varchar(700) DEFAULT NULL,
image varchar(500) NOT NULL,
image2 varchar(500) NOT NULL,
img_src2 varchar(500) NOT NULL,
PRIMARY KEY (id)
);
insert into Films (title, genre, link, description, mark, director, date, img_src, actors, actors2, trailer, image, image2, img_src2) VALUES ('Halo ', 'Action, Adventure', 'https://www.themoviedb.org/tv/52814-halo', 'Depicting an epic 26th-century conflict between humanity and an alien threat known as the Covenant, the series weaves deeply drawn personal stories with action, adventure and a richly imagined vision of the future.', 85, 'Kyle Killen', '2022-05-15', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pW0UCPX9bvBEYoeQ6U4zi4tv9z7.jpg', 'Pablo Schreiber', 'Natascha McElhone', 'https://yandex.by/video/preview/?text=halo%20trailer&path=yandex_search&parent-reqid=1655859787227035-13506529482360796578-vla1-0467-vla-l7-balancer-8080-BAL-2908&from_type=vast&filmId=3157787161320308099', 'https://www.themoviedb.org/t/p/w138_and_h175_face/wOze8R9lgoZxZoTsPSHID4Nt2Ee.jpg', 'https://www.themoviedb.org/t/p/w138_and_h175_face/9pxaoasotR1pdCXYSfN1pkm0geO.jpg', 'https://games.mail.ru/hotbox/content_files/news/2021/10/25/471291278eb4450a9a34cf6400a9a1af.jpg');
insert into Films (title, genre, link, description, mark, director, date, img_src, actors, actors2, trailer, image, image2, img_src2) VALUES ('The Good Doctor', 'Drama', 'https://www.themoviedb.org/tv/71712-the-good-doctor', 'Shaun Murphy, a young surgeon with autism and savant syndrome, relocates from a quiet country life to join a prestigious hospital''s surgical unit. Unable to personally connect with those around him, Shaun uses his extraordinary medical gifts to save lives and challenge the skepticism of his colleagues.', 85, 'David Shore', '2017-07-12', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/cXUqtadGsIcZDWUTrfnbDjAy8eN.jpg', 'Freddie Highmore', 'Richard Schiff', 'https://www.themoviedb.org/video/play?key=fYlZDTru55g', 'https://www.themoviedb.org/t/p/w138_and_h175_face/4haqYYQJFhFe9Poqb26Xpuj1VJk.jpg', 'https://www.themoviedb.org/t/p/w138_and_h175_face/cHYHhPvyznOJrw0yEqndhYK2GnQ.jpg', 'https://image.tmdb.org/t/p/original/gdl7605CMvntw3y0TxswAGy0umK.jpg');
insert into Films (title, genre, link, description, mark, director, date, img_src, actors, actors2, trailer, image, image2, img_src2) VALUES ('The Batman', 'Crime, Mystery, Thriller', 'https://www.themoviedb.org/movie/414906-the-batman', 'In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects to his own family while facing a serial killer known as the Riddler.', 78, 'Matt Reeves', '2022-09-27', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/74xTEgt7R36Fpooo50r9T25onhq.jpg', 'Robert Pattinson', 'Zoë Kravitz', 'https://www.themoviedb.org/video/play?key=391277390', 'https://www.themoviedb.org/t/p/w138_and_h175_face/6RVxNlNmc0DIfZzaJKCJM43If3M.jpg', 'https://www.themoviedb.org/t/p/w138_and_h175_face/4uOfGQSKCz2I7HVV5vPwhvTD61y.jpg', 'https://avatars.mds.yandex.net/i?id=adf8ecee422e5de384247a531c40f720-4921558-images-thumbs&n=13');
insert into Films (title, genre, link, description, mark, director, date, img_src, actors, actors2, trailer, image, image2, img_src2) VALUES ('Deadpool', 'Action, Adventure, Comedy', 'https://www.themoviedb.org/movie/293660-deadpool', 'The origin story of former Special Forces operative turned mercenary Wade Wilson, who, after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.', 79, 'Tim Miller', '2016-10-16', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pcZT1Ouq99dY6J2iGXjMxw16x6o.jpg', 'Ryan Reynolds', 'Ed Skrein', 'https://www.themoviedb.org/video/play?key=FyKWUTwSYAs', 'https://www.themoviedb.org/t/p/w138_and_h175_face/4SYTH5FdB0dAORV98Nwg3llgVnY.jpg', 'https://www.themoviedb.org/t/p/w138_and_h175_face/c5PSRY9xbwJFCVCEeDIcx9SiJI1.jpg', 'https://avatars.mds.yandex.net/i?id=f25df5c5ac10f53cf4ab826160b92bc1-6948220-images-thumbs&n=13');
insert into Films (title, genre, link, description, mark, director, date, img_src, actors, actors2, trailer, image, image2, img_src2) VALUES ('Prehistoric Planet', 'Documentary', 'https://www.themoviedb.org/tv/95171-prehistoric-planet', 'Experience the wonders of our world like never before in this epic docuseries from Jon Favreau and the producers of Planet Earth. Travel back 66 million years to when majestic dinosaurs and extraordinary creatures roamed the lands, seas, and skies.', 86, 'Michael Gunton', '2022-12-05', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/u7Ulem8hT8nKVPvYlTeNLoWXfvk.jpg', 'David Attenborough', '', 'https://www.themoviedb.org/video/play?key=NkGS-L_1L-I', 'https://www.themoviedb.org/t/p/w138_and_h175_face/tt3LW3XftcvxOZtMXmIaJSWFN7y.jpg', '', 'https://i1.imageban.ru/out/2022/05/23/75178a0d5c5b233cefe34db500f2d029.png');
insert into Films (title, genre, link, description, mark, director, date, img_src, actors, actors2, trailer, image, image2, img_src2) VALUES ('Last Man Down', 'Action, Thriller', 'https://www.themoviedb.org/movie/860623-last-man-down', 'After civilization succumbs to a deadly pandemic and his wife is murdered, a special forces soldier abandons his duty and becomes a hermit in the Nordic wilderness. Years later, a wounded woman appears on his doorstep.', 63, 'Fansu Njie', '2021-07-29', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/z6gKBF79tvyF9OCLhttjKsBkp1.jpg', 'Daniel Stisen', 'Olga Kent', 'https://www.themoviedb.org/video/play?key=Cs5AVa6-M6A', 'https://www.themoviedb.org/t/p/w138_and_h175_face/jhyIFfBnM5nLhHdpFiGIW6qk9x5.jpg', 'https://www.themoviedb.org/t/p/w138_and_h175_face/v64JQPCPIhz58sEyJdScK0Hqln2.jpg', 'https://avatars.mds.yandex.net/i?id=7d9ce168e85f4142dc8675a7cd1d4657-5910984-images-thumbs&n=13');
insert into Films (title, genre, link, description, mark, director, date, img_src, actors, actors2, trailer, image, image2, img_src2) VALUES ('The Shawshank Redemption', 'Drama, Crime', 'https://www.themoviedb.org/movie/278-the-shawshank-redemption', 'Framed in the 1940s for the double murder of his wife and her lover, upstanding banker Andy Dufresne begins a new life at the Shawshank prison, where he puts his accounting skills to work for an amoral warden. During his long stretch in prison, Dufresne comes to be admired by the other inmates -- including an older prisoner named Red -- for his integrity and unquenchable sense of hope.', 87, 'Frank Darabont', '1994-12-14', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/q6y0Go1tsGEsmtFryDOJo3dEmqu.jpg', 'Tim Robbins', 'Morgan Freeman', 'https://www.themoviedb.org/video/play?key=9qqfMvKxBa0', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/hsCu1JUzQQ4pl7uFxAVFLOs9yHh.jpg', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/905k0RFzH0Kd6gx8oSxRdnr6FL.jpg', 'https://avatars.mds.yandex.net/i?id=38ea28dbb219e9d0fb1c9ceb40e021d8-5477945-images-thumbs&n=13');
insert into Films (title, genre, link, description, mark, director, date, img_src, actors, actors2, trailer, image, image2, img_src2) VALUES ('The Godfather', 'Drama, Crime', 'https://www.themoviedb.org/movie/238-the-godfather', 'Spanning the years 1945 to 1955, a chronicle of the fictional Italian-American Corleone crime family. When organized crime family patriarch, Vito Corleone barely survives an attempt on his life, his youngest son, Michael steps in to take care of the would-be killers, launching a campaign of bloody revenge.', 87, 'Francis Ford Coppola', '1972-08-19', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/3bhkrj58Vtu7enYsRolD1fZdja1.jpg', 'Marlon Brando', 'James Caan', 'https://www.themoviedb.org/video/play?key=VC1_tdnZq1A', 'https://www.themoviedb.org/t/p/w138_and_h175_face/fuTEPMsBtV1zE98ujPONbKiYDc2.jpg', 'https://www.themoviedb.org/t/p/w138_and_h175_face/bGyOCCOIgcIyKjOGLoXoyp0XWHf.jpg', 'https://avatars.mds.yandex.net/i?id=2e52b05ed3d17253d889642e0cdec094-5242719-images-thumbs&n=13');

SELECT  * FROM Films;


CREATE TABLE Users(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    admin int(1) DEFAULT 0
);
    insert into Users (email, password, admin) VALUES ('admin@admin.com', 'admin', 1);

DROP TABLE Users;

SELECT * FROM Users;

SELECT * FROM Users WHERE email LIKE 'admin@admin.com';

SELECT * FROM Users;

CREATE TABLE Reviews (
    id_user int(11) NOT NULL,
    id_film int(11) NOT NULL
);

SELECT * FROM Reviews;

DROP TABLE Reviews;


CREATE TABLE Comments (
    id_user int(11) NOT NULL,
    id_film int(11) NOT NULL,
    comments TEXT NOT NULL
);

SELECT  * FROM  Comments;

DROP TABLE Comments;


CREATE TABLE AddValue(
    id_add int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id int(11) NOT NULL,
    title_add varchar(30) NOT NULL,
    genre_add varchar(50) NOT NULL ,
    date varchar(10) NOT NULL
);

SELECT  * FROM AddValue;

DROP TABLE AddValue;
