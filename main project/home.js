var timeout	= 500;
var closetimer	= 0;
var ddmenuitem	= 0;

function mcancelclosetime() {
	if (closetimer) {
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}
function mopen(id) {	mcancelclosetime();
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
{
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible'; }

}
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}


document.onclick = mclose; 