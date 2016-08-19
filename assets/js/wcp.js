$(document).ready(function () {
    verificaExtencaoUpload();
});

function verificaExtencaoUpload() {
    var ext = ["pdf", "doc", "docx", "ppt", "pptx", "mp4", "mp3", "jpg", "jpeg", "gif", "png"];

    $('#image').change(function () {
        var nome = this.files[0].name;
        nome = nome.split('.');
        nome = nome.pop();

        if (ext.indexOf(nome) != -1) {
            //$("#view-image").attr("src",this.files[0].name);
            var preview = document.querySelector('#view-image');
            var file = document.querySelector('input[type=file]').files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }


        } else {
            alert('Este formato de arquivo "' + nome + '" não é suportado para upload.');
            $(this).val('');
        }
    });
}

function exibeMiniaturaImagem() {
    
}