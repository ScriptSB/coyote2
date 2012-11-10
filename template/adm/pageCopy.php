<script type="text/javascript">
<!--

	var parentPageSubject = '<?= $parentPageSubject; ?>';
//-->
</script>
<div id="page" style="overflow: hidden;">
	<?php include('_partialPage.php'); ?>

	<div id="page-content">

		<div style="float: right;">
			<?= Form::button('', 'Kopiuj', array('onclick' => 'window.location.href = \'' . url('adm/Page/Copy/' . $page_id) . '\'', 'class' => 'copy-button')); ?>
			<?= Form::button('', 'Edytuj', array('onclick' => 'window.location.href = \'' . url('adm/Page/Submit/' . $page_id) . '\'', 'class' => 'edit-button')); ?>
			<?php if (!$page_delete) : ?>
			<?= Form::button('', 'Usuń', array('id' => 'delete', 'class' => 'delete-button')); ?>
			<?php else : ?>
			<?= Form::button('', 'Przywróć', array('id' => 'restore', 'class' => 'restore-button')); ?>
			<?php endif; ?>
		</div>
		<br style="clear: both;" />

		<p class="note">UWAGA! Zamierasz skopiować wybraną gałąź. Dane zostaną skopiowane lecz strona będzie w dalszym ciągu wskazywała na ten sam tekst</p>

		<?= Form::open('', array('method' => 'post')); ?>
			<fieldset>
				<ol>
					<li>
						<label title="Kliknij na ikonę obok, a następnie kliknij na wybraną stronę w panelu po lewej">Strona bazowa</label>
						<?= Form::input('page_parent', $input->post('page_parent')); ?>
					</li>

					<li>
						<label></label>
						<?= Form::submit('', 'Kopiuj', array('class' => 'copy-button')); ?>
					</li>
				</ol>
			</fieldset>
		<?= Form::close(); ?>

	</div>
</div>