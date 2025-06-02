@extends('pages.students.student-content')

@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #f9fafb;
        font-family: "Tajawal", sans-serif;
        color: #333;
        font-size: 16px;
    }

    h1.page-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        text-align: center;
        padding: 2rem 0 1rem;
    }

    form {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    form input,
    form select,
    form button {
        padding: 0.6rem 1rem;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
    }

    form input {
        width: 260px;
    }

    form button {
        background-color: #3498db;
        color: white;
        border: none;
        cursor: pointer;
        transition: background 0.3s;
    }

    form button:hover {
        background-color: #2980b9;
    }

    .filters-container,
    .search-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .filter-section {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .filter-label {
        font-weight: bold;
        color: #555;
    }

    .filter-button {
        background: #ecf0f1;
        border: none;
        padding: 0.4rem 0.8rem;
        border-radius: 5px;
        cursor: pointer;
        font-size: 0.9rem;
        transition: background 0.3s ease;
    }

    .filter-button:hover {
        background: #d0d7de;
    }

    .search-input {
        padding: 0.6rem;
        width: 240px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .clear-all {
        display: block;
        margin: 1rem auto;
        padding: 0.6rem 1.2rem;
        background-color: #e74c3c;
        color: white;
        font-size: 1rem;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .clear-all:hover {
        background-color: #c0392b;
    }

    .todo-container {
        display: flex;
        justify-content: center;
        padding: 1rem;
    }

    .todo-list {
        width: 100%;
        max-width: 1200px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        list-style: none;
        padding: 0;
    }

    .todo {
        background: white;
        border-radius: 12px;
        padding: 1rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        transition: transform 0.3s ease;
    }

    .todo:hover {
        transform: translateY(-4px);
    }

    .todo-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .todo-item {
        font-size: 1.1rem;
        font-weight: 500;
    }

    .todo-priority {
        padding: 0.3rem 0.6rem;
        font-size: 0.85rem;
        color: white;
        border-radius: 5px;
    }

    .priority-low {
        background-color: #3498db;
    }

    .priority-medium {
        background-color: #f39c12;
    }

    .priority-high {
        background-color: #e74c3c;
    }

    .todo-timestamp {
        font-size: 0.8rem;
        color: #777;
    }

    .todo-progress {
        width: 100%;
        height: 6px;
        background: #eee;
        border-radius: 5px;
        overflow: hidden;
    }

    .todo-progress-bar {
        height: 100%;
        width: 0%;
        background-color: #2ecc71;
        transition: width 0.3s;
    }

    .todo-actions {
        display: flex;
        justify-content: flex-end;
        gap: 0.5rem;
    }

    .complete-btn,
    .trash-btn {
        border: none;
        padding: 0.5rem 0.8rem;
        border-radius: 6px;
        font-size: 0.85rem;
        cursor: pointer;
        color: white;
    }

    .complete-btn {
        background-color: #2ecc71;
    }

    .trash-btn {
        background-color: #e74c3c;
    }

    .completed {
        text-decoration: line-through;
        opacity: 0.6;
    }

    .completed .todo-progress-bar {
        background-color: #27ae60;
        width: 100% !important;
    }

    .fall {
        transform: translateY(10px) rotateZ(10deg);
        opacity: 0;
        transition: all 0.4s ease;
    }

    @media (max-width: 768px) {
        form input {
            width: 100%;
        }

        .todo-list {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="task-list-container">
    <!-- Title -->
    <h1 class="page-title">قائمة المهام للطلاب</h1>

    <!-- Add Task Form -->
    <form>
        <input type="text" class="todo-input" placeholder="أدخل المهمة">
        <select class="priority-select">
            <option value="low">منخفض</option>
            <option value="medium">متوسط</option>
            <option value="high">عالي</option>
        </select>
        <button class="todo-button">إضافة</button>
    </form>

    <!-- Filters -->
    <div class="filters-container">
        <!-- Priority Filter -->
        <div class="filter-section priority-filter">
            <span class="filter-label">الإولوية:</span>
            <button class="filter-button" data-priority="low">منخفض</button>
            <button class="filter-button" data-priority="medium">متوسط</button>
            <button class="filter-button" data-priority="high">عالي</button>
        </div>

        <!-- Status Filter -->
        <div class="filter-section status-filter">
            <span class="filter-label">الحالة:</span>
            <button class="filter-button" data-status="all">الكل</button>
            <button class="filter-button" data-status="completed">مكتمل</button>
            <button class="filter-button" data-status="incomplete">غير مكتمل</button>
        </div>
    </div>

    <!-- Search -->
    <div class="search-section">
        <input type="text" class="search-input" placeholder="بحث عن مهمة...">
    </div>

    <!-- Clear All Button -->
    <button class="clear-all">مسح الكل</button>

    <!-- Task List -->
    <div class="todo-container">
        <ul class="todo-list">
            <!-- Dynamic tasks will be inserted here -->
        </ul>
    </div>
</div>

<script>
    // Selectors
    const todoBtn = document.querySelector(".todo-button");
    const todoInput = document.querySelector(".todo-input");
    const prioritySelect = document.querySelector(".priority-select");
    const todoList = document.querySelector(".todo-list");
    const searchInput = document.querySelector(".search-input");
    const clearAllBtn = document.querySelector(".clear-all");

    // Add Task
    todoBtn.addEventListener("click", (e) => {
        e.preventDefault();
        const taskText = todoInput.value.trim();
        const priority = prioritySelect.value;

        if (taskText === "") return;

        const todoCard = document.createElement("li");
        todoCard.classList.add("todo");

        const todoHeader = document.createElement("div");
        todoHeader.classList.add("todo-header");

        const todoItem = document.createElement("div");
        todoItem.classList.add("todo-item");
        todoItem.innerText = taskText;

        const todoPriority = document.createElement("span");
        todoPriority.classList.add("todo-priority", `priority-${priority}`);
        todoPriority.innerText = priority === "low" ? "منخفض" : priority === "medium" ? "متوسط" : "عالي";
        todoPriority.dataset.priority = priority;

        todoHeader.appendChild(todoItem);
        todoHeader.appendChild(todoPriority);

        const timestamp = document.createElement("div");
        timestamp.classList.add("todo-timestamp");
        timestamp.innerText = new Date().toLocaleString();

        const progressBar = document.createElement("div");
        progressBar.classList.add("todo-progress");
        const progressBarInner = document.createElement("div");
        progressBarInner.classList.add("todo-progress-bar");
        progressBar.appendChild(progressBarInner);

        const todoActions = document.createElement("div");
        todoActions.classList.add("todo-actions");

        const completeBtn = document.createElement("button");
        completeBtn.classList.add("complete-btn");
        completeBtn.innerHTML = '<i class="fas fa-check"></i>';

        const trashBtn = document.createElement("button");
        trashBtn.classList.add("trash-btn");
        trashBtn.innerHTML = '<i class="fas fa-trash"></i>';

        todoActions.appendChild(completeBtn);
        todoActions.appendChild(trashBtn);

        todoCard.appendChild(todoHeader);
        todoCard.appendChild(timestamp);
        todoCard.appendChild(progressBar);
        todoCard.appendChild(todoActions);

        todoList.appendChild(todoCard);

        todoInput.value = "";
    });

    // Complete or Delete Task
    todoList.addEventListener("click", (e) => {
        const item = e.target.closest("button");
        if (!item) return;

        const todo = item.closest(".todo");

        if (item.classList.contains("complete-btn")) {
            todo.classList.toggle("completed");
            const bar = todo.querySelector(".todo-progress-bar");
            bar.style.width = todo.classList.contains("completed") ? "100%" : "0%";
        }

        if (item.classList.contains("trash-btn")) {
            todo.classList.add("fall");
            todo.addEventListener("transitionend", () => {
                todo.remove();
            });
        }
    });

    // Search Tasks
    searchInput.addEventListener("input", () => {
        const searchTerm = searchInput.value.toLowerCase();
        document.querySelectorAll(".todo").forEach(todo => {
            const text = todo.querySelector(".todo-item").innerText.toLowerCase();
            todo.style.display = text.includes(searchTerm) ? "flex" : "none";
        });
    });

    // Clear All Tasks
    clearAllBtn.addEventListener("click", () => {
        document.querySelectorAll(".todo").forEach(todo => {
            todo.classList.add("fall");
            todo.addEventListener("transitionend", () => todo.remove());
        });
    });

    // Filter by Priority or Status
    document.querySelectorAll(".filter-button").forEach(btn => {
        btn.addEventListener("click", () => {
            const priorityFilter = btn.dataset.priority;
            const statusFilter = btn.dataset.status;

            document.querySelectorAll(".todo").forEach(todo => {
                const matchesPriority = priorityFilter ? todo.querySelector(".todo-priority").dataset.priority === priorityFilter : true;
                const isCompleted = todo.classList.contains("completed");

                const matchesStatus = statusFilter === "all" ||
                    (statusFilter === "completed" && isCompleted) ||
                    (statusFilter === "incomplete" && !isCompleted);

                if (matchesPriority && matchesStatus) {
                    todo.style.display = "flex";
                } else {
                    todo.style.display = "none";
                }
            });
        });
    });
</script>
@endsection