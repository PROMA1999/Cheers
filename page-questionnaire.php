<?php include 'header2.php'; ?>
<?php
$quizList = new WP_Query([
    'post_type' => 'quiz',
    'posts_per_page' => -1
]);
?>

<section class="body-quiz">
  <div id="quizcontainer" class="quiz-container">
    <form class="py-5"id="quizForm">
      <?php $count = 0; $total_count = $quizList->found_posts ?>
      <?php while ( $quizList->have_posts() ) : $quizList->the_post(); $count++; ?>
        <div class="question-container <?php if ($count===1){echo 'active-question';} ?>" id="question1">
          <div class="mb-3">
            <div class="infos-questions">
              <div class="question-number">Question <?= $count; ?>/<?= $total_count; ?></div>
              <p><?php the_title(); ?></p>
              <div class="instruction">Cochez la case appropriée</div>
            </div>
            <?php $answers = explode(' / ', get_the_content()); ?>
            <label class="form-check">
              <input class="form-check-input" type="radio" name="question<?= $count; ?>[]" value="a">
              <?php  echo $answers[0]; ?>
            </label>
            <label class="form-check">
              <input class="form-check-input" type="radio" name="question<?= $count; ?>[]" value="b">
              <?php echo $answers[1]; ?>
            </label>
            <label class="form-check">
              <input class="form-check-input" type="radio" name="question<?= $count; ?>[]" value="c">
              <?php echo $answers[2]; ?>
            </label>
            <button type="button" class="btn btn-primary next-question"disabled id="bouton">Suivant</button>
          </div>
        </div>
      <?php endwhile; ?>
    </form>
  </div>

  <!-- Liens vers Bootstrap JS et Popper.js pour les fonctionnalités Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const allQuestions = document.querySelectorAll('.question-container');

      allQuestions.forEach((question, index) => {
          const inputs = question.querySelectorAll('input[type="radio"]');
          const nextButton = question.querySelector('.next-question');

          inputs.forEach(input => {
              input.addEventListener('click', () => {
                  nextButton.disabled = false;
              });
          });

          nextButton.addEventListener('click', () => {
              if (index < allQuestions.length - 1) {
                  allQuestions[index + 1].classList.add('active-question');
                  question.classList.remove('active-question');
              } else {
                  // Logique pour calculer et afficher le résultat
              }
            });
        });
    });



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
        const selectedRadio = question.querySelector(`input[type="radio"]:checked`);
        if (selectedRadio) {
            answers.push(selectedRadio.value);
        }
    });

    let resultText = '';


    // Logique pour déterminer le résultat en fonction des réponses
    const countA = answers.filter(answer => answer === 'a').length;
    const countB = answers.filter(answer => answer === 'b').length;
    const countC = answers.filter(answer => answer === 'c').length;

    if (countA > countB && countA > countC) {
        // Majorité de réponses 'a'
        resultText = `<h2>Vous montrez des signes de mal-être</h2>
                      <p>Votre évaluation suggère qu'il peut y avoir des signes de problèmes sérieux de santé mentale. Il est essentiel de ne pas sous-estimer ces signaux. Il est fortement recommandé de consulter un professionnel de la santé mentale pour une évaluation approfondie et un accompagnement adapté. Prendre cette étape peut être un premier pas crucial vers une meilleure santé mentale.</p>
                      <p>Bien que cela ne résoudra peut-être pas vos problèmes, nous vous encourageons également à consulter nos conseils pour favoriser l'amélioration de vos problèmes.</p>`;
    } else if (countC > countA && countC > countB) {
        // Majorité de réponses 'c'
        resultText = `<h2>Votre santé mentale a l'air stable</h2>
                      <p>Vos réponses suggèrent que votre bien-être mental semble normal. Cependant, gardez à l'esprit l'importance de prendre soin de votre santé mentale. Continuez à vous engager dans des activités qui vous procurent du bien-être et restez attentif à tout changement ou toute détérioration potentielle.</p>
                      <p>Bravo ! Votre évaluation suggère que votre bien-être mental semble stable. Continuez à explorer nos articles sur la santé pour enrichir vos connaissances et maintenir votre équilibre psychologique.</p>`;
    } else {
        // Tout autre combinaison
        resultText = `<h2>Votre évaluation indique un mélange de signes</h2>
                      <p>Votre évaluation suggère quelques zones de préoccupation mais aussi des aspects positifs. Bien que ces signaux puissent ne pas indiquer une urgence immédiate, vous pourriez bénéficier d'un soutien supplémentaire. Prendre du temps pour vous-même, discuter avec des proches ou rechercher l'aide d'un professionnel de la santé mentale peuvent contribuer à améliorer votre bien-être.</p>
                      <p>N'oubliez pas que prendre soin de sa santé mentale est essentiel. Consultez nos conseils sur la santé mentale et nos remèdes naturels pour découvrir des astuces et des conseils pour cultiver votre bien-être mental au quotidien.</p>`;
    }
 
 

    // Affichage du résultat dans le conteneur du quiz
    const quizContainer = document.getElementById('quizcontainer');
    quizContainer.innerHTML = `<div class="result-content">${resultText}</div>`;

    // Création et insertion de la div list-result
    const listResultHtml = `
        <div class="list-result">
          <p><strong>Trouver de l’aide :</strong></p>
          <ul>
              <li>Psychiatres</li>
              <li>Psychologues</li>
          </ul>
          <p><strong>Vous pourriez être intéressé par les articles suivants :</strong></p>
          <ul>
            <a href="/a>
              <li>Se Libérer De La Dépression : 2 Méthodes Naturelles à Essayer</li>
              <li>Apaisez l’Anxiété en Nourrissant Votre Esprit</li>
              <li>Apprivoisez la Colère Naturellement pour Retrouver l’Harmonie</li>
              <li>Boostez votre Vitalité Et Evitez le Surmenage</li>
          </ul>
        </div>
    `;
    quizContainer.insertAdjacentHTML('afterend', listResultHtml);
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
      const question2Inputs = document.querySelectorAll('input[name="question2[]"]');

    question2Inputs.forEach(input => {
      input.addEventListener('click', () => {
        const nextButton = document.querySelector('#question2 .next-question');
        nextButton.disabled = false;
      });
    });

  </script>
</section>
<?php get_footer(); ?>