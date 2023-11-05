CREATE TABLE Products (
    `product_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL,
    `description` TEXT,
    `category_id` bigint(20) UNSIGNED NOT NULL,
    `price` DECIMAL(10, 2) NOT NULL
    FOREIGN KEY (category_id) REFERENCES Categories(category_id)
)