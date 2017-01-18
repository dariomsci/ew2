<h1>Usuarioss List</h1>

<table>
  <thead>
    <tr>
      <th>Usuarios</th>
      <th>Webuser</th>
      <th>Webpwd</th>
      <th>Codvend</th>
      <th>Admin</th>
      <th>Nombre</th>
      <th>Mail</th>
      <th>Codzona</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarioss as $usuarios): ?>
    <tr>
      <td><a href="<?php echo url_for('auth/edit?usuarios_id='.$usuarios->getUsuariosId()) ?>"><?php echo $usuarios->getUsuariosId() ?></a></td>
      <td><?php echo $usuarios->getWebuser() ?></td>
      <td><?php echo $usuarios->getWebpwd() ?></td>
      <td><?php echo $usuarios->getCodvend() ?></td>
      <td><?php echo $usuarios->getAdmin() ?></td>
      <td><?php echo $usuarios->getNombre() ?></td>
      <td><?php echo $usuarios->getMail() ?></td>
      <td><?php echo $usuarios->getCodzona() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('auth/new') ?>">New</a>
