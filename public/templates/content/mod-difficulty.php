<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once HTML_HEAD_DIR . '/metadata.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/default-scripts.php'; ?>
    <?php require_once HTML_HEAD_DIR . '/favicon.php'; ?>
    <title>Mods - <?= $mod->getName() ?></title>
    <meta name="description" content="<?= $mod->getDescription() ?>">
    <meta name="keywords" content="7 Days To Die, 7DTD, FRT, Mods, Mod, Difficulté, Choix de la difficulté">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/default-mod.css">
    <link rel="stylesheet" href="<?= SITE_URL . CSS_DIR ?>/mod-difficulty.css">
    <script src="<?= SITE_URL . JS_DIR ?>/mod-difficulty.js" defer></script>
</head>

<body class="no-js">
    <?php require_once HTML_DIR . "/header.php"; ?>
    <main>
        <?php require_once TEMPLATE_PARTS_DIR . '/single-mod-banner.php'; ?>
        <section>
            <div class="narrow">
                <h2 class="text-centered" id="description">Description</h2>
                <p class="mod-description"><?= $mod->getDescription(); ?></p>
                <h3 id="choisir-une-difficulté-de-départ">Choisir une Difficulté de départ</h3>
                <p>En début de partie, vous recevrez un <strong>ensemble de livres</strong> qui sont utilisables afin de déterminer 3 statistiques :</p>
                <ul>
                    <li>Le <strong>bonus additionel de dégâts</strong> de votre personnage</li>
                    <li>Le <strong>bonus additionel de dégâts</strong> des Zombies</li>
                    <li>Le <strong>bonus additionel d'expérience</strong> que vous recevrez lors des <strong>éliminations</strong></li>
                </ul>
                <p>Ces livres sont à <strong>usage unique</strong> et donnent un bonus d'une durée illimitée, il faudra réfléchir soigneusement avant de se décider.</p>
                <p>Vous remarquerez que j'ai bien mis en évidence le fait qu'il s'agit de <strong>modifications statistiques</strong> et non de réels changements de <strong>Difficulté</strong>.</p>
                <blockquote>
                    <p>Alors, pourquoi ?</p>
                </blockquote>
                <p>Pour l'instant, nous n'avons pas encore trouvé de moyen pour que chaque joueur puisse vraiment choisir une difficulté identiquement à la manière dont il la choisit en lancant une partie solo. En d'autres termes, nous ne pouvons pas attribuer la difficulté "Nomade" à un joueur mais pas à un autre, cela s'applique sur tout le serveur mais pas sur chaque joueur individuellement.</p>
                <p>La conséquence de cela est que les modifications statistiques sont liées à la difficulté du serveur. Si vous prenez un livre sensé augmenter vos dégâts de tant de pourcent, alors cela sera X % de dégâts en plus par rapport aux dégâts que vous infligiez <b>avant de prendre le livre</b>.</p>
            </div>
        </section>
        <section class="no-js calculator-container">
            <p class="narrow">Si vous le souhaitez, vous pourrez retrouver un calculateur de dégâts infligés et reçus en fonction des bonus de chaque livre juste en dessous :</p>
            <p class="narrow text-centered">⚠️ Version conçue pour l'Alpha 21. Les statistiques sont sujetes a changer en fonction de la version du jeu et/ou du Mod</p>
            <div class="medium" id="difficulty-calculator">
                <div>
                    <div class="selector">
                        <label for="difficulty-selector"><b>Difficulté du Serveur :</b></label>
                        <select name="" id="difficulty-selector">
                            <option value="glaneur">Glâneur</option>
                            <option value="aventurier">Aventurier</option>
                            <option value="nomade" selected>Nomade</option>
                            <option value="guerrier">Guerrier</option>
                            <option value="survivaliste">Survivaliste</option>
                            <option value="extreme">Extrême</option>
                        </select>
                    </div>
                    <div class="selector">
                        <label for="weapon-damage-selector"><b>Dégâts de votre arme :</b></label>
                        <input class="text-centered" type="number" name="" min="0" id="weapon-damage-selector" value="10" required>
                    </div>
                    <div class="selector">
                        <label for="entity-damage-selector"><b>Bonus de dégâts du joueur</b> du livre (en %) :</label>
                        <input class="text-centered" type="number" name="" min="-100" id="entity-damage-selector" value="0" required>
                    </div>
                    <div class="selector">
                        <label for="zombie-damage-selector"><b>Dégâts des zombies</b> du livre (par coup) :</label>
                        <input class="text-centered" type="number" name="" min="0" id="zombie-damage-selector" value="10" required>
                    </div>
                    <div class="selector">
                        <label for="exp-multiplier-selector"><b>Bonus d'expérience</b> apporté du livre (en %) :</label>
                        <input class="text-centered" type="number" name="" id="exp-multiplier-selector" value="0" required>
                    </div>
                    <div>
                        <button id="validate-button">Confirmer</button>
                    </div>
                </div>
                <div id="output-table">
                    <table>
                        <thead>
                            <tr>
                                <th><span class="emoji">🧟</span> Zombies</th>
                                <th><span class="emoji">💥</span> Dégâts du joueur<br><span class="output-value-type">(Par coup)</span></th>
                                <th><span class="emoji">💥</span> Dégâts du zombie<br><span class="output-value-type">(Par coup)</span></th>
                                <th><span class="emoji">🎁</span> EXP reçue<br><span class="output-value-type">(Par élimination)</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="default-outputs">
                                <th>Zombie Arlene</th>
                                <td>10</td>
                                <td>10</td>
                                <td>400</td>
                            </tr>
                            <tr id="feral-outputs">
                                <th>Zombie Arlene Feral</th>
                                <td>10</td>
                                <td>20</td>
                                <td>750</td>
                            </tr>
                            <tr id="radiated-outputs">
                                <th>Zombie Arlene Irradiée</th>
                                <td>10</td>
                                <td>20</td>
                                <td>1200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="narrow">
            <h3 id="changer-de-difficulté">Changer de difficulté</h3>
            <p>Ah, j'en connais qui n'ont pas eu envie de tout lire et qui ont choisi n'importe quoi ! 😊</p>
            <p>Pas de panique ! En début de partie, vous devriez recevoir un certain nombre de livres permettant de <strong>réinitialiser</strong> la difficulté et de revenir au même état que quand vous avez rejoint le serveur la première fois.</p>
            <p>Une fois que vous avez réinitialisé la difficulté, vous pourrez choisir un autre livre afin de continuer l'aventure.</p>
            <p>Si vous ne pouvez pas réinitialiser votre difficulté pour une raison X ou Y, vous pouvez aussi <strong>demander à ce qu'on vous le fournisse directement</strong> mais cela NE DOIT PAS être utilisé abusivement !</p>
        </section>
    </main>
    <?php require_once HTML_DIR . "/footer.php"; ?>
</body>

</html>