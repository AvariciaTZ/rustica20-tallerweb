create database Banner

create table banner (
  id int primary key,
  bnr1 varchar(100),
  bnr2 varchar(100),
  bnr3 varchar(100)  
)


insert into banner(id,bnr1,bnr2,bnr3) values (1,'img/img__banner/2.jpg','img/img__banner/0.jpg','img/img__banner/1.jpg');
insert into banner(id,bnr1,bnr2,bnr3) values (2,'img/2.jpg','img/0.jpg','img/1.jpg');


select*from banner
