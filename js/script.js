$(function() {
	/*
    var skillsList = ['HMTL5', 'CSS3', 'JavaScript', 'Bootstrap', 'Less', 'Sass',
                        'jQuery', 'Coffee-Script', 'JSON', 'Node.js', 'AngularJS',
                        'RegExp', 'Ajax',	'Java', 'ASP.NET', 'C', 'C&#43;&#43;', 'Ruby on Rails',
                        'Python',	'Git', 'Design Pattern', 'SEO', 'UX', 'OOP', 'MVC',
                        'Scrum', 'UML', 'ITIL', 'Project Management'];
	*/

	var skillsList = ['HMTL5, CSS3, JS', 'Bootstrap', 'Sass, Less', 'jQuery, AJAX', 'OOP', 'MVC', 'Git', 'Jade'];

	for(var i=0; i < skillsList.length; i++) {
		$('#skills')
		.append('<span class="skill">' + skillsList[i] + '</span>');
	}
});
