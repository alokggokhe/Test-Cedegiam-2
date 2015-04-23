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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/login.min.css"), "html", null, true);
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
\t\t\t\t\t";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 19
            echo "\t\t\t\t\t\t<div class=\"login-alert-msg\">
\t\t\t\t\t\t\t<div class=\"alert alert-warning modal-body-label\">
\t\t\t\t\t\t\t\t<a aria-hidden=\"true\" data-dismiss=\"alert\" href=\"#\" class=\"close\"></a>
\t\t\t\t\t\t\t\t<span class=\"response logn-response-msg\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t\t
\t\t\t\t\t<form name=\"frm_login\" id=\"frm_login\" method=\"post\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" role=\"form\">
\t\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user fa-fw\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"_username\" id=\"username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control input-lg\" placeholder=\"Username\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-lock fa-fw\"></i></span>
\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"password\" value=\"\" class=\"form-control input-lg\" placeholder=\"Password\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"button-group text-right\" title=\"CONNECT\">
\t\t\t\t\t\t\t<button type=\"submit\" name=\"btn_login_submit\" id=\"btn_login_submit\" class=\"btn btn-primary btn-lg common-button\">Connect</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
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
        return array (  82 => 29,  76 => 26,  73 => 25,  66 => 22,  61 => 19,  59 => 18,  51 => 12,  48 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
