DROP DATABASE IF EXISTS food_assistance;

CREATE DATABASE food_assistance;
USE food_assistance;

CREATE TABLE Beneficiary (
  beneficiary_id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NULL,
  CNIC VARCHAR(15) NOT NULL UNIQUE,
  phone_number VARCHAR(15) NOT NULL UNIQUE,
  email VARCHAR(100) NULL UNIQUE,
  address VARCHAR(200) NOT NULL,
  job VARCHAR(100),
  company VARCHAR(100),
  city VARCHAR(100),
  salary INT
);

CREATE TABLE Volunteer (
  volunteer_id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NULL,
  CNIC VARCHAR(15) NOT NULL UNIQUE,
  phone_number VARCHAR(15) NOT NULL UNIQUE,
  email VARCHAR(100) NULL UNIQUE,
  address VARCHAR(200) NOT NULL,
  job VARCHAR(100),
  company VARCHAR(100),
  city VARCHAR(100),
  availability INT
);

CREATE TABLE NGO (
  NGO_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  contact VARCHAR(15) NOT NULL UNIQUE,
  address VARCHAR(200) NOT NULL
);

CREATE TABLE Food (
  food_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  category VARCHAR(200) NOT NULL,
  quantity INT NOT NULL,
  NGO_id INT NOT NULL
);

CREATE TABLE Feedback (
  feedback_id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NULL,
  phone_number VARCHAR(15) NULL,
  email VARCHAR(100) NULL UNIQUE,
  comments TEXT NOT NULL
);

CREATE TABLE User (
  email VARCHAR(100) NOT NULL PRIMARY KEY,
  password VARCHAR(100) NOT NULL,
  role ENUM('beneficiary', 'volunteer') NOT NULL
);

ALTER TABLE Food
ADD FOREIGN KEY (NGO_id) REFERENCES NGO(NGO_id);

INSERT INTO NGO (name, contact, address) VALUES
('Edhi Foundation', '111-111-111', 'Karachi, Pakistan'),
('Shaukat Khanum Memorial Cancer Hospital', '0800-11555', 'Lahore, Pakistan'),
('SOS Children Villages Pakistan', '0800-76776', 'Islamabad, Pakistan'),
('Aman Foundation', '021-111-11-AMAN', 'Karachi, Pakistan'),
('LRBT', '0800-111-56', 'Rawalpindi, Pakistan'),
('The Citizens Foundation', '021-111-823-823', 'Karachi, Pakistan'),
('Child Protection and Welfare Bureau', '1121', 'Lahore, Pakistan'),
('Bait-ul-Mal', '0800-22625', 'Islamabad, Pakistan'),
('Saylani Welfare Trust', '021-111-729-526', 'Karachi, Pakistan'),
('Sahara Foundation', '042-35841481', 'Lahore, Pakistan'),
('Tahreek-e-Insaf Foundation', '051-8485566', 'Islamabad, Pakistan'),
('Pakistan Sweet Home Foundation', '051-4862869', 'Islamabad, Pakistan'),
('Zindagi Trust', '021-35830637', 'Karachi, Pakistan'),
('Pakistan Red Crescent Society', '051-9250367', 'Islamabad, Pakistan'),
('Kashf Foundation', '042-111-222-123', 'Lahore, Pakistan'),
('Akhuwat Foundation', '042-111-448-464', 'Lahore, Pakistan'),
('Rozan', '051-2262834', 'Islamabad, Pakistan'),
('Sunehra Karobar', '0313-7100861', 'Peshawar, Pakistan'),
('Khyber Pakhtunkhwa Relief Fund', '091-9211153', 'Peshawar, Pakistan'),
('Human Development Foundation', '021-35380200', 'Karachi, Pakistan');

