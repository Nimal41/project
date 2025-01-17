CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    customer_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    shipping_address TEXT NOT NULL
);



CREATE TABLE user (
    username VARCHAR(15) NOT NULL PRIMARY KEY,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL
);
