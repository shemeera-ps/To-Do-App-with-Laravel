<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .strikethrough {
    text-decoration: line-through;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Todo List using laravel</title>
</head>
<body>
    <div class="content flex flex-col justify-center items-center mt-40 w-[28rem] bg-sky-950 mx-auto rounded-xl shadow">
    @yield('content')
    </div>

<script>
    function toggleCompleted(taskId) {
        const form = document.getElementById(`toggle-completed-form-${taskId}`);
        const taskText = document.querySelector(`#task-${taskId}`);

        if (form && taskText) {
            form.submit();
            taskText.classList.toggle('strikethrough');
        }
    }
</script>

</body>
</html>