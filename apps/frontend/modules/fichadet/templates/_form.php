<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('fichadet/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('fichadet/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'fichadet/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
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
        <th><?php echo $form['descom']->renderLabel() ?></th>
        <td>
          <?php echo $form['descom']->renderError() ?>
          <?php echo $form['descom'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['numpre']->renderLabel() ?></th>
        <td>
          <?php echo $form['numpre']->renderError() ?>
          <?php echo $form['numpre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cosecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['cosecha']->renderError() ?>
          <?php echo $form['cosecha'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cereal']->renderLabel() ?></th>
        <td>
          <?php echo $form['cereal']->renderError() ?>
          <?php echo $form['cereal'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['kilos1']->renderLabel() ?></th>
        <td>
          <?php echo $form['kilos1']->renderError() ?>
          <?php echo $form['kilos1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['kilos2']->renderLabel() ?></th>
        <td>
          <?php echo $form['kilos2']->renderError() ?>
          <?php echo $form['kilos2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['kilos3']->renderLabel() ?></th>
        <td>
          <?php echo $form['kilos3']->renderError() ?>
          <?php echo $form['kilos3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['kilos4']->renderLabel() ?></th>
        <td>
          <?php echo $form['kilos4']->renderError() ?>
          <?php echo $form['kilos4'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['kilos5']->renderLabel() ?></th>
        <td>
          <?php echo $form['kilos5']->renderError() ?>
          <?php echo $form['kilos5'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['kilos6']->renderLabel() ?></th>
        <td>
          <?php echo $form['kilos6']->renderError() ?>
          <?php echo $form['kilos6'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['kilos7']->renderLabel() ?></th>
        <td>
          <?php echo $form['kilos7']->renderError() ?>
          <?php echo $form['kilos7'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['kilstk']->renderLabel() ?></th>
        <td>
          <?php echo $form['kilstk']->renderError() ?>
          <?php echo $form['kilstk'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
