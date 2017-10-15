function send_email() {
    document.getElementById('contact-msg').innerHTML = '<div style="text-align: center"><img src="assets/img/google-loading.gif" width="30"></div>';

    setTimeout(function () {
        successmsg = '<p class="form-success">Email successfully sent! Thanks for getting in touch with me...</p>';
        g_response = grecaptcha.getResponse();
        $.ajax({
            type: "POST",
            url: "assets/includes/contact.php",
            data: {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                subject: document.getElementById('subject').value,
                content: document.getElementById('content').value,
                g_recaptcha_response: g_response
            },
            success: function (data) {
                document.getElementById('contact-msg').innerHTML = data;
                if (data == successmsg) {
                    document.getElementById("submit").disabled = true;
                }
            }
        });
    }, 1000);
}
