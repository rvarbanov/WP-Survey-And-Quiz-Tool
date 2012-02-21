<table class="wpsqt_likertmatrix_question">
<thead>
	<tr>
		<td></td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
	</tr>
</thead>
<?php foreach ($question['answers'] as $key => $answer) { ?>
	<tr>
		<td><?php echo $answer['text']; ?></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>][<?php echo $key; ?>]" value="<?php echo $answer['text']; ?>_1" id="answer_<?php echo $key; ?>" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>][<?php echo $key; ?>]" value="<?php echo $answer['text']; ?>_2" id="answer_<?php echo $key; ?>" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>][<?php echo $key; ?>]" value="<?php echo $answer['text']; ?>_3" id="answer_<?php echo $key; ?>" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>][<?php echo $key; ?>]" value="<?php echo $answer['text']; ?>_4" id="answer_<?php echo $key; ?>" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>][<?php echo $key; ?>]" value="<?php echo $answer['text']; ?>_5" id="answer_<?php echo $key; ?>" /></td>
	</tr>
<?php } ?>
</table>