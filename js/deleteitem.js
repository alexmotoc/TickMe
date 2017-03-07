$(document).ready(function() {
    $(".list-check").click(function(event) {
        if ($(this).prop("checked") == true) {
            var hidden = "#list-check-hidden-id" + this.id;
            var item = "#list-item-id" + this.id;
            var checkbox = "#" + this.id;
            $(hidden).remove();
            $(item).remove();
            $(checkbox).remove();
            $.post("deleteitem.php", {id: this.id});
        }
    });
});
