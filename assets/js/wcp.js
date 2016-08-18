$(document).ready(function () {
    verificaExtencaoUpload();
});

function verificaExtencaoUpload() {
    var ext = ["pdf", "doc", "docx", "ppt", "pptx", "mp4", "mp3", "jpg", "jpeg", "gif", "png"];

    $('#imagem').change(function () {
        var nome = this.files[0].name;
        nome = nome.split('.');
        nome = nome.pop();
        if (ext.indexOf(nome) != -1) {
        } else {
            alert('Este formato de arquivo "'+nome+'" não é suportado para upload.');
            $(this).val('');
        }
    });
}