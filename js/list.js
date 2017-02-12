var itemsCounter = 0;

function addListItem() {
    itemsCounter++;

    var newCheckBox = document.createElement('input');
    newCheckBox.type = "checkbox";
    newCheckBox.name = "list-check[" + itemsCounter + "]";
    newCheckBox.id = "list-check";
    newCheckBox.value = "1";

    var hiddenNewCheckBox = document.createElement('input');
    hiddenNewCheckBox.type = "hidden";
    hiddenNewCheckBox.name = "list-check[" + itemsCounter + "]";
    hiddenNewCheckBox.id = "list-check-hidden";
    hiddenNewCheckBox.value = "0";

    var newTextBox = document.createElement('input');
    newTextBox.type = "text";
    newTextBox.name = "list-item[]";
    newTextBox.placeholder = "List item";
    newTextBox.id = "list-item";
    newTextBox.onkeypress = enterHandler;

    document.getElementById('list-form').appendChild(hiddenNewCheckBox);
    document.getElementById('list-form').appendChild(newCheckBox);
    document.getElementById('list-form').appendChild(newTextBox);
}

function enterHandler(e) {
    if (e.keyCode === 13) {
        e.preventDefault();
        addListItem();
    }
}
