
UPDATE User
SET email = 'alice_new@example.com', password_hash = 'newpassword123'
WHERE user_id = 1;

UPDATE Task
SET status = 'Completed', priority = 'High'
WHERE task_id = 2;

UPDATE Category
SET description = 'Updated description for work-related tasks'
WHERE category_id = 1;

UPDATE Reminder
SET reminder_date = '2024-12-20 09:00:00'
WHERE reminder_id = 1;

UPDATE Comment
SET content = 'Updated comment content'
WHERE comment_id = 3;