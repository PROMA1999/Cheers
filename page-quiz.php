<?php get_header(); ?>

<section class="body-quiz">
  <div class="quiz-container">
    <form class="py-5"id="quizForm">
      <div class="question-container active-question" id="question1">
        <div class="mb-3">
            <div class="infos-questions">
                <div class="question-number">Question 1/5</div>
                <p> Je me sens déprimé et j'éprouve des difficultés à faire face à la vie quotidienne.</p>
                <div class="instruction">Cochez la case appropriée</div>
            </div>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question1[]" value="a">
            Tout à fait d'accord
          </label>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question1[]" value="b">
            Un peu, par moment
          </label>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question1[]" value="c">
            Pas du tout
          </label>
          <button type="button" class="btn btn-primary next-question"disabled id="bouton">Question Suivante</button>
        </div>
      </div>

      <div class="question-container" id="question2">
        <div class="mb-3">
            <div class="infos-questions">
                <div class="question-number">Question 2/5</div>
                <p>Je me sens accablé(e) par le stress, j'ai du mal à faire face aux difficultés.</p>
                <div class="instruction">Cochez la case appropriée</div>
            </div>
          <label class="form-check">
          <input class="form-check-input" type="radio" name="question2[]" value="a">
          Tout à fait d'accord
          </label>
          <label class="form-check">
          <input class="form-check-input" type="radio" name="question2[]" value="b">
          Un peu, par moment
          </label>
          <label class="form-check">
          <input class="form-check-input" type="radio" name="question2[]" value="c">
          Pas du tout
          </label>
          <button type="button" class="btn btn-primary next-question" id="bouton">Question Suivante</button>
        </div>
      </div>

      <div class="question-container" id="question3">
        <div class="mb-3">
            <div class="infos-questions">
                <div class="question-number">Question 3/5</div>
                <p>J'ai des problèmes de sommeil persistants, je dors très peu ou trop et ne me sens pas reposé au réveil.</p>
                <div class="instruction">Cochez la case appropriée</div>
            </div>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question3[]" value="a">
            Tout à fait d'accord
          </label>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question3[]" value="b">
            Un peu, par moment
          </label>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question3[]" value="c">
            Pas du tout
          </label>
          <button type="button" class="btn btn-primary next-question" id="bouton">Question Suivante</button>
        </div>
      </div>

      <div class="question-container" id="question4">
        <div class="mb-3">
            <div class="infos-questions">
                <div class="question-number">Question 4/5</div>
                <p>J'ai une très faible estime de moi-même et je me dévalorise fréquemment.</p>
                <div class="instruction">Cochez la case appropriée</div>
            </div>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question4[]" value="a">
            Tout à fait d'accord
          </label>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question4[]" value="b">
            Un peu, par moment
          </label>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question4[]" value="c">
            Pas du tout
          </label>
          <button type="button" class="btn btn-primary next-question" id="bouton">Question Suivante</button>
        </div>
      </div>

      

      <div class="question-container" id="question5">
        <div class="mb-3">
            <div class="infos-questions">
                <div class="question-number">Question 5/5</div>
                <p>J'ai des difficultés relationnelles majeures et je me sens complètement isolé(e).</p>
                <div class="instruction">Cochez la case appropriée</div>
            </div>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question5[]" value="a">
            Tout à fait d'accord
          </label>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question5[]" value="b">
            Un peu, par moment
          </label>
          <label class="form-check">
            <input class="form-check-input" type="radio" name="question5[]" value="c">
            Pas du tout
          </label>
          <button type="button" class="btn btn-primary next-question" id="bouton">Voir les résultats</button>
        </div>
      </div>
      <div class="body-result">
        <div id="result" class="mt-4"></div>
      </div>
    </form>
  </div>

<!-- Liens vers Bootstrap JS et Popper.js pour les fonctionnalités Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const questions = document.querySelectorAll('.question-container');
  const nextButtons = document.querySelectorAll('.next-question');
  let currentQuestion = 0;

  function showQuestion(index) {
    questions.forEach(question => question.classList.remove('active-question'));
    questions[index].classList.add('active-question');
  }

  function calculateResult() {
  const answers = [];
  questions.forEach((question, index) => {
    const checkboxes = question.querySelectorAll(`#question${index + 1} input[type="radio"]:checked`);
    const values = [];
    checkboxes.forEach(radio => values.push(radio.value));
    answers.push(values); // Stocker les valeurs sans objets supplémentaires
  });

  let resultText = '';

  // Logique pour déterminer le résultat en fonction des réponses
  const anyCSelected = answers.some(answer => answer.includes('c'));
  const anyBSelected = answers.some(answer => answer.includes('b'));

  if (anyCSelected) {
    resultText = 'Votre santé mentale à l\'air stable';
  } else if (anyBSelected) {
    resultText = 'Votre évaluation suggère que vous montrez des signes de mal-être, il peut être utile de rechercher un soutien ou une aide professionnelle.';
  } else {
    resultText = 'Votre évaluation suggère qu\'il peut y avoir des signes de problèmes sérieux de santé mentale. Il est fortement recommandé de consulter un professionnel de la santé mentale pour une évaluation approfondie.Votre évaluation suggère que votre santé mentale semble normale.';
  }

  // Affichage du résultat
  document.body.innerHTML = `
    <div class="container">
      <div id="result" class="mt-4">
        <p>${resultText}</p>
        <button class="btn btn-primary restart-quiz">Recommencer le quizz</button>
      </div>
    </div>`;

  // Ajouter un gestionnaire d'événements pour recommencer le quiz
  document.querySelector('.restart-quiz').addEventListener('click', restartQuiz);
}

function restartQuiz() {
  // Recharger la page pour recommencer le quiz
  window.location.reload();
}


  nextButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
      currentQuestion++;
      if (currentQuestion < questions.length) {
        showQuestion(currentQuestion);
      } else {
        calculateResult();
      }
    });
  });

  const question1Inputs = document.querySelectorAll('input[name="question1[]"]');

question1Inputs.forEach(input => {
  input.addEventListener('click', () => {
    const nextButton = document.querySelector('#question1 .next-question');
    nextButton.disabled = false;
  });
});

</script>
</section>
<?php get_footer(); ?>