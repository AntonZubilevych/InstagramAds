<?php

/* template/public.html.twig */
class __TwigTemplate_2223b9dd6675cf723766b5bf6c4aff134f09ca460738f8bdd25278809898bb7c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("landing.html.twig", "template/public.html.twig", 1);
        $this->blocks = [
            'pixel' => [$this, 'block_pixel'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "landing.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/public.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/public.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_pixel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pixel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pixel"));

        // line 4
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "product", []), "pixel", []);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"main-wrap\">
        <h1><b>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "product", []), "name", []), "html", null, true);
        echo "</b><br>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "title", []), "html", null, true);
        echo "</h1>

        <div class=\"section block-1\" style=\"background: rgba(0, 0, 0, 0) url(";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/landing/" . twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "topImg", []))), "html", null, true);
        echo ") no-repeat scroll center 0px;!important;background-size: 100%;)\">
            <div class=\"sale\">скидка <br><span>-53%</span></div>
            <div class=\"price clearfix\">
                <div class=\"old\">
                    Старая цена<br>
                    <s><span class=\"price_land_s2\">";
        // line 15
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "product", []), "price", []) * 1.53), "html", null, true);
        echo "</span> <span class=\"price_land_curr\">грн.</span></s>
                </div>
                <div class=\"new\">
                    Новая цена<br>
                    <span class=\"price_land_s1\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "product", []), "price", []), "html", null, true);
        echo "</span> <span class=\"price_land_curr\">грн.</span>
                </div>
            </div>
            <a class=\"button-m scroll\" href=\"#form\">Оставить заявку</a>
        </div>

        <div class=\"section block-3\">
            <ul>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "descriptions", []));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 28
            echo "                <li>
                    <h4>";
            // line 29
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["description"], "title", [])), "html", null, true);
            echo "</h4>
                    <p>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["description"], "text", []), "html", null, true);
            echo "</p>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </ul>
        </div>


        <div class=\"section block4\"  style=\"background: rgba(0, 0, 0, 0) url(";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/landing/" . twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "topBackground", []))), "html", null, true);
        echo ") no-repeat scroll center 0px;!important;background-size: 100%;\">
            <h2><b>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "name", []), "html", null, true);
        echo " </b><br>Сделайте себе приятный подарок, который украсит отдых незабываемыми впечатлениями.</h2>


            <a class=\"button-m scroll\" href=\"#form\">Оставить заявку</a>
        </div>

        <div class=\"section block5\">
            <h2 class=\"center\">Доставка и оплата</h2>
            <ul>
                <li><h5>Оставьте заявку</h5>Воспользуйтесь формой заказа и оставьте Ваши имя и телефон</li>
                <li><h5>Подтвердите заказ</h5>Наш менеджер свяжется с Вами и уточнит адрес доставки</li>
                <li><h5>Получите товар</h5>Заберите посылку и оплатите заказ при получении</li>
            </ul>
        </div>

        <div class=\"section block6\">
            <h2><b>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "name", []), "html", null, true);
        echo "</b><br><span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "title", []), "html", null, true);
        echo "</span></h2>
            <img  src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/landing/" . twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "bottomImg", []))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "title", []), "html", null, true);
        echo "  \" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "title", []), "html", null, true);
        echo "\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "infos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 57
            echo "            <p><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "title", []), "html", null, true);
            echo "</b></p>
            <p>";
            // line 58
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "text", [])), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>

        <div class=\"section block7\" style=\"background: rgba(0, 0, 0, 0) url(";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/landing/" . twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "middleBackground", []))), "html", null, true);
        echo ")  scroll  0px;!important;background-size: 100%;\">
            <h2>Отзывы покупателей</h2>
            <p>Мы попросили наших покупателей поделиться впечатлениями от заказа</p>
            <div class=\"regular slider2\">
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "comments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 67
            echo "                <div style=\"margin-bottom: 30px;\">
                    <div class=\"container\">
                        <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/landing/" . twig_get_attribute($this->env, $this->source, $context["comment"], "img", []))), "html", null, true);
            echo "\" alt=\"Наталия, Харьков\" title=\"Богдан, Харьков\">
                        <p>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", []), "html", null, true);
            echo "<br><span class=\"name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", []), "html", null, true);
            echo "</span></p>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
        </div>
        </div>

        <div class=\"section block9\" >
            <h2><b>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "product", []), "name", []), "html", null, true);
        echo "</b></h2>
            <p class=\"sale center\">Со скидкой 53%</p>

            <div class=\"section container\" style=\"background: rgba(0, 0, 0, 0) url(";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/landing/" . twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "bottomBackground", []))), "html", null, true);
        echo ")  scroll center 0px;!important;background-size: 100%;\">
                <div class=\"price clearfix\" id=\"form\">
                    <div class=\"old\">
                        Старая цена:<br>
                        <s><span class=\"price_land_s2\">";
        // line 86
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "product", []), "price", []) * 1.53), "html", null, true);
        echo "</span> <span class=\"price_land_curr\">грн.</span></s>
                    </div>
                    <div class=\"new\">
                        Новая цена:<br>
                        <span class=\"price_land_s1\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "product", []), "price", []), "html", null, true);
        echo "</span> <span class=\"price_land_curr\">грн</span>
                    </div>
                </div>
            </div>



            <form class=\"orderformcdn\"  method=\"post\" onsubmit=\"if(this.name.value==''){alert('Введите имя!');return false}if(this.phone.value==''){alert('Введите номер телефона!');return false}return true;\">
                <input name=\"name\" value=\"\" placeholder=\"Введите Имя и Фамилию\">
                <input name=\"phone\" value=\"\" placeholder=\"Введите Номер телефона\" type=\"text\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "id", []))), "html", null, true);
        echo "\">

                <button class=\"button-m\">Оставить заявку</button>
            </form>


        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template/public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 100,  254 => 90,  247 => 86,  240 => 82,  234 => 79,  227 => 74,  215 => 70,  211 => 69,  207 => 67,  203 => 66,  196 => 62,  192 => 60,  184 => 58,  179 => 57,  175 => 56,  167 => 55,  161 => 54,  142 => 38,  138 => 37,  132 => 33,  123 => 30,  119 => 29,  116 => 28,  112 => 27,  101 => 19,  94 => 15,  86 => 10,  79 => 8,  76 => 7,  67 => 6,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'landing.html.twig' %}

