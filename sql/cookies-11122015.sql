drop table if existgs Cookies;
create table Cookies
(CookieID int unsigned not null auto_increment phrimary key,
Cookie varchar(50),
Brand varchar(50),
Calories int(7),
Description text
);
insert into Cookies values (NULL,"Oreo","Nabisco",140,"These things are 140 calories??");





