function switchNoir()
{
	ecrireCookie(2);
	$('link[rel="stylesheet"]').attr("href", "baseNoir.css");
}

function switchBleu()
{
	ecrireCookie(1);
	$('link[rel="stylesheet"]').attr("href", "baseBleu.css");
}

function ecrireCookie(i)
{
	switch(i)
	{
		case 1:
		document.cookie="skin_demo=bleu";
		break;
		
		case 2:
		document.cookie="skin_demo=noir";		
		break;
	}
}