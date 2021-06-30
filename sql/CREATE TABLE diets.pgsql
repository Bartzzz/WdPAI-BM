CREATE TABLE diets
(
   id INT NOT NULL PRIMARY KEY,
   userId INT,
   target VARCHAR(255) NOT NULL,
   calories INT NOT NULL,
   protein INT NOT NULL,
   fat INT NOT NULL,
   carbs INT NOT NULL
)
