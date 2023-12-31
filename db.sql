--SQLite
CREATE TABLE
    IF NOT EXISTS utilisateur (
        id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
        email VARCHAR NOT NULL,
        name VARCHAR(30),
        age SMALLINT
    );

INSERT INTO
    utilisateur (email, name, age)
VALUES
    ("toto@gmail.com", "Simon", 48),
    ("titi@gmail.com", "Maxime", 48),
    ("tutu@gmail.com", "Laurent", 48);