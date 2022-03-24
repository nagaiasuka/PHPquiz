<?php include'header.php' ?>
<main>
    <div class="quiz_box">
        <div class="quiz">
            <h2>問題<?php echo $id; ?></h2>
            <p>
                <?php echo $question; ?>
            </p>
        </div>
        <div class="choices">
            <ol class="answers" data-id="<?php echo $id; ?>">
                <?php foreach($answers as $key =>$value): ?>
                    <li data-answer="<?php echo $key ?>"><?php echo $value ?></li>
                <?php endforeach; ?>
            </ol>
        </div>
    </div>
    <div class="answer_box">
        <h3 class="answer"><?php echo $answer?>.<?php echo $answer_value ?></h3>
        <p class="answer_text"><?php echo $answer_text ?></p>
    </div>
</main>
<?php include'footer.php' ?>

</html>


