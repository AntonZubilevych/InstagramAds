<?php

/* order/show.html.twig */
class __TwigTemplate_fc5f338acafcac2f4de76d8185f736446244ef46e94bcd13ac69213acc3d3f44 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "order/show.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"main-content-inner\">


    <div class=\"row\">
        <div class=\"col-lg-12 mt-5\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"invoice-area\">
                        <div class=\"invoice-head\">
                            <div class=\"row\">
                                <div class=\"iv-left col-6\">
                                    <span>ORDER</span>
                                </div>
                                <div class=\"iv-right col-6 text-md-right\">
                                    <span>#";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", []), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row align-items-center\">
                            <div class=\"col-md-6\">
                                <div class=\"invoice-address\">
                                    <h3>Customer</h3>
                                    <h5>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "client", []), "name", []), "html", null, true);
        echo "</h5>
                                    <p>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "client", []), "phone", []), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 text-md-right\">
                                <ul class=\"invoice-date\">
                                    <li>Start Date : ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", []), "m/d/Y"), "html", null, true);
        echo "</li>
                                    <li>Last Activity : ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", []), "m/d/Y"), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"invoice-table table-responsive mt-5\">
                            <table class=\"table table-bordered table-hover text-right\">
                                <thead>
                                <tr class=\"text-capitalize\">
                                    <th class=\"text-center\" style=\"width: 5%;\">id</th>
                                    <th class=\"text-left\" style=\"width: 45%; min-width: 130px;\">description</th>
                                    <th>qty</th>
                                    <th>status</th>
                                    <th style=\"min-width: 100px\">Unit Cost</th>
                                    <th>total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"text-center\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "product", []), "id", []), "html", null, true);
        echo "</td>
                                    <td class=\"text-left\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "product", []), "name", []), "html", null, true);
        echo "</td>
                                    <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "amount", []), "html", null, true);
        echo "</td>
                                    <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", []), "name", []), "html", null, true);
        echo "</td>
                                    <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "product", []), "price", []), "html", null, true);
        echo "<small>grn</small></td>
                                    <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sum", []), "html", null, true);
        echo "<small>grn</small></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan=\"4\">total balance :</td>
                                    <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sum", []), "html", null, true);
        echo "<small>grn</small></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class=\"invoice-buttons text-right\">
                        <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"invoice-btn\">Edit Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 71,  146 => 64,  137 => 58,  133 => 57,  129 => 56,  125 => 55,  121 => 54,  117 => 53,  96 => 35,  92 => 34,  84 => 29,  80 => 28,  69 => 20,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}
    <div class=\"main-content-inner\">


    <div class=\"row\">
        <div class=\"col-lg-12 mt-5\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"invoice-area\">
                        <div class=\"invoice-head\">
                            <div class=\"row\">
                                <div class=\"iv-left col-6\">
                                    <span>ORDER</span>
                                </div>
                                <div class=\"iv-right col-6 text-md-right\">
                                    <span>#{{ order.id }}</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row align-items-center\">
                            <div class=\"col-md-6\">
                                <div class=\"invoice-address\">
                                    <h3>Customer</h3>
                                    <h5>{{ order.client.name }}</h5>
                                    <p>{{ order.client.phone }}</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 text-md-right\">
                                <ul class=\"invoice-date\">
                                    <li>Start Date : {{ order.createdAt  | date(\"m/d/Y\") }}</li>
                                    <li>Last Activity : {{ order.updatedAt  | date(\"m/d/Y\") }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"invoice-table table-responsive mt-5\">
                            <table class=\"table table-bordered table-hover text-right\">
                                <thead>
                                <tr class=\"text-capitalize\">
                                    <th class=\"text-center\" style=\"width: 5%;\">id</th>
                                    <th class=\"text-left\" style=\"width: 45%; min-width: 130px;\">description</th>
                                    <th>qty</th>
                                    <th>status</th>
                                    <th style=\"min-width: 100px\">Unit Cost</th>
                                    <th>total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"text-center\">{{ order.product.id }}</td>
                                    <td class=\"text-left\">{{ order.product.name }}</td>
                                    <td>{{ order.amount }}</td>
                                    <td>{{ order.status.name }}</td>
                                    <td>{{ order.product.price }}<small>grn</small></td>
                                    <td>{{ order.sum }}<small>grn</small></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan=\"4\">total balance :</td>
                                    <td>{{ order.sum }}<small>grn</small></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class=\"invoice-buttons text-right\">
                        <a href=\"{{ path('admin_order_edit',{'id' : order.id}) }}\" class=\"invoice-btn\">Edit Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
{% endblock %}
", "order/show.html.twig", "/home/anton/PhpstormProjects/instagramAds/templates/order/show.html.twig");
    }
}
