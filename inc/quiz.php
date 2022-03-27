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

    <form method="POST" action="answer.php">
        <p>ID: <br><input name="id" type="text" value="1"></p>
        <p>選んだ答え: <br><input name="selectedAnswer" type="text" value="C"></p>
        <p><input type="submit" value="送信"></p>
    </form>

    <div>
        <a href="top.php">戻る</a>
    </div>

</main>
<?php include'footer.php' ?>

</html>


