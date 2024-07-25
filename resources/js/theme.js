window.$ = window.jQuery = require('jquery');

$(document)
    .ready(function () {
        $('.menu-toggle').on('click', function (e) {
            e.preventDefault();

            let $toggle = $(this),
                href = $toggle.attr('href'),
                $menu = $(href);

            $menu.toggleClass('is-hidden-mobile');
        });

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
    })
    .on('submit', 'form.grecaptcha-enabled', function (e) {
        let $form = $(this),
            siteKey = $form.data('grecaptcha-site-key'),
            token = $form.data('grecaptcha-token');

        if (! token) {
            if (siteKey) {
                e.preventDefault();

                grecaptcha.ready(function() {
                    grecaptcha.execute(siteKey, {action: 'submit'}).then(function(token) {
                        $form
                            .data('grecaptcha-token', token)
                            .append(`<input type="hidden" name="_grecaptcha_token" value="${token}" />`)
                            .submit();
                    });
                });
            } else {
                console.log("Google reCAPTCHA Site Key not defined!");
            }
        }
    });
