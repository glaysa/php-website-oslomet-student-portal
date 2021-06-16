
// Maybe not necessary, can be generated using php when database is implemented
function createShortcut(){
    const parent = document.getElementById('shortcut-section');
    const template = document.getElementById('shortcut-template');
    const clone = template.content.cloneNode(true);
    const element = clone.querySelector('.shortcut');
    const nameInput = document.getElementById('shortcut-name');
    const linkInput = document.getElementById('shortcut-link');

    $('#add-shortcut-btn').click(function (e) {
        element.querySelector('a').href = 'http://' + linkInput.value;
        element.querySelector('a').target = '_blank';
        element.querySelector('a div p').textContent = nameInput.value;
        parent.appendChild(clone);
    });
}

createShortcut();