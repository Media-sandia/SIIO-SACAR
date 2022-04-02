Dropzone.autoDiscover = false;

$(document).ready(function () {
    var arrayFiles = [];
    var myDropzone = new Dropzone("#my-element", {
        url: "/files",
        method: "get",
        addRemoveLinks: true,
        aceeptedFile: "image/jpeg, image/png",
        maxFilesize: 15,
        maxFiles: 4,
        init: function () {
            this.on("addedfile", function (file) {
                arrayFiles.push(file);
                console.log(arrayFiles);
            });
            this.on("removedfiled", function (file) {
                var index = arrayFiles.indexOf(file);
                arrayFiles.splice(index, 1);
            });
        },
    });
    myDropzone.on("success", function (file, result) {
        console.log(result);
    });
    $(".savefiles").click(function (e) {
        e.preventDefault();
        let list = [];
        let finalFor = 0;
        for (var i = 0; i < arrayFiles.length; i++) {
            var Data = new FormData();
            Data.append("file", arrayFiles[i]);

            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },

                type: "POST",
                url: "/NuevoRegistro/setfiles",
                data: Data,
                dataType: "json",
                contenType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                },
            });
        }
    });
});
