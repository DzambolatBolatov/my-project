"use strict";

$(document).ready(function()
{
	$(".form__phone").mask("+7(999)999-99-99");
	$('#myForm').submit(function(event)
	{
		event.preventDefault();
 		let name = $('.form__name').val().trim();
 		let phone = $('.form__phone').val().trim();
 		let errors = [];
 		let errorsMessage = '';
  		if(name === '' || name.length < 3)
  		{
   			errors.push('Error: invalid name');
   			errorsMessage ='Error: invalid name';
  		}

  		if(phone === '')
  		{
   			errors.push('Error: invalid number');
   			errorsMessage ='Error: invalid phone';
		}

  		if(errors.length > 0)
  		{
   			let consoleError = '';
   			for(let i = 0; i < errors.length; i++)
   				{
					consoleError += errors[i] + '<br>';
   				}
   			console.log(consoleError);
  		}
  		else
  		{
   			$.ajax(
   			{
				url: '/ajax/ajax.php',
				type: 'POST',
				dataType: 'json',
				data: {
				name: name,
				phone: phone
			},
			success: function(response)
			{
				if(response.success)
				{ 		
					$('.form__button').css('display', 'none');
					$('.form__name').css('display', 'none');
					$('.form__phone').css('display', 'none');
					$('.form__response').html('Форма успешно отправлена').css('display', 'block').css('color', 'green').css('margin','69px 0px');
				}
				else
				{
					console.log('pashol');
				}
			},
			error: function(error)
			{
				console.log('error');
			}
   			});
  		}
 	});

});