CREATE TABLE `contactus`(
  `id`   INT NOT NULL AUTO_INCREMENT,
  `email` varchar(240) NOT NULL,
  `message` LONGTEXT ,
  `name`  VARCHAR(240) NOT NULL,
  `phone` VARCHAR(240) NOT NULL,
  PRIMARY KEY(`id`)
);

CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT 0,
  `mobile` bigint  Not NULL DEFAULT 0 ,
  `address` LONGTEXT,
  `college` LONGTEXT,
  `interest` LONGTEXT,
  `points` int DEFAULT  0,
  `date_of_birth` date DEFAULT '1990-10-13',
  UNIQUE (`email`),
  PRIMARY KEY (`id`)
);

CREATE TABLE `courses` (
  `id`           INT NOT NULL AUTO_INCREMENT,
  `instructor_name`         VARCHAR(240) NOT NULL,
  `course_title`  LONGTEXT NOT NULL,
  `posting_date` TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `show_from`    TIMESTAMP DEFAULT  0,
  `show_till`    TIMESTAMP DEFAULT  0,
  `last_updated` TIMESTAMP DEFAULT 0,
  `fees`      INT          NOT NULL,
  `img_url`     VARCHAR(100) NOT NULL,
  `description`  LONGTEXT NOT NULL,
  `Prerequisites`  LONGTEXT NOT NULL,
  `submittername`  LONGTEXT NOT NULL,
  `tags`  LONGTEXT NOT NULL,
  `locations`   VARCHAR(2048) NOT NULL,
  `interval_from` VARCHAR(50) DEFAULT '09:00 AM',
  `interval_till` VARCHAR(50) DEFAULT '09:00 PM',
  `points` INT DEFAULT 0,
  `type` VARCHAR(100) NOT NULL ,
  `contactnumber` VARCHAR(240) NOT NULL,
  `contactemail` VARCHAR(240) NOT NULL,
   PRIMARY KEY (`id`)
);

CREATE TABLE `orders`(
  `id`             INT NOT NULL AUTO_INCREMENT,
  `order_id`       VARCHAR(1024) NOT NULL UNIQUE,
  `user_id`        INT NOT NULL DEFAULT 999999,
  `status`         VARCHAR(40)   NOT NULL DEFAULT 'In Progress',
  `payment_status` VARCHAR(100)  NOT NULL DEFAULT 'pending',
  `payment_id`     VARCHAR(30) NOT null   DEFAULT '0',
  `mode`           VARCHAR(30)   NOT NULL DEFAULT 'Deliver',
  `browser`        VARCHAR(20) ,
  `ordered_items`  LONGTEXT NOT NULL,
  `payment_method` VARCHAR(30) NOT null,
  `date_created`    timestamp DEFAULT CURRENT_TIMESTAMP,
  `last_updated`    timestamp DEFAULT 0,
  `order_delivery_date` timestamp DEFAULT 0,
  `order_delivered_date` timestamp DEFAULT 0,
  `delivery_address`  LONGTEXT NOT NULL,
  `total`           INT DEFAULT 0,
  `location`        VARCHAR(30) NOT NULL,
  `confirmationSent`  varchar(5) DEFAULT 'false',
  `feedbackSent`      varchar(5) DEFAULT  'false',
  PRIMARY KEY (`id`)
);



INSERT INTO   `ORDERS`(order_id,user_id,status,payment_status,payment_id,mode,browser,ordered_items,payment_method,delivery_address,total) VALUES('12','1234','delivered','confirmed','12','pickup','firefox','{"cart":[{"id":"17","quantity":"2","unit_price":"50"},{"id":"22","quantity":"2","unit_price":"50"}],"total":"200"}','payu','kailash nagar, jhotwara','200');


INSERT INTO `products` (name, posting_date,  amount, img_url, description, stock_left,type) VALUES ('Paneer Bhurji',CURRENT_TIMESTAMP,100,'../images/cheese_steak.jpg','Delicious mouth watering dish to be savoured',100,'indian');
