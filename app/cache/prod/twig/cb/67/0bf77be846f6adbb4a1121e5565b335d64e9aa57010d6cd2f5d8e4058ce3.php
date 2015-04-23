<?php

/* MainBundle:Invitation:invitation.html.twig */
class __TwigTemplate_cb670bf77be846f6adbb4a1121e5565b335d64e9aa57010d6cd2f5d8e4058ce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Invitation:invitation.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
\t<section id=\"panel\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"panel-form-first-part\">
\t\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" id=\"logout\">Log out</a>
\t\t\t\t<h1 class=\"panel-title-form\">You have requested a Medical Inquiry call back<br /> from a UCB Medical Specialist. </h1>
\t\t\t</div>
\t\t\t<div class=\"panel-form-second-part\">
\t\t\t\t<h2><strong>MedInquiry form</strong></h2>
\t\t\t\t<h3>Please fill out this form</h3>
\t\t\t</div>
            ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t\t\t\t<div class=\"form-group\">
                    ";
        // line 17
        echo "                    <label>Topic/Therapeutic area concerned by your question:</label>
\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "topics", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"group-checkbox\">
                        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "topics", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 21
            echo "                            <div class=\"checkbox\">
                            \t<label class=\"radio-inline\">";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["topic"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["topic"], "vars", array()), "label", array()), "html", null, true);
            echo "</label>
                        \t</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"form-group\">
                    <label for=\"invitation_question\">Please indicate the question(s) you would like covered during this presentation:</label>
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "question", array()), 'errors');
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "question", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                </div>
                <div class=\"form-group\">
                \t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relatedToAE", array()), 'errors');
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "relatedToAE", array()), 'widget');
        echo "
                \t<label for=\"invitation_relatedToAE\">This query relates to an AE in one of my patients</label>
                </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>When would you like a UCB MSL to call you?</label>
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "availabilityDetails", array()), 'errors');
        echo "
                        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "availabilityDetails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["choiceAvailability"]) {
            // line 44
            echo "                            <label class=\"radio-inline\">
                            ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["choiceAvailability"], 'widget');
            echo "
                            ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["choiceAvailability"], "vars", array()), "label", array()), "html", null, true);
            echo "</label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choiceAvailability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Please indicate what Date and Time</label>
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "datetime", array()), 'errors');
        echo "
                    <div class=\"input-group input-append date form_datetime\" id=\"datetimepicker\" data-date=\"12-02-2012\" data-date-format=\"dd-mm-yyyy\">
\t\t\t\t\t\t<input id=\"invitation_datetime\" type=\"text\" class=\"form-control\" readonly name=\"invitation[datetime]\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-calendar\"></i></span>
\t\t\t\t\t</div>

\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(\".form_datetime\").datetimepicker({
                            format: 'yyyy-mm-dd hh:ii',
                            showMeridian: true,
\t\t\t\t\t\t\tautoclose: true,
\t\t\t\t\t\t\ttodayBtn: true,
\t\t\t\t\t\t\tstartDate: new Date(),
\t\t\t\t\t\t\tendDate: '+1y',
\t\t\t\t\t\t\tminuteStep: 30,
\t\t\t\t\t\t\ttodayHighlight: true,
\t\t\t\t\t\t\tpickerPosition: \"bottom-left\"
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
                    <label for=\"invitation_name\">Name:</label>
\t\t\t\t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("class" => "form-control", "value" => (((isset($context["user"]) ? $context["user"] : null)) ? ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Username", array(), "method")) : ("")))));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
                    <label for=\"invitation_phone\">Phone number you wish to be called:</label>
\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'errors');
        echo "
                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'widget', array("attr" => array("class" => "form-control", "value" => (((isset($context["user"]) ? $context["user"] : null)) ? ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ProfessionalPhone", array(), "method")) : ("")))));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
                    <label for=\"invitation_email\">Email address to receive your appointment confirmation:</label>
\t\t\t\t\t";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control", "value" => (((isset($context["user"]) ? $context["user"] : null)) ? ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Email", array(), "method")) : ("")))));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"row button-group\">
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("attr" => array("formnovalidate" => "formnovalidate", "class" => "btn btn-primary btn-lg col-lg-3 col-lg-offset-6 col-lg-push-3 col-md-3 col-md-offset-6 col-md-push-3 col-sm-3 col-sm-offset-6 col-sm-push-3 btn-submit")));
        echo "
                    <button type=\"button\" class=\"btn btn-default btn-lg col-lg-3 col-lg-pull-3 col-md-3 col-sm-pull-3 col-md-3 col-sm-pull-3\" onclick=\"window.history.go(-1); return false;\">Cancel</button>
\t\t\t\t</div>

            ";
        // line 92
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "datetime", array()), "setRendered", array());
        // line 93
        echo "
            ";
        // line 94
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t</div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Invitation:invitation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 94,  204 => 93,  202 => 92,  195 => 88,  189 => 85,  185 => 84,  178 => 80,  174 => 79,  167 => 75,  163 => 74,  138 => 52,  132 => 48,  124 => 46,  120 => 45,  117 => 44,  113 => 43,  109 => 42,  100 => 36,  96 => 35,  89 => 31,  85 => 30,  78 => 25,  67 => 22,  64 => 21,  60 => 20,  55 => 18,  52 => 17,  47 => 14,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
