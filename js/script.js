//$(function() {
	
    /*
    
    // Dropdown:
	$('.jumbotron > .content').hide();
	$('.jumbotron').on('click', function(){
		$(this)
		//.parent()
		.find('.content')
		.slideToggle(1000);
		
		/*
		$(this)
		.siblings('.jumbotron')
		.find('.content')
		.hide(500);
		* /
		
		// return false
	});
	
    */
    
	// Navbar:
    /*
	$('ul.nav > li').on('click', function(){
		$(this)
		.addClass('active');
		
		$(this)
		.find('a')
		.append('<span class="sr-only">(current)</span>');
		
		$(this)
		.siblings()
		.removeClass('active');
		
		$(this)
		.siblings()
		.find('a > span')
		.detach();
	});
    */
//});



$(function() {
	/*
    var skillsList = ['HMTL5', 'CSS3', 'JavaScript', 'Bootstrap', 'Less', 'Sass',
                        'jQuery', 'Coffee-Script', 'JSON', 'Node.js', 'AngularJS',
                        'RegExp', 'Ajax',	'Java', 'ASP.NET', 'C', 'C&#43;&#43;', 'Ruby on Rails',
                        'Python',	'Git', 'Design Pattern', 'SEO', 'UX', 'OOP', 'MVC',
                        'Scrum', 'UML', 'ITIL', 'Project Management'];
	*/
	
	var skillsList = ['HMTL5', 'CSS3', 'JavaScript', 'Bootstrap', 'Less',
										'jQuery', 'OOP', 'MVC', 'Git'];
	
	for(var i=0; i < skillsList.length; i++) {
		$('#skills')
		.append('<span class="skill"> &#126 ' + skillsList[i] + '</span>');
	}
});