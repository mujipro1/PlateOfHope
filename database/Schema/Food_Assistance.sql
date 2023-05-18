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
  city VARCHAR(40),
  job VARCHAR(100),
  company VARCHAR(100),
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
  city VARCHAR(40),
  company VARCHAR(100),
  availability INT
);

CREATE TABLE NGO (
  NGO_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  contact VARCHAR(15) NOT NULL UNIQUE,
  email VARCHAR(100) NULL UNIQUE,
  address VARCHAR(200) NOT NULL,
  city VARCHAR(100) NOT NULL,
  image VARCHAR(100) NOT NULL, 
  description VARCHAR(1000)
);

CREATE TABLE Donation (
  donation_id INT AUTO_INCREMENT PRIMARY KEY,
  ngo_id INT,
  address VARCHAR(200) NOT NULL,
  city VARCHAR(100) NOT NULL,
  no_of_volunteers INT,
  date DATE NOT NULL, 
  day INT,
  
  CONSTRAINT FOREIGN KEY (ngo_id)
  REFERENCES ngo(ngo_id)
);

CREATE TABLE Food (
  food_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  category VARCHAR(200) NOT NULL,
  quantity INT NOT NULL,
  NGO_id INT NOT NULL,
  description VARCHAR(1000)
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
  password VARCHAR(150) NOT NULL,
  role ENUM('beneficiary', 'volunteer', 'ngo') NOT NULL
);

ALTER TABLE Food
ADD FOREIGN KEY (NGO_id) REFERENCES NGO(NGO_id);

INSERT INTO NGO (name, contact, email, address, city, image, description) VALUES
('Food for All', '1234567890', 'foodforall@gmail.com', '123 Main Street', 'Karachi', 'NGO1.png',  'Nourishing Communities: A Helping Hand That Fights Hunger and Provides Nutritious Meals for Those in Need.'),
('Helping Hands', '9876543210', 'helpinghands@gmail.com', '456 Elm Street', 'Lahore', 'NGO2.png', 'Serving Hope: Transforming Lives Through Food Assistance Programs and Community Empowerment Initiatives'),
('Feeding Hope', '5555555555', 'feedinghope@gmail.com', '789 Oak Street', 'Islamabad', 'NGO3.png', 'Bridging the Gap: Ensuring Access to Adequate Nutrition for Vulnerable Individuals and Families in Need.'),
('Nourish Pakistan', '1111111111', 'nourishpak@gmail.com', '321 Maple Avenue', 'Rawalpindi', 'NGO4.png', 'Food for All: Partnering with Local Communities to Eradicate Hunger and Foster Sustainable Food Systems'),
('Hunger Relief Foundation', '9999999999', 'hungerrelief@gmail.com', '567 Pine Street', 'Faisalabad', 'NGO5.png', 'Empowering Through Nutrition: Dedicated to Breaking the Cycle of Hunger and Improving Health Outcomes.'),
('Food For Change', '8888444888', 'foodforchange@gmail.com', '654 Cedar Road', 'Multan', 'NGO6.png', 'Strengthening Lives: Empowering Individuals with Food Security, Creating a Foundation for a Brighter Future.'),
('Serving Smiles', '7777777777', 'servingsmiles@gmail.com', '432 Birch Lane', 'Peshawar', 'NGO7.png', 'Hunger Relief Champions: Making a Positive Impact by Providing Essential Food Assistance to Those Facing Hardship.'),
('Eating Together', '6666666666', 'eatingtogether@gmail.com', '876 Walnut Drive', 'Quetta', 'NGO8.png', 'Fighting Food Insecurity: Committed to Ending Hunger and Promoting Dignity and Well-being in Every Community.'),
('Hopeful Meals', '4444444444', 'hopefulmeals@gmail.com', '987 Spruce Court', 'Gujranwala', 'NGO9.png', 'Nourishing the Spirit: Restoring Hope and Transforming Lives Through Compassionate Food Assistance Programs.'),
('Feeding the Needy', '2222222222', 'feedingtheneedy@gmail.com', '345 Oakwood Street', 'Sialkot', 'NGO10.png', 'Sustenance and Support: Building Stronger Communities by Addressing Food Inequality and Promoting Resilience.'),
('Food Bank Pakistan', '3333333333', 'foodbankpakistan@gmail.com', '678 Maple Lane', 'Hyderabad', 'NGO11.png', 'Breaking Barriers: Committed to Eliminating Hunger and Empowering Individuals to Reach Their Full Potential.'),
('Care and Share', '5554465555', 'careandshare@gmail.com', '543 Pine Avenue', 'Abbottabad', 'NGO12.png', 'Food as a Right: Advocating for Equal Access to Nutritious Meals and Building Sustainable Food Systems.'),
('Meals on Wheels', '7773337777', 'mealsonwheels@gmail.com', '876 Elm Court', 'Sukkur', 'NGO13.png', 'Compassion in Action: Extending a Helping Hand by Providing Essential Food Assistance to Those in Need.'),
('Feed the Future', '9990009999', 'feedthefuture@gmail.com', '321 Cedar Road', 'Bahawalpur', 'NGO14.png', 'Promoting Wellness: Supporting Healthy Communities Through Sustainable Food Programs and Nutritional Education.'),
('Ending Hunger', '1119991111', 'endinghunger@gmail.com', '765 Birch Lane', 'Rahim Yar Khan', 'NGO15.png', 'Empathy on the Plate: Collaborating with Communities to Eradicate Hunger and Foster a More Just Society.'),
('Helping Hearts', '8888888888', 'helpinghearts@gmail.com', '678 Walnut Drive', 'Mardan', 'NGO16.png' , 'Transforming Lives with Every Meal: Supporting Vulnerable Populations and Creating Lasting Impact through Food Assistance.'),
('Food Fighters', '6662226666', 'foodfighters@gmail.com', '987 Spruce Court', 'Okara', 'NGO17.png', 'Resilience through Nourishment: Equipping Individuals and Communities with the Resources to Thrive.'),
('Share a Meal', '4441114444', 'shareameal@gmail.com', '543 Oakwood Street', 'Jhang', 'NGO18.png',  'Strengthening Food Security: Building Sustainable Solutions to Ensure No One Goes Hungry.');

