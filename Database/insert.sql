
INSERT INTO User (username, email, password_hash)
VALUES 
('alice', 'alice@example.com', 'password123'),
('bob', 'bob@example.com', 'securepass456'),
('charlie', 'charlie@example.com', 'mypassword789');

INSERT INTO Category (name, description)
VALUES 
('Work', 'Tasks related to work and professional goals'),
('Personal', 'Tasks related to personal life and errands'),
('Hobby', 'Tasks related to hobbies and interests');

INSERT INTO Task (user_id, title, description, due_date, priority, status)
VALUES 
(1, 'Complete Project Report', 'Prepare and finalize the project report for Q4', '2024-12-20', 'High', 'Pending'),
(2, 'Plan Team Meeting', 'Schedule and prepare for the next team meeting', '2024-12-15', 'Medium', 'In Progress'),
(3, 'Grocery Shopping', 'Buy groceries for the week', '2024-12-10', 'Low', 'Pending');

INSERT INTO Task_Category (task_id, category_id)
VALUES 
(1, 1),
(2, 1),
(3, 2);

INSERT INTO Reminder (task_id, reminder_date)
VALUES 
(1, '2024-12-19 10:00:00'),
(3, '2024-12-09 08:00:00');

INSERT INTO Comment (task_id, user_id, content)
VALUES 
(1, 2, 'Make sure to include the financial analysis in the report'),
(2, 1, 'I’ll finalize the agenda tomorrow'),
(3, 3, 'Don’t forget to add snacks to the grocery list!');