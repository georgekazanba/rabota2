const btn = document.getElementById("theme-button");
const link = document.getElementById("theme-link");

btn.addEventListener("click", ChangeTheme);

function ChangeTheme() {
	let mainTheme = "main.css";
	let darkTheme = "dark.css";
	let currTheme = link.getAttribute("href");

	if (currTheme === mainTheme) {
		currTheme = darkTheme;
		theme = "dark.css";
	} else {
		currTheme = mainTheme;
		theme = "main.css"
	}

	link.setAttribute("href", currTheme);

	Save(theme)
}

function Save(theme) {
	let Request = new XMLHttpRequest();
	Request.open("GET", "themes.php?theme=" + theme, true);
	Request.send();
}