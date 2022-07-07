INSERT INTO
    `users` (
        `id`,
        `nom`,
        `prenom`,
        `date_naissance`,
        `email`,
        `password`
    )
VALUES (
        NULL,
        'hemami',
        'maryam',
        '2022-05-07',
        'maryam@gmail.com',
        '123456'
    );

UPDATE `users` SET `nom` = 'aazize' WHERE `id` = 1;

DELETE FROM `users` WHERE `id` = 1 mysql -u root -p show databases;

CREATE DATABASE SAMSUNG;

use samsung;

CREATE DATABASE samsung;

SELECT * FROM users;