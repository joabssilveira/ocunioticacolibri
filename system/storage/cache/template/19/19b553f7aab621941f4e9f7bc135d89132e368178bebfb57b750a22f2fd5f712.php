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

/* extension/dashboard/map_brazil_info.twig */
class __TwigTemplate_2892d7f2b3e398d61dcd7312451a806f210cdba87f06665737920e086f7d72a3 extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"fa fa-globe\"></i> ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
    <div id=\"vmap\" style=\"width: 100%; height: 260px;\"></div>
  </div>
</div>
<link type=\"text/css\" href=\"view/javascript/jquery/jqvmap/jqvmap.css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/jquery.vmap.min.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/maps/jquery.vmap.brazil.min.js\" charset=\"utf-8\"></script>
<script type=\"text/javascript\"><!--
  \$(document).ready(function(){
    \$.ajax({
      url: 'index.php?route=extension/dashboard/map_brazil/map_brazil&user_token=";
        // line 15
        echo ($context["user_token"] ?? null);
        echo "',
      dataType: 'json',
      success: function(json){
        data = [];

        for (i in json) {
          data[i] = json[i]['total'];
        }

        \$('#vmap').vectorMap({
          map: 'brazil_br',
          backgroundColor: '#FFFFFF',
          borderColor: '#FFFFFF',
          color: '#9FD5F1',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          values: data,
          normalizeFunction: 'polynomial',
          onLabelShow: function(event, label, code) {
            if (json[code]) {
              label.html('<strong>' + label.text() + '</strong><br />' + '";
        // line 37
        echo ($context["text_order"] ?? null);
        echo " ' + json[code]['total'] + '<br />' + '";
        echo ($context["text_sale"] ?? null);
        echo " ' + json[code]['amount']);
            }
          }
        });
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/map_brazil_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 37,  56 => 15,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/dashboard/map_brazil_info.twig", "");
    }
}
