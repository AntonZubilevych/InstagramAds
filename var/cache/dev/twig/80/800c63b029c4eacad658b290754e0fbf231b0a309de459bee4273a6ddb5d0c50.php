<?php

/* _navbar.html.twig */
class __TwigTemplate_4671b8aa376914970b762fd05928262fc0916a266982d7d250a5587963ec106d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        echo "<div class=\"sidebar-menu\">
    <div class=\"sidebar-header\">
        <div class=\"logo\">
            <a href=\"index.html\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        </div>
    </div>
    <div class=\"main-menu\">
        <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; width: auto; height: 555px;\"><div class=\"menu-inner\" style=\"overflow: hidden; width: auto; height: 555px;\">
                <nav>
                    <ul class=\"metismenu\" id=\"menu\">
                        <li>
                            <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"ti-dashboard\"></i><span>Orders</span></a>
                            <ul class=\"collapse\">
                                <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order");
        echo "\">All</a></li>
                                <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_add");
        echo "\">Add</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"ti-dashboard\"></i><span>Product</span></a>
                            <ul class=\"collapse\">
                                <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product");
        echo "\">All</a></li>
                                <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_add");
        echo "\">Add</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"ti-dashboard\"></i><span>Templates</span></a>
                            <ul class=\"collapse\">
                                <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_template");
        echo "\">All</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_status");
        echo "\"><i class=\"ti-map-alt\"></i> <span>Status</span></a></li>

                    </ul>
                </nav>
            </div><div class=\"slimScrollBar\" style=\"background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 252.894px;\"></div><div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;\"></div></div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 32,  74 => 29,  64 => 22,  60 => 21,  51 => 15,  47 => 14,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar-menu\">
    <div class=\"sidebar-header\">
        <div class=\"logo\">
            <a href=\"index.html\"><img src=\"{{  asset('assets/images/icon/logo.png') }}\" alt=\"logo\"></a>
        </div>
    </div>
    <div class=\"main-menu\">
        <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; width: auto; height: 555px;\"><div class=\"menu-inner\" style=\"overflow: hidden; width: auto; height: 555px;\">
                <nav>
                    <ul class=\"metismenu\" id=\"menu\">
                        <li>
                            <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"ti-dashboard\"></i><span>Orders</span></a>
                            <ul class=\"collapse\">
                                <li><a href=\"{{ path('admin_order') }}\">All</a></li>
                                <li><a href=\"{{ path('admin_order_add') }}\">Add</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"ti-dashboard\"></i><span>Product</span></a>
                            <ul class=\"collapse\">
                                <li><a href=\"{{ path('admin_product') }}\">All</a></li>
                                <li><a href=\"{{ path('admin_product_add') }}\">Add</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript:void(0)\" aria-expanded=\"true\"><i class=\"ti-dashboard\"></i><span>Templates</span></a>
                            <ul class=\"collapse\">
                                <li><a href=\"{{ path('admin_template') }}\">All</a></li>
                            </ul>
                        </li>
                        <li><a href=\"{{ path('admin_status') }}\"><i class=\"ti-map-alt\"></i> <span>Status</span></a></li>

                    </ul>
                </nav>
            </div><div class=\"slimScrollBar\" style=\"background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 252.894px;\"></div><div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;\"></div></div>
    </div>
</div>", "_navbar.html.twig", "/home/anton/PhpstormProjects/instagramAds/templates/_navbar.html.twig");
    }
}
