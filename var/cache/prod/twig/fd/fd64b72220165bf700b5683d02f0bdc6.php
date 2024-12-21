<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__66e75b191bd3d0f08a6ae314728e30a4 */
class __TwigTemplate_7b94f9492f99957e4d316c2a24d07823 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Accueil • PrestaShopTest</title>

  <script type=\"text/javascript\">
    var help_class_name = 'HOME';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.2.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '563ec515adc7c37147e65b3126fa5b1f';
    var currentIndex = 'index.php?controller=HOME';
    var employee_token = '5402f95eb23ac9889910d80a53266aeb';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/admin761h7ukitvosetlu8ot/index.php/improve/modules/manage?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE';
    var admin_notification_get_link = '/admin761h7ukitvosetlu8ot/index.php/common/notifications?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE';
    var admin_notification_push_link = adminNotificationPushLink = '/admin761h7ukitvosetlu8ot/index.php/common/notifications/ack?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE';
    var tab_modules_list = '';
    var update_succes";
        // line 42
        echo "s_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/admin761h7ukitvosetlu8ot/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin761h7ukitvosetlu8ot/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin761h7ukitvosetlu8ot/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.c13a0d59.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin761h7ukitvosetlu8ot/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin761h7ukitvosetlu8ot\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin761h7ukitvosetlu8ot\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\";
