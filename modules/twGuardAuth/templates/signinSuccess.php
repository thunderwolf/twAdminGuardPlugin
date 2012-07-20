<div id="twadmin-login-content" class="row">
	<div id="twadmin-login-box" class="span4 offset4">
		<?php include_stylesheets_for_form($form) ?>
		<?php include_javascripts_for_form($form) ?>
		<div class="twadmin-login-title">Logowanie</div>
		<?php if ($form->hasGlobalErrors()) : ?>
		<?php echo $form->renderGlobalErrors() ?>
		<?php endif; ?>
		<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" class="twadmin-login-content">
			<?php echo $form->renderHiddenFields() ?>
			<div class="control-group<?php if ($form['username']->hasError()) : ?> warning<?php endif; ?>">
				<?php echo $form['username']->renderLabel() ?>
				<?php if ($form['username']->hasError()) : ?>
					<?php foreach ($form['username']->getError() as $error) : ?><span class="help-inline"><?php echo $error ?></span><?php endforeach; ?>
				<?php endif; ?>
				<?php echo $form['username']->render(array(
		'class' => 'input-xlarge'
	)) ?>
				<?php if ($help = $form['username']->renderHelp()) : ?>
					<p class="help-block"><?php echo __($help, array(), 'signin') ?></p>
				<?php endif; ?>
			</div>
			<div class="control-group<?php if ($form['password']->hasError()) : ?> warning<?php endif; ?>">
				<?php echo $form['password']->renderLabel() ?>
				<?php if ($form['password']->hasError()) : ?>
					<?php foreach ($form['password']->getError() as $error) : ?><span class="help-inline"><?php echo $error ?></span><?php endforeach; ?>
				<?php endif; ?>
				<?php echo $form['password']->render(array(
		'class' => 'input-xlarge'
	)) ?>
				<?php if ($help = $form['password']->renderHelp()) : ?>
					<p class="help-block"><?php echo __($help, array(), 'signin') ?></p>
				<?php endif; ?>
			</div>
			<label class="checkbox"><?php echo $form['remember'] ?> Zapamiętaj mnie</label>
			<div style="text-align: right !important;">
				<button class="btn btn-primary" type="submit">Zaloguj</button>
			</div>
		</form>
	</div>
</div>
