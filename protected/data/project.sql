CREATE USER "dbadmin"@"localhost" IDENTIFIED BY "dbpassword";
GRANT ALL ON seniordb.* TO "dbadmin"@"localhost";

CREATE DATABASE seniordb;
USE seniordb;

CREATE TABLE senior(
	id VARCHAR(64) PRIMARY KEY,

	first_name VARCHAR(64),
	middle_name VARCHAR(64),
	last_name VARCHAR(64),

	birth_date VARCHAR(64),
	birth_place VARCHAR(64),

	gender VARCHAR(64),

	house_no INT,
	street VARCHAR(64),
	barangay VARCHAR(64),

	years_of_residency INT,
	tel_no INT,

	civil_status VARCHAR(64),
	spouse_name VARCHAR(64),
	spouse_age INT,

	educ_attainment VARCHAR(64),
	work_xp VARCHAR(64),

	employed VARCHAR(64),
	position VARCHAR(64),
	monthly_salary VARCHAR(64),
	employer VARCHAR(64),
	employer_address VARCHAR(64),
	employer_tel_no INT,

	other_income VARCHAR(64),
	other_income_value INT,

	philhealth_member VARCHAR(64),
	philhealth_member_no INT,
	philhealth_dependent VARCHAR(64),
	philhealth_dependent_name VARCHAR(64)
	
	);


