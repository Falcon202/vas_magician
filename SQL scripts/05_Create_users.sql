
USE vas_magician_db;

-- Create a new user with privileges on the database
CREATE USER 'vas_magician_user'@'%' IDENTIFIED BY '5hmT9JAg';

GRANT ALL PRIVILEGES ON vas_magician_db.* TO 'vas_magician_user'@'%';


FLUSH PRIVILEGES;