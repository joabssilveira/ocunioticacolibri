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

/* default/template/extension/module/slideshow.twig */
class __TwigTemplate_fbd5d7a7430d7d6cee24664518cffe3c274b77bfa04b63f970faf9e73d637c0c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"slideshow swiper-viewport\">
  <div id=\"slideshow";
        // line 2
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\"> 
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"swiper-slide text-center\" style=\"height: 20px\">
        ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6)) {
                // line 7
                echo "        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7);
                echo "\">
          <!--<img src=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
                echo "\" class=\"img-responsive\" />-->
          <img style=\"width: 100%\" src=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                echo "\" />
        </a>
        ";
            } else {
                // line 12
                echo "        <!--<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
                echo "\" class=\"img-responsive\" />-->
        <img style=\"width: 100%\" src=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 13);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 13);
                echo "\" />
        ";
            }
            // line 15
            echo "      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " 
    </div>
  </div>
  <div class=\"swiper-pagination slideshow";
        // line 19
        echo ($context["module"] ?? null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#slideshow";
        // line 26
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 29
        echo ($context["module"] ?? null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.slideshow .swiper-button-next',
    prevButton: '.slideshow .swiper-button-prev',
    spaceBetween: 30,
\tautoplay: 2500,
    autoplayDisableOnInteraction: true,
\tloop: true
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  109 => 26,  99 => 19,  94 => 16,  87 => 15,  80 => 13,  73 => 12,  65 => 9,  59 => 8,  54 => 7,  52 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/slideshow.twig", "");
    }
}