var contextPsAccounts = {\"currentContext\":{\"type\":1,\"id\":1},\"psxName\":\"ps_edition_basic\",\"psIs17\":true,\"psAccountsVersion\":\"7.0.8\",\"psAccountsIsInstalled\":true,\"psAccountsInstallLink\":null,\"psAccountsIsEnabled";
        // line 70
        echo "\":true,\"psAccountsEnableLink\":\"http:\\/\\/localhost:8080\\/admin761h7ukitvosetlu8ot\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_accounts?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\",\"psAccountsIsUptodate\":true,\"psAccountsUpdateLink\":null,\"user\":{\"uuid\":null,\"email\":null,\"emailIsValidated\":false,\"isSuperAdmin\":true},\"backendUser\":{\"email\":\"lepuilmathieu@gmail.com\",\"employeeId\":1,\"isSuperAdmin\":true},\"currentShop\":{\"id\":\"1\",\"name\":\"PrestaShopTest\",\"domain\":\"localhost:8080\",\"domainSsl\":\"localhost:8080\",\"physicalUri\":\"\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost:8080\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAMNq3IxjK\\/rdWtwpVL2w0wpm\\/tXqds58WvvmedOSRIbPyV1AwWc2NIhj\\r\\nj4TUp5G\\/+HMTRbtvZ74e1d06aJBnB2+Lj3\\/vnulics9rfk2qzD0AulJm9T5FyG4g\\r\\nR53yz+VZnwSPMzvThERFLvczQM9ZI0XAzOGaCGchbju74bCe+3TdAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost:8080\\/admin761h7ukitvosetlu8ot\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=8a3a154427645c350e8cd0e4a44b1c94\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.2.0\"},\"isShopContext\":true,\"superAdminEmail\":\"lepuilmathieu@gmail.com\",\"onboardingLink\":\"https:\\/\\/accounts.distribution.prestashop.net?shops=W3siaWQiOiIxIiwibmFtZSI6IlByZXN0YVNob3BUZXN0IiwiZG9tYWluIjoibG9jYWxob3N0OjgwODAiLCJkb21haW5Tc2wiOiJsb2NhbGhvc3Q6ODA4MCIsInBoeXNpY2FsVXJpIjoiXC8iLCJ2aXJ0dWFsVXJpIjoiIiwiZnJvbnRVcmwiOiJodHRwczpcL1wvbG9jYWxob3N0OjgwODBcLyIsInV1aWQiOm51bGwsInB1YmxpY0tleSI6Ii0tLS0tQkVHSU4gUlNBIFBVQkxJQyBLRVktLS0tLVxyXG5NSUdKQW9HQkFNTnEzSXhqS1wvcmRXdHdwVkwydzB3cG1cL3RYcWRzNThXdnZtZWRPU1JJYlB5VjFBd1djMk5JaGpcclxuajRUVXA1R1wvK0hNVFJidHZaNzRlMWQwNmFKQm5CMitMajNcL3ZudWxpY3M5cmZrMnF6RDBBdWxKbTlUNUZ5RzRnXHJcblI1M3l6K1ZabndTUE16dlRoRVJGTHZjelFNOVpJMFhBek9HYUNHY2hianU3NGJDZSszVGRBZ01CQUFFPVxyXG4tLS0tLUVORCBSU0EgUFVCTElDIEtFWS0tLS0t";
        echo "IiwiZW1wbG95ZWVJZCI6IjEiLCJ1c2VyIjp7ImVtYWlsIjpudWxsLCJlbWFpbElzVmFsaWRhdGVkIjpmYWxzZSwidXVpZCI6bnVsbH0sInVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDgwXC9hZG1pbjc2MWg3dWtpdHZvc2V0bHU4b3RcL2luZGV4LnBocD9jb250cm9sbGVyPUFkbWluTW9kdWxlcyZjb25maWd1cmU9cHNfZWRpdGlvbl9iYXNpYyZzZXRTaG9wQ29udGV4dD1zLTEmdG9rZW49OGEzYTE1NDQyNzY0NWMzNTBlOGNkMGU0YTQ0YjFjOTQiLCJpc0xpbmtlZFY0IjpmYWxzZSwidW5saW5rZWRBdXRvIjpmYWxzZSwibXVsdGlzaG9wIjpmYWxzZSwibW9kdWxlTmFtZSI6InBzX2VkaXRpb25fYmFzaWMiLCJwc1ZlcnNpb24iOiI4LjIuMCJ9XQ==\",\"ssoResendVerificationEmail\":\"https:\\/\\/auth.prestashop.com\\/account\\/send-verification-email\",\"manageAccountLink\":\"https:\\/\\/auth.prestashop.com\\/login?lang=fr\",\"isOnboardedV4\":false,\"shops\":[{\"id\":\"1\",\"name\":\"Default\",\"shops\":[{\"id\":\"1\",\"name\":\"PrestaShopTest\",\"domain\":\"localhost:8080\",\"domainSsl\":\"localhost:8080\",\"physicalUri\":\"\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost:8080\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAMNq3IxjK\\/rdWtwpVL2w0wpm\\/tXqds58WvvmedOSRIbPyV1AwWc2NIhj\\r\\nj4TUp5G\\/+HMTRbtvZ74e1d06aJBnB2+Lj3\\/vnulics9rfk2qzD0AulJm9T5FyG4g\\r\\nR53yz+VZnwSPMzvThERFLvczQM9ZI0XAzOGaCGchbju74bCe+3TdAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost:8080\\/admin761h7ukitvosetlu8ot\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=8a3a154427645c350e8cd0e4a44b1c94\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.2.0\",\"moduleVersion\":\"7.0.8\"}],\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.2.0\"}],\"adminAjaxLink\":\"http:\\/\\/localhost:8080\\/admin761h7ukitvosetlu8ot\\/index.php?controller=AdminAjaxPsAccounts&ajax=1&token=1342f09f32dd01a1f42d8007cc2bc49b\",\"accountsUiUrl\":\"https:\\/\\/accounts.distribution.prestashop.net\",\"dependencies\":{\"ps_eventbus\":{\"isInstalled\":true,\"installLink\":\"http:\\/\\/localhost:8080\\/admin761h7ukitvosetlu8ot\\/index.php\\/improve\\/";
        echo "modules\\/manage\\/action\\/install\\/ps_eventbus?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\",\"isEnabled\":true,\"enableLink\":\"http:\\/\\/localhost:8080\\/admin761h7ukitvosetlu8ot\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_eventbus?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\"}}};
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/admin761h7ukitvosetlu8ot/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/admin761h7ukitvosetlu8ot/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/t";
        // line 86
        echo "ools.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/admin761h7ukitvosetlu8ot/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin761h7ukitvosetlu8ot/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script type=\"module\" src=\"/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost:8080\\/admin761h7ukitvosetlu8ot\\/index.php?controller=AdminGamification&token=b9b38823924090f59c2188f0f3a8ae62\";
            var current_id_tab = 164;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin761h7ukitvosetlu8ot/index.php/common/notifications?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script>

";
        // line 120
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr home\"
  data-base-url=\"/admin761h7ukitvosetlu8ot/index.php\"  data-token=\"lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin761h7ukitvosetlu8ot/index.php/modules/pseditionbasic/homepage?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\"></a>
      <span id=\"shop_version\">8.2.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php/sell/orders?token=be02da9bdafc61e79c0d6962e60bcc01\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=1a6a82d53fb2bd080b736829af3aa808\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php/improve/modules/manage?token=be02da9bdafc61e79c0d6962e60bcc01\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=30d17df683ecfb4008f1abf5a4aff9ed\"
                 data-item=\"Nouveau bon de réduction\"";
        // line 155
        echo "
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php/sell/catalog/products-v2/create?token=be02da9bdafc61e79c0d6962e60bcc01\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php/sell/catalog/categories/new?token=be02da9bdafc61e79c0d6962e60bcc01\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"95\"
        data-icon=\"\"
        data-method=\"add\"
        data-url=\"index.php/modules/pseditionbasic/homepage?-8BAnDbLO-DbnITsMwLUm2oE\"
        data-post-link=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminQuickAccesses&token=a210996cb4b28294d81f4334bb3460f5\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Bienvenue - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminQuickAccesses&token=a210996cb4b28294d81f4334bb3460f5\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin761h7ukitvosetlu8ot/index.php?controller=AdminSearch&amp;token=55454ebd33587bd78a04bd6bb363af54\"
      role=\"search\">
  <input ";
        // line 195
        echo "type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"mat";
        // line 210
        echo "erial-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php/sell/orders?token=be02da9bdafc61e79c0d6962e60bcc01\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=1a6a82d53fb2bd080b736829af3aa808\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php/improve/modules/manage?token=be02da9bdafc61e79c0d6962e60bcc01\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=30d17df683ecfb4008f1abf5a4aff9ed\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php/sell/catalog/products-v2/creat";
        // line 247
        echo "e?token=be02da9bdafc61e79c0d6962e60bcc01\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php/sell/catalog/categories/new?token=be02da9bdafc61e79c0d6962e60bcc01\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"177\"
      data-icon=\"\"
      data-method=\"add\"
      data-url=\"index.php/modules/pseditionbasic/homepage?-8BAnDbLO-DbnITsMwLUm2oE\"
      data-post-link=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminQuickAccesses&token=a210996cb4b28294d81f4334bb3460f5\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Bienvenue - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminQuickAccesses&token=a210996cb4b28294d81f4334bb3460f5\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Votre boutique est en mode maintenance.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuvent pas accéder à votre boutique lorsque le mode maintenance est activé.
    ";
        // line 291
        echo "      &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/admin761h7ukitvosetlu8ot/index.php/configure/shop/maintenance/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >";
        // line 334
        echo "
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=2538ca757c26f31bfe4ea801e3cee4d6\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" ro";
        // line 380
        echo "le=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8080/img/pr/default.jpg\" alt=\"Mathieu\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Mathieu</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/employees/1/edit?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\">
      <i";
        // line 429
        echo " class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost%3A8080&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/admin761h7ukitvosetlu8ot/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-fr&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> C";
        // line 449
        echo "entre d'assistance
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminLogin&amp;logout=1&amp;token=e306e0bba98e8d8c8d884285685dbb07\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/employees/toggle-navigation?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin761h7ukitvosetlu8ot/index.php/modules/pseditionbasic/homepage?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.0</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"164\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"165\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/pseditionbasic/homepage?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
               ";
        // line 494
        echo "       </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminDashboard&amp;token=19791160749c3034fa051297ce8d7232\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/orders/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shoppin";
        // line 531
        echo "g_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/orders/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/orders/invoices/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/orders/credit-slips/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Avoirs
                                </a>
          ";
        // line 562
        echo "                    </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/orders/delivery-slips/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminCarts&amp;token=2538ca757c26f31bfe4ea801e3cee4d6\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/catalog/products?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                     ";
        // line 594
        echo "                       </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/catalog/products?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/catalog/categories?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/catalog/monitoring/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAtt";
        // line 624
        echo "ributesGroups\">
                                <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminAttributesGroups&amp;token=e33bf2c755105a7906c9edbd52aed33f\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/catalog/brands/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/attachments/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminCartRules&amp;token=30d17df683ecfb4008f1abf5a4aff9ed\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                ";
        // line 653
        echo "                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/stocks/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/customers/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/customers/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Clients
                                </a>";
        // line 683
        echo "
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/addresses/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminCustomerThreads&amp;token=da44712f1d6e61faf61c5f7f83b1a0a3\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                             ";
        // line 715
        echo "   <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminCustomerThreads&amp;token=da44712f1d6e61faf61c5f7f83b1a0a3\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/customer-service/order-messages/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminReturn&amp;token=e293d265116ad8fca8e8c42660e1dd0e\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/metrics/legacy/stats?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statis";
        // line 745
        echo "tiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/metrics/legacy/stats?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/metrics?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                               ";
        // line 782
        echo "                       
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/mbo/modules/catalog/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/mbo/modules/catalog/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/modules/manage?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Gestionnaire de modules 
                                </a>
 ";
        // line 809
        echo "                             </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/improve/design/themes?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"137\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/improve/design/themes?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" d";
        // line 839
        echo "ata-submenu=\"149\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=3547cf48f1d879d0ffc4ed27b501d5fa\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/mbo/themes/catalog/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/design/mail_theme/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/design/cms-pages/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Pages
                                </a>
                              </li>

                                         ";
        // line 868
        echo "                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/design/modules/positions/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminImages&amp;token=a325e9e020a0379086d2033fbfdd8a71\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/link-widget/list?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:808";
        // line 899
        echo "0/admin761h7ukitvosetlu8ot/index.php?controller=AdminCarriers&amp;token=d92af83c0939e34a728e25ad8cfa1fb0\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminCarriers&amp;token=d92af83c0939e34a728e25ad8cfa1fb0\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/shipping/preferences/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
    ";
        // line 930
        echo "              
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/payment/payment_methods?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/payment/payment_methods?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/payment/preferences?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                ";
        // line 959
        echo "                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/international/localization/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/international/localization/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/international/zones/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Zones géograph";
        // line 987
        echo "iques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/international/taxes/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/international/translations/settings?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=22b9a49b1d09ec60412d94d90953652d\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                          ";
        // line 1020
        echo "                                          keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=22b9a49b1d09ec60412d94d90953652d\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminPsfacebookModule&amp;token=0a89c8b544eb9de452e24c76f4492abf\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"166\" id=";
        // line 1056
        echo "\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/pseditionbasic/settings?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/shop/preferences/preferences?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a h";
        // line 1086
        echo "ref=\"/admin761h7ukitvosetlu8ot/index.php/configure/shop/preferences/preferences?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/shop/order-preferences/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/shop/product-preferences/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/shop/customer-preferences/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                          ";
        // line 1115
        echo "    
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/shop/contacts/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/shop/seo-urls/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminSearchConf&amp;token=85a0d5b5f35b4f47e5dd4569c944d798\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/system-information/?_token=l";
        // line 1145
        echo "wdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/system-information/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/performance/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
 ";
        // line 1175
        echo "                               <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/administration/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/emails/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/import/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/employees/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                              ";
        // line 1205
        echo "                              
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/sql-requests/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/logs/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/webservice-keys/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/";
        // line 1231
        echo "advanced/feature-flags/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/security/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"143\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminKlaviyoPsConfig&amp;token=3fb4e57a727fdafc908b212885f97cbf\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1";
        // line 1264
        echo "62\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminPsAssistantSettings&amp;token=7b2b19ea1cdc32bea774c17a1b53884c\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/pseditionbasic/homepage?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" aria-current=\"page\">Bienvenue</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Accueil          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"https://help.prestashop-project.org/fr/doc/HOME?version=8.2.0&amp;country=fr\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div";
        // line 1319
        echo ">
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"https://help.prestashop-project.org/fr/doc/HOME?version=8.2.0&amp;country=fr\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1361
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/pseditionbasic/homepage?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1395
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 120
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1361
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1395
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__66e75b191bd3d0f08a6ae314728e30a4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1574 => 1395,  1553 => 1361,  1542 => 120,  1533 => 1395,  1493 => 1361,  1449 => 1319,  1392 => 1264,  1357 => 1231,  1329 => 1205,  1297 => 1175,  1265 => 1145,  1233 => 1115,  1202 => 1086,  1170 => 1056,  1132 => 1020,  1097 => 987,  1067 => 959,  1036 => 930,  1003 => 899,  970 => 868,  939 => 839,  907 => 809,  878 => 782,  839 => 745,  807 => 715,  773 => 683,  741 => 653,  710 => 624,  678 => 594,  644 => 562,  611 => 531,  572 => 494,  525 => 449,  503 => 429,  452 => 380,  404 => 334,  359 => 291,  313 => 247,  274 => 210,  257 => 195,  215 => 155,  175 => 120,  139 => 86,  119 => 70,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__66e75b191bd3d0f08a6ae314728e30a4", "");
    }
}
