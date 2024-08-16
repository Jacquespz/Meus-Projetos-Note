function IniciaModal(ModalId){
    var modal= document.getElementById(ModalId);
    modal.classList.add('mostrar');
}

IniciaModal('modal-sucesso');

function sair(){
    const fechar = document.querySelector('fechar');
    location.href='index.html';
}