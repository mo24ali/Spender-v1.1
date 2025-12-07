DROP DATABASE IF EXISTS smart_wallet;

CREATE DATABASE smart_wallet;

USE smart_wallet;

drop table income;
drop table expense;
CREATE TABLE users (
    userId INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    join_date DATE DEFAULT (CURRENT_DATE)
);

CREATE TABLE expense (
    expenseId INT PRIMARY KEY AUTO_INCREMENT,
    expenseTitle VARCHAR(50) NOT NULL,
    description TEXT,
    user_id INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    dueDate DATE,
    state VARCHAR(20) DEFAULT 'not paid',
    CONSTRAINT fk_expense_user FOREIGN KEY (user_id) REFERENCES users(userId)
);

CREATE TABLE income (
    incomeId INT PRIMARY KEY AUTO_INCREMENT,
    incomeTitle VARCHAR(50) NOT NULL,
    description TEXT,
    user_id INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    getIncomeDate DATE,
    CONSTRAINT fk_income_user FOREIGN KEY (user_id) REFERENCES users(userId)
);


INSERT INTO
    expense (expenseTitle, description, price, dueDate)
VALUES
    (
        'Groceries',
        'Weekly food shopping',
        450.75,
        '2025-12-02'
    ),
    (
        'Electricity Bill',
        'Monthly electricity payment',
        320.00,
        '2025-12-05'
    ),
    (
        'Transport',
        'Bus and taxi fares',
        120.50,
        '2025-12-01'
    ),
    (
        'Internet',
        'Home WiFi plan',
        249.99,
        '2025-12-07'
    );

INSERT INTO
    income (incomeTitle, description, price, getIncomeDate)
VALUES
    (
        'Salary',
        'Monthly salary payment',
        7500.00,
        '2025-12-01'
    ),
    (
        'Freelancing',
        'Web development project',
        2300.50,
        '2025-12-03'
    ),
    (
        'Scholarship',
        'Student grant',
        1000.00,
        '2025-12-10'
    );

select
    *
from
    income;

select
    *
from
    expense;

alter table expense
add state varchar(10);

update expense
set
    state = 'not payed';