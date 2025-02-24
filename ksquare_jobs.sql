-- Create the database
CREATE DATABASE ksquare_jobs;
USE ksquare_jobs;

-- Create jobs table
CREATE TABLE jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    location VARCHAR(100) NOT NULL,
    description TEXT NOT NULL
);

-- Create applications table
CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    resume VARCHAR(255) NOT NULL,
    cover_letter TEXT,
    applied_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (job_id) REFERENCES jobs(id) ON DELETE CASCADE
);

-- Insert more job listings
INSERT INTO jobs (title, department, location, description) VALUES 
('Software Engineer', 'IT', 'New York', 'Responsibilities:\n- Develop and maintain web applications\n- Collaborate with cross-functional teams\n\nRequirements:\n- Proficiency in PHP, JavaScript, and SQL\n- Experience with React.js is a plus.'),

('Marketing Specialist', 'Marketing', 'Los Angeles', 'Responsibilities:\n- Develop marketing campaigns\n- Analyze campaign performance\n\nRequirements:\n- Strong analytical skills\n- Experience with digital marketing tools.'),

('HR Manager', 'Human Resources', 'Chicago', 'Responsibilities:\n- Manage recruitment and hiring\n- Oversee employee relations\n\nRequirements:\n- Strong communication skills\n- Experience in HR policies and procedures.'),

('Data Analyst', 'Data Science', 'San Francisco', 'Responsibilities:\n- Analyze complex datasets\n- Generate business insights\n\nRequirements:\n- Proficiency in SQL, Python, and data visualization tools.'),

('Frontend Developer', 'IT', 'Austin', 'Responsibilities:\n- Build user interfaces using HTML, CSS, and JavaScript\n- Work with React.js and integrate APIs\n\nRequirements:\n- Experience with frontend frameworks like React.js, Angular, or Vue.js.'),

('Project Manager', 'Management', 'Seattle', 'Responsibilities:\n- Manage project timelines and budgets\n- Coordinate with stakeholders and teams\n\nRequirements:\n- Strong organizational skills\n- Experience with Agile methodologies.'),

('Cybersecurity Analyst', 'IT Security', 'Washington, D.C.', 'Responsibilities:\n- Monitor and secure company networks\n- Investigate security incidents\n\nRequirements:\n- Knowledge of cybersecurity principles\n- Experience with network security tools.'),

('Graphic Designer', 'Creative', 'Miami', 'Responsibilities:\n- Design marketing materials and branding assets\n- Work with Adobe Suite (Photoshop, Illustrator, InDesign)\n\nRequirements:\n- Strong design portfolio\n- Creativity and attention to detail.'),

('Cloud Engineer', 'IT', 'Dallas', 'Responsibilities:\n- Deploy and manage cloud infrastructure\n- Optimize cloud-based applications\n\nRequirements:\n- Experience with AWS, Azure, or Google Cloud\n- Knowledge of Kubernetes and Docker.'),

('Customer Support Representative', 'Customer Service', 'Boston', 'Responsibilities:\n- Assist customers with inquiries and troubleshooting\n- Maintain records of customer interactions\n\nRequirements:\n- Strong communication skills\n- Experience in customer service preferred.');

-- Insert sample applications (optional)
INSERT INTO applications (job_id, name, email, phone, resume, cover_letter) VALUES 
(1, 'John Doe', 'johndoe@example.com', '1234567890', 'resume_john.pdf', 'I am excited to apply for this role.'),
(2, 'Jane Smith', 'janesmith@example.com', '9876543210', 'resume_jane.pdf', 'I believe I am the best fit for this job.'),
(3, 'Michael Johnson', 'michaelj@example.com', '4567891230', 'resume_michael.pdf', 'I have extensive experience in HR management.'),
(4, 'Emily Davis', 'emilyd@example.com', '7891234560', 'resume_emily.pdf', 'Passionate about data and analytics.'),
(5, 'Robert Wilson', 'robertw@example.com', '3216549870', 'resume_robert.pdf', 'Experienced frontend developer with React expertise.');
