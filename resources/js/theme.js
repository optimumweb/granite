import * as $ from 'jquery';

$(document).ready(function () {
    $('.file').each(function () {
        let $file = $(this),
            $fileInput = $file.find('.file-input'),
            $fileName = $file.find('.file-name');

        $file.removeClass('has-name');
        $fileName.html('').hide();

        $fileInput.on('change', function () {
            let files = $fileInput[0].files;

            if (files.length > 0) {
                let fileNames = [];

                for (let i = 0; i < files.length; i++) {
                    let file = files[i];

                    fileNames.push(file.name);
                }

                $file.addClass('has-name');
                $fileName.html(fileNames.join(', ')).show();
            } else {
                $file.removeClass('has-name');
                $fileName.html('').hide();
            }
        });
    });
});
