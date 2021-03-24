CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `costPrice` int NOT NULL,
  `sellingPrice` int NOT NULL,
  `countInStock` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

INSERT INTO `products` ( `name`, `costPrice`, `sellingPrice`, `countInStock`) VALUES
( 'Milo', 20, 22, 100 ),
( 'Milk', 15, 17, 100 ),
( 'Soap', 10, 12, 100 ),
( 'Sardine', 25, 27, 100 );

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `role` varchar(50),
  `username` varchar (50),
  `password` varchar (50),
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

INSERT INTO `users` ( `fname`, `lname`, `role`, `username`, `password`) VALUES
( 'John', 'Barnes', 'admin', 'jay', '1234567' ),
( 'Kobina', 'Sagari', 'teller', 'kobby', '1234567' ),
( 'Michael', 'Quarcoe', 'teller', 'mike', '1234567' ),
( 'Anthoinette', 'Mines', 'admin', 'annie', '1234567' ),
( 'Olive', 'Mwinsegteng', 'admin', 'olive', '1234567' );