<?php require_once 'engine/init.php'; include 'layout/overall/header.php';

	// Render HTML
	?>

<div id="czary" class="infocard" style="height: 235px">
        <div class="infocard-body" style="margin-top: 15px;">
            <ul>
                <li><a href="?subtopic=czary#sorcerer" title="Sorcerer"><img alt="Sorcerer" src="https://tibiopedia.pl/images/static/monsters/warlock.gif"></a> <a href="?subtopic=czary#sorcerer" title="Sorcerer">Sorcerer</a></li>
                <li><a href="?subtopic=czary#druid" title="Druid"><img alt="Druid" src="https://tibiopedia.pl/images/static/monsters/dark_druid.gif"></a> <a href="?subtopic=czary#druid" title="Druid">Druid</a></li>
                <li><a href="?subtopic=czary#paladin" title="Paladin"><img alt="Paladin" src="https://tibiopedia.pl/images/static/monsters/arthom_the_hunter.gif"></a> <a href="?subtopic=czary#paladin" title="Paladin">Paladin</a></li>
                <li><a href="?subtopic=czary#knight" title="Knight"><img alt="Knight" src="https://tibiopedia.pl/images/static/monsters/knights_apparition.gif"></a> <a href="?subtopic=czary#knight" title="Knight">Knight</a></li>
            </ul>
        </div>
    </div>
	<?php

/* Debug tests
foreach ($spells as $type => $spells) {
	data_dump($spells, false, "Type: $type");
}

// All spell attributes?
'group', 'words', 'lvl', 'maglv', 'charges', 'allowfaruse', 'blocktype', 'mana', 'soul', 'prem', 'aggressive', 'range', 'selftarget', 'needtarget', 'blockwalls', 'needweapon', 'exhaustion', 'groupcooldown', 'needlearn', 'casterTargetOrDirection', 'direction', 'params', 'playernameparam', 'conjureId', 'reagentId', 'conjureCount', 'vocations'
*/
include 'layout/overall/footer.php'; ?>
