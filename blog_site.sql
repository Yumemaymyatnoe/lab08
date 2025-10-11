-- Create database
CREATE DATABASE blog_site;
USE blog_site;

-- Create users table
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50),
    email VARCHAR(100),
    is_active BOOLEAN
);

-- Create posts table
CREATE TABLE posts (
    post_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    title VARCHAR(100),
    content TEXT,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Insert data into users
INSERT INTO users (username, email, is_active) 
VALUES 
('alex', 'alex@email.com', true),
('mia', 'mia@email.com', false);

-- Insert data into posts
INSERT INTO posts (user_id, title, content)
VALUES
(1, 'First Post', 'This is my first blog post.'),
(2, 'Hello World', 'Mia is testing her first post.');