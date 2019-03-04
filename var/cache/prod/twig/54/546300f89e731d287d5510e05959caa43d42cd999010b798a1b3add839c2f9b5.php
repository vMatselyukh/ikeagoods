<?php

/* @PrestaShop/Admin/Module/catalog.html.twig */
class __TwigTemplate_ff116e5d32d9c3f83e280b51be548e4d3eb6f833a132f26b6c92f91a775a9c3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 25);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
    \$('body').on(
      'moduleCatalogLoaded',
      function() {
        ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "filterCategoryTab"), "method")) {
            // line 34
            echo "        \$('.module-category-menu[data-category-tab=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "filterCategoryTab"), "method"), "html", null, true);
            echo "\"]').click();
        ";
        }
        // line 36
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "filterCategoryRef"), "method")) {
            // line 37
            echo "        \$('.module-category-menu[data-category-ref=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "filterCategoryRef"), "method"), "html", null, true);
            echo "\"]').click();
        ";
        }
        // line 39
        echo "      }
    );
  </script>
";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        // line 45
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10 module-catalog-page\">
      ";
        // line 48
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 48)->display(array_merge($context, array("level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null))));
        // line 49
        echo "      ";
        // line 50
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 50)->display($context);
        // line 51
        echo "      ";
        // line 52
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 52)->display(array_merge($context, array("level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null))));
        // line 53
        echo "      ";
        // line 54
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/menu_top.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 54)->display($context);
        // line 55
        echo "      ";
        // line 56
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_loader.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 56)->display($context);
        // line 57
        echo "      ";
        // line 58
        echo "      ";
        if ($this->getAttribute(($context["topMenuData"] ?? null), "categories", array(), "any", true, true)) {
            // line 59
            echo "        ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/categories_grid.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 59)->display(array_merge($context, array("categories" => $this->getAttribute(($context["topMenuData"] ?? null), "categories", array()))));
            // line 60
            echo "      ";
        }
        // line 61
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 61,  103 => 60,  100 => 59,  97 => 58,  95 => 57,  92 => 56,  90 => 55,  87 => 54,  85 => 53,  82 => 52,  80 => 51,  77 => 50,  75 => 49,  72 => 48,  68 => 45,  65 => 44,  58 => 39,  52 => 37,  49 => 36,  43 => 34,  41 => 33,  32 => 28,  29 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Module/catalog.html.twig", "C:\\wamp64\\www\\install\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\catalog.html.twig");
    }
}
