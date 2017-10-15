
$(document).ready(function() {

    function type_text(target, text, timeperchar, callback) {
        var i = 0;
        window.add_letter = function () {
            if (i <= text.length) {
                target.innerHTML = text.substr(0, i++);
                setTimeout('add_letter()', timeperchar);
                if (i == text.length) {
                    if ( callback != undefined) {
                        callback();
                    }
                }
            }
        }
        add_letter();
    }

    function del_text(target, text, delay, callback2) {
        var j = 0;
        setTimeout(function () {
            window.rm_letter = function () {
                if (j <= text.length) {
                    target.innerHTML = text.substr(0, text.length - j++);
                    setTimeout('rm_letter()', 50);
                    if (j == text.length) {
                        if ( callback2 != undefined) {
                            callback2();
                        }
                    }
                }
            }
            rm_letter();
        }, delay);
    }


    var header_autotype = document.getElementById('autotyping');

    type_text( header_autotype, 'Hello World!', 120, function() {
        del_text( header_autotype, 'Hello World!', 2200, function() {
            type_text( header_autotype, 'I\'m Georgakopoulos!', 120, function() {
                del_text( header_autotype, 'I\'m Georgakopoulos!', 1200, function() {
                    type_text( header_autotype, 'Web developer!', 120)
                });
            });
        });
    });


});

