

(function(){

		$('input[id="icheck"]').on('ifChanged', function (event) { $(event.target).trigger('change'); });

		$('input[id="icheck"]').on('change', function(){
				let isChecked = $(this).parent().attr('aria-checked');

				if(isChecked === 'true')
						$('input[id="terms"]').val(0);
				else
						$('input[id="terms"]').val(1);
		});

		$("img#img-upload").load(function(){
				$('a#removeImg').removeClass('hidden');
		});

		$('a#removeImg').on('click', function(){
				$("img#img-upload").attr('src','');
				if($("img#img-upload").attr('src') === ''){
						$(this).addClass('hidden');
						$('input[id="imgInp"]').val('');
						$('input[id="imgsrc"]').val('');
				}
		});

})();
