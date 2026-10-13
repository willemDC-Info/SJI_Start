# SJI Start - Vue + PHP Exercise Starter

This repository is a **starter project** for IT students.

## Classroom workflow

1. Teacher keeps `main` as the base starter.
2. Each student creates their own branch from `main`.
3. Each student works and commits on their own branch.

Example:

```bash
git checkout main
git pull
git checkout -b student/<your-name>
```

---

## Project structure

- `/home/runner/work/SJI_Start/SJI_Start/frontend/index.html` -> Vue frontend starter
- `/home/runner/work/SJI_Start/SJI_Start/backend/api.php` -> PHP backend starter API

---

## Exercise

Build a small **Task Manager** app.

### Minimum requirements

1. Show tasks from the backend in Vue.
2. Add a new task from Vue to PHP.
3. Add a "done" state to each task.
4. Add a way to filter tasks (all / done / not done).
5. Make at least 5 commits that show your progress.

### Extra challenge ideas

- Store tasks in a file or database.
- Add edit and delete actions.
- Add simple input validation messages in the UI.

---

## Run the starter

### 1) Start the PHP backend

```bash
cd /home/runner/work/SJI_Start/SJI_Start/backend
php -S localhost:8000
```

### 2) Open the Vue frontend

Open this file in your browser:

`/home/runner/work/SJI_Start/SJI_Start/frontend/index.html`

The frontend calls: `http://localhost:8000/api.php/tasks`

---

## Helpful learning links (Vue beginners)

- Vue official guide: https://vuejs.org/guide/introduction.html
- Vue template syntax: https://vuejs.org/guide/essentials/template-syntax.html
- Vue event handling: https://vuejs.org/guide/essentials/event-handling.html
- Vue forms (`v-model`): https://vuejs.org/guide/essentials/forms.html
- MDN Fetch API: https://developer.mozilla.org/docs/Web/API/Fetch_API
- PHP JSON functions: https://www.php.net/manual/en/ref.json.php

---

## Notes for students

- The starter code includes beginner-friendly comments.
- It is okay if your first version is simple.
- Commit often with clear commit messages.
