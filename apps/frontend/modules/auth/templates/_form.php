<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('auth/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?usuarios_id='.$form->getObject()->getUsuariosId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('auth/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'auth/delete?usuarios_id='.$form->getObject()->getUsuariosId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['webuser']->renderLabel() ?></th>
        <td>
          <?php echo $form['webuser']->renderError() ?>
          <?php echo $form['webuser'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['webpwd']->renderLabel() ?></th>
        <td>
          <?php echo $form['webpwd']->renderError() ?>
          <?php echo $form['webpwd'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['codvend']->renderLabel() ?></th>
        <td>
          <?php echo $form['codvend']->renderError() ?>
          <?php echo $form['codvend'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['admin']->renderLabel() ?></th>
        <td>
          <?php echo $form['admin']->renderError() ?>
          <?php echo $form['admin'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['mail']->renderLabel() ?></th>
        <td>
          <?php echo $form['mail']->renderError() ?>
          <?php echo $form['mail'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['codzona']->renderLabel() ?></th>
        <td>
          <?php echo $form['codzona']->renderError() ?>
          <?php echo $form['codzona'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
