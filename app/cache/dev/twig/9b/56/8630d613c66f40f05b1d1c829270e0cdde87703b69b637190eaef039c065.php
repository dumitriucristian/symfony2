<?php

/* GoldenBundle:Default:contact.html.twig */
class __TwigTemplate_9b568630d613c66f40f05b1d1c829270e0cdde87703b69b637190eaef039c065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("GoldenBundle:Default:base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GoldenBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "\tFirst page
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<h1>Contact Form should be right here</h1>
";
    }

    public function getTemplateName()
    {
        return "GoldenBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  45 => 8,  40 => 5,  37 => 4,  11 => 2,);
    }
}
