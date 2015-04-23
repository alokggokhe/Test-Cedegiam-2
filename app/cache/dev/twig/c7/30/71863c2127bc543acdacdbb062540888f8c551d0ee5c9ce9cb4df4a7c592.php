<?php

/* MainBundle::layout.html.twig */
class __TwigTemplate_c73071863c2127bc543acdacdbb062540888f8c551d0ee5c9ce9cb4df4a7c592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 42
        $this->displayBlock('body', $context, $blocks);
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "<!-- En-tête du document  -->
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>

<!-- Balise meta  -->
<meta name=\"title\" content=\"Dandelion\">
<meta name=\"description\" content=\"\">
<meta name=\"keywords\" content=\"\">

<!-- Indexer et suivre -->
<meta name=\"robots\" content=\"index,follow\"/>

<!-- IE Compatibility modes -->
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

<!-- Viewport -->
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

<!-- Favicon -->
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/images/favicon.png"), "html", null, true);
        echo "\" />
<!--[if IE]><link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/images/favicon.ico"), "html", null, true);
        echo "\" /><![endif]-->

<!--  Relier une feuille CSS externe  -->
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/css/main.css"), "html", null, true);
        echo "\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" />

<!-- Relier un fichier JavaScript  -->
<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/jquery/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/respond.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->

";
        // line 39
        $this->displayBlock('title', $context, $blocks);
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "<body class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3\">
            <header>
                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" title=\"\">
                    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/images/ucb_logo.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                </a>
            </header>

            ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "
        </div>
    </div>
</body>
";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MainBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  132 => 53,  130 => 52,  123 => 48,  119 => 47,  111 => 43,  108 => 42,  100 => 39,  94 => 36,  90 => 35,  83 => 31,  79 => 30,  75 => 29,  69 => 26,  65 => 25,  59 => 22,  55 => 21,  35 => 3,  32 => 2,  28 => 42,  26 => 2,  23 => 1,);
    }
}
