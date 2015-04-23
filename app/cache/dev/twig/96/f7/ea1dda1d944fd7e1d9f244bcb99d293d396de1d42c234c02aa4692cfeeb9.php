<?php

/* AdminBundle:Msl:edit.html.twig */
class __TwigTemplate_96f7ea1dda1d944fd7e1d9f244bcb99d293d396de1d42c234c02aa4692cfeeb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-md-4\">
\t\t\t\t<span class=\"required-field\">*</span>
\t\t\t\t<label class=\"control-label modal-title-body-label\">";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "</label>
\t\t\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "First Name", "maxlength" => "32")));
        echo "
\t\t</div>
\t\t<div class=\"col-xs-12 col-md-4\">
\t\t\t\t<span class=\"required-field\">*</span>
\t\t\t\t<label class=\"control-label modal-title-body-label\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "</label>
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Last Name", "maxlength" => "32")));
        echo "
\t\t</div>
\t\t<div class=\"col-xs-12 col-md-4\">
\t\t\t\t<span class=\"required-field\">*</span>\t
\t\t\t\t<label class=\"control-label modal-title-body-label\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "</label>
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Email", "maxlength" => "32")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"row-gap\"></div>
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-md-4\">
\t\t\t\t<span class=\"required-field\">*</span>
\t\t\t\t<label class=\"control-label modal-title-body-label\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label');
        echo "</label>
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t\t<div class=\"col-xs-12 col-md-4\">
\t\t\t\t<span class=\"required-field\">*</span>\t
\t\t\t\t<label class=\"control-label modal-title-body-label\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label');
        echo "</label>
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t\t<div class=\"col-xs-6 padding-right-0px\">
\t\t</div>
\t</div>
\t<div class=\"row-gap\"></div>
\t<label class=\"control-label modal-title-body-label\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mslTerritory", array()), 'label');
        echo "</label>
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-md-4\">
\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mslTerritory", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "User Territories", "maxlength" => "64")));
        echo "
\t\t</div>
\t\t<div class=\"col-xs-6\">
\t\t</div>
\t</div>

\t<div class=\"row-gap\"></div>
\t<label class=\"control-label modal-title-body-label\">Therapeutical Areas Assigning</label>
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["therapeutic_area"]) ? $context["therapeutic_area"] : $this->getContext($context, "therapeutic_area")));
        foreach ($context['_seq'] as $context["_key"] => $context["therapeutic_area_row"]) {
            echo " 
\t\t\t\t<div class=\"col-xs-12 col-md-3\">
\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"chk_therapeutic_area[]\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["therapeutic_area_row"], "id", array()), "html", null, true);
            echo "\" ";
            if ($this->env->getExtension('mainbundle_extension')->checkinarrayFilter((isset($context["a_user_therapeutic_area"]) ? $context["a_user_therapeutic_area"] : $this->getContext($context, "a_user_therapeutic_area")), $this->getAttribute($context["therapeutic_area_row"], "id", array()))) {
                echo " checked ";
            }
            echo "> <label class=\"text-checkbox\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["therapeutic_area_row"], "name", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['therapeutic_area_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t</div>
\t</div>
\t<input type=\"hidden\" name=\"hid_msl_id\" id=\"hid_msl_id\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msl"]) ? $context["msl"] : $this->getContext($context, "msl")), "id", array(), "method"), "html", null, true);
        echo "\">
";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Msl:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 58,  133 => 57,  129 => 55,  113 => 51,  105 => 48,  92 => 38,  86 => 35,  77 => 29,  73 => 28,  66 => 24,  62 => 23,  52 => 16,  48 => 15,  41 => 11,  37 => 10,  30 => 6,  26 => 5,  19 => 1,);
    }
}
