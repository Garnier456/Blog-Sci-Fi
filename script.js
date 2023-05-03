document.querySelector(".btn-save").addEventListener("click", function () {
  // Récupère l'identifiant de l'article à enregistrer
  const articleId = $(".btn-save").data('article-id');

  // Envoie une requête Ajax au serveur pour enregistrer l'article
  $.ajax({
    type: "POST",
    url: "saveArticle.php",
    data: { articleId: articleId },
    dataType: "json",
    success: console.log("Article enregistré avec succès!"),
    error: console.log(
      "Une erreur est survenue lors de l'enregistrement de l'article: "
    ),
  });
});


// Récupération des balises <p>
const dashboard = document.querySelector("#menu-admin > h2");
const articles = document.querySelector("#menu-admin > p:nth-of-type(1)");
const utilisateurs = document.querySelector("#menu-admin > p:nth-of-type(2)");
const commentaires = document.querySelector("#menu-admin > p:nth-of-type(3)");
const create = document.querySelector("#menu-admin > button");

// Récupération des sections correspondantes
const dashboardSection = document.querySelector("#dashboard");
const articlesSection = document.querySelector("#admin-articles");
const utilisateursSection = document.querySelector("#admin-utilisateurs");
const commentairesSection = document.querySelector("#admin-commentaires");
const createSection = document.querySelector("#admin-create");

// Masquer les sections sauf celle du Dashboard
articlesSection.style.display = "none";
utilisateursSection.style.display = "none";
commentairesSection.style.display = "none";
createSection.style.display = "none";

// Afficher la section dashboard
dashboardSection.style.display = "block";

// Ajout des écouteurs d'événements aux balises <p>
dashboard.addEventListener("click", () => {
  dashboardSection.style.display = "block";
  articlesSection.style.display = "none";
  utilisateursSection.style.display = "none";
  commentairesSection.style.display = "none";
  createSection.style.display = "none";
});

articles.addEventListener("click", () => {
  dashboardSection.style.display = "none";
  articlesSection.style.display = "block";
  utilisateursSection.style.display = "none";
  commentairesSection.style.display = "none";
  createSection.style.display = "none";
});

utilisateurs.addEventListener("click", () => {
  dashboardSection.style.display = "none";
  articlesSection.style.display = "none";
  utilisateursSection.style.display = "block";
  commentairesSection.style.display = "none";
  createSection.style.display = "none";
});

commentaires.addEventListener("click", () => {
  dashboardSection.style.display = "none";
  articlesSection.style.display = "none";
  utilisateursSection.style.display = "none";
  commentairesSection.style.display = "block";
  createSection.style.display = "none";
});

create.addEventListener("click", () => {
  dashboardSection.style.display = "none";
  articlesSection.style.display = "none";
  utilisateursSection.style.display = "none";
  commentairesSection.style.display = "none";
  createSection.style.display = "block";
});


const wrapper = document.querySelector(".wrapper");
let isDown = false;
let startX, startY;
let scrollLeft, scrollTop;

wrapper.addEventListener("mousedown", (e) => {
  isDown = true;
  startX = e.pageX - wrapper.offsetLeft;
  startY = e.pageY - wrapper.offsetTop;
  scrollLeft = wrapper.scrollLeft;
  scrollTop = wrapper.scrollTop;
});

wrapper.addEventListener("mouseleave", () => {
  isDown = false;
});

wrapper.addEventListener("mouseup", () => {
  isDown = false;
});

wrapper.addEventListener("mousemove", (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - wrapper.offsetLeft;
  const y = e.pageY - wrapper.offsetTop;
  const walkX = (x - startX) * 3; // La sensibilité de la souris sur l'axe X
  const walkY = (y - startY) * 3; // La sensibilité de la souris sur l'axe Y
  wrapper.scrollLeft = scrollLeft - walkX;
  wrapper.scrollTop = scrollTop - walkY;
});

