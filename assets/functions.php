<?php

session_start();

mysql_select_db("../assets/database/coredb");

define('USSERNANE', 'dean');
define('PASSWORD', 'admin');

#\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\LOGIN////////////////////////////////////////////////////#

if (isset($_POST['loginbtn'])) {
    
    $vun = $_POST['ussername'];
    $vpw = $_POST['password'];

 	function login(){
	    if ( $vun === USSERNANE && $vpw === PASSWORD ) {
	      echo  "<script type=\"text/javascript\">".
	            "alert('Welcome $vun');".
	            "</script>";
	      return true;
	      }
	      else{
	      echo  "<script type=\"text/javascript\">".
	            "alert('Sorry your password or username was incorrect');".
	            "</script>";
	      return false;
	      };
	};
};

#\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\DISPLAY ADMIN TOOL/////////////////////////////////////////////#

if (#login is true) {
	document.getElementById("updatelibtnarea").style.display = "normal";
	document.getElementByclass("panel-group").style.display = "normal";
}

#\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ADDING TO THE DATABASE///////////////////////////////////////////#

if (isset($_POST['submit'])) {
	if (isset($_POST['Techcheckbox'])) {
		addtoIT();
	}
	if (isset($_POST['Artcheckbox'])) {
		addtoArt();
	}
	if (isset($_POST['Maincheckbox'])) {
		addtoMain();
	}
	if (isset($_POST['Studiocheckbox'])) {
		addtosStudio();
	}
	if (isset($_POST['Retailcheckbox'])) {
		addtoRetail();
	}
};

function addtoTech()
{
	INSERT INTO itdep (name,TaD,location,logo,banner,video,background,article background,facebook url,twitter url,google plus url,instagram url,short info,extended info)
	VALUES ($name,$TaD,$location,$logo,$banner,$video,$background,$article_background,$facebook_url,$twitter_url,$google_plus_url,$instagram_url,$short_info,$extended_info);
};
function addtoArt()
{
	INSERT INTO artdep (name,TaD,location,logo,banner,video,background,article background,facebook url,twitter url,google plus url,instagram url,short info,extended info)
	VALUES ($name,$TaD,$location,$logo,$banner,$video,$background,$article_background,$facebook_url,$twitter_url,$google_plus_url,$instagram_url,$short_info,$extended_info);
};
function addtoMain()
{
	INSERT INTO main (name,video,background,short info,)
	VALUES ($name,$video,$background,$short_info);
};
function addtosStudio()
{
	INSERT INTO studdep (name,TaD,location,logo,banner,video,background,article background,facebook url,twitter url,google plus url,instagram url,short info,extended info)
	VALUES ($name,$TaD,$location,$logo,$banner,$video,$background,$article_background,$facebook_url,$twitter_url,$google_plus_url,$instagram_url,$short_info,$extended_info);
};
function addtoRetail()
{
	INSERT INTO retdep (name,TaD,location,logo,banner,video,background,article background,facebook url,twitter url,google plus url,instagram url,short info,extended info)
	VALUES ($name,$TaD,$location,$logo,$banner,$video,$background,$article_background,$facebook_url,$twitter_url,$google_plus_url,$instagram_url,$short_info,$extended_info);
};

function generate_articals(){
	# this will tell the front end how may white blocks "articals" to display according the the the DB table ID count 
	# by adding X number articals and giving then and artical numbers of X or less, where X = Latest DB respecful table ID number
	# ie. if table id = 9 genaerate 9 white blocks "articals"  with the first having and artical number of 1, then another with 2 then another with 3, 4, 5, up to 9.
};
function Artical_Info(){
	# this will tell the front end what info from the DB will be shown where ie. IT white block 1 display IT table entry 1
	# if artical number = 3 then display respecive DB entry where id = 3
};
function diplay_count(){
	# this will limit the artical diplay to a maximun of 10 artical. just hidding them.
	# if artical numbe = 11 then hide
};
function display_expand(){
	# this will alow other articals to apear when the display more btn has been clicked
	# if diaply more btn is clcked change artical atribute from hiddin to show/none
}

#\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\NEWS FEED//////////////////////////////////////////////#

if (isset($_POST['nfsubmit'])) {
	$addnews();
};

function addnews()
{
		INSERT INTO newsfeed (newsslide)
		VALUES ($newsslide);
};

function newslimit()
{
	# this will limtit the news diplayed to three slides each starting with the lastest
};

?>