<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Simple Task Manager</h2>

    <!-- Add Task Form -->
    <form method="POST" action="/tasks" class="mb-4">
        @csrf
        <div class="row">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Task Title" required>
            </div>
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="Description">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
        </div>
    </form>

    <!-- Task Table -->
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>

        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->title }}</td>
            <td>
                @if($task->status == 'completed')
                    <span class="badge bg-success">Completed</span>
                @else
                    <span class="badge bg-warning">Pending</span>
                @endif
            </td>
            <td>
                @if($task->status != 'completed')
                <form action="/tasks/{{ $task->id }}/done" method="POST" style="display:inline;">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-success btn-sm">Done</button>
                </form>
                @endif

                <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>