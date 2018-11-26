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
