
// MENU RETRATIL
var i = 0;
$('#btmainmenu').click(function(){
	if(i==0){
		$("#mainmenu").removeClass("active");
		$("#mainmenu").addClass("active");
		$("#mainmenu").css({
			overflow: 'auto',
			overflowX: 'scroll'
		});
		i=1;
	}else{
		$("#mainmenu").removeClass("active");
		$("#mainmenu").css({
			overflow: 'auto',
			overflowX: 'none'
		});
		i=0;
	}
});



(function(i,s,o,g,r,a,m)
	{i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
		a=s.createElement(o),m=s.getElementsByTagName(o)[0];
		a.async=1;
		a.src=g;
		m.parentNode.insertBefore(a,m)
	})
(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-59530365-2', 'auto');
ga('send', 'pageview');
