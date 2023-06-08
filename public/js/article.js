$(document).ready(function() {
  $('#save-btn').click(function() {
    let articleId = $(this).data('article-id'); // Obtenez l'identifiant de l'article à partir de votre page
    saveArticle(articleId);
  });
});

async function saveArticle(articleId) {
  try {
    await $.ajax({
      url: 'saveArticle',
      method: 'POST',
      data: { action: 'saveArticle', id: articleId }
    });
    
    console.log('Article sauvegardé avec succès');
  } catch (error) {
    console.error('Erreur lors de la sauvegarde de l\'article :', error);
  }
}
