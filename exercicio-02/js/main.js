// Seleção de Elementos
const todoForm = document.querySelector("#todo-form");
const todoInput = document.querySelector("#todo-input");
const todoList = document.querySelector("#todo-list");
const editForm = document.querySelector("#edit-form");
const editInput = document.querySelector("#edit-input");
const filterSelect = document.querySelector("#filter-select");
const searchInput = document.querySelector("#search-input");
const cancelEditBtn = document.querySelector("#cancel-edit-btn");

let oldInputValue;

// Funções
const saveTodo = (text) => {      //Função para inserir nova tarefa
    const todo = document.createElement("div");
    todo.classList.add("to-do");

    const todoTitle = document.createElement("h3");
    todoTitle.innerText = text;
    todo.appendChild(todoTitle);

    const doneBtn = document.createElement("button");
    doneBtn.classList.add("finish-todo");
    doneBtn.innerHTML = '<i class="fa-solid fa-check"></i>';
    todo.appendChild(doneBtn);
    
    const editBtn = document.createElement("button");
    editBtn.classList.add("edit-todo");
    editBtn.innerHTML = '<i class="fa-solid fa-pen"></i>';
    todo.appendChild(editBtn);
    
    const deleteBtn = document.createElement("button");
    deleteBtn.classList.add("remove-todo");
    deleteBtn.innerHTML = '<i class="fa-solid fa-xmark"></i>';
    todo.appendChild(deleteBtn);

    todoList.appendChild(todo);   //insere todos os elementos no todo-list

    todoInput.value = "";   //Limpa área de criação
    todoInput.focus();   //Mantem o cursor na área de criação
};

const toggleForms = () => {
    editForm.classList.toggle("hide");
    todoForm.classList.toggle("hide");
    todoList.classList.toggle("hide");
};

const updateTodo = (text) => {
    const todos = document.querySelectorAll(".to-do");

    todos.forEach((todo) => {
        let todoTitle = todo.querySelector("h3");

        console.log(todoTitle, text);
        
        if (todoTitle.innerText === oldInputValue) {
            todoTitle.innerText = text;
        }
    });
}

const filterTodos = (filterValue) => {        // Função de filtragem
    const todos = document.querySelectorAll(".to-do");

    todos.forEach((todo) => {
        switch (filterValue) {
            case "all":
                todo.style.display = "flex";  // Mostrar todos
                break;

            case "done":
                if (todo.classList.contains("done")) {
                    todo.style.display = "flex";  // Mostrar apenas feitos
                }
                else {
                    todo.style.display = "none";
                }
                break;
            case "todo":
                if (!todo.classList.contains("done")) {
                    todo.style.display = "flex";  // Mostrar apenas os a fazer
                }
                else {
                    todo.style.display = "none";
                }
                break;
        }
    });
};

const searchTodos = (searchValue) => {
    const todos = document.querySelectorAll(".to-do");

    todos.forEach((todo) => {
        const todoTitle = todo.querySelector("h3").innerText.toLowerCase();
        const searchText = searchValue.toLowerCase();

        if (todoTitle.includes(searchText)) {
            todo.style.display = "flex";  // Exibe a tarefa se encontrar correspondência
        } else {
            todo.style.display = "none";  // Oculta a tarefa se não encontrar correspondência
        }
    });
};

// Eventos
todoForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const inputValue = todoInput.value;

    if (inputValue) {
        saveTodo(inputValue);
    }
});

document.addEventListener("click", (e) =>{
    const targetEl = e.target;
    const parentEl = targetEl.closest("div");
    let todoTitle;

    if(parentEl && parentEl.querySelector("h3")) {
        todoTitle = parentEl.querySelector("h3").innerText;
    }

    if (targetEl.classList.contains("finish-todo")) {
        parentEl.classList.toggle("done");
    }

    if (targetEl.classList.contains("remove-todo")) {
        parentEl.remove();
    }

    if (targetEl.classList.contains("edit-todo")) {
        toggleForms();

        editInput.value = todoTitle;
        oldInputValue = todoTitle;
    }
});

cancelEditBtn.addEventListener("click", (e) => {
    e.preventDefault();

    toggleForms();
});

editForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const editInputValue = editInput.value;

    if (editInputValue) {
        updateTodo(editInputValue);
    }

    toggleForms();
});

filterSelect.addEventListener("change", (e) => {   // Evento de filtragem
    const filterValue = e.target.value;  // Obtém o valor do filtro selecionado
    filterTodos(filterValue);            // Chama a função de filtragem
});

searchInput.addEventListener("input", (e) => {   // Evento de pesquisa
    const searchValue = e.target.value;  // Obtém o valor do input de pesquisa
    searchTodos(searchValue);            // Chama a função de pesquisa
});