$(document).ready(function() {
    function champObl(champs) {
        if (champs.val() == "" || champs.val().length <= 2 || champs.val().trim() == "") {
            return "Veuillez remplir le champ " + champs.data('champ');
        } else if (champs.data('champ') == "nom d'utilisateur" && !champs.val().match(/^[a-zA-Z0-9]+$/i)) {
            return "Veillez rentrer un nom d'utilisateur valide";
        } else {
            return "";
        }
    }

    $(".cacher").each(function() {
        $(this).hide();
    });

    $(".prix_compris").each(function() {
        console.log('------------------------------------');
        console.log($(this));
        console.log('------------------------------------');
        $(this).on("change", function() {
            console.log('------------------------------------');
            console.log($(this));
            console.log('------------------------------------');
        })
    })

    $("form").each(function() {
        var formType = $(this).data("form");
        var idAlert = formType;
        $(this).on("submit", function() {
            $('#' + idAlert + ' ul').children("li").remove();
            valid = true;
            c = 0;
            $(this).children("div").each(function() {
                $(this).children("input[type='text'], input[type='password'], input[type='number']").each(function() {
                    if (champObl($(this)) == "") {
                        c++;
                        $('#' + idAlert).hide();
                    } else {
                        li = "<li>" + champObl($(this)) + "</li>";
                        $('#' + idAlert).show();
                        $('#' + idAlert + ' ul').append(li);
                    }
                })
            });
            if (c == 7 && formType == "form_inscription") {
                valid = true;
            } else if (c == 2 && formType == "form_connexion") {
                valid = true;
            } else if (c == 2 && formType == "form_recuperation") {
                valid = true;
            } else if (c < 4 && formType == "form_recherche") {
                valid = true;
            } else {
                valid = false;
            }
            return valid;
        });
    })
});