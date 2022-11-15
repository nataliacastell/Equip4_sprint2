function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.currentTarget.appendChild(document.getElementById(data));
    let extractNumber = /\d+/g;
    var data2 = data.match(extractNumber).join([]);
    var id = ev.currentTarget.id;
    $.ajax({
        url: "ajaxKanban.php", 
        type: "POST",
        data: { estado: id, tasca: data2 },
        cache: false,
        success: function () {  
            console.log("DB actualizada")
        }
    });
}