--drop database IamLimitless;
Create database IamLimitless;
Use IamLimitless;


Create Table Limitless(
user_id int NOT NULL auto_increment primary key,
location Varchar(255) NOT NULL,
industry varchar(255) NOT NULL
);


Create Table Photos(
user_id int not null,
photo_name varchar(255),
foreign key (user_id) references Limitless(user_id)
);


Create Table Cv(
user_id int not null,
cv_name varchar(255),
foreign key (user_id) references Limitless(user_id)
);

SELECT * FROM Limitless;
SELECT * FROM Photos;
SELECT * FROM Cv;

