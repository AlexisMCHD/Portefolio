// Gestion de l'inventaire

class Personnage {
  constructor(nom, sante, force) {
    this.nom = nom;
    this.sante = sante;
    this.force = force;
    this.xp = 0; // Toujours 0 au début
    // l'inventaire est géré sous la forme d'un objet ayant deux propriétés
    this.inventaire = {
      or: 10,
      cles: 1
    };
  }
  decrire(){
    return `${this.nom} a ${this.sante} points de vie,${this.force} en force et ${this.xp} points d'expérience, ${this.inventaire.or} pièces d'or et ${this.inventaire.cles} clé(s)`;

  }
  attaquer(cible){
    if (this.sante>0){
    console.log (`${this.nom} attaque ${cible.nom} et lui inflige ${this.force} pointsde dégâts `);
    cible.sante-=this.force;
  
  if(cible.sante>0){
    console.log (`${cible.nom} a encore ${cible.sante} point de vie`);
  }
    else{
      const bonusXp = 10;
      const bonusOr = 10;
      const bonusCles = 1;

      this.xp+=bonusXp;
      this.inventaire.or+=bonusOr;
      this.inventaire.cles+=1;
    console.log (`${this.nom} a tué ${cible.nom} et gagne ${bonusXp}, ${bonusOr} pièces d'or et ${bonusCles} clé(s)`);
  }
} else{
      console.log (`${this.nom} a plus de point de vie et ne peux pas attaquer `);

}

     

  }
   
}



const aurora = new Personnage("Aurora", 150, 25);
console.log(aurora.decrire());
const monstre = new Personnage("ZogZog", 20, 10);
monstre.attaquer(aurora);
aurora.attaquer(monstre);
monstre.attaquer(aurora);
console.log(aurora.decrire());

/*
Aurora a 150 points de vie, 25 en force et 0 points d'expérience, 10 pièces d'or et 1 clé(s)
ZogZog attaque Aurora et lui inflige 10 points de dégâts
Aurora a encore 140 points de vie
Aurora attaque ZogZog et lui inflige 25 points de dégâts
Aurora a tué ZogZog et gagne 10 points d'expérience, 10 pièces d'or et 1 clé(s)
ZogZog n'a plus de points de vie et ne pas pas attaquer
VM864:68 Aurora a 140 points de vie, 25 en force et 10 points d'expérience, 20 pièces d'or et 2 clé(s)
*/