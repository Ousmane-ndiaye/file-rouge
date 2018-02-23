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
        console.log($(this).val());
        console.log('------------------------------------');
        $(this).on("scroll", function() {
            console.log('------------------------------------');
            console.log($(this).val());
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
                valid = false;
                $.ajax({
                    type: "POST",
                    url: "{{ path('test_ajax') }}",
                    dataType: "json",
                    data: requette,
                    success: function(reponseU) {
                        //insertion des produits dans le panier
                        let prixTotal = 0;
                        prduit = "<tr id='" + reponseU.idProduit + "'><td> <input type='text' data- data-prix='" + reponseU.prix + "' data-champ='quantite' name='" + reponseU.nomProduit + "' id='" + reponseU.idProduit + "' placeholder='Veuillez saisir la quantité'/></td><td>" + reponseU.nomProduit + "</td><td>" + reponseU.prix + " f </td><td class='montantTT1prod' id='prixTTdes" + reponseU.nomProduit.replace(/ /g, "") + "'>" + prixTotal + " f</td></tr>";
                        $('#facture').append(prduit);
                    },
                    error: function() {
                        console.log("requête pour 1 produit non executé !");
                    }
                })
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