INSERT INTO Donation (ngo_id, address, city, no_of_volunteers, date, day) VALUES
(1, '123 Main Street', 'Karachi', 10, '2023-05-15', 1),
(3, '456 Elm Street', 'Lahore', 8, '2023-05-16', 2),
(3, '789 Oak Street', 'Islamabad', 5, '2023-05-17', 3),
(2, '321 Maple Avenue', 'Rawalpindi', 12, '2023-05-18', 4),
(5, '567 Pine Street', 'Karachi', 15, '2023-05-19', 5),
(4, '654 Cedar Road', 'Karachi', 6, '2023-05-20', 6),
(2, '432 Birch Lane', 'Karachi', 7, '2023-05-21', 7),
(5, '876 Walnut Drive', 'Karachi', 9, '2023-05-22', 1),
(2, '987 Spruce Court', 'Islamabad', 11, '2023-05-23', 2),
(1, '345 Oakwood Street', 'Islamabad', 4, '2023-05-24', 3),
(1, '678 Maple Lane', 'Islamabad', 8, '2023-05-25', 4),
(4, '543 Pine Avenue', 'Islamabad', 6, '2023-05-26', 5),
(3, '876 Elm Court', 'Islamabad', 10, '2023-05-27', 6),
(5, '321 Cedar Road', 'Lahore', 7, '2023-05-28', 7 ),
(6, '765 Birch Lane', 'Lahore', 9, '2023-05-29', 1),
(2, '678 Walnut Drive', 'Lahore', 12, '2023-05-30', 2),
(2, '987 Spruce Court', 'Lahore', 8, '2023-05-31', 3),
(5, '543 Oakwood Street', 'Rawalpindi', 6, '2023-06-01', 4),
(1, '876 Maple Lane', 'Rawalpindi', 10, '2023-06-02', 5);

