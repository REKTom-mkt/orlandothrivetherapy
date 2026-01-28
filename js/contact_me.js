$(function () {
    $("#contactForm").find('textarea,input,select').jqBootstrapValidation({
        preventSubmit: !0,
        submitError: function (t, e, s) { },
        submitSuccess: function (t, e) {
            e.preventDefault(), e.stopPropagation();
            // var s = $("input#name", t).val();
            // s && s.indexOf(" ") >= 0 && (s = name.split(" ").slice(0, -1).join(" ")),
            $.ajax({
                url: "/mail/contact_me.php",
                type: "POST",
                data: t.serialize(),
                cache: !1,
                success: function (res) {
                    const response = JSON.parse(res);
                    if (response.code == 200) {
                        $("#success").html("<div class='alert alert-success'>"), $("#success > .alert-success").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"), $("#success > .alert-success").append("<strong>Your message has been sent! </strong>"), $("#success > .alert-success").append("</div>"), $("#contactForm").trigger("reset");
                    } else {
                        $("#success").html("<div class='alert alert-danger'>"), $("#success > .alert-danger").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"), $("#success > .alert-danger").append("<strong>Sorry, verification. Please try again later!"), $("#success > .alert-danger").append("</div>"), $("#contactForm").trigger("reset")
                    }
                },
                error: function (res) {
                    console.log(res);
                    $("#success").html("<div class='alert alert-danger'>"), $("#success > .alert-danger").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"), $("#success > .alert-danger").append("<strong>Sorry, it seems that my mail server is not responding. Please try again later!"), $("#success > .alert-danger").append("</div>"), $("#contactForm").trigger("reset")
                    // grecaptcha.reset();
                    // $("#submitBtn").attr("disabled", !0);
                },
            });
        },
        filter: function () {
            return $(this).is(":visible");
        },
    });
});
