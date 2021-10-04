//задаются ID элементов для поиска
var btn = document.getElementById("theme-button");
var link = document.getElementById("theme-link");

//задаётся действие при нажатии на кнопку
btn.addEventListener("click", function () { ChangeTheme(); });

//алгоритм действия смены темы
function ChangeTheme()
{
	//задаются определения тем
    let mainTheme = "main.css";
    let darkTheme = "dark.css";
    //получает тему сайта на данный момент
    var currTheme = link.getAttribute("href");
    var theme = "";

    //"если тема соответствует Х, она меняется на Y, и наоборот"
    if(currTheme == mainTheme)
    {
   	 currTheme = darkTheme;
   	 theme = "dark";
    }
    else
    {    
   	 currTheme = mainTheme;
   	 theme = "main";
    }

    //подставляет новое значение currTheme в "href" в index.php 
    link.setAttribute("href", currTheme);

    //сохранение темы
    Save(theme);
}
//алгоритм сохранения темы
function Save(theme) {
	var Request = new XMLHttpRequest();
	//запрос переменной "тема" из php файла и её отправка
	Request.open("GET", "./themes.php?theme=" + theme, true);
	Request.send();
}