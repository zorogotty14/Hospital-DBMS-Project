CREATE TABLE patient(
	Pat_id varchar(10) NOT NULL ,
	name varchar(30) NOT NULL,
	DOB date,
	gender varchar(10),
	age int,
	phno int,
	address varchar(50),
	PRIMARY KEY(Pat_id)
);

CREATE TABLE Doctor(
	Doc_name varchar(30) NOT NULL,
	Doc_id varchar(10) NOT NULL,
	gender varchar(10),
	specialization varchar(20),
	 PRIMARY KEY(Doc_id)

);

CREATE TABLE login(
	username varchar(20) NOT NULL UNIQUE,
	password varchar(20)
);

CREATE TABLE appoinment(
	appno int NOT NULL,
	Pat_id varchar(10) NOT NULL,
	Doctor varchar(30),
	prob varchar(20),
	dat date,
	INDEX pat_ind1(Pat_id),
	FOREIGN KEY (Pat_id) REFERENCES patient(Pat_id)
		ON DELETE CASCADE ON UPDATE CASCADE

);

CREATE TABLE bill(
	bill_no varchar(10) NOT NULL PRIMARY KEY,
	patient_id varchar(10) NOT NULL,
	amount int,
	status varchar(10),
	INDEX pat_ind2(patient_id),
	FOREIGN KEY (patient_id) REFERENCES patient(Pat_id)
		ON DELETE CASCADE ON UPDATE CASCADE

);

CREATE TABLE reservation(
	Res_no varchar(10) NOT NULL UNIQUE,
	room_no varchar(10) NOT NULL,
	Pat_id varchar(10) NOT NULL,
	indate date,outdate date,
	INDEX ind1(Pat_id),
	INDEX ind2(room_no),
	FOREIGN KEY (Pat_id) REFERENCES patient(Pat_id)
		ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (room_no) REFERENCES room(room_no)
		ON DELETE CASCADE ON UPDATE CASCADE

);

INSERT INTO `patient` (`Pat_id`, `name`, `DOB`, `gender`, `age`, `phno`, `address`) VALUES
('P01', 'Arpit', '1998-11-20', 'male', 19, 12345678, 'PES Boys Hostel\r\nBanglore.'),
('P02', 'Ashish', '1998-04-06', 'male', 20, 4567893, 'PES Boys hostel Banglore'),
('P03', 'Gautham', '1998-06-25', 'male', 20, 14545242, 'JP Nagar Banglore'),
('P04', 'Dev', '1997-10-29', 'male', 21, 2147483647, 'PES BOYS HOSTEL BANGLORE'),
('P05', 'Anudeep Joshi', '2018-04-04', 'male', 19, 45345348, 'PES Boys Hostel'),
('P06', 'Rohith S', '2004-11-16', 'male', 15, 13456343, 'John Street, banglore'),
('P07', 'Chetan', '1997-07-25', 'male', 21, 45342231, 'PES Boys Hostel'),
('P08', 'Sharath', '1998-08-27', 'male', 20, 64564534, 'Laxminagar 3rd cross road,Banglore.'),
('P09', 'Faizan', '1998-06-03', 'male', 21, 524464642, '100 ft ring road hosakerehalli'),
('P10', 'Priya', '1997-02-12', 'female', 21, 11123123, 'Banashankri Stage 3,Banglore'),
('P11', 'Betty', '1993-01-29', 'female', 26, 78245424, 'james street, Mysore'),
('P13', 'Emma', '1992-04-15', 'female', 27, 851818528, 'James street, manglore');


INSERT INTO `Doctor` (`Doc_name`, `Doc_id`, `gender`, `specialization`) VALUES
('Dr Connors', 'D01', 'Male', 'Cardiologist'),
('Dr Specter', 'D02', 'Male', 'Dermatologist'),
('Dr Ross', 'D03', 'Female', 'Neurologist'),
('Dr Jenner', 'D04', 'Female', 'Pediatrician'),
('Dr Murphy', 'D05', 'Male', 'Oncologist'),
('Dr Pearson', 'D06', 'Female', 'Gynecologist'),
('Dr Hardman', 'D07', 'Male', 'Cardiologist'),
('Dr Annie Fletcher', 'D08', 'Female', 'Orthodontist'),
('Dr Walker', 'D09', 'Male', 'Cardiologist'),
('Dr Jane', 'D10', 'Female', 'Gynaecologist'),
('Dr James', 'D11', 'Male', 'Radiologist'),
('Dr Hardy', 'D12', 'Male', 'Neurologist'),
('Dr Mariah Lopez', 'D13', 'Female', 'Dermatologist'),
('Dr Scott Bradley', 'D14', 'Male', 'Enzymologist'),
('Dr Eva Hillard', 'D15', 'Female', 'Nephrologist'),
('Dr Emma Frost', 'D16', 'Female', 'Pediatrician'),
('Dr Anderson', 'D17', 'Male', 'Oncologist'),
('Dr Zing Mao', 'D18', 'Male', 'Oncologist'),
('Dr Phill Haydon', 'D19', 'Male', 'Oncologist'),
('Dr Sharon Bell', 'D20', 'Female', 'Opthamologist'),
('Dr Tilda Law', 'D21', 'Female', 'Psychologist'),
('Dr Jason Hart', 'D22', 'Male', 'Enzymologist'),
('Dr Michelle Woods', 'D23', 'Female', 'Orthodontist'),
('Dr Peter Huges', 'D24', 'Male', 'Neurologist'),
('Dr Andrew Fulher', 'D25', 'Male', 'Radiologist');

INSERT INTO `appoinment` (`appno`, `Pat_id`, `Doctor`, `prob`, `dat`) VALUES
(1, 'P07', 'Dr Connors', 'Cardiac Arrest', '2018-04-27'),
(2, 'P10', 'Dr Emma Frost', 'fever', '2018-06-14'),
(3, 'P05', 'Dr Jenner', 'Cold', '2018-04-28'),
(4, 'P09', 'Dr Peter Huges', 'Brain Tumor', '2018-07-19'),
(5, 'P02', 'Dr Eva Hillard', 'Kidney Stone', '2018-05-14'),
(7, 'P03', 'Dr Specter', 'Albinism', '2018-05-01'),
(8, 'P11', 'Dr Jane', 'Endometriosis', '2018-05-15'),
(9, 'P08', 'Dr Zing Mao', 'Leukemia', '2018-04-28');

INSERT INTO `bill` (`bill_no`, `patient_id`, `amount`, `status`) VALUES
('B03', 'P10', 500, 'Paid'),
('B02', 'P07', 5000, 'Paid');
