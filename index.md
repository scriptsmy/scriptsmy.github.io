<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Скрипты для сайта html</title>
<script>
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
};
</script>
<body>

<!-- <div w3-include-html="/_includes/preamble.shtml"></div> -->
<div w3-include-html="/_includes/header.html"></div> 

<div>   <!-- id="header"> -->
<div id="img_log"><img src="/images/logo-my.jpg" border="0" /></div>
<h1 id="header">Скрипты для сайта html</h1>
</div>

 
<div>   <!-- id="undheader"> -->
<div id="img_log"><img src="/images/domen-scriptsmy.jpg" border="0" /></div>
<p id="undheader">только свободно распространяемое программное обеспечение</p>
</div>
<!--	<a href="/index.html">Главная</a> -->
	<!-- <a href="/news-it/index.html">Новости ИТ</a> -->
<!--	s c r i p t s m y . r u &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
	&nbsp;&#124;&nbsp;<a href="/scripts/index.html">Скрипты</a>
	&nbsp;&#124;&nbsp;<a href="/about/index.html">О сайте</a>
	&nbsp;&#124;&nbsp;<a href="/connect/index.html">Контакты</a>
	&nbsp;&#124;&nbsp;<a href="/map/index.html">Карта сайта</a> -->
	<!-- &nbsp;&#124;&nbsp;<a href="/map/index.html">Форум</a> 
</div> -->

<div id="way">
<div id="this_way"></div>
</div>

<div id="text">

<h2> В сети можно найти любые скрипты</h2>

<div class="img_lt">
<img src="/images/img/program-means-news.jpg" alt=" Скрипты на сайте MY " title=" Новые скрипты " />
</div><p>Здесь будет заглавная статья</p> 



<br/><br/><br/><br/>
<h2>Новые скрипты</h2>
<div id="news">
В разделе <a href="/scripts-js/"> Скрипты JavaScript </a> - <a href="/scripts-js/bread-crumbs.html"> Скрипт "хлебные крошки" </a><br />
В разделе <a href="/scripts-py/"> Скрипты Python </a> - <a href="/scripts-py/shell-chat-bot.html"> Скрипт оболочки для чат-бота </a><br />
В разделе <a href="/scripts-pl/"> Скрипты Perl </a> - <a href="/scripts-pl/feedback.html"> Скрипт обратной связи </a><br />
В разделе <a href="/scripts-php/"> Скрипты PHP </a> - <a href="/scripts-php/voting.html"> Скрипт опроса / голосования </a><br />
</div>

<br />
<div id="end_page"></div><br />

</div> <!-- id="text" -->

<!-- </body> -->

<!-- </html> -->


<div w3-include-html="/_includes/header_r.html"></div>
<!-- <a style = "color:#fff" href = "/_includes/header_r.html">Переход к header_r.html</a> --> <!-- Ссылка для поисковых ботов -->
<!-- <a style = "color:#fff" href = "/_includes/footer.html">Переход к footer.html</a> --> <!-- Ссылка для поисковых ботов -->
<div w3-include-html="/_includes/footer.html"></div>


<noindex><script language="javascript" type="text/javascript" src="/js/up.js"></script>
<a id = "upbutton" href = "#" onclick = "smoothJumpUp(); return false;"> <img style = "color: #333333; font-size: 17px; " src = "/images/up4_1.png" alt = "&#8593;&nbsp;ВВЕРХ" border = "none" title = "Наверх">
</a></noindex>

<noindex><script language="javascript" type="text/javascript" src="/js/way.js"></script></noindex>

<noindex><script>
includeHTML();
</script></noindex>

</body>
</html>
