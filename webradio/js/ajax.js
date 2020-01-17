$(document).ready(
    function () {
        $.ajax({
            type: "GET",
            url: "status.xml",
            dataType: "xml",
            success: function (xml) {
                $(xml).find("trackList").each(
                    function () {
                        $(this).find("track").each(
                            function () {
                                var titrefull = $(this).find("title").text();
                                // Oh Baby --- LCD Soundsystem
                                var posDecoupe = titrefull.indexOf('---')
                                var titre = titrefull.substring(0, posDecoupe);
                                var groupe = titrefull.substring(posDecoupe + 3, titrefull.length);
                                $("#artisteencours").html(groupe);
                                $("#titreencours").html(titre);
                            });

                        $.getJSON("http://localhost/PHP-FULL/webradio/api.php", function (data) {
                            $.each(data, function (key, val) {
                                $("#playlist").append();
                            })
                        })
                    });
            }
        });
    }
);

function search(variableEntree) {

    if (variableEntree.length > 2) {
        $.post("search.php", {
            recherche: variableEntree
        }, function (data) {
            var dataParse = JSON.parse(data);

            // On vide la zone des résultats de recherche
            $("#resultat").html("");

            $.each(dataParse, function (key, val) {
                $("#resultat").append(`<tr><td> ${val.titre} <br> ${val.artiste} </td> <td> ${val.horaire} </td></tr>`);
            });
        });

    }
}