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

/* __string_template__6150f770e1de6a30b7158bf4013039d4 */
class __TwigTemplate_3f725f0487a8fd5c2444d014384962c7 extends Template
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

<title>Thèmes • PrestaShopTest</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsxDesignThemeGeneral';
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
    var token = 'b3ca056b041c62245b0f0d674a2c9120';
    var currentIndex = 'index.php?controller=AdminPsxDesignThemeGeneral';
    var employee_token = '5402f95eb23ac9889910d80a53266aeb';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/admin761h7ukitvosetlu8ot/index.php/improve/modules/manage?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE';
    var admin_notification_get_link = '/admin761h7ukitvosetlu8ot/index.php/common/notifications?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE';
    var admin_notification_push_link = adminNotificationPushLink = '/admin761h7ukitvosetlu8ot/index.php/common/notifications/ack?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE';
    var ";
        // line 41
        echo "tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
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
      <link href=\"/modules/psxdesign/views/css/admin/index.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin761h7ukitvosetlu8ot\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin761h7ukitvosetlu8ot\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"fo";
        // line 71
        echo "rmat\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var getUuidAjaxUrl = \"\\/admin761h7ukitvosetlu8ot\\/index.php\\/modules\\/improve\\/design\\/user\\/userId?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\";
var importThemeLink = \"\\/admin761h7ukitvosetlu8ot\\/index.php\\/modules\\/improve\\/design\\/themes\\/import?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\";
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
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.0\"></script>
<script type=\"text/javascript\" ";
        // line 89
        echo "src=\"/admin761h7ukitvosetlu8ot/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin761h7ukitvosetlu8ot/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script type=\"module\" src=\"/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<script type=\"module\" src=\"/modules/psxdesign/views/js/index-themes.js\"></script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost:8080\\/admin761h7ukitvosetlu8ot\\/index.php?controller=AdminGamification&token=b9b38823924090f59c2188f0f3a8ae62\";
            var current_id_tab = 138;
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
        // line 123
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminpsxdesignthemegeneral\"
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
                 data-item=\"Nouv";
        // line 158
        echo "eau bon de réduction\"
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
        data-rand=\"29\"
        data-icon=\"icon-AdminPsxDesignParentTab\"
        data-method=\"add\"
        data-url=\"index.php/modules/improve/design/themes?-8BAnDbLO-DbnITsMwLUm2oE\"
        data-post-link=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminQuickAccesses&token=a210996cb4b28294d81f4334bb3460f5\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Th&egrave;mes - Liste\"
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
      action=\"/admin761h7ukitvosetlu8ot/index.php?controller=AdminSearch&amp;token=55454ebd3358";
        // line 196
        echo "7bd78a04bd6bb363af54\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
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
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID ";
        // line 213
        echo "panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
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
       href=\"http://localhost:8080/admin761h7uki";
        // line 250
        echo "tvosetlu8ot/index.php/sell/catalog/products-v2/create?token=be02da9bdafc61e79c0d6962e60bcc01\"
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
      data-rand=\"89\"
      data-icon=\"icon-AdminPsxDesignParentTab\"
      data-method=\"add\"
      data-url=\"index.php/modules/improve/design/themes?-8BAnDbLO-DbnITsMwLUm2oE\"
      data-post-link=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminQuickAccesses&token=a210996cb4b28294d81f4334bb3460f5\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Th&egrave;mes - Liste\"
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
              Vos visiteurs et clients ne peu";
        // line 293
        echo "vent pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
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
";
        // line 335
        echo "              href=\"#orders-notifications\"
              role=\"tab\"
            >
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
              ";
        // line 383
        echo "                      <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
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

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanc";
        // line 431
        echo "ed/employees/1/edit?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\">
      <i class=\"material-icons\">edit</i>
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
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel";
        // line 451
        echo "=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d'assistance
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
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"164\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"165\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/pseditionbasic/homepage?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
     ";
        // line 495
        echo "                 <span>
                      Accueil
                      </span>
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
     ";
        // line 534
        echo "                 <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
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
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/orders/credit-slips/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\"";
        // line 563
        echo " class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
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
                                                        ";
        // line 596
        echo "            keyboard_arrow_down
                                                            </i>
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

                                                                                  
                              
                                                            
                              ";
        // line 627
        echo "<li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
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
                              </";
        // line 654
        echo "li>

                                                                                  
                              
                                                            
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
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/sell/customers/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnIT";
        // line 685
        echo "sMwLUm2oE\" class=\"link\"> Clients
                                </a>
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
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu";
        // line 717
        echo "=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminCustomerThreads&amp;token=da44712f1d6e61faf61c5f7f83b1a0a3\" class=\"link\"> SAV
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
                      <i class=\"material-icons mi-assessment\">ass";
        // line 746
        echo "essment</i>
                      <span>
                      Statistiques
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
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

