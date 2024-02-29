<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="OkaniYoshiii">
    <meta name="description" content="[xxxxxxxxxxxxxxxxxx] du serveur 7 Days to Die &quot;Les Fraternels&quot;">
    <script>document.documentElement.classList.remove('no-js');</script>
    <title>XML documentation</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="../images/logos/logo-fraternels-30x30.ico" />
    <link rel="stylesheet" href="../css/default.css" media="screen">
    <link rel="stylesheet" href="../css/documentation.css" media="screen">
    <script src="../js/default.js" defer></script>
    <script src="../js/documentation.js" defer></script>
</head>
<body class="no-js">
    
    <?php include_once "../components/header.php"; ?>

    <main>
        <nav class="content-navigation">
            <ul class="wide">
                <li><a href="#section">Section exemple</a></li>
                <li><a href="#section">Section exemple</a></li>
                <li><a href="#section">Section exemple</a></li>
                <li><a href="#section">Section exemple</a></li>
                <li><a href="#section">Section exemple</a></li>
            </ul>
        </nav>
        <article>
            <section>
                <figure class="narrow">
                    <img src="../images/7DTD-CarbonCode.webp" alt="">
                    <figcaption>Image issue du site internet <a href="https://carbon.now.sh">Carbon</a></figcaption>
                </figure>
                <div class="narrow">
                    <p>Faire de la documentation sur la manière de rendre des matériaux scrapables</p>
                    <h2>Recyclage</h2>
                    <h3>Fonctionnement du recyclage et calcul des ressources données</h3>
                    <p>Dans 7 Days To Die, une bonne partie des items et blocs que nous récupérons peuvent être recyclés. Si l'item en question est fabricable, nous obtenons 75% des ressources nécessaires pour la construction de cet item.</p>
                    <p>Exemple:</p>
                    <p>Un bloc de pierres à pavés coute 10 Pierre à Pavés est raportera donc 7-8  pierre à pavés lorsque recyclé (dépend de si le jeu arrondi à l'entier supérieur ou inférieur)</p>
                    <p>Pour les items ou blocs n'ayant pas de craft associés, un système de "poids" est utilisé. Ce poids est symbolisé par l'élément <code>&#60;property name="Weight"&#47;&#62;</code>. Si un item est recyclable en Bois par exemple et que ce dernier n'est pas craftable, alors il faudra regarder le "poids" de l'item "Bois" et le poids de l'item que vous recyclez. Il faut ensuite calculer le multiplicateur entre le poids de la ressource donnée par le recylage (le Bois) et le poids de l'item que vous recyclez. Ce multiplicateur doit être ensuite multiplié par 75%.</p>
                    <p>Exemple :</p>
                    <p>Vous essayez de recycler un Livre ou un Magazine. Cet object n'est pas craftable et se recyle en Papier.</p>
                    <p>L'item à un "poids" de : 5 tandis que le Papier a un poids de 1.</p>
                    <p>1 x X = 5 -> X = 5</p>
                    <p>5 x 75% = 3 environ</p>
                    <p>Vous obtiendrez donc 3 papier par livre recylé</p>
                    <h3>Rendre des items/blocs recyclables ou non</h3>
                    <p>Afin de rendre des items / blocs recyclables, il faudra ouvrir 3 fichiers :</p>
                    <dl>
                        <dt><code>items.xml</code> ou <code>blocks.xml</code></dt>
                        <dd>Le fichier a ouvrir dépend de ce que vous souhaitez changer. Servira pour définir le <code>&#60;property name="Material"&#47;&#62;</code> lié au fichier <code>materials.xml</code> et permettra de définir le <code>&#60;property name="Weight"&#47;&#62;</code></dd>
                        <dt><code>materials.xml</code></dt>
                        <dd>Permet de définir les propriétés du matériaux choisi pour notre item / block</dd>
                        <dt><code>recipes.xml</code></dt>
                        <dd>Sert à définir la liste des ressources qui peuvent être obtenues lors du recyclage</dd>
                    </dl>
                    <p>Comme mentionné plus tôt, il existe deux cas de figure différents : celui où l'item est fabricable et celui où il ne l'est pas.</p>
                    <h4>Cas de figure 1 : L'item est fabricable</h4>
                    <h5>Etape 1: définir le matériau à utiliser</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus quasi, culpa dolores maxime voluptate id inventore beatae at laboriosam. Voluptate, harum! Ratione numquam fugiat qui rerum et blanditiis atque?
                    Voluptates fuga, iste aperiam totam pariatur sequi magnam dolores? In non aspernatur necessitatibus aut, quia, odit accusamus ipsum quidem quae, officiis unde. Nisi minus sapiente perspiciatis blanditiis fuga? Necessitatibus, odit.</p>
                    <hr>
                    <p>Conditions a valider pour qu'un item soit recyclable :</p>
                    <ul>
                        <li>Le <code>Material</code> de l'item doit avoir une propriété <code>forge_category</code></li>
                        <li>Il faut que le <code>Material</code> de le ressource que vous souhaitez obtenir lors du recyclage ait une propriété <code>forge_category</code> ayant la même valeur</li>
                        <li>La ressource que vous souhaitez obtenir lors du recyclage doit apparaitre dans le fichier <code>recipes.xml</code>, dans la liste des items ayant pour <code>tags</code> la valeur <code>scrapable</code></li>
                        <li>Si l'item que vous souhaitez recyler n'est pas fabricable, il vous faudra rajouter une propiété <code>Weight</code> à ce dernier.</li>
                    </ul>
                    <h2>Passive Effects</h2>
                    <p>Les passives effects ne peuvent pas avoir de valeurs avec plus de 2 decimales sinon le nombre est arrondi au nombre inférieur</p>
                </div>
            </section>
            <section>
                <div class="narrow">
                    <input type="file" name="file" id="file-input" accept=".txt">
                    <button id="file-filter">Afficher uniquement l'Anglais et le Francais</button>
                    <object  id="file-output" data="files/Localization.txt" type="text/plain" height="350" width="100%"></object>
                </div>
            </section>
        </article>
    </main>

    <?php include_once "../components/footer.php"; ?>
</body>
</html>