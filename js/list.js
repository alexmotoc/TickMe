var itemsCounter = 0;

function addListItem() {
    itemsCounter++;

    var newCheckBox = document.createElement('input');
    newCheckBox.type = "checkbox";
    newCheckBox.name = "list-check[" + itemsCounter + "]";
    newCheckBox.class = "list-check-class";
    newCheckBox.id = "list-check" + itemsCounter;
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
    newTextBox.id = "list-item" + itemsCounter;
    newTextBox.class = "list-item-class";
    newTextBox.onkeypress = enterHandler;

    document.getElementById('list-form').appendChild(hiddenNewCheckBox);
    document.getElementById('list-form').appendChild(newCheckBox);
    document.getElementById('list-form').appendChild(newTextBox);

     $("#list-item" + itemsCounter).change(function(event) {
         var item = this.value;
         var parent = $(this).parent().parent().attr('id');
         parent = parent.substring(7);
         $.post("additem.php", {text: item, list: parent});
     });
}

function enterHandler(e) {
    if (e.keyCode === 13) {
        e.preventDefault();
        addListItem();
    }
}
