CREATE DATABASE IF NOT EXISTS f32ee;
USE f32ee;

SELECT "Dropping tables" AS MESSAGE;
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS yy_applicants;
DROP TABLE IF EXISTS yy_category;
DROP TABLE IF EXISTS yy_products;
DROP TABLE IF EXISTS yy_sales;
DROP TABLE IF EXISTS yy_positions;
DROP TABLE IF EXISTS yy_employees;
SET FOREIGN_KEY_CHECKS = 1;

SELECT "Creating new tables" AS MESSAGE;
CREATE TABLE yy_category (
    category_id INT UNSIGNED PRIMARY KEY,
    category_name VARCHAR(30),
    category_description VARCHAR(500)
);


CREATE TABLE yy_products (
    product_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(30) NOT NULL,
    product_price DOUBLE NOT NULL,
    product_category INT UNSIGNED,

    CONSTRAINT FOREIGN KEY(product_category) REFERENCES yy_category(category_id)
);

CREATE TABLE yy_sales (
    receipt_no INT UNSIGNED,
    product_id INT UNSIGNED,
    quantity INT UNSIGNED,

    CONSTRAINT FOREIGN KEY fk_sales(product_id) REFERENCES yy_products(product_id)
);


CREATE TABLE yy_applicants (
    applicant_id INT PRIMARY KEY,
    applicant_name VARCHAR(40),
    applicant_email VARCHAR(40),
    applicant_date VARCHAR(40),
    applicant_experience VARCHAR(500)
);

CREATE TABLE yy_feedback (
    feedback_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    feedback_name VARCHAR(40),
    feedback_email VARCHAR(40),
    feedback_phone VARCHAR(40),
    feedback VARCHAR(500)
);

CREATE TABLE yy_orders (
    order_id INT UNSIGNED PRIMARY KEY,
    order_date VARCHAR(30)
);

SELECT "Filling category table" AS MESSAGE;
INSERT INTO f32ee.yy_category (category_id, category_name, category_description)
    VALUES (1, "Ramen", "Delicious ramen noodles."),
    (2, "Sides", "Sides to elevate your tastebuds."),
    (3, "Drinks", "Drinks to complement the meal.");

SELECT "Filling product table" AS MESSAGE;
INSERT INTO f32ee.yy_products (product_id, product_name, product_price, product_category)
    VALUES (NULL, "Yin Yang Specialty Ramen", 18.00, 1),
    (NULL, "Miso Ramen", 16.00, 1),
    (NULL, "Karaka Ramen", 17.00, 1),
    (NULL, "Black Tonkotsu Ramen", 17.00, 1),
    (NULL, "Mazesoba Ramen", 17.00, 1),
    (NULL, "Tantanmen Ramen", 17.00, 1),
    (NULL, "Edamame", 2.00, 2),
    (NULL, "Sashimi", 8.00, 2),
    (NULL, "Chawanmushi", 5.00, 2),
    (NULL, "Takoyaki", 4.00, 2),
    (NULL, "Sushi", 13.00, 2),
    (NULL, "Gyoza", 9.00, 2),
    (NULL, "Citrus Lime Cocktail", 7.00, 3),
    (NULL, "Yuzu Fizz", 7.00, 3),
    (NULL, "Grapefruit Plum Soda", 6.00, 3),
    (NULL, "Sake", 25.00, 3),
    (NULL, "Matcha", 5.00, 3),
    (NULL, "Houjicha", 5.00, 3);


