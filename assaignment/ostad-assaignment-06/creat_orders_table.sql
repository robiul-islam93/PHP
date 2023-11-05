CREATE TABLE Orders (
    `order_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `customer_id` BIGINT(20) UNSIGNED NOT NULL,
    `order_date` DATE NOT NULL,
    `total_amount` DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES Customers(id)
)
