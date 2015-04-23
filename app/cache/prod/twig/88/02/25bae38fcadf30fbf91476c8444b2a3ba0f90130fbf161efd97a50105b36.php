<?php

/* AdminBundle:TherapeuticArea:index.html.twig */
class __TwigTemplate_880225bae38fcadf30fbf91476c8444b2a3ba0f90130fbf161efd97a50105b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "AdminBundle:TherapeuticArea:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'modulestylesheets' => array($this, 'block_modulestylesheets'),
            'modulejavascripts' => array($this, 'block_modulejavascripts'),
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
        echo "Therapeutical Area and MSL | Dandelion
";
    }

    // line 7
    public function block_modulestylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/therapeutic_area.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 12
    public function block_modulejavascripts($context, array $blocks = array())
    {
        // line 13
        echo "<script>
\ttherapeutic_area_add_edit_url = \"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("therapeutic_area_add_edit");
        echo "\";
\tmsl_add_edit_url \t\t\t  = \"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("msl_add_edit");
        echo "\";
\tmsl_get_url\t\t\t\t  \t  = \"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("msl_get");
        echo "\";
\tmsl_delete_get_url\t\t\t  = \"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("msl_delete");
        echo "\";\t
\ttherapeutic_area_list_url\t  = \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("therapeutic_area_list");
        echo "\";
\tmsl_list_url\t  \t\t\t  = \"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("msl_list");
        echo "\";
</script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/therapeutic_area_msl.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t<div class=\"row\">
\t\t<div class=\"col-sm-4\">
\t\t\t<form name=\"frm_therapeutic_area\" id=\"frm_therapeutic_area\" method=\"post\" role=\"form\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("therapeutic_area_add_edit");
        echo "\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 header-bg-text\">
\t\t\t\t\t\t<div class=\"col-sm-2 padding-top-7px\">
\t\t\t\t\t\t\t<span><i class=\"fa fa-th-list fa-3x icon-white-color\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"first-text-header\">Therapeutical Areas</div>
\t\t\t\t\t\t\t<div class=\"second-text-header\">add and update</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row-gap\"></div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-9 padding-right-0px\">
\t\t\t\t\t\t\t<input type=\"type\" name=\"txt_therapeutic_area\" id=\"txt_therapeutic_area\" value=\"\" class=\"form-control input-lg\" placeholder=\"New Here\" maxlength=\"32\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t\t<div class=\"button-group text-right\" title=\"ADD\" id=\"therapeutic_area_add\">
\t\t\t\t\t\t\t\t<button type=\"button\" name=\"btn_therapeutic_area\" id=\"btn_therapeutic_area\" class=\"btn btn-primary btn-lg common-button width-100-per\">+</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row-gap\"></div>
\t\t\t\t\t<div class=\"background-color-white\" id=\"therapeutic_area_list_div\">
\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t<tbody id=\"table_therapeutic_area_list\" class=\"\"></tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</form>\t
\t\t</div>
\t\t<div class=\"col-sm-1\"></div>
\t\t<div class=\"col-sm-7\">
\t\t\t<form name=\"frm_msl\" id=\"frm_msl\" method=\"post\" action=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("msl_add_edit");
        echo "\" role=\"form\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 header-bg-text\">
\t\t\t\t\t\t<div class=\"col-sm-1 padding-top-7px\">
\t\t\t\t\t\t\t<span><i class=\"fa fa-user fa-3x icon-white-color\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-11\">
\t\t\t\t\t\t\t<div class=\"first-text-header\">Users</div>
\t\t\t\t\t\t\t<div class=\"second-text-header\">add, update and delete</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row-gap\"></div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-3 padding-right-0px\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"txt_first_name\" id=\"txt_first_name\" value=\"\" class=\"form-control input-lg\" placeholder=\"First Name\" maxlength=\"32\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-3 padding-right-0px\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"txt_last_name\" id=\"txt_last_name\" value=\"\" class=\"form-control input-lg\" placeholder=\"Last Name\" maxlength=\"32\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-4 padding-right-0px\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"txt_email\" id=\"txt_email\" value=\"\" class=\"form-control input-lg\" placeholder=\"Email\" maxlength=\"32\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t<div class=\"button-group text-right\" title=\"ADD\" id=\"msl_add\">
\t\t\t\t\t\t\t\t<button type=\"button\" name=\"btn_msl\" id=\"btn_msl\" class=\"btn btn-primary btn-lg common-button width-100-per\">+</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row-gap\"></div>
\t\t\t\t\t<div class=\"background-color-white\" id=\"msl_list_div\">
\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t<tbody id=\"table_msl_list\"></tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>\t
\t\t</div>
\t</div>

\t<!-- therapeutic area edit popup -->
\t<div class=\"modal fade bs-example-modal-sm\" id=\"popupEditTherapeuticArea\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"popupEditTherapeuticAreaLabel\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
\t\t<div class=\"modal-dialog modal-sm\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h4 class=\"modal-title modal-title-header\" id=\"popupEditTherapeuticAreaLabel\">Edit Therapeutic Area</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\"> 
\t\t\t\t\t<div class=\"edit-therapeutic-area-alert-msg hide\">
\t\t\t\t\t\t<div class=\"alert alert-warning modal-body-label\">
\t\t\t\t\t\t\t<a aria-hidden=\"true\" data-dismiss=\"alert\" href=\"#\" class=\"close\"></a>
\t\t\t\t\t\t\t<span class=\"response edit-therapeutic-area-response-msg\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<form name=\"frm_edit_therapeutic_area\" id=\"frm_edit_therapeutic_area\" method=\"post\" action=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("therapeutic_area_add_edit");
        echo "\" role=\"form\">
\t\t\t\t\t\t<input type=\"type\" name=\"txt_edit_therapeutic_area\" id=\"txt_edit_therapeutic_area\" value=\"\" class=\"form-control input-lg\" placeholder=\"Enter therapeutic area here\" maxlength=\"32\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"hid_therapeutic_area_id\" id=\"hid_therapeutic_area_id\" value=\"\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"hid_edit_therapeutic_area\" id=\"hid_edit_therapeutic_area\" value=\"\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-standard btn_edit_therapeutic_area save-button\" title=\"Save\">Save</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-standard close-button\" data-dismiss=\"modal\" title=\"Close\">Close</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- msl edit popup -->
\t<div class=\"modal fade bs-example-modal-lg\" id=\"popupEditMsl\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"popupEditMslLabel\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
\t\t<div class=\"modal-dialog modal-lg\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h4 class=\"modal-title modal-title-header\" id=\"popupEditMslLabel\">Update an User</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\"> 
\t\t\t\t\t<div class=\"edit-msl-alert-msg hide\">
\t\t\t\t\t\t<div class=\"alert alert-warning modal-body-label\">
\t\t\t\t\t\t\t<a aria-hidden=\"true\" data-dismiss=\"alert\" href=\"#\" class=\"close\"></a>
\t\t\t\t\t\t\t<span class=\"response edit-msl-response-msg\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<form name=\"frm_edit_msl\" id=\"frm_edit_msl\" method=\"post\" action=\"\" role=\"form\">
\t\t\t\t\t\t<div id=\"msl_form_edit_div\"></div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-standard btn_delete_msl delete-button\" title=\"Delete Msl\">Delete User</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-standard btn_save_msl save-button\" title=\"Save Msl\">Save User</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-standard close-button\" data-dismiss=\"modal\" title=\"Close\">Close</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:TherapeuticArea:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 113,  129 => 60,  93 => 27,  89 => 25,  86 => 24,  80 => 21,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  52 => 13,  49 => 12,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
