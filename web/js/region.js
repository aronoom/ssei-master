/**
 * Created by root on 18/02/17.
 */
$(function(){

    (function listerRegion(){
        $.ajax({
            type: 'GET',
            url: Routing.generate('zone_lister_region'),
            timeout: 3000,
            success: function(data) {
                $('#liste_region').children().remove();
                $('#liste_region').append(data);
            },
            error: function() {
                console.log('La requête n\'a pas abouti');
            }
        });
    })();

    $("#ajouterRegion").click(function(){
        $('.modal-dialog').removeClass('modal-md');
        $('.modal-dialog').addClass('modal-lg');
        $.ajax({
            type: 'GET',
            url: Routing.generate('zone_ajouter_region'),
            timeout: 3000,
            success: function(data) {
                $('.modal-body').children().remove();
                $('.modal-body').append(data);
                $('.modal-header h4').text("Ajouter une région");
                $('#globModal').modal('show');
            },
            error: function() {
                console.log('La requête n\'a pas abouti');
            }
        });
    });

    $("#ajouterDistrict").click(function(){
        $('.modal-dialog').removeClass('modal-md');
        $('.modal-dialog').addClass('modal-lg');
        $.ajax({
            type: 'GET',
            url: Routing.generate('zone_ajouter_district', {'region_id': $('#regionId').val()}),
            timeout: 3000,
            success: function(data) {
                $('.modal-body').children().remove();
                $('.modal-body').append(data);
                $('.modal-header h4').text("Ajouter un district");
                $('#globModal').modal('show');
            },
            error: function() {
                console.log('La requête n\'a pas abouti');
            }
        });
    });

    $("#ajouterCommune").click(function(){
        $('.modal-dialog').removeClass('modal-md');
        $('.modal-dialog').addClass('modal-lg');
        $.ajax({
            type: 'GET',
            url: Routing.generate('zone_ajouter_commune', {'district_id': $('#districtId').val()}),
            timeout: 3000,
            success: function(data) {
                $('.modal-body').children().remove();
                $('.modal-body').append(data);
                $('.modal-header h4').text("Ajouter une commune");
                $('#globModal').modal('show');
            },
            error: function() {
                console.log('La requête n\'a pas abouti');
            }
        });
    });
});