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
        echo "<div class=\"row\">
\t<div class=\"col-xs-3\">
\t\t\t<span class=\"required-field\">*</span>
\t\t\t<label class=\"control-label modal-title-body-label\">First Name</label>
\t\t\t<input type=\"text\" name=\"txt_edit_first_name\" id=\"txt_edit_first_name\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msl"]) ? $context["msl"] : null), "firstName", array(), "method"), "html", null, true);
        echo "\" class=\"form-control input-lg\" placeholder=\"First Name\" maxlength=\"32\">
\t</div>
\t<div class=\"col-xs-3\">
\t\t\t<span class=\"required-field\">*</span>
\t\t\t<label class=\"control-label modal-title-body-label\">Last Name</label>
\t\t\t<input type=\"text\" name=\"txt_edit_last_name\" id=\"txt_edit_last_name\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msl"]) ? $context["msl"] : null), "lastName", array(), "method"), "html", null, true);
        echo "\" class=\"form-control input-lg\" placeholder=\"Last Name\" maxlength=\"32\">
\t</div>
\t<div class=\"col-xs-5\">
\t\t\t<span class=\"required-field\">*</span>\t
\t\t\t<label class=\"control-label modal-title-body-label\">Email</label>
\t\t\t<input type=\"text\" name=\"txt_edit_email\" id=\"txt_edit_email\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msl"]) ? $context["msl"] : null), "email", array(), "method"), "html", null, true);
        echo "\" class=\"form-control input-lg\" placeholder=\"Email\" maxlength=\"32\">
\t</div>
</div>
<div class=\"row-gap\"></div>
<div class=\"row\">
\t<div class=\"col-xs-3\">
\t\t\t<span class=\"required-field\">*</span>
\t\t\t<label class=\"control-label modal-title-body-label\">Gender</label>
\t\t\t<select name=\"slt_edit_gender\" id=\"slt_edit_gender\" class=\"form-control\">
\t\t\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gender"]) ? $context["gender"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s_gender"]) {
            echo " 
\t\t\t\t\t<option value=\"";
            // line 25
            echo twig_escape_filter($this->env, $context["s_gender"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["msl"]) ? $context["msl"] : null), "gender", array(), "method") == $context["s_gender"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["s_gender"], "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t</select>
\t</div>
\t<div class=\"col-xs-3\">
\t\t\t<span class=\"required-field\">*</span>\t
\t\t\t<label class=\"control-label modal-title-body-label\">Role</label>
\t\t\t<select name=\"slt_edit_role\" id=\"slt_edit_role\" class=\"form-control\">
\t\t\t\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["msl_role"]) ? $context["msl_role"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["msl_role_row"]) {
            echo " 
\t\t\t\t\t<option value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["msl_role_row"], "name", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["msl"]) ? $context["msl"] : null), "role", array(), "method") == $this->getAttribute($context["msl_role_row"], "name", array()))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["msl_role_row"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msl_role_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t</select>
\t</div>
\t<div class=\"col-xs-6 padding-right-0px\">
\t</div>
</div>
<div class=\"row-gap\"></div>
<label class=\"control-label modal-title-body-label\">User Territories</label>
<div class=\"row\">
\t<div class=\"col-xs-6\">
\t\t\t<input type=\"text\" name=\"txt_edit_territory_name\" id=\"txt_edit_territory_name\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msl"]) ? $context["msl"] : null), "mslTerritory", array(), "method"), "html", null, true);
        echo "\" class=\"form-control input-lg\" placeholder=\"User Territories\" maxlength=\"64\">
\t</div>
\t<div class=\"col-xs-6\">
\t</div>
</div>

<div class=\"row-gap\"></div>
<label class=\"control-label modal-title-body-label\">Therapeutical Areas Assigning</label>
<div class=\"row\">
\t<div class=\"col-xs-12\">
\t\t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["therapeutic_area"]) ? $context["therapeutic_area"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["therapeutic_area_row"]) {
            echo " 
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t<input type=\"checkbox\" name=\"chk_therapeutic_area[]\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["therapeutic_area_row"], "id", array()), "html", null, true);
            echo "\" ";
            if ($this->env->getExtension('mainbundle_extension')->checkinarrayFilter((isset($context["a_user_therapeutic_area"]) ? $context["a_user_therapeutic_area"] : null), $this->getAttribute($context["therapeutic_area_row"], "id", array()))) {
                echo " checked ";
            }
            echo "> <label class=\"text-checkbox\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["therapeutic_area_row"], "name", array()), "html", null, true);
            echo "</label>
\t\t\t\t</label>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['therapeutic_area_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t</div>
</div>
<input type=\"hidden\" name=\"hid_msl_id\" id=\"hid_msl_id\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msl"]) ? $context["msl"] : null), "id", array(), "method"), "html", null, true);
        echo "\">";
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
        return array (  153 => 64,  149 => 62,  133 => 58,  125 => 55,  112 => 45,  101 => 36,  87 => 34,  81 => 33,  73 => 27,  59 => 25,  53 => 24,  41 => 15,  33 => 10,  25 => 5,  19 => 1,);
    }
}
