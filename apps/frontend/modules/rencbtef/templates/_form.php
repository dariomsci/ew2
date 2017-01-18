<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('rencbtef/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a class="btn btn-lg btn-success" href="<?php echo url_for('rencbtef/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'rencbtef/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?', 'class'=>'btn btn-lg btn-danger')) ?>
          <?php endif; ?>
          <input type="submit" class="btn btn-lg btn-primary" value="Save" />
          
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['codemp']->renderLabel() ?></th>
        <td>
          <?php echo $form['codemp']->renderError() ?>
          <?php echo $form['codemp'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['codcom']->renderLabel() ?></th>
        <td>
          <?php echo $form['codcom']->renderError() ?>
          <?php echo $form['codcom'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['codtal']->renderLabel() ?></th>
        <td>
          <?php echo $form['codtal']->renderError() ?>
          <?php echo $form['codtal'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['numero']->renderLabel() ?></th>
        <td>
          <?php echo $form['numero']->renderError() ?>
          <?php echo $form['numero'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nroren']->renderLabel() ?></th>
        <td>
          <?php echo $form['nroren']->renderError() ?>
          <?php echo $form['nroren'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['codigo']->renderLabel() ?></th>
        <td>
          <?php echo $form['codigo']->renderError() ?>
          <?php echo $form['codigo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['codres']->renderLabel() ?></th>
        <td>
          <?php echo $form['codres']->renderError() ?>
          <?php echo $form['codres'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['hora']->renderLabel() ?></th>
        <td>
          <?php echo $form['hora']->renderError() ?>
          <?php echo $form['hora'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['descom']->renderLabel() ?></th>
        <td>
          <?php echo $form['descom']->renderError() ?>
          <?php echo $form['descom'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['letra']->renderLabel() ?></th>
        <td>
          <?php echo $form['letra']->renderError() ?>
          <?php echo $form['letra'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['torig']->renderLabel() ?></th>
        <td>
          <?php echo $form['torig']->renderError() ?>
          <?php echo $form['torig'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['norig']->renderLabel() ?></th>
        <td>
          <?php echo $form['norig']->renderError() ?>
          <?php echo $form['norig'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['forig']->renderLabel() ?></th>
        <td>
          <?php echo $form['forig']->renderError() ?>
          <?php echo $form['forig'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['importe']->renderLabel() ?></th>
        <td>
          <?php echo $form['importe']->renderError() ?>
          <?php echo $form['importe'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['detalle']->renderLabel() ?></th>
        <td>
          <?php echo $form['detalle']->renderError() ?>
          <?php echo $form['detalle'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
