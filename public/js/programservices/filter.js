
(function(){

    $('#search-program').on('keyup change',function(){

        let baseUrl = $('base').attr('href'),
            imagePath = baseUrl + '/images/caring.jpg',
            searchkey = $(this).val(),
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
                        programsRow += '<h3>'+j.center_name+'</h3>';
                        programsRow += '<p>'+j.accredited+'</p>';
                        programsRow += '<p><em><i class="icon-map"></i>'+j.center_adrs+'</em></p>';
                        programsRow += '</div></div></div></div>';
                        programsRow += '<div class="col-sm-3 btn-prog"><p class="text-center">';
                        programsRow += '<a href="'+baseUrl+'/programs-services/view" class="footer-btn blu-btn" title="">View</a>';
                        programsRow += '</p></div></div></div>';
                    });
                else
                    programsRow += '<h2 class="text-center"><strong>No results found</strong></h2>';

                    programsBody.html(programsRow).fadeIn('slow');
            }
        })
    });
})();
