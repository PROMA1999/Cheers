<?php include 'header2.php'; ?>

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
    resultText = `<h2>Votre santé mentale à l'air stable</h2>
                <p>Vos réponses suggèrent que votre bien-être mental semble normal. Cependant, gardez à l'esprit l'importance de prendre soin de votre santé mentale. Continuez à vous engager dans des activités qui vous procurent du bien-être et restez attentif à tout changement ou toute détérioration potentielle.</p>
                <p>Bravo ! Votre évaluation suggère que votre bien-être mental semble stable. Continuez à explorer nos articles sur la santé pour enrichir vos connaissances et maintenir votre équilibre psychologique.</p>`;
  } else if (anyBSelected) {
    resultText = `<h2>Votre évaluation indique un mélange de signes</h2>
                <p>Votre évaluation suggère quelques zones de préoccupation mais aussi des aspects positifs. Bien que ces signaux puissent ne pas indiquer une urgence immédiate, vous pourriez bénéficier d'un soutien supplémentaire. Prendre du temps pour vous-même, discuter avec des proches ou rechercher l'aide d'un professionnel de la santé mentale peuvent contribuer à améliorer votre bien-être.</p>
                <p>N'oubliez pas que prendre soin de sa santé mentale est essentiel. Consultez nos conseils sur la santé mentale et nos remèdes naturels pour découvrir des astuces et des conseils pour cultiver votre bien-être mental au quotidien.</p>`;
  } else {
    resultText = `<h2>Vous montrez des signes de mal-être</h2>
                <p>Votre évaluation suggère qu'il peut y avoir des signes de problèmes sérieux de santé mentale. Il est essentiel de ne pas sous-estimer ces signaux. Il est fortement recommandé de consulter un professionnel de la santé mentale pour une évaluation approfondie et un accompagnement adapté. Prendre cette étape peut être un premier pas crucial vers une meilleure santé mentale.</p>
                <p>Bien que cela ne résoudra peut-être pas vos problèmes, nous vous encourageons également à consulter nos conseils pour favoriser l'amélioration de vos problèmes.</p>`;
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

/*function restartQuiz() {
  // Recharger la page pour recommencer le quiz
  window.location.reload();
}*/


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