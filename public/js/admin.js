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