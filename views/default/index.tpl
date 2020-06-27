{* Шаблон главной таблицы*}

{foreach $rsProducts as $item name=products}
    <div class="products">
        <a href="/product/{$item['id']}/">
            <img src="/images/products/{$item['image']}" alt="Photo" class="photo">
        </a>
        <br/>
        <a href="/product/{$item['id']}/">{$item['name']}</a>
    </div>
    {if $smarty.foreach.products.iteration mod 3 == 0}
        <div class="third"></div>
    {/if}
{/foreach}
