CREATE TABLE `block_table`(
  `block_id` INT(11) NOT NULL,
  `block` VARCHAR(100) NOT NULL,
  `unit_id` INT(6) NOT NULL,
  `year_standing` SMALLINT(6) NOT NULL DEFAULT 1,
  `slots` SMALLINT(6) NOT NULL DEFAULT 50,
  `enlisted` SMALLINT(6) NOT NULL,
  `demand` SMALLINT(6) NOT NULL,
  `remarks` text(100),
  UNIQUE (`block`)
);

INSERT INTO block_table (block_id, blocks, unit_id, year_standing, slots, enlisted, demand, remarks)
VALUES (1, 'Block A', 101, 1, 50, 0, 30, 'Spacious classrooms');
INSERT INTO block_table (block_id, blocks, unit_id, year_standing, slots, enlisted, demand, remarks)
VALUES (2, 'Block B', 102, 2, 60, 10, 50, 'Modern facilities');
INSERT INTO block_table (block_id, blocks, unit_id, year_standing, slots, enlisted, demand, remarks)
VALUES (3, 'Block C', 103, 3, 40, 20, 25, 'Specialized labs');
INSERT INTO block_table (block_id, blocks, unit_id, year_standing, slots, enlisted, demand, remarks)
VALUES (4, 'Block D', 104, 2, 55, 5, 40, 'Accessible location');
INSERT INTO block_table (block_id, blocks, unit_id, year_standing, slots, enlisted, demand, remarks)
VALUES (5, 'Block E', 105, 1, 45, 15, 35, 'Quiet study areas');

CREATE TABLE `class_table`(
  `class_id` INT(11) NOT NULL,
  `class_Code` VARCHAR(30) NOT NULL,
  `instructor_id` INT(11) NOT NULL,
  `sy_id` INT(11)  NOT NULL,
  `ay` VARCHAR(11) NOT NULL,
  `credits` SMALLINT(6) NOT NULL,
  `slots` SMALLINT(6) NOT NULL,
  `unit_id` INT(11) NOT NULL,
  `schedule` text(500),
  `syllabus` text(255),
  `remarks` text(255),	
  PRIMARY KEY (`class_id`)
);

INSERT INTO class_table (class_id, class_Code, instructor_id, sy_id, ay, credits, slots, unit_id, schedule, syllabus, remarks)
VALUES (1, 'CS101', 201, 301, '2023-2024', 3, 40, 101, 'MWF 10:00 AM - 11:30 AM', 'Intro to Computer Science', 'Interactive lectures');
INSERT INTO class_table (class_id, class_Code, instructor_id, sy_id, ay, credits, slots, unit_id, schedule, syllabus, remarks)
VALUES (2, 'ENG201', 202, 302, '2023-2024', 4, 35, 102, 'TTH 1:00 PM - 2:30 PM', 'Advanced English Composition', 'Discussion-based sessions');
INSERT INTO class_table (class_id, class_Code, instructor_id, sy_id, ay, credits, slots, unit_id, schedule, syllabus, remarks)
VALUES (3, 'MATH301', 203, 303, '2023-2024', 3, 30, 103, 'WF 2:00 PM - 3:30 PM', 'Calculus III', 'Problem-solving emphasis');
INSERT INTO class_table (class_id, class_Code, instructor_id, sy_id, ay, credits, slots, unit_id, schedule, syllabus, remarks)
VALUES (4, 'HIST101', 204, 304, '2023-2024', 3, 25, 104, 'TTH 9:00 AM - 10:30 AM', 'World History', 'Interactive discussions');
INSERT INTO class_table (class_id, class_Code, instructor_id, sy_id, ay, credits, slots, unit_id, schedule, syllabus, remarks)
VALUES (5, 'CHEM201', 205, 305, '2023-2024', 4, 30, 105, 'MWF 1:00 PM - 2:30 PM', 'Organic Chemistry', 'Laboratory sessions included');

CREATE TABLE `class_hour_table`(
  `class_id` INT(11) NOT NULL,
  `day` SMALLINT(6) NOT NULL,
  `start` TIME NOT NULL,
  `finish` TIME  NOT NULL,
  `meeting_type` CHAR(3) NOT NULL,
  `room_id` INT(11) NOT NULL,
  FOREIGN KEY (class_id) REFERENCES class_table(class_id)
  -- FOREIGN KEY (room_id) REFERENCES Persons(room_id) di ko pa malagay 
);

INSERT INTO class_hour_table (class_id, day, start, finish, meeting_type, room_id)
VALUES (1, 1, '10:00:00', '11:30:00', 'LEC', 401);
INSERT INTO class_hour_table (class_id, day, start, finish, meeting_type, room_id)
VALUES (2, 2, '13:00:00', '14:30:00', 'LEC', 402);
INSERT INTO class_hour_table (class_id, day, start, finish, meeting_type, room_id)
VALUES (3, 3, '14:00:00', '15:30:00', 'LEC', 403);
INSERT INTO class_hour_table (class_id, day, start, finish, meeting_type, room_id)
VALUES (4, 4, '09:00:00', '10:30:00', 'LEC', 404);
INSERT INTO class_hour_table (class_id, day, start, finish, meeting_type, room_id)
VALUES (5, 5, '13:00:00', '14:30:00', 'LEC', 405);

