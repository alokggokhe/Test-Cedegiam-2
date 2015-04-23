<?php

/* AdminBundle:TherapeuticArea:list.html.twig */
class __TwigTemplate_d63a711e8266c8109667c167a36487e4519da54a2e1242e7347e83baac287907 extends Twig_Template
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
        if (twig_test_empty((isset($context["therapeutic_area"]) ? $context["therapeutic_area"] : $this->getContext($context, "therapeutic_area")))) {
            // line 2
            echo "\t<tr class=\"table-tr-even\">
\t\t<td rowspan=2>
\t\t\tNo therapeutical areas found
\t\t</td>
\t</tr>
";
        } else {
            // line 8
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["therapeutic_area"]) ? $context["therapeutic_area"] : $this->getContext($context, "therapeutic_area")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["therapeutic_area_row"]) {
                echo " 
\t\t";
                // line 9
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 2)) {
                    // line 10
                    echo "\t\t\t<tr class=\"table-tr-odd\">
\t\t";
                } else {
                    // line 12
                    echo "\t\t\t<tr class=\"table-tr-even\">
\t\t";
                }
                // line 14
                echo "\t\t\t<td>
\t\t\t\t";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["therapeutic_area_row"], "name", array()), "html", null, true);
                echo " 
\t\t\t</td>
\t\t\t<td class=\"text-center\" title=\"Edit\">
\t\t\t\t<span class=\"pull-right therapeutic_area_edit\" therapeutic_area_id=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["therapeutic_area_row"], "id", array()), "html", null, true);
                echo "\" therapeutic_area_name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["therapeutic_area_row"], "name", array()), "html", null, true);
                echo "\"><i class=\"fa fa-pencil cursor-pointer\"></i></span>
\t\t\t</td>
\t\t</tr>
\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['therapeutic_area_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo " 
";
        }
    }

    public function getTemplateName()
    {
        return "AdminBundle:TherapeuticArea:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  68 => 18,  62 => 15,  59 => 14,  55 => 12,  51 => 10,  49 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