INSERT INTO Beneficiary (first_name, last_name, CNIC, phone_number, email, address, job, city, company, salary) VALUES 
('Ali', 'Khan', '12345-6789012-3', '03451234567', 'ali.khan@gmail.com', '123 Main St', 'Engineer', 'Lahore', 'ABC Company', 50000),
('Ahmed', 'Hussain', '2345678901235', '03121234567', 'ahmed.hussain@gmail.com', '456 Market St', 'Accountant', 'Karachi', 'XYZ Corporation', 60000),
('Saima', 'Nawaz', '3456789012322', '03331234567', 'saima.nawaz@gmail.com', '789 Park Rd', 'Doctor', 'Islamabad',  'Medicare Hospital', 80000),
('Imran', 'Akram', '4567890123456', '03211234567', 'imran.akram@gmail.com', '12-A Canal View', 'Teacher','Lahore', 'The Educators', 40000),
('Sadia', 'Saeed', '5678901234567', '03001234567', 'sadia.saeed@gmail.com', '34-B F-10/2', 'Lawyer','Islamabad', 'Saeed Law Associates', 70000),
('Farhan', 'Ali', '6789012345678', '03251234567', 'farhan.ali@gmail.com', '56-C Johar Town', 'Businessman', 'Lahore','Ali Enterprises', 100000),
('Hira', 'Khan', '7890123456789', '03321234567', 'hira.khan@gmail.com', '78-D Model Town', 'Software Engineer', 'Lahore', 'TechSoft', 90000),
('Nadia', 'Akram', '8901234567890', '03221234587', 'nadia.akram@gmail.com', '90-G G-10/3', 'Professor', 'Islamabad', 'NUST', 120000),
('Umar', 'Siddique', '9012345678901', '03241234567', 'umar.siddique@gmail.com', '123-A Canal Road', 'Marketing Executive', 'Lahore', 'Nestle', 75000),
('Tariq', 'Aziz', '0123456789012', '03441234567', 'tariq.aziz@gmail.com', '34-G F-8/2', 'Accountant', 'Islamabad', 'ABC Corporation', 60000),
('Maryam', 'Khan', '2345678901239', '03231234567', 'maryam.khan@gmail.com', '45-B Shalimar Link Rd', 'Doctor', 'Lahore', 'Shalimar Hospital', 80000),
('Abdul', 'Rafay', '3456789012345', '03111234567', 'abdul.rafay@gmail.com', '67-F G-9/4', 'Engineer', 'Islamabad', 'DEF Company', 50000),
('Usman', 'Khan', '1234567890123', '03001234767', 'usman.khan@gmail.com', 'House No. 123, Street No. 5, G-7/2', 'Software Engineer','Islamabad' ,'ABC Company', 80000),
('Fatima', 'Zahra', '9876543210123', '03341234567', 'fatima.zahra@gmail.com', 'Flat No. 12, Building No. 5, F-8/4', 'Doctor', 'Islamabad', 'XYZ Hospital', 120000),
('Ali', 'Raza', '7890123456799', '03221234567', 'ali.raza@gmail.com', '18-A, Main Boulevard, Gulberg', 'Teacher', 'Lahore', 'City School', 50000),
('Zainab', 'Ali', '3456789012349', '03451234577', 'zainab.ali@gmail.com', 'House No. 10, Street No. 3, E-11/2', 'Student','Islamabad', 'NUST', 50000),
('Nadeem', 'Ahmed', '4567812345678', '03331234568', 'nadeem.ahmed@gmail.com', '15-B, Main Boulevard, DHA', 'Businessman', 'Karachi','ABC Trading', 200000),
('Saima', 'Khan', '1234509876543', '03001234568', 'saima.khan@gmail.com', 'Flat No. 7, Building No. 2, Clifton', 'Fashion Designer','Karachi', 'Fashion House', 60000),
('Ayesha', 'Shahid', '0123456789123', '03331234569', 'ayesha.shahid@gmail.com', 'House No. 12, Street No. 8, F-10/3', 'Engineer', 'Islamabad', 'DEF Company', 100000);