{% block pixel %}
    {{ template.product.pixel | raw }}
{% endblock %}
{% block body %}
    <div class=\"main-wrap\">
        <h1><b>{{ template.product.name }}</b><br>{{ template.title }}</h1>

        <div class=\"section block-1\" style=\"background: rgba(0, 0, 0, 0) url({{ asset('uploads/landing/' ~ template.topImg) }}) no-repeat scroll center 0px;!important;background-size: 100%;)\">
            <div class=\"sale\">скидка <br><span>-53%</span></div>
            <div class=\"price clearfix\">
                <div class=\"old\">
                    Старая цена<br>
                    <s><span class=\"price_land_s2\">{{ template.product.price * 1.53 }}</span> <span class=\"price_land_curr\">грн.</span></s>
                </div>
                <div class=\"new\">
                    Новая цена<br>
                    <span class=\"price_land_s1\">{{ template.product.price }}</span> <span class=\"price_land_curr\">грн.</span>
                </div>
            </div>
            <a class=\"button-m scroll\" href=\"#form\">Оставить заявку</a>
        </div>

        <div class=\"section block-3\">
            <ul>
                {% for description in template.descriptions %}
                <li>
                    <h4>{{ description.title | upper }}</h4>
                    <p>{{ description.text }}</p>
                </li>
                {% endfor %}
            </ul>
        </div>


        <div class=\"section block4\"  style=\"background: rgba(0, 0, 0, 0) url({{ asset('uploads/landing/' ~ template.topBackground) }}) no-repeat scroll center 0px;!important;background-size: 100%;\">
            <h2><b>{{ template.name }} </b><br>Сделайте себе приятный подарок, который украсит отдых незабываемыми впечатлениями.</h2>


            <a class=\"button-m scroll\" href=\"#form\">Оставить заявку</a>
        </div>

        <div class=\"section block5\">
            <h2 class=\"center\">Доставка и оплата</h2>
            <ul>
                <li><h5>Оставьте заявку</h5>Воспользуйтесь формой заказа и оставьте Ваши имя и телефон</li>
                <li><h5>Подтвердите заказ</h5>Наш менеджер свяжется с Вами и уточнит адрес доставки</li>
                <li><h5>Получите товар</h5>Заберите посылку и оплатите заказ при получении</li>
            </ul>
        </div>

        <div class=\"section block6\">
            <h2><b>{{ template.name }}</b><br><span>{{ template.title }}</span></h2>
            <img  src=\"{{ asset('uploads/landing/' ~ template.bottomImg) }}\" alt=\"{{ template.title }}  \" title=\"{{ template.title }}\">
            {% for info in template.infos %}
            <p><b>{{ info.title }}</b></p>
            <p>{{ info.text|upper }}</p>
            {% endfor %}
        </div>

        <div class=\"section block7\" style=\"background: rgba(0, 0, 0, 0) url({{ asset('uploads/landing/' ~ template.middleBackground) }})  scroll  0px;!important;background-size: 100%;\">
            <h2>Отзывы покупателей</h2>
            <p>Мы попросили наших покупателей поделиться впечатлениями от заказа</p>
            <div class=\"regular slider2\">
                {% for comment in template.comments %}
                <div style=\"margin-bottom: 30px;\">
                    <div class=\"container\">
                        <img src=\"{{ asset('uploads/landing/' ~ comment.img) }}\" alt=\"Наталия, Харьков\" title=\"Богдан, Харьков\">
                        <p>{{ comment.text }}<br><span class=\"name\">{{ comment.author }}</span></p>
                    </div>
                </div>
                {% endfor %}

        </div>
        </div>

        <div class=\"section block9\" >
            <h2><b>{{ template.product.name }}</b></h2>
            <p class=\"sale center\">Со скидкой 53%</p>

            <div class=\"section container\" style=\"background: rgba(0, 0, 0, 0) url({{ asset('uploads/landing/' ~ template.bottomBackground) }})  scroll center 0px;!important;background-size: 100%;\">
                <div class=\"price clearfix\" id=\"form\">
                    <div class=\"old\">
                        Старая цена:<br>
                        <s><span class=\"price_land_s2\">{{ template.product.price * 1.53 }}</span> <span class=\"price_land_curr\">грн.</span></s>
                    </div>
                    <div class=\"new\">
                        Новая цена:<br>
                        <span class=\"price_land_s1\">{{ template.product.price }}</span> <span class=\"price_land_curr\">грн</span>
                    </div>
                </div>
            </div>



            <form class=\"orderformcdn\"  method=\"post\" onsubmit=\"if(this.name.value==''){alert('Введите имя!');return false}if(this.phone.value==''){alert('Введите номер телефона!');return false}return true;\">
                <input name=\"name\" value=\"\" placeholder=\"Введите Имя и Фамилию\">
                <input name=\"phone\" value=\"\" placeholder=\"Введите Номер телефона\" type=\"text\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ template.id) }}\">

                <button class=\"button-m\">Оставить заявку</button>
            </form>


        </div>
    </div>
{% endblock %}
", "template/public.html.twig", "/home/anton/PhpstormProjects/instagramAds/templates/template/public.html.twig");
    }
}
