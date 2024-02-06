// select the item element
// const item = document.querySelector('.item');

var obj = '';

// const item = document.querySelectorAll('.item');
// const barra = document.querySelectorAll('.barra');

// // attach the dragstart event handler
// // item.addEventListener('dragstart', dragStart);
// item.forEach(elem => {
//     console.log(elem)
//     elem.addEventListener('dragstart', dragStart);
//     elem.addEventListener('drag', drag);
//     elem.addEventListener('dragend', dragEnd);
// });

// barra.forEach(elem => {
//     console.log(elem)
//     elem.addEventListener('dragstart', dragStart);
//     elem.addEventListener('drag', drag);
//     elem.addEventListener('dragend', dragEnd);
// });

// handle the dragstart 

function dragStart(e) {
    console.log(e.target.getAttribute('id')+'3333333333333333')
    e.dataTransfer.setData('text/plain', e.target.id);
    setTimeout(() => {
        e.target.classList.add('hide');
    }, 0);
   console.log('drag starts...'+e);
}
function drag(e) {
    console.log(e.target.getAttribute('id')+'3333333333333333')
    e.dataTransfer.setData('text/plain', e.target.id);
    setTimeout(() => {
        e.target.classList.add('hide');
    }, 0);
   console.log('drag...'+e);
}
//Aqui ele mostra o bloco, se ele foi arrastado para um lugar não válido, ele mostra o elemento no lugar original
function dragEnd(e) {
    // console.log(e.target.id+'+++++++++++++++++++')
    e.dataTransfer.setData('text/plain', e.target.id);
    setTimeout(() => {
        e.target.classList.remove('hide');
    }, 0);
   console.log('drag END...'+e);
}


// const boxes = document.querySelectorAll('.box');

// boxes.forEach(box => {
//     box.addEventListener('dragenter', dragEnter)
//     box.addEventListener('dragover', dragOver);
//     box.addEventListener('dragleave', dragLeave);
//     box.addEventListener('drop', drop);
// });


const texto = document.getElementById('texto');


texto.addEventListener('dragenter', dragEnter)
texto.addEventListener('dragover', dragOver);
texto.addEventListener('dragleave', dragLeave);
texto.addEventListener('drop', drop);

function dragEnter(e) {
    e.preventDefault();
    e.target.classList.add('drag-over');
}

function dragOver(e) {
    e.preventDefault();
    e.target.classList.add('drag-over');
}

function dragLeave(e) {
    e.preventDefault();
    e.target.classList.remove('drag-over');
}

function drop(e) {
    // e.preventDefault();
    // get the draggable element
    // const id = e.dataTransfer.getData('text/plain');
    // e.dataTransfer.effectAllowed = 'move';
    const id = e.dataTransfer.getData('text/plain');
    const draggable = document.getElementById(id);
    // e.dataTransfer.setData('text/html', this.innerHTML);
    // console.log(draggable+'***************')
    // console.log(id+'-------------')
    e.target.classList.remove('drag-over');

    // add it to the drop target
    // e.target.appendChild(draggable);
    e.target.appendChild(obj);
    // console.log(obj)

    // display the draggable element
    // draggable.classList.remove('hide');
}


//Aqui eu verifico se ele tem permissão para o drop
function allowDrop(ev){    
    let pa = ev.target.parentNode;
    let pai = pa.parentNode;
    // console.log(ev.target.getAttribute("id")+'--*-*-*-*-*--*-**-')
    // console.log(ev.target.id+'//*/*/*/*/*/*/*/*/*//')
    // console.log(pa.target.getAttribute("id")+'//*/*/*/*/*/*/*/*/*//')
    // console.log(pai.target.getAttribute("id")+'000000000000000000000000000000')
    // console.log('--------------------------------------------------')
    // console.log(ev)
    // console.log(pa)
    // console.log(pai)
    if(pai!=null){
        obj=pai;
        console.log(obj)
    }
    if (ev.target.getAttribute("droppable") == "false"){
        ev.dataTransfer.dropEffect = "none"; // dropping is not allowed
                            ev.preventDefault();
    }
    else{
        ev.dataTransfer.dropEffect = "all"; // drop it like it's hot
                            ev.preventDefault();
    }
}
function allowDrop2(ev){
    if(ev.target!=null){
        obj=ev.target;
        // console.log(obj)
    }
    if (ev.target.getAttribute("droppable") == "false"){
        ev.dataTransfer.dropEffect = "none"; // dropping is not allowed
                            ev.preventDefault();
    }
    else{
        ev.dataTransfer.dropEffect = "all"; // drop it like it's hot
                            ev.preventDefault();
    }
}


function fecharJanVid(elem){
    let tool = elem.parentNode;
    let jan = tool.parentNode;
    let geral = jan.parentNode;
    geral.removeChild(jan)
    document.getElementById('editVideo').setAttribute('style', 'display:none;')
}
