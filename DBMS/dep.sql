CREATE TABLE department(
	Dep varchar(30) NOT NULL ,
	Chief varchar(30) NOT NULL,
	PRIMARY KEY (Dep)

);
INSERT INTO department(Dep,Chief) VALUES ("Cardiologist","Dr Walker");
INSERT INTO department(Dep,Chief) VALUES ("Oncologist","Dr Phill Haydon");
INSERT INTO department(Dep,Chief) VALUES ("Neurologist","Dr Peter Huges");
CREATE TABLE Listofdocs(Dep varchar(30),dname varchar(40) NOT NULL,INDEX doc1(Dep),FOREIGN KEY (Dep) REFERENCES department(Dep) ON DELETE CASCADE ON UPDATE CASCADE);
INSERT INTO Listofdocs VALUES 
("Cardiologist",'Dr Connors'),
("Cardiologist",'Dr Hardman'),
("Cardiologist",'Dr Walker');
INSERT INTO Listofdocs VALUES 
("Oncologist",'Dr Murphy'),
("Oncologist",'Dr Anderson'),
("Oncologist",'Dr Zing Mao'),
("Oncologist",'Dr Phill Haydon');
INSERT INTO Listofdocs VALUES 
("Neurologist",'Dr Peter Huges'),
("Neurologist",'Dr Ross'),
("Neurologist",'Dr Hardy');
INSERT INTO department(Dep,Chief) VALUES ("Nephrologist","Dr Eva Hillard");
INSERT INTO department(Dep,Chief) VALUES ("Gynaecologist","Dr Jennifer Garner");
INSERT INTO department(Dep,Chief) VALUES ("Pediatrician","Dr Emma Frost");

INSERT INTO Listofdocs VALUES 
("Nephrologist",'Dr Eva Hillard'),
("Nephrologist",'Dr May Liu');
INSERT INTO Listofdocs VALUES 
("Gynaecologist",'Dr Jennifer Garner'),
("Gynaecologist",'Dr Jane');
INSERT INTO Listofdocs VALUES 
("Pediatrician",'Dr Emma Frost'),
("Pediatrician",'Dr Jenner');
INSERT INTO department(Dep,Chief) VALUES ("Radiologist","Dr Andrew Fulher");
INSERT INTO department(Dep,Chief) VALUES ("Enzymologist","Dr Scott Bradley");
INSERT INTO department(Dep,Chief) VALUES ("Psychologist","Dr Peter Pascal");

INSERT INTO Listofdocs VALUES 
("Radiologist",'Dr Andrew Fulher'),
("Radiologist",'Dr James');
INSERT INTO Listofdocs VALUES 
("Enzymologist",'Dr Scott Bradley'),
("Enzymologist",'Dr Jason Hart');
INSERT INTO Listofdocs VALUES 
("Psychologist",'Dr Peter Pascal'),
("Psychologist",'Dr Tilda Law');
INSERT INTO department(Dep,Chief) VALUES ("Orthodontist","Dr Michelle Woods");
INSERT INTO department(Dep,Chief) VALUES ("Dermatologist","Dr Mariah Lopez");
INSERT INTO department(Dep,Chief) VALUES ("Opthamologist","Dr Sharon Bell");

INSERT INTO Listofdocs VALUES 
("Orthodontist",'Dr Annie Fletcher'),
("Orthodontist",'Dr Michelle Woods'),
("Orthodontist",'Dr Arnold Schumacer');
INSERT INTO Listofdocs VALUES 
("Dermatologist",'Dr Mariah Lopez'),
("Dermatologist",'Dr Matt Holdon'),
("Dermatologist",'Dr Specter');
INSERT INTO Listofdocs VALUES 
("Opthamologist",'Colin Fletcher'),
("Opthamologist",'Dr Sharon Bell');