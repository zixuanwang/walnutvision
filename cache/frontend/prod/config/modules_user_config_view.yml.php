<?php
// auto-generated by sfViewConfigHandler
// date: 2012/02/06 04:22:23
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'homeSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'aboutSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'joinSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'categorySuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'clientLoginAuthenticateSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'colorSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'materialSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'indexSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'registerSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'uploadSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'wallSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'querySuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'homeSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('preformat.css', '', array ());
  $response->addStylesheet('style2.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else if ($templateName.$this->viewName == 'aboutSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('preformat.css', '', array ());
  $response->addStylesheet('style2.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else if ($templateName.$this->viewName == 'joinSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('preformat.css', '', array ());
  $response->addStylesheet('style2.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else if ($templateName.$this->viewName == 'categorySuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else if ($templateName.$this->viewName == 'clientLoginAuthenticateSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else if ($templateName.$this->viewName == 'colorSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else if ($templateName.$this->viewName == 'materialSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else if ($templateName.$this->viewName == 'indexSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('bootstrap.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else if ($templateName.$this->viewName == 'registerSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('bootstrap.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else if ($templateName.$this->viewName == 'uploadSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else if ($templateName.$this->viewName == 'wallSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('bootstrap.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else if ($templateName.$this->viewName == 'querySuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('bootstrap.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '核桃', false, false);
  $response->addMeta('description', '核桃', false, false);
  $response->addMeta('keywords', 'shishang, fashion, mobile, iphone, android, location, 时尚', false, false);
  $response->addMeta('language', 'utf-8', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap-transition.js', '', array ());
  $response->addJavascript('bootstrap-alert.js', '', array ());
  $response->addJavascript('bootstrap-modal.js', '', array ());
  $response->addJavascript('bootstrap-dropdown.js', '', array ());
  $response->addJavascript('bootstrap-scrollspy.js', '', array ());
  $response->addJavascript('bootstrap-tab.js', '', array ());
  $response->addJavascript('bootstrap-tooltip.js', '', array ());
  $response->addJavascript('bootstrap-popover.js', '', array ());
  $response->addJavascript('bootstrap-button.js', '', array ());
  $response->addJavascript('bootstrap-collapse.js', '', array ());
  $response->addJavascript('bootstrap-carousel.js', '', array ());
  $response->addJavascript('bootstrap-typeahead.js', '', array ());
}

