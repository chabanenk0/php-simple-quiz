<?php
$totalAnswered = array_sum(array_column($statistics,'total_answers'));
$correctAnswered = array_sum(array_column($statistics,'correct_answers'));
?>
<p><?php echo isset($correct) ? 'Correct' : 'Not correct'; ?></p>
<p>Total questions answered: <?php echo $totalAnswered; ?></p>
<p>Questions answered correctly: <?php echo $correctAnswered; ?></p>
<a href="<?php echo $this->router->pathFor('tests', ['id' => $testId]); ?>">Next question</a>
<br>
<a href="<?php echo $this->router->pathFor('reset'); ?>">Reset results</a>
<?php ?>