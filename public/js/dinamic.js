$(document).ready(function () {

    activeTab();
    showForm();
});

function activeTab() {
    let tabActual = $(location).attr('pathname');
    if (tabActual.indexOf('favorito') >= 0) {
        $('#favorite-tab').addClass('tab-active');
        $('#favorite-tab').removeClass('tab-inactive');
        $('#category-tab').addClass('tab-inactive');
    } else if (tabActual.indexOf('categoria') >= 0) {
        $('#category-tab').addClass('tab-active');
        $('#category-tab').removeClass('tab-inactive');
        $('#favorite-tab').addClass('tab-inactive');
    }

    if(tabActual.indexOf('crear') >= 0  || tabActual.indexOf('detalle') >= 0){
        $('.btn').attr('hidden');
    }else{
        $('.btn').removeAttr('hidden');
    }
}

function showForm() {
    $('.btn-show-form').click(function () {
        $('.form-create').toggle();
    });
}

