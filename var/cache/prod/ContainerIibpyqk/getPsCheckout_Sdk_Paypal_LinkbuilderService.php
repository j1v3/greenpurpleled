<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.sdk.paypal.linkbuilder' shared service.

return $this->services['ps_checkout.sdk.paypal.linkbuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\PayPalSdkLink\PayPalSdkLinkBuilder(${($_ = isset($this->services['ps_checkout.repository.paypal.account']) ? $this->services['ps_checkout.repository.paypal.account'] : $this->load('getPsCheckout_Repository_Paypal_AccountService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->load('getPsCheckout_Paypal_ConfigurationService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.configuration.repository']) ? $this->services['ps_checkout.funding_source.configuration.repository'] : $this->load('getPsCheckout_FundingSource_Configuration_RepositoryService.php')) && false ?: '_'});
