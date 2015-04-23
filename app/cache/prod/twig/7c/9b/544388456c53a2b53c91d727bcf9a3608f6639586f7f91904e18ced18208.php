<?php

/* AdminBundle:Index:index.html.twig */
class __TwigTemplate_7c9b544388456c53a2b53c91d727bcf9a3608f6639586f7f91904e18ced18208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "AdminBundle:Index:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'modulestylesheets' => array($this, 'block_modulestylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Login | Dandelion
";
    }

    // line 7
    public function block_modulestylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/login.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3\">
\t\t<section id=\"panel\">
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"panel-form-first-part\"></div>
\t\t\t\t<div class=\"panel-form-second-part\">
\t\t\t\t\t<h2 class=\"title-login\">Please enter your username & password to enter the administration tool.</h2>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"login-alert-msg\">
\t\t\t\t\t\t\t<div class=\"alert alert-warning modal-body-label\">
\t\t\t\t\t\t\t\t<a aria-hidden=\"true\" data-dismiss=\"alert\" href=\"#\" class=\"close\"></a>
\t\t\t\t\t\t\t\t<span class=\"response logn-response-msg\">
\t\t\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user fa-lg\"></i></span>
\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "value" => "", "placeholder" => "Username")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\"></i></span>
\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "value" => "", "placeholder" => "Password")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"button-group text-right\" title=\"CONNECT\">
\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg common-button")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>\t
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 41,  95 => 39,  89 => 36,  82 => 32,  76 => 29,  68 => 24,  64 => 23,  51 => 12,  48 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
