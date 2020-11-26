
function filter() {
    let baseUrl = $('base').attr('href'),
        imagePath = baseUrl + '/images/caring.jpg',
        searchkey = $('#search-program').val(),
        searchby = $('#search-by option:selected').val() == '' ? null : $('#search-by option:selected').val(),
        programsRow = '',
        programsBody = $('#programservices');

    $.ajax({
        url: baseUrl + '/programs-services/filter/' + searchby + '/' + searchkey,

        success:function(data){

            if(data.data.length > 0)
                $.each(data.data, function(i,j){
                    programsRow += '<div class="proglisting"><div class="row"><div class="col-sm-9"><div class="row"><div class="col-sm-3 logo-prog">';
                    programsRow += '<img src="'+imagePath+'" class="img-responsive center-block" />';
                    programsRow += '</div><div class="col-sm-9"><div class="title-prog">';
                    programsRow += '<h3>'+j.agency+'</h3>';
                    programsRow += '<p>'+j.registration_number+'</p>';
                    programsRow += '<p><em><i class="icon-map"></i>'+j.address+'</em></p>';
                    programsRow += '</div></div></div></div>';
                    programsRow += '<div class="col-sm-3 btn-prog"><p class="text-center">';
                    programsRow += '<a href="'+baseUrl+'/programs-services/view/'+j.id+'" class="footer-btn blu-btn" title="">View</a>';
                    programsRow += '</p></div></div></div>';
                });
            else
                programsRow += '<h2 class="text-center"><strong>No results found</strong></h2>';

                programsBody.html(programsRow).fadeIn('slow');
        }
    });
}

(function(){
    $(document).on('keypress',function(e) {
        if(e.which == 13) {
            if($('#search-program').val !== '') {
                filter();
            }
            else {
                return false;
            }
        }
    });
    
    $('#go-search').on('click',function(){
        filter();
    });
})();
