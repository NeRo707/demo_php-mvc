<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        nav { margin-bottom: 20px; }
        nav a { margin-right: 15px; color: #0066cc; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        .task-detail {
            padding: 20px;
            border: 2px solid #0066cc;
            border-radius: 5px;
            background: #f0f8ff;
            max-width: 500px;
        }
        .task-detail p { margin: 10px 0; }
    </style>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/tasks">Tasks</a>
    </nav>
    <h1>Task Details</h1>
    <div class="task-detail">
        <p><strong>ID:</strong> <?= $task['id'] ?></p>
        <p><strong>Title:</strong> <?= htmlspecialchars($task['title']) ?></p>
        <p><strong>Status:</strong> <?= $task['completed'] ? '✓ Completed' : '⏳ Pending' ?></p>
    </div>
    <p><a href="/tasks">← Back to task list</a></p>
</body>
</html>
