
<!-- Block mymodule -->
<div id="mymodule_block_home" class="block">
  <h4>Welcome!</h4>
  <div class="block_content">
    <p>{l s='Hello' d='module.mymodule'},
       {if isset($my_module_name) && $my_module_name}
           {$my_module_name}
       {else}
           World
       {/if}
       !
    </p>
    <ul>
      <li><a href="{$my_module_link}" title="{$my_module_click_me_message}">{$my_module_click_me_message}</a></li>
    </ul>
    <span>
        {$my_module_message}
    </span>
  </div>
</div>
<!-- /Block mymodule -->