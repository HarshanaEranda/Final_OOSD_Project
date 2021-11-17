show databases;
use projectid;
create table user_details (
user_id INT not null PRIMARY KEY,
username varchar(20) not null,
email varchar(50) not null,
pwd varchar(40) not null,
u_object varchar(128) not null
);
show tables;

show tables;
select * from user_details;
alter table user_details add u_type varchar(10) not null after user_id;
create table application_details (
app_id INT not null PRIMARY KEY,
applicant_id INT not null,
apply_date DATETIME not null,
division varchar(50) not null,
FOREIGN KEY(applicant_id) references user_details(user_id),
application_object varchar(128) not null
);
create table notification_details (
n_id INT not null PRIMARY KEY,
from_id INT not null,
to_ids varchar(128) not null,
FOREIGN KEY(from_id) references user_details(user_id),
n_object varchar(128) not null
);
create table issed_id_history (
id_app_id INT not null,
issue_date DATETIME not null,
FOREIGN KEY(id_app_id) references user_details(user_id),
nic_object varchar(128) not null
);
create table recycle_bin (
application_id INT not null,
cancel_date datetime not null,
belong_division varchar(50) not null,
applicant_id INT not null,
FOREIGN KEY(application_id) references application_details(app_id),
application_object varchar(128) not null
);
alter table user_details add staff_id int after user_id;
alter table user_details add unique(staff_id );
alter table notification_details modify to_ids int;
alter table notification_details modify to_ids int not null;
ALTER TABLE notification_details Drop to_ids;
alter table notification_details add to_id int not null after from_id;
alter table user_details modify pwd char(60);
alter table user_details add unique(email);
alter table user_details add unique(username);