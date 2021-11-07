fetch("https://judge0-ce.p.rapidapi.com/about", {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "judge0-ce.p.rapidapi.com",
		"x-rapidapi-key": "34e796c552msh12d78bff28ac0b8p1dca49jsne5b2f023887d"
	}
})
.then(response => {
	console.log(response);
})
.catch(err => {
	console.error(err);
});