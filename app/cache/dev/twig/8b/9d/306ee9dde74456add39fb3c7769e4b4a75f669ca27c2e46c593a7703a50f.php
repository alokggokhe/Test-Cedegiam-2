<?php

/* AdminBundle::layout.html.twig */
class __TwigTemplate_8b9d306ee9dde74456add39fb3c7769e4b4a75f669ca27c2e46c593a7703a50f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'modulestylesheets' => array($this, 'block_modulestylesheets'),
            'modulejavascripts' => array($this, 'block_modulejavascripts'),
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
        // line 50
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/favicon.png"), "html", null, true);
        echo "\" />
<!--[if IE]><link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/images/favicon.ico"), "html", null, true);
        echo "\" /><![endif]-->

<!--  Relier une feuille CSS externe  -->
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/main.css"), "html", null, true);
        echo "\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" />
<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/common.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

";
        // line 31
        $this->displayBlock('modulestylesheets', $context, $blocks);
        // line 33
        echo "
<!-- Relier un fichier JavaScript  -->
<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/jquery/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>

";
        // line 39
        $this->displayBlock('modulejavascripts', $context, $blocks);
        // line 41
        echo "
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/respond.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->

<title>";
        // line 48
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
    }

    // line 31
    public function block_modulestylesheets($context, array $blocks = array())
    {
    }

    // line 39
    public function block_modulejavascripts($context, array $blocks = array())
    {
    }

    // line 48
    public function block_title($context, array $blocks = array())
    {
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "<body class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"container\">
            <div class=\"row text-center logo-padding-bottom\">
                <div class=\"col-sm-12\">
                    <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" title=\"UCB\">
                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/ucb_logo.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                    </a>
                </div>
                ";
        // line 60
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 61
            echo "                    <div class=\"col-sm-4\"></div>    
                    <div class=\"col-sm-4\"></div>
                    <div class=\"col-sm-4\">
                        <label class=\"login-welcom-text\">Welcome, ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastName", array()), "html", null, true);
            echo "</label>
                        <a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("_security_logout");
            echo "\" title=\"Logout\" class=\"logout-text\">
                            Logout
                        </a>
                    </div>
                ";
        }
        // line 69
        echo " 
            </div>
            ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "        </div>
    </div>

    <!-- Commoc alert popup -->
    <div class=\"modal fade bs-example-modal-sm\" id=\"popupCommonAlert\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"popupCommonAlertModelLabel\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title modal-title-body-label\" id=\"popupCommonAlertModelLabel\">Alert</h4>
                </div>
                <div class=\"modal-body\">            
                    <div class=\"alert-message modal-body-label\"></div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-standard close-button\" data-dismiss=\"modal\" title=\"Close\">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Common success popup -->
    <div class=\"modal fade bs-example-modal-sm\" id=\"popupCommonMessage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"popupCommonMessageModelLabel\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title modal-title-body-label\" id=\"popupCommonMessageModelLabel\">Message</h4>
                </div>
                <div class=\"modal-body\">            
                    <div class=\"success-message modal-body-label\"></div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-standard close-button\" data-dismiss=\"modal\" title=\"Close\">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Common Delete popup -->
    <div class=\"modal fade bs-example-modal-sm\" id=\"popupCommonDelete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"popupCommonDeleteModelLabel\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title modal-title-body-label\" id=\"popupCommonDeleteModelLabel\">Delete</h4>
                </div>
                <div class=\"modal-body\">            
                    <div class=\"delete-message modal-body-label\"></div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-standard delete_entity save-button\" title=\"Yes\">Yes</button>
                    <button type=\"button\" class=\"btn btn-standard close-button\" data-dismiss=\"modal\" title=\"No\">No</button>
                </div>
            </div>
        </div>
    </div>
</body>
";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AdminBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  253 => 71,  194 => 72,  192 => 71,  188 => 69,  180 => 65,  174 => 64,  169 => 61,  167 => 60,  161 => 57,  157 => 56,  148 => 51,  145 => 50,  140 => 48,  135 => 39,  130 => 31,  124 => 48,  118 => 45,  114 => 44,  109 => 41,  107 => 39,  102 => 37,  98 => 36,  94 => 35,  90 => 33,  88 => 31,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  61 => 22,  57 => 21,  37 => 3,  34 => 2,  30 => 50,  28 => 2,  25 => 1,);
    }
}
