function addListItem() {
    var newCheckBox = document.createElement('input');
    newCheckBox.type = "checkbox";
    newCheckBox.name = "list-check[]";
    newCheckBox.id = "list-check";

    var newTextBox = document.createElement('input');
    newTextBox.type = "text";
    newTextBox.name = "list-item[]";
    newTextBox.placeholder = "List item";
    newTextBox.id = "list-item";

    document.getElementById('list-form').appendChild(newCheckBox);
    document.getElementById('list-form').appendChild(newTextBox);
}

function enterHandler(e) {
    if (e.keyCode ===13) {
        e.preventDefault();
        addListItem();
    }
}
