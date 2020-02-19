function nb_aleatoire(min, max)
{
     var nb = min + (max-min+1)*Math.random();
     return Math.floor(nb);
}

//Amélioration 1 : jouer plusieurs fois de suite

/*
Petite présentation:
Notre script, qui permet de jouer une partie de "Plus ou moins", 
est maintenant fonctionnel.

L'amélioration que je vous propose de réaliser va permettre de 
jouer plusieurs parties à la suite, en affichant, une fois le jeu terminé, 
votre meilleur score (votre plus petit nombre de tentatives).
*/

function PoM_manche(min, max)
{
     var nb = nb_aleatoire(1,10);
     var cpt = 0;
     var saisie;
     var msg = 'Le nombre a deviner est compris entre ' + min + ' et ' + max + '.';

     do
     {
          saisie = prompt(msg);
          cpt++;
          if(saisie > nb)
               msg = "C'est moins";
          else
               msg = "C'est plus";
     }
     while(saisie != nb);

     return cpt;
}

// affichage du meilleur score

var cpt = 0;   // nb de manches jouees
var best_score = 0;  // meilleur score
var score;  // score de la partie en cours

do
{
     score = PoM_manche(1, 10);
     cpt++;
     if(score < best_score || best_score == 0)
          best_score = score;
     continuer = confirm("Bravo, tu as gagne en " + score + " coups.\nVeux-tu rejouer ?");
}
while(continuer);


alert("Tu as joue " + cpt + " manche(s).\nTon meilleur score est de " + best_score + " coups.");