INSERT INTO Volunteer (first_name, last_name, CNIC, phone_number, email, address, job, city, company, availability) VALUES
('Ali', 'Ahmed', '4310112345678', '03001233567', 'ali.ahmed@gmail.com', '123 Main St', 'Teacher', 'Karachi','ABC School', '123'),
('Aisha', 'Khan', '4220123456789', '03332345678', 'aisha.khan@gmail.com', '456 2nd St', 'Engineer', 'Lahore', 'XYZ Company', '235'),
('Ahmed', 'Siddiqui', '4230134567890', '03123456789', 'ahmed.siddiqui@gmail.com', '789 Broadway', 'Doctor','Islamabad', 'ABC Hospital', '345'),
('Fatima', 'Ali', '4240145678901', '03214567890', 'fatima.ali@gmail.com', '456 Market St', 'Designer', 'Karachi', 'ABC Design', '134'),
('Hassan', 'Khan', '4250156789012', '03345678901', 'hassan.khan@gmail.com', '789 Main St', 'Accountant','Rawalpindi', 'XYZ Accounting', '245'),
('Hina', 'Zaidi', '4260167890123', '03136789012', 'hina.zaidi@gmail.com', '123 Broadway', 'Writer', 'Karachi', 'XYZ News', '1235'),
('Imran', 'Hussain', '4270178901234', '03227890123', 'imran.hussain@gmail.com', '456 Market St', 'Engineer', 'Lahore', 'ABC Company', '456'),
('Jahanzaib', 'Khan', '4280189012345', '03358901234', 'jahanzaib.khan@gmail.com', '789 Main St', 'Lawyer','Islamabad', 'XYZ Law', '235'),
('Kiran', 'Saeed', '4290190123456', '03149012345', 'kiran.saeed@gmail.com', '123 Broadway', 'Teacher','Karachi',  'ABC School', '1234'),
('Muneeb', 'Ahmed', '4210212345678', '03111234567', 'muneeb.ahmed@gmail.com', '456 Market St', 'Doctor', 'Lahore', 'ABC Hospital', '1245'),
('Nadia', 'Khan', '4220223456789', '03322345678', 'nadia.khan@gmail.com', '789 Main St', 'Engineer', 'Rawalpindi','XYZ Company', '345'),
('Nasir', 'Ali', '4230234567890', '03113456789', 'nasir.ali@gmail.com', '123 Broadway', 'Accountant', 'Karachi', 'ABC Accounting', '123'),
('Rabia', 'Khan', '4240245678901', '03204567890', 'rabia.khan@gmail.com', '456 Market St', 'Software Engineer', 'Lahore', 'ABC Company', 135),
('Ali', 'Ahmed', '4210112345678', '03001234567', 'ah.ali@gmail.com', '123 Model Town', 'Doctor','Karachi', 'XYZ Hospital', 246),
('Sana', 'Nasir', '3540265432109', '03126543210', 'sana.nasir@gmail.com', '789 Gulberg', 'Teacher', 'Islamabad', 'DEF School', 347),
('Faisal', 'Khalid', '3520198765432', '03219876543', 'faisal.khalid@gmail.com', '23-A Satellite Town', 'Engineer', 'Rawalpindi', 'GHI Company', 246),
('Maria', 'Khan', '3610145678901', '03334567890', 'maria.khan@gmail.com', '456 Park View', 'Writer', 'Lahore','JKL Publishers', 135),
('Ahmed', 'Ali', '3520212345678', '03011234567', 'ahmed.ali@gmail.com', '789 Defence', 'Artist', 'Karachi','MNO Studio', 12345),
('Farhan', 'Khan', '3740598765432', '03339876543', 'farhan.khan@gmail.com', '23-B F-7', 'Designer','Islamabad', 'PQR Firm', 456);

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
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Bread', 'Grains', 50, 2);
INSERT INTO Food (name, category, quantity, NGO_id) VALUES ('Fish', 'Protein', 15, 1);


INSERT INTO Feedback (first_name, last_name, phone_number, email, comments) VALUES 
('Ali', 'Khan', '03211234567', 'ali.khan@gmail.com', 'Thank you for the food assistance provided by your NGO. It was very helpful.'),
('Sana', 'Ahmed', '03339876543', 'sana.ahmed@gmail.com', 'I really appreciate the effort of the volunteers who delivered the food to my doorstep. They were very courteous and professional.'),
('Shahid', 'Kamal', 03189288392, 'shahid.kamal@gmail.com', 'The food was of good quality and quantity. However, I suggest that more variety should be included in the food baskets.'),
('Ayesha', 'Bano', '03127654321', 'ayeshaali@gmail.com', 'I am a single mother and the food assistance provided by your NGO has been a lifesaver for me and my children. Thank you.'),
('Saad', 'Ali', '03345678901', 'saad.ali@gmail.com', 'The food baskets provided by your NGO were very well organized and contained all the necessary items. Keep up the good work.'),
('Asma', 'Raza', 03871237871, 'asma.raza@gmail.com', 'I would like to thank your NGO for providing us with food assistance during the lockdown. Your efforts are much appreciated.'),
('Ahmed', 'Khalid', '03452345678', 'akhalid@gmail.com', 'The food items were fresh and of good quality. However, I suggest that the quantity should be increased for families with more members.'),
('Rabia', 'Ali', 03318712381, 'rabia.ali@gmail.com', 'The food assistance provided by your NGO has been a blessing for us during these difficult times. May Allah bless you for your efforts.'),
('Imran', 'Hassan', '03114567890', 'imran.hassan@gmail.com', 'I would like to give my feedback regarding the food assistance provided by your NGO. The food items were of good quality but I suggest that more non-perishable items should be included in the food baskets.'),
('Saima', 'Rasheed', '03228765432', 'saima.rasheed@gmail.com', 'The food assistance provided by your NGO was very timely and much needed. Thank you for your service to the community.'),
('Salman', 'Khan', '03131313142', 'salman.khan@gmail.com', 'I am very grateful for the food assistance provided by your NGO. It has been a great help for my family during the lockdown.');

INSERT INTO User (email, password, role)
SELECT email, 'password123', 'volunteer' FROM Volunteer
UNION
SELECT email, 'password456', 'beneficiary' FROM Beneficiary;
