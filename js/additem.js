$(document).ready(function() {
    $(".list-item-class").change(function(event) {
        var item = this.value;
        var parent = $(this).parent().parent().attr('id');
        parent = parent.substring(7);
        $.post("additem.php", {text: item, list: parent});
    });
});
