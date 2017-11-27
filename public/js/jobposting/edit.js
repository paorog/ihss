

(function(){
    var logofield = $("div.logofile");

		$('a#removeImg').on('click', function(){
        var uploadImg = '<input class="form-control" name="logofile" type="file" value="">';
        logofield.html(uploadImg);
		});

})();
