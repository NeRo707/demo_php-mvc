<!DOCTYPE html>
<html>

<head>
  <title>Tasks</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
    }

    nav {
      margin-bottom: 20px;
    }

    nav a {
      margin-right: 15px;
      color: #0066cc;
      text-decoration: none;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .task {
      padding: 15px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 5px;
      background: #f9f9f9;
    }

    .task.completed {
      background-color: #d4edda;
    }

    .task a {
      color: #0066cc;
      text-decoration: none;
      margin-left: 10px;
    }

    table.blueTable {
      border: 1px solid #1C6EA4;
      background-color: #EEEEEE;
      width: 100%;
      text-align: left;
      border-collapse: collapse;
    }

    table.blueTable td,
    table.blueTable th {
      border: 1px solid #AAAAAA;
      padding: 3px 2px;
    }

    table.blueTable tbody td {
      font-size: 13px;
    }

    table.blueTable tr:nth-child(even) {
      background: #D0E4F5;
    }

    table.blueTable thead {
      background: #1C6EA4;
      background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
      background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
      background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
      border-bottom: 2px solid #444444;
    }

    table.blueTable thead th {
      font-size: 15px;
      font-weight: bold;
      color: #FFFFFF;
      border-left: 2px solid #D0E4F5;
    }

    table.blueTable thead th:first-child {
      border-left: none;
    }

    table.blueTable tfoot {
      font-size: 14px;
      font-weight: bold;
      color: #FFFFFF;
      background: #D0E4F5;
      background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
      background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
      background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
      border-top: 2px solid #444444;
    }

    table.blueTable tfoot td {
      font-size: 14px;
    }

    table.blueTable tfoot .links {
      text-align: right;
    }

    table.blueTable tfoot .links a {
      display: inline-block;
      background: #1C6EA4;
      color: #FFFFFF;
      padding: 2px 8px;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <nav>
    <a href="/">Home</a>
    <a href="/tasks">Tasks</a>
    <a href="/api/tasks">API</a>
  </nav>
  <h1>Task List</h1>
  <table class="blueTable">
    <thead>
      <tr>
        <th scope="col">Task</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tasks as $task): ?>
        <tr>
          <td><?= $task['title'] ?></td>
          <td><?= $task['completed'] ? '✓' : '⏳' ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <button>Add Task</button>
  <button>Delete Task</button>
  <button>Delete Task</button>
  <button>Delete Task</button>
  <button>Delete Task</button>
  <button>Delete Task</button>
  <button>Delete Task</button>
</body>

</html>