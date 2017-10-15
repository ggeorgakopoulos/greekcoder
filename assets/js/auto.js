
$(document).ready(function() {


    var display = document.getElementById('autotyping');
    var text = 'Web developer and dizigner';
    var i = 0;
    var j = 0;

    window.next_letter = function() {
        if (i <= text.length) {
            display.innerHTML = text.substr(0, i++);
            setTimeout('next_letter()', 200);

            if (i == text.length) {
                rm_letter(1000);
            }
        }
    }
    next_letter();

    function rm_letter(delay) {
        setTimeout(function() {
            window.remove_letter = function () {
                if (j <= 7) {
                    display.innerHTML = text.substr(0, text.length - j++);
                    setTimeout('remove_letter()', 100);
                    if (j == 7) {
                        readd_lt();
                    }

                }
            }
            remove_letter();
        }, delay);

    }


    function readd_lt() {
        var ctext = 'Web developer and designer';
        var k = 0;
        window.readd_letter = function() {
            if (k <= 7) {
                display.innerHTML = ctext.substr(0, ctext.length - 7 + k++);
                setTimeout('readd_letter()', 200);
            }
        }
        readd_letter();
    }
});/**
 * Created by georg on 12/1/2016.
 */