";
        // line 783
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
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/modules/manage?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2";
        // line 810
        echo "oE\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/improve/design/themes?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"137\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/improve/design/themes?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                            ";
        // line 839
        echo "      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminThemesParent\">
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
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/design/cms-pages/?_token=lwdG0l2EXlgu2mcAG5j-8BAn";
        // line 867
        echo "DbLO-DbnITsMwLUm2oE\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
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
                                              
                  
                                                      
                  
";
        // line 901
        echo "                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/admin761h7ukitvosetlu8ot/index.php?controller=AdminCarriers&amp;token=d92af83c0939e34a728e25ad8cfa1fb0\" class=\"link\">
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
               ";
        // line 929
        echo "                         </li>
                                              
                  
                                                      
                  
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
                  ";
        // line 958
        echo "              </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
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
                               ";
        // line 990
        echo " <a href=\"/admin761h7ukitvosetlu8ot/index.php/improve/international/zones/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Zones géographiques
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
                      Mark";
        // line 1020
        echo "eting
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
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

                              
   ";
        // line 1056
        echo "               
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"166\" id=\"subtab-AdminPsEditionBasicSettingsController\">
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
                                                      
                              
                                                   ";
        // line 1087
        echo "         
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/shop/preferences/preferences?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Paramètres généraux
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
                           ";
        // line 1114
        echo "     </a>
                              </li>

                                                                                  
                              
                                                            
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
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submen";
        // line 1147
        echo "u=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/system-information/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\">
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

                                                                                  
                              
               ";
        // line 1176
        echo "                                             
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/administration/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Administration
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
                         ";
        // line 1204
        echo "     </li>

                                                                                  
                              
                                                            
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

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li cl";
        // line 1233
        echo "ass=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin761h7ukitvosetlu8ot/index.php/configure/advanced/feature-flags/?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
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
                                           ";
        // line 1263
        echo "   
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"162\" id=\"subtab-AdminPsAssistantSettings\">
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
                      <li class=\"breadcrumb-item\">Personnalisation</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/improve/design/themes?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" aria-current=\"page\">Thèmes</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Thèmes          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/fr/doc/AdminPsxDesignThemeGeneral?version=8.2.0&amp;country=fr\" title=\"Aide\">
                  Aide
                </a>
           ";
        // line 1317
        echo "                         </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li class=\"nav-item\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/improve/design/themes?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" id=\"subtab-AdminPsxDesignThemeGeneral\" class=\"nav-link tab active current\" data-submenu=\"138\">
                      Thèmes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/improve/design/logos?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" id=\"subtab-AdminPsxDesignLogos\" class=\"nav-link tab \" data-submenu=\"139\">
                      Logos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </spa";
        // line 1340
        echo "n>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/improve/design/colors?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" id=\"subtab-AdminPsxDesignColors\" class=\"nav-link tab \" data-submenu=\"140\">
                      Couleurs
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin761h7ukitvosetlu8ot/index.php/modules/improve/design/fonts?_token=lwdG0l2EXlgu2mcAG5j-8BAnDbLO-DbnITsMwLUm2oE\" id=\"subtab-AdminPsxDesignFonts\" class=\"nav-link tab \" data-submenu=\"141\">
                      Polices
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ";
        // line 1359
        echo "                                                                                                                                                                                                                               </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop-project.org/fr/doc/AdminPsxDesignThemeGeneral?version=8.2.0&amp;country=fr\" title=\"Aide\">
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1390
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
        // line 1424
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 123
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1390
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

    // line 1424
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
        return "__string_template__6150f770e1de6a30b7158bf4013039d4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1605 => 1424,  1584 => 1390,  1573 => 123,  1564 => 1424,  1524 => 1390,  1491 => 1359,  1470 => 1340,  1445 => 1317,  1389 => 1263,  1357 => 1233,  1326 => 1204,  1296 => 1176,  1265 => 1147,  1230 => 1114,  1201 => 1087,  1168 => 1056,  1130 => 1020,  1098 => 990,  1064 => 958,  1033 => 929,  1003 => 901,  967 => 867,  937 => 839,  906 => 810,  877 => 783,  838 => 746,  807 => 717,  773 => 685,  740 => 654,  711 => 627,  678 => 596,  643 => 563,  612 => 534,  571 => 495,  525 => 451,  503 => 431,  453 => 383,  403 => 335,  359 => 293,  314 => 250,  275 => 213,  256 => 196,  216 => 158,  176 => 123,  140 => 89,  120 => 71,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6150f770e1de6a30b7158bf4013039d4", "");
    }
}
