// Récupération des balises <p>
const dashboard = document.querySelector("#menu-admin > h2")
const articles = document.querySelector("#menu-admin > p:nth-of-type(1)");
const utilisateurs = document.querySelector("#menu-admin > p:nth-of-type(2)");
const commentaires = document.querySelector("#menu-admin > p:nth-of-type(3)");

// Récupération des sections correspondantes
const dashboardSection = document.querySelector("#dashboard");
const articlesSection = document.querySelector("#admin-articles");
const utilisateursSection = document.querySelector("#admin-utilisateurs");
const commentairesSection = document.querySelector("#admin-commentaires");


// Masquer les sections sauf celle du Dashboard
articlesSection.style.display = "none";
utilisateursSection.style.display = "none";
commentairesSection.style.display = "none";

// Afficher la section dashboard
dashboardSection.style.display = "block";

// Ajout des écouteurs d'événements aux balises <p>
dashboard.addEventListener("click", () => {
    dashboardSection.style.display = "block";
    articlesSection.style.display = "none";
    utilisateursSection.style.display = "none";
    commentairesSection.style.display = "none";
  });

articles.addEventListener("click", () => {
    dashboardSection.style.display = "none";
    articlesSection.style.display = "block";
    utilisateursSection.style.display = "none";
    commentairesSection.style.display = "none";
});

utilisateurs.addEventListener("click", () => {
    dashboardSection.style.display = "none";
    articlesSection.style.display = "none";
    utilisateursSection.style.display = "block";
    commentairesSection.style.display = "none";
});

commentaires.addEventListener("click", () => {
    dashboardSection.style.display = "none";
    articlesSection.style.display = "none";
    utilisateursSection.style.display = "none";
    commentairesSection.style.display = "block";
});