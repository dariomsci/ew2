<?php
// auto-generated by sfViewConfigHandler
// date: 2017/01/16 17:39:03
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Consulta Corriente Web', false, false);

  $response->addStylesheet('bootstrap-theme.css', '', array ());
  $response->addStylesheet('bootstrap-theme.css.map', '', array ());
  $response->addStylesheet('bootstrap-theme.min.css', '', array ());
  $response->addStylesheet('bootstrap-theme.min.css.map', '', array ());
  $response->addStylesheet('bootstrap.css', '', array ());
  $response->addStylesheet('bootstrap.css.map', '', array ());
  $response->addStylesheet('bootstrap.min.css', '', array ());
  $response->addStylesheet('bootstrap.min.css.map', '', array ());
  $response->addJavascript('bootstrap.min.js', '', array ());
  $response->addJavascript('npm.js', '', array ());


