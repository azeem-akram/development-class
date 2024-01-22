

var url = "https://newsapi.org/v2/everything?q=apple&from=2024-01-21&to=2024-01-21&sortBy=popularity&apiKey=0ab8f3ca33d7476ea06ba118f2907abd";

fetch(url)
    .then(response => {
        if (!response.ok) {
            alert("Reponse is not good");
        }
        return response.json();
    })
    .then(data => {
        console.log(data.articles);
        displayArticles(data.articles);
    });


//Display news articles on the webpage
function displayArticles(articles) {
    var divContainer = document.getElementById("news-container");

    articles.forEach(article => {
        var singleNews = '<div class="new-card"> <img src="'+ article.urlToImage +'"/>' + article.title + '</div>';
        divContainer.innerHTML = divContainer.innerHTML + singleNews;
    });

}