/* MÓDULO DE LOGIN */

// Elemento de módulo
let modal = document.getElementById('modalLogin');

// Botão que abrirá o módulo
let modalBtn = document.getElementById('modalBtn');

// Botão que fecha o módulo
let closeBtn = document.getElementsByClassName('closeBtn')[0];

// Listener do evento "click" que abrirá o módulo
modalBtn.addEventListener('click', openModal);

// Listener do evento "click" que fechará o módulo
closeBtn.addEventListener('click', closeModal)

// Listener do evento "click" que fora do módulo irá fechar o mesmo
window.addEventListener('click', outsideClick);

// Função para abrir o módulo
function openModal() {

		modal.style.display = 'block';

}

// Função para fechar o módulo
function closeModal() {

		modal.style.display = 'none';

}

// Função para fechar o módulo se houver um clique fora do mesmo
function outsideClick(e) {

		if(e.target == modal) {

		modal.style.display = 'none';

		}

}