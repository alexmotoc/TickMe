$(document).ready(function() {
    $(".list-check-class").click(function(event) {
        var item_id = this.id;
        var id = $.get("/list.php")
        var textBox = "list-item" + this.id.substr(this.id.length - 1);
        $.post(completed.php, id);
        $.get();
        $.post(completed.php, )
    });
});
