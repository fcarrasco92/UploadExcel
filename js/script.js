$( document ).ready(function() {
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: 'subirExcel.php',
        allowedFileExtensions : ['xls'],
        msgInvalidFileExtension: 'El formato de "{name}" es incorrecto. Solo archivos "{extensions}" son admitidos.',
        uploadAsync: true,
        maxFileCount: 1,
        uploadExtraData: function() {
            return {
                uploaded: "uploaded"
            };
        }
    });
});