var $fileInput = $(".file-input");
var $droparea = $(".file-drop-area");
var doc;

// highlight drag area
$fileInput.on("dragenter focus click", function () {
    $droparea.addClass("is-active");
});

// back to normal state
$fileInput.on("dragleave blur drop", function () {
    $droparea.removeClass("is-active");
});

// change inner text
$fileInput.on("change", function () {
    var filesCount = $(this)[0].files.length;
    var $textContainer = $(this).prev();
    [doc] = this.files;
    if (filesCount === 1) {
        // if single file is selected, show file name
        var fileName = $(this).val().split("\\").pop();
        $textContainer.text(fileName);
    } else {
        // otherwise show number of files
        $textContainer.text(filesCount + " files selected");
    }
});

function uploadDocument(document, booking_id) {
    var formData = new FormData();
    formData.append("document", doc);
    $.ajax({
        type: "POST",
        url: "/api/upload-document/" + booking_id + "/" + document,
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        dataType: "json",
        success: function (data) {
            window.location.reload();
        },
        error: function (data, request, status, error) {
            alert(data.responseJSON.error);
        },
    });
}

function updateDocument(document_id) {
    var formData = new FormData();
    formData.append("document", doc);
    formData.append("_method", "PUT");
    $.ajax({
        type: "POST",
        url: "/api/update-document/" + document_id,
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        dataType: "json",
        success: function (data) {
            window.location.reload();
        },
        error: function (data, request, status, error) {
            alert(data.responseJSON.error);
        },
    });
}
