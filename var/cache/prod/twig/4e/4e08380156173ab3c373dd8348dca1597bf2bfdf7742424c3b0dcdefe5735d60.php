<?php

/* @PrestaShop/Admin/Improve/Payment/PaymentMethods/payment_methods.html.twig */
class __TwigTemplate_202254efcee5e5eb41670888702b75420f390df9f6374280230b60687c90a15d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Payment/PaymentMethods/payment_methods.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 32
        if (($context["isSingleShopContext"] ?? null)) {
            // line 33
            echo "          <div class=\"card\">
            <h3 class=\"card-header\">
              <i class=\"material-icons\">credit_card</i> ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active payment", array(), "Admin.Payment.Feature"), "html", null, true);
            echo "
            </h3>
            <div class=\"card-block\">
              ";
            // line 38
            $this->loadTemplate("@PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig", "@PrestaShop/Admin/Improve/Payment/PaymentMethods/payment_methods.html.twig", 38)->display($context);
            // line 39
            echo "            </div>
          </div>
        ";
        } else {
            // line 42
            echo "          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have more than one shop and must select one to configure payment.", array(), "Admin.Payment.Notification"), "html", null, true);
            echo "</p>
          </div>
        ";
        }
        // line 46
        echo "      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/PaymentMethods/payment_methods.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 46,  58 => 43,  55 => 42,  50 => 39,  48 => 38,  42 => 35,  38 => 33,  36 => 32,  31 => 29,  28 => 28,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/Payment/PaymentMethods/payment_methods.html.twig", "C:\\wamp64\\www\\install\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Payment\\PaymentMethods\\payment_methods.html.twig");
    }
}
