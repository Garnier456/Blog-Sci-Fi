// document.querySelector(".btn-save").addEventListener("click", function () {
//   // Récupère l'identifiant de l'article à enregistrer
//   const articleId = $(".btn-save").data('article-id');

//   // Envoie une requête Ajax au serveur pour enregistrer l'article
//   $.ajax({
//     type: "POST",
//     url: "saveArticle.php",
//     data: { articleId: articleId },
//     dataType: "json",
//     success: console.log("Article enregistré avec succès!"),
//     error: console.log(
//       "Une erreur est survenue lors de l'enregistrement de l'article: "
//     ),
//   });
// });