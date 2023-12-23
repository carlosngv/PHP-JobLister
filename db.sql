CREATE TABLE categories (
    id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name varchar(255) NOT NULL
);

CREATE TABLE jobs (
    id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    category_id int(11) NOT NULL,
    company varchar(255) NOT NULL,
    job_title varchar(255) NOT NULL,
    description varchar(255) NOT NULL,
    salary varchar(255) NOT NULL,
    location varchar(255) NOT NULL,
    contact_user varchar(255) NOT NULL,
    contact_email varchar(255) NOT NULL
);
