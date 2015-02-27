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
            'sidebar' => array($this, 'block_sidebar'),
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
    </head>
    <body>
        <div id=\"header\">
        ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "        </div>
        <div id=\"sidebar\">
            ";
        // line 15
        $this->displayBlock('sidebar', $context, $blocks);
        // line 21
        echo "        </div>

        <div id=\"content\">
            ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "        </div>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "            <h1>This is the unique header</h1>
        ";
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        // line 16
        echo "                <ul>
                      <li><a href=\"/\">Home</a></li>
                      <li><a href=\"/blog\">Blog</a></li>
                </ul>
            ";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "                <p>Here is the general content</p> 
            ";
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "                <p>Here is general footer</p>
            ";
    }

    public function getTemplateName()
    {
        return "GoldenBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  97 => 29,  92 => 25,  89 => 24,  81 => 16,  78 => 15,  73 => 11,  70 => 10,  64 => 6,  58 => 32,  56 => 29,  52 => 27,  50 => 24,  45 => 21,  43 => 15,  39 => 13,  37 => 10,  30 => 6,  24 => 2,);
    }
}