INSERT INTO Beneficiary (first_name, last_name, CNIC, phone_number, email, address, job, company, city, salary) VALUES 
('Ali', 'Khan', '12345-6789012-3', '03451234567', 'ali.khan@gmail.com', '123 Main St', 'Engineer', 'ABC Company', 'Islamabad', 50000),
('Ahmed', 'Hussain', '2345678901235', '03121234567', 'ahmed.hussain@gmail.com', '456 Market St', 'Accountant', 'XYZ Corporation', 'Karachi', 60000),
('Saima', 'Nawaz', '3456789012322', '03331234567', 'saima.nawaz@gmail.com', '789 Park Rd', 'Doctor', 'Medicare Hospital', 'Islamabad',80000),
('Imran', 'Akram', '4567890123456', '03211234567', 'imran.akram@gmail.com', '12-A Canal View', 'Teacher', 'The Educators','Karachi', 40000),
('Sadia', 'Saeed', '5678901234567', '03001234567', 'sadia.saeed@gmail.com', '34-B F-10/2', 'Lawyer', 'Saeed Law Associates', 'Islamabad',70000),
('Farhan', 'Ali', '6789012345678', '03251234567', 'farhan.ali@gmail.com', '56-C Johar Town', 'Businessman', 'Ali Enterprises','Islamabad', 100000),
('Hira', 'Khan', '7890123456789', '03321234567', 'hira.khan@gmail.com', '78-D Model Town', 'Software Engineer', 'TechSoft','Islamabad', 90000),
('Nadia', 'Akram', '8901234567890', '03221234587', 'nadia.akram@gmail.com', '90-G G-10/3', 'Professor', 'NUST', 'Islamabad',120000),
('Umar', 'Siddique', '9012345678901', '03241234567', 'umar.siddique@gmail.com', '123-A Canal Road', 'Marketing Executive', 'Nestle','Karachi', 75000),
('Tariq', 'Aziz', '0123456789012', '03441234567', 'tariq.aziz@gmail.com', '34-G F-8/2', 'Accountant', 'ABC Corporation','Islamabad', 60000),
('Maryam', 'Khan', '2345678901239', '03231234567', 'maryam.khan@gmail.com', '45-B Shalimar Link Rd', 'Doctor', 'Shalimar Hospital','Islamabad', 80000),
('Abdul', 'Rafay', '3456789012345', '03111234567', 'abdul.rafay@gmail.com', '67-F G-9/4', 'Engineer', 'DEF Company','Islamabad', 50000),
('Sara', 'Ahmed', '4567890123433', '03341234569', 'sara.ahmed@gmail.com', '89-H, Model Town', NULL, NULL, 'Islamabad',20000),
('Usman', 'Khan', '1234567890123', '03001234767', 'usman.khan@gmail.com', 'House No. 123, Street No. 5, G-7/2', 'Software Engineer', 'ABC Company','Islamabad', 80000),
('Fatima', 'Zahra', '9876543210123', '03341234567', 'fatima.zahra@gmail.com', 'Flat No. 12, Building No. 5, F-8/4', 'Doctor', 'XYZ Hospital','Karachi', 120000),
('Ali', 'Raza', '7890123456799', '03221234567', 'ali.raza@gmail.com', '18-A, Main Boulevard, Gulberg', 'Teacher', 'City School','Karachi', 50000),
('Zainab', 'Ali', '3456789012349', '03451234577', 'zainab.ali@gmail.com', 'House No. 10, Street No. 3, E-11/2', 'Student', 'NUST','Islamabad', 50000),
('Nadeem', 'Ahmed', '4567812345678', '03331234568', 'nadeem.ahmed@gmail.com', '15-B, Main Boulevard, DHA', 'Businessman', 'ABC Trading', 'Lahore',200000),
('Saima', 'Khan', '1234509876543', '03001234568', 'saima.khan@gmail.com', 'Flat No. 7, Building No. 2, Clifton', 'Fashion Designer', 'Fashion House','Islamabad', 60000),
('Ayesha', 'Shahid', '0123456789123', '03331234569', 'ayesha.shahid@gmail.com', 'House No. 12, Street No. 8, F-10/3', 'Engineer', 'DEF Company', 'Lahore',100000),
('Hamza', 'Ali', '3456789123456', '03221234568', 'hamza.ali@gmail.com', 'Flat No. 4, Building No. 10, G-9/3', 'Lecturer', 'NUML', 'Lahore', 70000),
('Hassan', 'Raza', '2345678901244', '03451234568', 'hassan.raza@gmail.com', 'House No. 7, Street No. 6, Gulshan-e-Iqbal', 'Accountant', 'XYZ Corporation', 'Lahore', 80000),
('Sadia', 'Ahmed', '0987654321012', '03331234570', 'sadia.ahmed@gmail.com', 'Flat No. 2, Building No. 3, F-6/1', 'Teacher', 'The City School','Islamabad', 55000),
('Tariq', 'Khan', '7654321098765', '03001234569', 'tariq.khan@gmail.com', 'Flat No. 5, Building No. 7, E-11/3', 'Student', 'FAST-NU','Islamabad', 45000),
('Farida', 'Nasir', '2345678901234', '03331234571', 'farida.nasir@gmail.com', 'House No. 3, Street No. 2, Sector F-7', 'Businesswoman', 'PQR Trading','Islamabad', 150000);

