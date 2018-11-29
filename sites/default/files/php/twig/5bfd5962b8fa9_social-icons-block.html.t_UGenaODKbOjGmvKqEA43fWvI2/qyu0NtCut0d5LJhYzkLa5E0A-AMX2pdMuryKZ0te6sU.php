<?php

/* modules/social_icons/templates/social-icons-block.html.twig */
class __TwigTemplate_742b4460d94a680f000102d4d0ff4ef3ce635ba37fc0f6bd9e41e8f317e63e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 11);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 7
        echo "<!-- Social Icons Template-->

<div class=\"background\">
    <div class=\"contacts social\">
        <h3><span class=\"title\">";
        // line 11
        if (($context["title"] ?? null)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo " ";
        }
        echo "</span></h3>
        <div class=\"dark\">                                  
            ";
        // line 13
        if (($context["facebook_icon"] ?? null)) {
            // line 14
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_icon"] ?? null), "html", null, true));
            echo "\" title=\"Facebook\"><i class=\"fa fa-facebook-square\"></i></a>
            ";
        }
        // line 16
        echo "            
            ";
        // line 17
        if (($context["twitter_icon"] ?? null)) {
            // line 18
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_icon"] ?? null), "html", null, true));
            echo "\" title=\"Twitter\"><i class=\"fa fa-twitter-square\"></i></a>
            ";
        }
        // line 20
        echo "          
            ";
        // line 21
        if (($context["google_plus_icon"] ?? null)) {
            // line 22
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_icon"] ?? null), "html", null, true));
            echo "\" title=\"Google Plus\"><i class=\"fa fa-google-plus-square\"></i></a>
            ";
        }
        // line 24
        echo "\t\t\t
            ";
        // line 25
        if (($context["instragram_icon"] ?? null)) {
            // line 26
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["instragram_icon"] ?? null), "html", null, true));
            echo "\" title=\"Instagram\"><i class=\"fa fa-instagram\"></i></a>
            ";
        }
        // line 28
        echo "\t\t\t
            ";
        // line 29
        if (($context["telegram_icon"] ?? null)) {
            // line 30
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["telegram_icon"] ?? null), "html", null, true));
            echo "\" title=\"Telegram\"><i class=\"fa fa-telegram\"></i></a>
            ";
        }
        // line 32
        echo "
            ";
        // line 33
        if (($context["linkedin_icon"] ?? null)) {
            // line 34
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_icon"] ?? null), "html", null, true));
            echo "\" title=\"LinkedIn\"><i class=\"fa fa-linkedin-square\"></i></a>
            ";
        }
        // line 36
        echo "            
            ";
        // line 37
        if (($context["pinterest_icon"] ?? null)) {
            // line 38
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest_icon"] ?? null), "html", null, true));
            echo "\" title=\"Pinterest\"><i class=\"fa fa-pinterest-square\"></i></a>
            ";
        }
        // line 40
        echo "            
\t    ";
        // line 41
        if (($context["youtube_icon"] ?? null)) {
            // line 42
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["youtube_icon"] ?? null), "html", null, true));
            echo "\" title=\"Youtube\"><i class=\"fa fa-youtube-square\"></i></a>
            ";
        }
        // line 44
        echo "            
        </div>
    </div>
</div>
<!-- End Social Icons-->";
    }

    public function getTemplateName()
    {
        return "modules/social_icons/templates/social-icons-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  136 => 42,  134 => 41,  131 => 40,  125 => 38,  123 => 37,  120 => 36,  114 => 34,  112 => 33,  109 => 32,  103 => 30,  101 => 29,  98 => 28,  92 => 26,  90 => 25,  87 => 24,  81 => 22,  79 => 21,  76 => 20,  70 => 18,  68 => 17,  65 => 16,  59 => 14,  57 => 13,  49 => 11,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/social_icons/templates/social-icons-block.html.twig", "C:\\xampp\\htdocs\\local\\drupalformation\\modules\\social_icons\\templates\\social-icons-block.html.twig");
    }
}