CREATE TABLE `program_table`(
  `program_id` INT(11) NOT NULL,
  `unit_id` INT(11),
  `program`VARCHAR(20) NOT NULL,
  `program_title`VARCHAR(200) NOT NULL,
  `revision_year` SMALLINT(6),
  `degree`VARCHAR(4),
  `major`VARCHAR(14),
  `degree_level`CHAR(1) NOT NULL,
  `years` SMALLINT(6),
  `credits` SMALLINT(6),
  `remarks` VARCHAR(255),
  `activate` TINYINT(1),
  UNIQUE (unit_id, revision_year, degree, major) ,
  PRIMARY KEY (program_id)
);

INSERT INTO program_table (program_id, unit_id, program, program_title, revision_year, degree, major, degree_level, years, credits, remarks, activate)
VALUES (1, 101, 'CS', 'Computer Science', 2022, 'BSC', 'General', 'U', 4, 120, 'Focus on algorithms and programming', 1);
INSERT INTO program_table (program_id, unit_id, program, program_title, revision_year, degree, major, degree_level, years, credits, remarks, activate)
VALUES (2, 102, 'ENG', 'English Literature', 2021, 'BA', 'Literature', 'U', 3, 90, 'Emphasis on classic literature', 1);
INSERT INTO program_table (program_id, unit_id, program, program_title, revision_year, degree, major, degree_level, years, credits, remarks, activate)
VALUES (3, 103, 'MATH', 'Mathematics', 2023, 'BSC', 'Pure Mathematics', 'U', 4, 130, 'Advanced courses in abstract algebra', 1);
INSERT INTO program_table (program_id, unit_id, program, program_title, revision_year, degree, major, degree_level, years, credits, remarks, activate)
VALUES (4, 104, 'HIST', 'History', 2020, 'BA', 'World History', 'U', 3, 95, 'Global historical perspectives', 1);
INSERT INTO program_table (program_id, unit_id, program, program_title, revision_year, degree, major, degree_level, years, credits, remarks, activate)
VALUES (5, 105, 'CHEM', 'Chemistry', 2022, 'BSC', 'Organic Chemistry', 'U', 4, 125, 'Laboratory-intensive program', 1);

CREATE TABLE `block_program_table`(
  `block_id` int(11),
  `program_id` int(11) 
  -- di ko maforeign key tong dalawa
);

INSERT INTO block_program_table (block_id, program_id) VALUES (1, 101);
INSERT INTO block_program_table (block_id, program_id) VALUES (2, 102);
INSERT INTO block_program_table (block_id, program_id) VALUES (3, 103);
INSERT INTO block_program_table (block_id, program_id) VALUES (4, 104);
INSERT INTO block_program_table (block_id, program_id) VALUES (5, 105);

CREATE TABLE `class_list_table`(
  `student_id` INT(11) NOT NULL,
  `class_id` INT(11) NOT NULL,
  `team_status` TINYINT(4) NOT NULL,
  `withdrawn` TINYINT(4) NOT NULL,
  `awol` TINYINT(4) NOT NULL,
  FOREIGN KEY (`class_id`) REFERENCES `class_table`(`class_id`),
  UNIQUE (`student_id`, `class_id`)
);

INSERT INTO class_list_table (student_id, class_id, team_status, withdrawn, awol) VALUES (101, 1, 0, 0, 0);
INSERT INTO class_list_table (student_id, class_id, team_status, withdrawn, awol) VALUES (102, 2, 1, 0, 0);
INSERT INTO class_list_table (student_id, class_id, team_status, withdrawn, awol) VALUES (103, 3, 0, 1, 0);
INSERT INTO class_list_table (student_id, class_id, team_status, withdrawn, awol) VALUES (104, 4, 1, 0, 1);
INSERT INTO class_list_table (student_id, class_id, team_status, withdrawn, awol) VALUES (105, 5, 0, 1, 0);

CREATE TABLE `block_classes_table` (
  `block_id` INT(11) NOT NULL,
  `class_id` INT(11) NOT NULL,
  `rrank` INT(6) NOT NULL DEFAULT 1,
  -- FOREIGN KEY (`block_id`) REFERENCES `block_table`(`block_id`), di ko maforeign key kasi naka unique yung block_id 
  FOREIGN KEY (`class_id`) REFERENCES `class_table`(`class_id`)
);

-- ginawa kong rrank kasi function ata yung rank
INSERT INTO block_classes_table (block_id, class_id, rrank) VALUES (1, 101, 1);
INSERT INTO block_classes_table (block_id, class_id, rrank) VALUES (2, 102, 1);
INSERT INTO block_classes_table (block_id, class_id, rrank) VALUES (3, 103, 1);
INSERT INTO block_classes_table (block_id, class_id, rrank) VALUES (4, 104, 1);
INSERT INTO block_classes_table (block_id, class_id, rrank) VALUES (5, 105, 1);

