document.addEventListener('DOMContentLoaded', function () {
	var menu = document.querySelector('.menu-icon');

	menu.addEventListener('click', function(event){
		if(document.querySelector('.menu').style.display !== 'block')
		{
			document.querySelector('.menu').style.display = 'block';
		} 
		else
		{
			document.querySelector('.menu').style.display = 'none';
		}
	});
});