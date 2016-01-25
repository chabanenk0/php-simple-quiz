<form method="POST">
    <p>Which function perform the following functionality?</p>
    <p><?php echo $question['correctDescription']?></p>
    <input type="radio" id="id01" name="answer" value="1">
    <label for="id01"><?php echo $question['term1']; ?></label>
    <br>
    <input type="radio" id="id02" name="answer" value="2">
    <label for="id02"><?php echo $question['term2']; ?></label>
    <br>
    <input type="radio" id="id03" name="answer" value="3">
    <label for="id03"><?php echo $question['term3']; ?></label>
    <br>
    <input type="radio" id="id04" name="answer" value="4">
    <label for="id04"><?php echo $question['term4']; ?></label>
    <br>
    <input type="submit" value="Send">
</form>
<a href="<?php echo $this->router->pathFor('reset'); ?>">Reset results</a>