INSERT INTO Volunteer (first_name, last_name, CNIC, phone_number, email, address, job, company, city, availability) VALUES
('Ali', 'Ahmed', '4310112345678', '03001233567', 'ali.ahmed@gmail.com', '123 Main St', 'Teacher', 'ABC School', 'Karachi', '123'),
('Aisha', 'Khan', '4220123456789', '03332345678', 'aisha.khan@gmail.com', '456 2nd St', 'Engineer', 'XYZ Company', 'Lahore','235'),
('Ahmed', 'Siddiqui', '4230134567890', '03123456789', 'ahmed.siddiqui@gmail.com', '789 Broadway', 'Doctor', 'ABC Hospital', 'Islamabad', '345'),
('Fatima', 'Ali', '4240145678901', '03214567890', 'fatima.ali@gmail.com', '456 Market St', 'Designer', 'ABC Design', 'Karachi','134'),
('Hassan', 'Khan', '4250156789012', '03345678901', 'hassan.khan@gmail.com', '789 Main St', 'Accountant', 'XYZ Accounting', 'Rawalpindi','245'),
('Hina', 'Zaidi', '4260167890123', '03136789012', 'hina.zaidi@gmail.com', '123 Broadway', 'Writer', 'XYZ News', 'Karachi','1235'),
('Imran', 'Hussain', '4270178901234', '03227890123', 'imran.hussain@gmail.com', '456 Market St', 'Engineer', 'ABC Company','Lahore', '456'),
('Jahanzaib', 'Khan', '4280189012345', '03358901234', 'jahanzaib.khan@gmail.com', '789 Main St', 'Lawyer', 'XYZ Law', 'Islamabad','235'),
('Kiran', 'Saeed', '4290190123456', '03149012345', 'kiran.saeed@gmail.com', '123 Broadway', 'Teacher', 'ABC School', 'Karachi','1234'),
('Muneeb', 'Ahmed', '4210212345678', '03111234567', 'muneeb.ahmed@gmail.com', '456 Market St', 'Doctor', 'ABC Hospital', 'Lahore','1245'),
('Nadia', 'Khan', '4220223456789', '03322345678', 'nadia.khan@gmail.com', '789 Main St', 'Engineer', 'XYZ Company', 'Rawalpindi','345'),
('Nasir', 'Ali', '4230234567890', '03113456789', 'nasir.ali@gmail.com', '123 Broadway', 'Accountant', 'ABC Accounting','Karachi', '123'),
('Rabia', 'Khan', '4240245678901', '03204567890', 'rabia.khan@gmail.com', '456 Market St', 'Software Engineer', 'ABC Company', 'Lahore',135),
('Ali', 'Ahmed', '4210112345678', '03001234567', 'ah.ali@gmail.com', '123 Model Town', 'Doctor', 'XYZ Hospital','Karachi', 246),
('Sana', 'Nasir', '3540265432109', '03126543210', 'sana.nasir@gmail.com', '789 Gulberg', 'Teacher', 'DEF School', 'Islamabad',347),
('Faisal', 'Khalid', '3520198765432', '03219876543', 'faisal.khalid@gmail.com', '23-A Satellite Town', 'Engineer', 'GHI Company','Rawalpindi', 246),
('Maria', 'Khan', '3610145678901', '03334567890', 'maria.khan@gmail.com', '456 Park View', 'Writer', 'JKL Publishers', 'Lahore',135),
('Ahmed', 'Ali', '3520212345678', '03011234567', 'ahmed.ali@gmail.com', '789 Defence', 'Artist', 'MNO Studio','Karachi', 12345),
('Farhan', 'Khan', '3740598765432', '03339876543', 'farhan.khan@gmail.com', '23-B F-7', 'Designer', 'PQR Firm', 'Islamabad',456);

INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Rice', 'Grains', 100, 1);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Wheat flour', 'Grains', 75, 2);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Lentils', 'Protein', 50, 3);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Cooking oil', 'Oil', 40, 4);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Sugar', 'Sweetener', 60, 5);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Tea', 'Beverage', 25, 6);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Milk', 'Dairy', 30, 7);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Eggs', 'Protein', 20, 8);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Tomatoes', 'Vegetables', 35, 9);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Potatoes', 'Vegetables', 45, 10);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Onions', 'Vegetables', 50, 11);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Garlic', 'Vegetables', 20, 12);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Ginger', 'Vegetables', 15, 13);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Chickpeas', 'Protein', 30, 14);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Green chilies', 'Vegetables', 25, 15);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Red chilies', 'Spices', 20, 16);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Salt', 'Seasoning', 30, 17);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Yogurt', 'Dairy', 25, 18);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Bread', 'Grains', 50, 19);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Fish', 'Protein', 15, 20);

INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES ('Ali', 'Khan', '03211234567', 'ali.khan@gmail.com', 'Thank you for the food assistance provided by your NGO. It was very helpful.');
INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES ('Sana', 'Ahmed', '03339876543', 'sana.ahmed@gmail.com', 'I really appreciate the effort of the volunteers who delivered the food to my doorstep. They were very courteous and professional.');
INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES ('Shahid', 'Kamal', NULL, 'shahid.kamal@gmail.com', 'The food was of good quality and quantity. However, I suggest that more variety should be included in the food baskets.');
INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES ('Ayesha', 'Bano', '03127654321', NULL, 'I am a single mother and the food assistance provided by your NGO has been a lifesaver for me and my children. Thank you.');
INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES ('Saad', 'Ali', '03345678901', 'saad.ali@gmail.com', 'The food baskets provided by your NGO were very well organized and contained all the necessary items. Keep up the good work.');
INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES ('Asma', 'Raza', NULL, 'asma.raza@gmail.com', 'I would like to thank your NGO for providing us with food assistance during the lockdown. Your efforts are much appreciated.');
INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES ('Ahmed', 'Khalid', '03452345678', NULL, 'The food items were fresh and of good quality. However, I suggest that the quantity should be increased for families with more members.');
INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES ('Rabia', 'Ali', NULL, 'rabia.ali@gmail.com', 'The food assistance provided by your NGO has been a blessing for us during these difficult times. May Allah bless you for your efforts.');
INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES ('Imran', 'Hassan', '03114567890', 'imran.hassan@gmail.com', 'I would like to give my feedback regarding the food assistance provided by your NGO. The food items were of good quality but I suggest that more non-perishable items should be included in the food baskets.');
INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES ('Saima', 'Rasheed', '03228765432', NULL, 'The food assistance provided by your NGO was very timely and much needed. Thank you for your service to the community.');
INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES ('Salman', 'Khan', NULL, 'salman.khan@gmail.com', 'I am very grateful for the food assistance provided by your NGO. It has been a great help for my family during the lockdown.');

INSERT INTO User (email, password, role)
SELECT email, 'password123', 'volunteer' FROM Volunteer
UNION
SELECT email, 'password456', 'beneficiary' FROM Beneficiary;
