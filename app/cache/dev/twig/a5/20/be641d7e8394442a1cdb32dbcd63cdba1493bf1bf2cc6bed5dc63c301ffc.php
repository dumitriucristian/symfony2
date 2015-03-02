<?php

/* GoldenBundle:Default:base.html.twig */
class __TwigTemplate_a520be641d7e8394442a1cdb32dbcd63cdba1493bf1bf2cc6bed5dc63c301ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
             ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a56fa94_part_1.js");
            // line 8
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a56fa94_part_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a56fa94.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "
        ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4bf665d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4bf665d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4bf665d_part_1.css");
            // line 12
            echo "
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            
        ";
            // asset "4bf665d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4bf665d_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4bf665d_part_2.css");
            // line 12
            echo "
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            
        ";
        } else {
            // asset "4bf665d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4bf665d") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4bf665d.css");
            // line 12
            echo "
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "   </head>
    <body>
       



        <div class='container-fluid'>
            <div id=\"header\">
                <div id=\"menu\" class=\"row\">
                    <ul class=\"col-sm-4 col-sm-offset-4\">
                        <li>
                            <a href=\"/\">Home</a>
                        </li>
                        <li>
                            <a href=\"/shop\">Shop</a>
                        </li>
                        <li>
                            <a href=\"/about\">About</a>
                        </li>
                        <li>
                            <a href=\"/blog\">Blog</a>
                        </li>
                        <li>
                            <a href=\"/contact\">Contact</a>
                        </li>
                    </ul>
               <a href=\"login\" id=\"login\" class=\"glyphicon glyphicon-off\" ></a>


                <div id=\"slider\" class=\"row\">
                </div>

                ";
        // line 48
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "            </div>
          

            <div id=\"content\">
                ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "            </div>
            <div id=\"footer\">
                ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "            </div>
         </div>   
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        // line 49
        echo "                    <h1>test</h1>
                ";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        // line 56
        echo "                    <p>Review Produse</p> 
                ";
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "                    <p>Here is general footer</p>
                ";
    }

    public function getTemplateName()
    {
        return "GoldenBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 61,  174 => 60,  169 => 56,  166 => 55,  161 => 49,  158 => 48,  152 => 6,  145 => 63,  143 => 60,  139 => 58,  137 => 55,  131 => 51,  129 => 48,  95 => 16,  88 => 13,  85 => 12,  77 => 13,  74 => 12,  67 => 13,  64 => 12,  60 => 11,  57 => 10,  37 => 8,  33 => 7,  29 => 6,  23 => 2,);
    }
}
