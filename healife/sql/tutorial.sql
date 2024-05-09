CREATE TABLE users(
    Id int PRIMARY KEY AUTO_INCREMENT,
    Username varchar(200) NOT NULL,
    Email varchar(200) NOT NULL,
    Age int NOT NULL,
    Password varchar(200) NOT NULL
);

CREATE TABLE `health_index` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `User_id` int NOT NULL,
  `Type_index` varchar(256) NOT NULL,
  `Value_index` double NOT NULL
);