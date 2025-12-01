DROP DATABASE IF EXISTS spender;
CREATE DATABASE spender;
USE spender;

CREATE TABLE expense(
    expenseId INT NOT NULL AUTO_INCREMENT,
    expenseTitle VARCHAR(50) NOT NULL,
    description TEXT,
    price DECIMAL(10,2),
    dueDate DATE,
    PRIMARY KEY(expenseId)
);

CREATE TABLE income(
    incomeId INT NOT NULL AUTO_INCREMENT,
    incomeTitle VARCHAR(50) NOT NULL,
    description TEXT,
    price DECIMAL(10,2),
    getIncomeDate DATE,
    PRIMARY KEY(incomeId)
);

CREATE TABLE user(
    userId INT NOT NULL AUTO_INCREMENT,
    username TEXT,
    password 
    email varchar(20),

)

    INSERT INTO expense (expenseTitle, description, price, dueDate) VALUES
    ('Groceries', 'Weekly food shopping', 450.75, '2025-12-02'),
    ('Electricity Bill', 'Monthly electricity payment', 320.00, '2025-12-05'),
    ('Transport', 'Bus and taxi fares', 120.50, '2025-12-01'),
    ('Internet', 'Home WiFi plan', 249.99, '2025-12-07');

INSERT INTO income (incomeTitle, description, price, getIncomeDate) VALUES
('Salary', 'Monthly salary payment', 7500.00, '2025-12-01'),
('Freelancing', 'Web development project', 2300.50, '2025-12-03'),
('Scholarship', 'Student grant', 1000.00, '2025-12-10');
