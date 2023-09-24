
const modal = document.getElementById('modal'); //получаем модальное окно со входом
const modalreg = document.getElementById('modal-reg'); //получаем модальное окно с регистрацией
const openModal = document.getElementById("open-modal"); //открытое модальное окно со входом
const openModalreg = document.getElementById("open-modal-reg"); //открытое модальное окно с регистрацией
const closeModal = document.getElementById("close"); //получаем кнопку для закрытия модального окна со входом
const closeModaltime = document.getElementById("close-two");// получаем кнопку для закрытия модального окна с регистрацией
const backlog = document.getElementById("back-log"); //получаем кнопку для возвращения с окна регистрации на вход



openModal.addEventListener("click", function() { //создаём событие при клике
    modal.style.display = "block"; // меняем свойство display на block
});

closeModal.addEventListener("click", function() { //создаём событие при клике
    modal.style.display = "none"; // скрываем модальое окно со входом
});

openModalreg.addEventListener("click", function() { //создаём событие при клике
    modalreg.style.display = "block"; //открываем окно с регистрацией
    modal.style.display = "none"; // скрываем окно со входом
});

backlog.addEventListener("click", function() { //создаём событие при клике
    modal.style.display = "block"; //открываем окно со входом
    modalreg.style.display = "none"; // скрываем окно с регистрацией
});

closeModaltime.addEventListener("click", function() { //создаём событие при клике
    modalreg.style.display = "none"; // скрываем окно с регистрацией
});