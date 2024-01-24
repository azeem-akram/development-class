

var url = "https://newsapi.org/v2/everything?q=apple&from=2024-01-21&to=2024-01-21&sortBy=popularity&apiKey=0ab8f3ca33d7476ea06ba118f2907abd";

// fetch(url)
//     .then(response => {
//         if (!response.ok) {
//             alert("Reponse is not good");
//         }
//         return response.json();
//     })
//     .then(data => {
//         console.log(data.articles);
//         displayArticles(data.articles);
//     });




async function getNews(category) {

    var url = "https://newsapi.org/v2/top-headlines?country=us&category=" + category + "&apiKey=0ab8f3ca33d7476ea06ba118f2907abd";

    var response = await fetch(url);
    if(!response.ok)
    {
        alert("Reponse is not good");
    }

    var data = await response.json();
    displayArticles(data.articles);
}

getNews('');





//Display news articles on the webpage
function displayArticles(articles) {
    var divContainer = document.getElementById("news-container");

    

    articles.forEach(article => {
        var singleNews = '<div class="new-card"> <img src="'+ article.urlToImage +'" onerror="anyNewFunction(this)"/> <h2>' + article.title + ' </h2>  <p> '+ article.description +'</p> </div>';
        //divContainer.innerHTML = divContainer.innerHTML + singleNews;
        //divContainer.insertAdjacentHTML('beforeend', singleNews);

        divContainer.insertAdjacentHTML('beforeend', singleNews);
    });

}


async function displayNews(category) {
    //alert("Showing " + category);

    var divContainer = document.getElementById("news-container");
    divContainer.innerHTML = "";

    await getNews(category);

}



function anyNewFunction(imgElement) {
    imgElement.src = "/assets/images/my-new-img.png";
}





async function searchForNews(searhQuery) {

    var url = "https://newsapi.org/v2/everything?q=" + searhQuery + "&apiKey=0ab8f3ca33d7476ea06ba118f2907abd";

    var response = await fetch(url);
    if(!response.ok)
    {
        alert("Reponse is not good");
    }

    var data = await response.json();
    displayArticles(data.articles);
}





async function searchNew() {
    var searchQuery = document.getElementById("searchBox").value;
    alert("Searching..."+ searchQuery);

    var divContainer = document.getElementById("news-container");
    divContainer.innerHTML = "";

    await searchForNews(searchQuery);
}